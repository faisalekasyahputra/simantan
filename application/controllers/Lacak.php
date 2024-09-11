<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lacak extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Buka_peta');
		}

	public function index()
	{
		
		$user_name = $this->session->userdata('user_id');
		$user_id = $user_name['id'];
        $isi['bread'] = 'Lacak Permohonan';
        $isi['data'] = $this->Buka_peta->fetch_record('tb_krk',$user_id,'id_user');
        $data['content'] = $this->load->view('pendaftaran/lacak',$isi,TRUE);
		$this->load->view('main',$data);
	}
	
}
