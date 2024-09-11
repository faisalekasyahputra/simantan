<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Buka_peta');
		require APPPATH.'libraries/phpmailer/src/Exception.php';
        require APPPATH.'libraries/phpmailer/src/PHPMailer.php';
        require APPPATH.'libraries/phpmailer/src/SMTP.php';
		
		date_default_timezone_set("Asia/Jakarta");
		}

	public function index()
	{
		$data['map'] = $this->Buka_peta->fetch_record('tb_map',null,null);
		$data['map_polaruang'] = $this->Buka_peta->fetch_record('tb_map','14','id');
		$data['polaruang'] = $this->Buka_peta->fetch_record('tb_polaruang',null,null);
		$this->load->view('pola_ruang2',$data);
	}
	public function email($email,$token,$jenis) {

		$email_penerima = $email;
		$email_pengirim ='taru.dpuprkotapkl@gmail.com';
		$nama_pengirim = 'DPUPR Kota Pekalongan';
		if ($jenis=='tambah') {
			$subjek = 'Verifikasi Pendaftaran'; 
		}else{
			$subjek = 'Konfirmasi Lupa Password'; 
		}
		
		$url = base_url('Login/konfirmasi').'?token='.$token;
		$pesan = '<a href="'.$url.'"> <button type="button" class="buttonku-sendiri masuk btn-block mb-4">Konfirmasi</button><a/>' ; 
		$pesan2 = '<a href="'.$url.'">'.$url.'</button><a/>' ; 
		
		$mail = new PHPMailer;
		$mail->isSMTP();

		$mail->Host = 'smtp.gmail.com';
		$mail->Username = $email_pengirim; // Email Pengirim
		$mail->Password = 'womxpskfsochqgrs'; // Isikan dengan Password email pengirim
		$mail->Port = 465;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'ssl';

		$mail->setFrom($email_pengirim, $nama_pengirim);
		$mail->addAddress($email_penerima, '');
		// $mail->attach('/assets/img/cctv.xls');
		$mail->isHTML(true); 

		
		ob_start();
		include "content.php";
		$content = ob_get_contents(); // Ambil isi file content.php dan masukan ke variabel $content
		ob_end_clean();

		
		$mail->Subject = $subjek;
		$mail->Body = $content;

		
	
		$mail->AddEmbeddedImage(base_url().'assets/image/logo-brand.png', 'logo-brand', 'logo-brand.png');
		$send = $mail->send();
		if($send){
			return 'Sukses';
		}else{
			return 'gagal';
		}

	}
	public function tambah_data() 
	{
		$nama = $_GET['nama'];
		$email = $_GET['email'];
		$pass = $_GET['pass'];
		$nik = $_GET['nik'];
		
		$cek_email = $this->Buka_peta->fetch_record('tb_pengguna',$email,'email');
		$cek_nik = $this->Buka_peta->fetch_record('tb_pengguna',$nik,'nik');
		if ($cek_email != null) {
			echo 'Email Sudah Terdaftar';
		}elseif($cek_nik != null) {
			echo 'NIK Sudah Terdaftar';
		}else {
			$token = $this->getToken(200);
			$args = array(
			'nama' => $nama,
			'email' => $email,
			'pass' => sha1($pass),
			'status' => 1,
			'nik' => $nik,
			'token' => $token,);
			$result = $this->Buka_peta->insert_data('tb_pengguna',$args);
			if ($result != NULL) {
				$kirim_email = $this->email($email,$token,'tambah');
				if ($kirim_email == 'Sukses') {
					echo "Pendaftaran Berhasil Silahkan konfirmasi melalui email";
				}else{
					echo "Pendaftaran gagal";
				}
			}else {
				echo "Pendaftaran gagal";
			}
		}
	}
	public function lupa_password() {
	
		$email = $_GET['email'];
		$pass = $_GET['pass'];
		$cek_email = $this->Buka_peta->fetch_record('tb_pengguna',$email,'email');
		if ($cek_email == null) {
			echo 'Email Tidak Terdaftar';
		}else {
			$token = $cek_email[0]->token;
			$args = array(
				'table_name' => 'tb_pengguna',
				'id' => $email,
				'field' => 'email');
			$data = array('pass'=>sha1($pass),'status' =>1);
			$kirim_email = $this->email($email,$token,'lupa');
			if ($kirim_email == 'Sukses') {
				$result = $this->Buka_peta->edit_record($args, $data);
				if ($result != NULL) {
					echo "Password Berhasil di ubah, Silahkan konfirmasi melalui email";
				}else {
					echo "Password gagal diubah";
				}
					
			}else{
					echo "Password gagal diubah";
			}
		
		}
	}
	 public function getToken($length)
		 {
		  $token = "";
		  $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		  $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
		  $codeAlphabet.= "0123456789";
		  $max = strlen($codeAlphabet); // edited
			
		  for ($i=0; $i < $length; $i++) {
		   $token .= $codeAlphabet[random_int(0, $max-1)];
		  }
			
		  return $token;
		 }
	public function konfirmasi() {
		$token = $_GET['token'];
		$args = array(
			'table_name' => 'tb_pengguna',
			'id' => $token,
			'field' => 'token'
		);

		$data = array('status' =>0);
		$result = $this->Buka_peta->edit_record($args, $data);
		if ($result != NULL) {
			$data['isi'] = "Konfirmasi Sukses. Silahkan untuk <a href='".base_url('KRK/landing')."'>Login</a>";
		}else {
			$data['isi'] = "Konfimasi Gagal. Silahkan <a href='".base_url('KRK/landing')."'>mendaftar kembali</a>";
		}
		$this->load->view('konfirmasi',$data);
	}

	public function auth() {
		$email = $_GET['email'];
		$pass = $_GET['pass'];
		if (!empty($email) && !empty($pass)) {
			$result = $this->Buka_peta->authenticate_user($email, $pass,'tb_pengguna');
			if ($result != NULL)
			{	
				$userdata = array(
					'id' => $result[0]->id,
					'nama' => $result[0]->nama,
					'email' => $result[0]->email,
				
				);
				$this->session->set_userdata('user_id', $userdata);
				$this->session->userdata('user_id');
				echo "Login Sukses";}
			else
			{
				echo "Login Gagal";		
				
			}

		}else{
			echo "Login Gagal";
		}
	}
}
