<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Revisi_admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Buka_peta');
		}

	public function index()
	{
		
		$user_name = $this->session->userdata('user_id');
		$user_id = $user_name['id'];
		$isi['jdl_hal'] = 'Revisi Permohonan';
		$isi['act'] = '1';
		$isi['data'] = $this->Buka_peta->revisi($user_id);
		$data['content'] = $this->load->view('admin/permohonankrk/revisi',$isi,TRUE);
		$this->load->view('admin/index',$data);
		}
	public function detail($id)
	{
        $isi['bread'] = 'Detail Revisi Permohonan';
        $isi['data'] = $this->Buka_peta->fetch_record('tb_krk',$id,'id');
        $data['content'] = $this->load->view('pendaftaran/detail_revisi',$isi,TRUE);
		$this->load->view('main',$data);
	}
	
	
	
}
