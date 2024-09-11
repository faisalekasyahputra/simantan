<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Revisi_krk extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Buka_peta');
		}

	public function index()
	{
		
		$user_name = $this->session->userdata('user_id');
		$user_id = $user_name['id'];
        $isi['bread'] = 'Revisi Permohonan';
        $isi['data'] = $this->Buka_peta->diproses($user_id,'4');
        $data['content'] = $this->load->view('pendaftaran/revisi_krk',$isi,TRUE);
		$this->load->view('main',$data);
	}
	public function detail($id)
	{
        $isi['bread'] = 'Detail Revisi Permohonan';
        $isi['data'] = $this->Buka_peta->fetch_record('tb_krk',$id,'id');
        $data['content'] = $this->load->view('pendaftaran/detail_revisi',$isi,TRUE);
		$this->load->view('main',$data);
	}
	public function revisi()
	{
		$isi['jdl_hal'] = 'Data Permohonan KRK';
		$isi['act'] = '1';
		$isi['data'] = $this->Buka_peta->fetch_record('tb_krk',null,null);
		$data['content'] = $this->load->view('admin/permohonankrk/revisi',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
	public function tambah($id) {
		
		$isi=$_POST['custom'];
		$cek = $this->Buka_peta->fetch_record('tb_revisi',$id,'id_krk');
		if ($cek == null ){
			$args = array(
				'id_krk' => $id,
				'revisi' => $isi,
			);
			$result = $this->Buka_peta->insert_data('tb_revisi',$args);
		}else{
			$args = array(
				'table_name' => 'tb_revisi',
				'id' => $id,
				'field' => 'id_krk'
			);
	
			$data = array('revisi' =>$isi);
			$result = $this->Buka_peta->edit_record($args, $data);
		}
		if ($result != NULL)
			{
				$array_msg = array(
					'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Revisi added Successfully',
					'alert' => 'info'
				);
				$this->session->set_flashdata('status', $array_msg);
				redirect('Revisi_krk');
		}
		else
			{
				$array_msg = array(
					'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error Revisi cannot be added',
					'alert' => 'danger'
				);
				$this->session->set_flashdata('status', $array_msg);
		}
	}
	
}
