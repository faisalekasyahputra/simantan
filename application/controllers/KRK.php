<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KRK extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Buka_peta');
		}

	public function index()
	{
	
        $isi['bread'] = 'Dashboard';
        $data['content'] = $this->load->view('dashboard',$isi,TRUE);
		$this->load->view('menu-aio.php',$data);
	}
	public function utama()
	{
	
        $isi['bread'] = 'Dashboard';
        $data['content'] = $this->load->view('dashboard',$isi,TRUE);
		$this->load->view('main',$data);
	}
    public function pendaftaran()
	{
        $isi['bread'] = 'Permohonan Ijin Tata Ruang';
        $data['content'] = $this->load->view('pendaftaran/daftar',$isi,TRUE);
		$this->load->view('main',$data);
	}
	public function logout()
	{
		session_start();
		session_destroy();
		redirect('KRK/landing');
	}
	public function landing()
	{
	
		$this->load->view('landing');
	}
	
	public function unduh()
	{
		$data['file'] = $this->Buka_peta->fetch_record('tb_unduh','Peta','jenis');
		$data['dok'] = $this->Buka_peta->fetch_record('tb_unduh','Dokumen','jenis');
		$this->load->view('tabel-unduh',$data);
	}
	
	public function detail_unduh($id)
	{
	
		$data['data'] = $this->Buka_peta->fetch_record('tb_unduh',$id,'id');
		$this->load->view('unduh',$data);
	}
	public function pengaduan()
	{
	
		$this->load->view('pengaduan');
	}
	public function one_map()
	{
		$data['map'] = $this->Buka_peta->fetch_record('tb_map',null,null);
		$data['map_dasar'] = $this->Buka_peta->fetch_record('tb_map','1','Jenis_Peta');
		$data['map_tematik'] = $this->Buka_peta->fetch_record('tb_map','2','Jenis_Peta');
		$data['map_polaruang'] = $this->Buka_peta->fetch_record('tb_map','3','Jenis_Peta');
		$data['map_strukturuang'] = $this->Buka_peta->fetch_record('tb_map','4','Jenis_Peta');
		$this->load->view('one_map',$data);
	}
	
	public function pola_ruang() 
	{
		$data['map'] = $this->Buka_peta->fetch_record('tb_map',null,null);
		
		$data['map_polaruang'] = $this->Buka_peta->fetch_record('tb_map','14','id');
		$this->load->view('pola_ruang',$data);
	}
	
	public function view_data($kode) {
		$zonasi = $this->Buka_peta->fetch_record('tb_zonasi',$kode,'Kode');
		if ($zonasi != null) {
			$data_zonasi = array('Zona' => $zonasi[0]->Zona,
			'sub_zona' => $zonasi[0]->Sub_Zona,
			'jenis_pola_ruang' => $zonasi[0]->Jenis_Pola_Ruang,
			'di_izinkan' => $zonasi[0]->Di_Izinkan,
			'di_izinkan_bersyarat' => $zonasi[0]->Di_Izinkan_Bersyarat,
			'di_izinkan_terbatas' => $zonasi[0]->Di_Izinkan_Terbatas,
			'kdb' => $zonasi[0]->KDB,
			'klb' => $zonasi[0]->KLB,
			'kdh' => $zonasi[0]->KDH,
			
			
		);
		}else {
			$data_zonasi = '';
		}
		echo json_encode($data_zonasi);
		//echo $zonasi[0]->Zona;
	}

	public function tambah_pengaduan()
	{
		
		$nama = html_escape($this->input->post('nama'));
	
		$alamat = html_escape($this->input->post('alamat'));
		$email = html_escape($this->input->post('email'));
		$telp = html_escape($this->input->post('telp'));
		$koordinat = html_escape($this->input->post('koordinat'));
		$ket = html_escape($this->input->post('ket'));
		$foto = $_FILES['foto']['name'];
		$s1 =  html_escape($this->input->post('s1'));
		$s2 =  html_escape($this->input->post('s2'));
		$s3 =  html_escape($this->input->post('s3'));
		$s4 =  html_escape($this->input->post('s4'));
		$s5 =  html_escape($this->input->post('s5'));
		$s6 =  html_escape($this->input->post('s6'));
		$s7 =  html_escape($this->input->post('s7'));
		$s8 =  html_escape($this->input->post('s8'));
		$s9 =  html_escape($this->input->post('s9'));
		$testi = html_escape($this->input->post('testi'));
		
		$args = array(
			'dibuka' => '0',
			'nama' => $nama,
			'alamat' => $alamat,
			'email' => $email,
			'telepon' => $telp,
			'ket' => $ket,
			'foto' => $foto,
			'koordinat' => $koordinat,
			'tanggal' => date('Y-m-d'),
			
			
		);
		$args1 = array(
			'nama' => $nama,
			'email' => $email,
			's1' => $s1,
			's2' => $s2,
			's3' => $s3,
			's4' => $s4,
			's5' => $s5,
			's6' => $s6,
			's7' => $s7,
			's8' => $s8,
			's9' => $s9,
			'testi' => $testi,
		);
		$result = $this->Buka_peta->insert_data('tb_survey',$args1);
		if (!empty($nama) && !empty($ket) )
		{
			$result = $this->Buka_peta->insert_data('tb_pengaduan',$args);
			if ($foto != null) {
					$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/pengaduan/';
				move_uploaded_file($_FILES["foto"]["tmp_name"], "$folder".$_FILES["foto"]["name"]);
			}
			if ($result != NULL)
			{
				$array_msg = array(
					'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> KUPZ added Successfully',
					'alert' => 'info'
				);
				$this->session->set_flashdata('status', $array_msg);
			}
			else
			{
				$array_msg = array(
					'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error KUPZ cannot be added',
					'alert' => 'danger'
				);
				$this->session->set_flashdata('status', $array_msg);
			}
		}

		redirect('KRK/pengaduan');
	}
}
