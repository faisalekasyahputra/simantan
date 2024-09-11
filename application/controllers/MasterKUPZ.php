<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterKUPZ extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Buka_peta');
		}

	
	public function index()
	{
		$isi['jdl_hal'] = 'Data Permohonan KRK';
		$isi['data'] = $this->Buka_peta->fetch_record('tb_zonasi',null,null);
		$data['content'] = $this->load->view('admin/masterkupz/list',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
    public function form_tambah()
	{
		$isi['jdl_hal'] = 'Tambah KUPZ';
		$data['content'] = $this->load->view('admin/masterkupz/tambah',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
    public function form_ubah($id)
	{
		$isi['jdl_hal'] = 'Ubah KUPZ';
        $isi['data'] = $this->Buka_peta->fetch_record('tb_zonasi',$id,'Kode');
		$data['content'] = $this->load->view('admin/masterkupz/ubah',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
    public function tambah()
	{
		
		$zona = html_escape($this->input->post('zona'));
		$subzona = html_escape($this->input->post('subzona'));
		$jenis = html_escape($this->input->post('jenis'));
		$diizinkan = html_escape($this->input->post('diizinkan'));
		$diizinkanbersyarat = html_escape($this->input->post('diizinkanbersyarat'));
		$diizinkanterbatas = html_escape($this->input->post('diizinkanterbatas'));
		$KDB = html_escape($this->input->post('kdb'));
		$KLB = html_escape($this->input->post('klb'));
        $KDH = html_escape($this->input->post('kdh'));
		
		$args = array(
			'Zona' => $zona,
			'Sub_Zona' => $subzona,
			'Jenis_Pola_Ruang' => $jenis,
			'Di_Izinkan' => $diizinkan,
			'Di_Izinkan_Bersyarat' => $diizinkanbersyarat,
			'Di_Izinkan_Terbatas' => $diizinkanterbatas,
			'KDB' => $KDB,
			'KLB' => $KLB,
            'KDH' => $KDH,
		);

		if (!empty($zona))
		{
			$result = $this->Buka_peta->insert_data('tb_zonasi',$args);
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

		redirect('MasterKUPZ');
	}

    public function ubah($id)
	{
		
		$zona = html_escape($this->input->post('zona'));
		$subzona = html_escape($this->input->post('subzona'));
		$jenis = html_escape($this->input->post('jenis'));
		$diizinkan = html_escape($this->input->post('diizinkan'));
		$diizinkanbersyarat = html_escape($this->input->post('diizinkanbersyarat'));
		$diizinkanterbatas = html_escape($this->input->post('diizinkanterbatas'));
		$KDB = html_escape($this->input->post('kdb'));
		$KLB = html_escape($this->input->post('klb'));
        $KDH = html_escape($this->input->post('kdh'));
		
		$data = array(
			'Zona' => $zona,
			'Sub_Zona' => $subzona,
			'Jenis_Pola_Ruang' => $jenis,
			'Di_Izinkan' => $diizinkan,
			'Di_Izinkan_Bersyarat' => $diizinkanbersyarat,
			'Di_Izinkan_Terbatas' => $diizinkanterbatas,
			'KDB' => $KDB,
			'KLB' => $KLB,
            'KDH' => $KDH,
		);
        $args = array(
			'table_name' => 'tb_zonasi',
			'id' => $id,
            'field' => 'Kode'
		);
		$result = $this->Buka_peta->edit_record($args, $data);
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
		redirect('MasterKUPZ');
	}
	function delete($args)
	{	
		
		$result = $this->Buka_peta->delete_record('tb_zonasi', $args,'Kode');
		if ($result == 1)
		{
			$array_msg = array(
				'msg' => '<i style="color:#fff" class="fa fa-trash-o" aria-hidden="true"></i>KUPZ record removed',
				'alert' => 'info'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		else
		{
			$array_msg = array(
				'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error KUPZ record cannot be changed',
				'alert' => 'danger'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		redirect('MasterKUPZ');
	}
	
}
