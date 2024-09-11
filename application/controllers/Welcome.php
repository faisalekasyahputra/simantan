<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Buka_peta');
		}

	public function index()
	{
		$data['map'] = $this->Buka_peta->fetch_record('tb_map',null,null);
		$data['map_polaruang'] = $this->Buka_peta->fetch_record('tb_map','14','id');
		$data['polaruang'] = $this->Buka_peta->fetch_record('tb_polaruang',null,null);
		$this->load->view('pola_ruang2',$data);
	}
}
