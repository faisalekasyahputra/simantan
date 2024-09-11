<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selesai_krk extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Buka_peta');
		}

	public function index()
	{
		
		$user_name = $this->session->userdata('user_id');
		$user_id = $user_name['id'];
        $isi['bread'] = 'Permohonan Selesai';
        $isi['data'] = $this->Buka_peta->diproses($user_id,'4');
        $data['content'] = $this->load->view('pendaftaran/selesai_krk',$isi,TRUE);
		$this->load->view('main',$data);
	}
	
}
