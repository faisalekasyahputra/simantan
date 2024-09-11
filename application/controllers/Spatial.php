<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spatial extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Buka_peta');
		include_once APPPATH . '/third_party/fpdf.php';
		}

	
	public function index()
	{
		$isi['jdl_hal'] = 'Data Permohonan (Spasial)';
		$isi['act'] = '3';
		$isi['data'] = $this->Buka_peta->fetch_record('tb_krk',null,null);
		$isi['batas'] = $this->Buka_peta->fetch_record('tb_batas',null,null);
		$data['content'] = $this->load->view('admin/permohonankrk/permohonan_krk_spatial',$isi,TRUE);
		if ($isi['data'] != null ) {
			$data['no'] =$isi['data'][0]->no_siap;
		}else{
			$data['no'] = '';
		}
		$this->load->view('admin/index',$data);
	}

	public function Survey()
	{
		$isi['jdl_hal'] = 'Data Survey Kepuasan';
		$isi['data'] = $this->Buka_peta->fetch_record('tb_survey',null,null);
		$data['content'] = $this->load->view('admin/survey/list',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}

	function delete_survey($args)
	{	
		
		$result = $this->Buka_peta->delete_record('tb_survey', $args,'id');
		if ($result == 1)
		{
			$array_msg = array(
				'msg' => '<i style="color:#fff" class="fa fa-trash-o" aria-hidden="true"></i>Pengaduan record removed',
				'alert' => 'info'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		else
		{
			$array_msg = array(
				'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error Pengduan record cannot be changed',
				'alert' => 'danger'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		redirect('Spatial/Survey');
	}

	public function detail_survey($id)
	{
		$isi['jdl_hal'] = 'Detail Hasil Survey';
        $isi['data'] = $this->Buka_peta->fetch_record('tb_survey',$id,'id');
		$data = array(	
			'dibuka' => '1',
		);

		$args = array(
			'table_name' => 'tb_pengaduan',
			'id' => $id,
			'field' => 'id'
		);
		$result = $this->Buka_peta->edit_record($args, $data);
		$data['content'] = $this->load->view('admin/survey/detail_survey',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
	
}
