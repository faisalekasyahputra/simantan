<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unduh extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Buka_peta');
		}

	
	public function index()
	{
		$isi['jdl_hal'] = 'Data File Unduhan';
		$isi['data'] = $this->Buka_peta->fetch_record('tb_unduh',null,null);
		$data['content'] = $this->load->view('admin/unduh/list',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
    public function form_tambah()
	{
		$isi['jdl_hal'] = 'Tambah File Unduh';
		$data['content'] = $this->load->view('admin/unduh/tambah',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
    public function form_ubah($id)
	{
		$isi['jdl_hal'] = 'Detail File Unduh';
        $isi['data'] = $this->Buka_peta->fetch_record('tb_unduh',$id,'id');
		$data['content'] = $this->load->view('admin/unduh/ubah',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
    
	function delete($args)
	{	
		
		$result = $this->Buka_peta->delete_record('tb_unduh', $args,'id');
		if ($result == 1)
		{
			$array_msg = array(
				'msg' => '<i style="color:#fff" class="fa fa-trash-o" aria-hidden="true"></i>File Unduh telah dihapus',
				'alert' => 'info'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		else
		{
			$array_msg = array(
				'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error Unduh record cannot be changed',
				'alert' => 'danger'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		redirect('Unduh');
	}
    public function tambah()
	{
		
		$nama = html_escape($this->input->post('nama'));
		$deskripsi = html_escape($this->input->post('deskripsi'));
		$jenis = html_escape($this->input->post('jenis'));
		$file = $_FILES['file_nya']['name'];
		
		$args = array(
			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'jenis' => $jenis,
			'link' => $file,
			
		);

		if (!empty($nama) )
		{
			$result = $this->Buka_peta->insert_data('tb_unduh',$args);
			if ($file != null) {
				$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/unduh/';
				

				move_uploaded_file($_FILES["file_nya"]["tmp_name"], "$folder".$_FILES["file_nya"]["name"]);
			}
			if ($result != NULL)
			{
				$array_msg = array(
					'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> File added Successfully',
					'alert' => 'info'
				);
				$this->session->set_flashdata('status', $array_msg);
			}
			else
			{
				$array_msg = array(
					'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error File cannot be added',
					'alert' => 'danger'
				);
				$this->session->set_flashdata('status', $array_msg);
			}
		}

		redirect('Unduh');
	}
    public function ubah($id)
	{
		
		$nama = html_escape($this->input->post('nama'));
		$deskripsi = html_escape($this->input->post('deskripsi'));
		$jenis = html_escape($this->input->post('jenis'));
		$file = $_FILES['file_nya']['name'];
		
		$data = array(
			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'jenis' => $jenis,
			'link' => $file,
		);
        $args = array(
			'table_name' => 'tb_unduh',
			'id' => $id,
            'field' => 'id'
		);
		$result = $this->Buka_peta->edit_record($args, $data);
        if ($file != null) {
          $folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/unduh/';
            move_uploaded_file($_FILES["file_nya"]["tmp_name"], "$folder".$_FILES["file_nya"]["name"]);
        }
		if ($result == 1)
		{
			$array_msg = array(
				'msg' => '<i style="color:#fff" class="fa fa-pencil-square-o" aria-hidden="true"></i> Master KUPZ Editted',
				'alert' => 'info'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		else
		{
			$array_msg = array(
				'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> KUPZ cannot be Editted',
				'alert' => 'danger'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		redirect('Unduh');
	}
	
}
