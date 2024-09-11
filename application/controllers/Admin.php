<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Buka_peta');
		}

	public function index()
	{
		
		$this->load->view('admin/login');
	}
	public function dashboard()
	{
		$isi['jdl_hal'] = "Dashboard";
		$isi['data'] = "";
		$isi['act'] = '0';
		
		$tanggal =[];
		$tanggal2 =[];

		for ($i=0;$i<=11;$i++) {
			$m = $i+1;
			$tahun = date('Y');
			$bulan = strval($m);
			$kabisat = $this->kabisat($tahun,$bulan);
			$tgl_awal = date('Y').'-'.$m.'-1';
			$tgl_akhir = date('Y').'-'.$m.'-'.$kabisat;
			$tanggal[$i] = $this->Buka_peta->dash($tgl_awal,$tgl_akhir,1);
			$tanggal2[$i] = $this->Buka_peta->dash($tgl_awal,$tgl_akhir,2);
			
		}
	
		$data['tgl'] = $tanggal;
		$data['tgl2'] = $tanggal2;
		
		$data['content'] = $this->load->view('admin/dashboard',$isi,TRUE);
		

		$this->load->view('admin/index',$data);
	}
	public function kabisat ($tahun,$bulan) {
		if ($bulan == '1' || $bulan=='3' || $bulan=='5' || $bulan =='7' || $bulan =='8' || $bulan =='10' || $bulan=='12' ) {
			$akhir = '31' ;
		}elseif ($bulan=='4' || $bulan=='6' || $bulan=='9' || $bulan=='11'){
			$akhir = '30';
		}else {
			$tahun = intval($tahun);
			$motahun = ($tahun % 4);
			if ($motahun == 0) {
			
				$akhir='29';
			}else{
				$akhir ='28';
			}
		}
		return $akhir;
	}
	
	public function auth() {
		$email = $_POST['email_log'];
		$pass = $_POST['pass_log'];
		if (!empty($email) && !empty($pass)) {
			$result = $this->Buka_peta->authenticate_user($email, $pass,'tb_user');
			if ($result != NULL)
			{
				$userdata = array(
					'id' => $result[0]->id,
					'nama' => $result[0]->nama,
				
				);
				$this->session->set_userdata('user_id', $userdata);
				$this->session->userdata('user_id');
				$array_msg = array(
					'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Login Berhasil',
					'alert' => 'info'
				);
				$this->session->set_flashdata('status', $array_msg);
				redirect('Admin/dashboard');
			}else{
				$array_msg = array(
					'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Login Gagal',
					'alert' => 'danger'
				);
				$this->session->set_flashdata('status', $array_msg);
				redirect('Admin');
			}
		}
		else{
			$array_msg = array(
				'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Login Gagal',
				'alert' => 'danger'
			);
			$this->session->set_flashdata('status', $array_msg);
			redirect('Admin');
		}

		

	}

	public function logout()
	{
		session_start();
		session_destroy();
		redirect('Admin');
	}
}
