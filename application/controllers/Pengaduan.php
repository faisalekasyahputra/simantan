<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Buka_peta');
		}

	
	public function index()
	{
		$isi['jdl_hal'] = 'Data Pengaduan';
		$isi['data'] = $this->Buka_peta->fetch_record('tb_pengaduan',null,null);
		$data['content'] = $this->load->view('admin/pengaduan/list',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
    
    public function form_ubah($id)
	{
		$isi['jdl_hal'] = 'Detail Pengaduan';
        $isi['data'] = $this->Buka_peta->fetch_record('tb_pengaduan',$id,'id');
		$data = array(	
			'dibuka' => '1',
		);

		$args = array(
			'table_name' => 'tb_pengaduan',
			'id' => $id,
			'field' => 'id'
		);
		$result = $this->Buka_peta->edit_record($args, $data);
		$data['content'] = $this->load->view('admin/pengaduan/ubah',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
    
	function delete($args)
	{	
		
		$result = $this->Buka_peta->delete_record('tb_pengaduan', $args,'id');
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
		redirect('OD');
	}
	
}
