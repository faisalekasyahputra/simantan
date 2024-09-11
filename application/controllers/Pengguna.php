<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Buka_peta');
		}
	public function index()
	{
		$isi['jdl_hal'] = 'Data Pengguna';
		$isi['data'] = $this->Buka_peta->fetch_record('tb_user',null,null);
		$data['content'] = $this->load->view('admin/pengguna/list',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
    public function form_tambah()
	{
		$isi['jdl_hal'] = 'Tambah Pengguna';
		$data['content'] = $this->load->view('admin/pengguna/tambah',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
	public function form_ubah($id)
	{
		$isi['data'] = $this->Buka_peta->fetch_record('tb_user',null,null);
		$isi['jdl_hal'] = 'Ubah Pengguna';
		$isi['data'] = $this->Buka_peta->fetch_record('tb_user',$id,'id');
		$data['content'] = $this->load->view('admin/pengguna/ubah',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
    
	public function form_ganti()
	{
		$isi['jdl_hal'] = 'Ubah Password';
		$user_name = $this->session->userdata('user_id');
		$isi['user_id'] = $user_name['id'];
		$data['content'] = $this->load->view('admin/pengguna/ganti',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
	public function form_atur($id)
	{
		$user_name = $this->session->userdata('user_id');
		$user_id = $user_name['id'];
		$isi['jdl_hal'] = 'Atur Pengguna';
		$isi['data'] = $this->Buka_peta->fetch_record('tb_user',$id,'id');
        $isi['menu'] = $this->Buka_peta->fetch_record('tb_menu',null,null);
		$menu = $this->Buka_peta->fetch_record('tb_menu',null,null);
		$l = 0;
		foreach ($menu as $m) {
			$l++;
		}
		$isi['l'] = $l;
		$data['content'] = $this->load->view('admin/pengguna/atur',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
	public function simpan_atur($l){
		$id = html_escape($this->input->post('id'));
		$this->db->where(['user_id' => $id]);
       	$this->db->delete('tb_multi');
		for ($i=0;$i<=$l;$i++)  {
			$v[$i] = html_escape($this->input->post('v'.$i));
	    }
		for ($i=0;$i<$l;$i++)  {
			if ($v[$i] != null) {
				
				$args1 = array('user_id' => $id,'menu'=> $v[$i]);
				$multi = $this->Buka_peta->insert_data('tb_multi', $args1);
			}
		}
		if ($multi != NULL)
			{
				$array_msg = array(
					'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Pengguna Edited Successfully',
					'alert' => 'info'
				);
				$this->session->set_flashdata('status', $array_msg);
			}
			else
			{
				$array_msg = array(
					'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error Pengguna cannot be Edited',
					'alert' => 'danger'
				);
				$this->session->set_flashdata('status', $array_msg);
			}
		redirect('Pengguna');

	}
	function delete($args)
	{	
		
		$result = $this->Buka_peta->delete_record('tb_user', $args,'id');
		if ($result == 1)
		{
			$array_msg = array(
				'msg' => '<i style="color:#fff" class="fa fa-trash-o" aria-hidden="true"></i>Pengguna telah dihapus',
				'alert' => 'info'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		else
		{
			$array_msg = array(
				'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error Pengguna record cannot be changed',
				'alert' => 'danger'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		redirect('Pengguna');
	}
    public function tambah()
	{
		$nama = html_escape($this->input->post('nama'));
		$email = html_escape($this->input->post('email'));
		$pass = html_escape($this->input->post('pass'));
		$jabatan = html_escape($this->input->post('jabatan'));
		$telp = html_escape($this->input->post('telp'));
		$args = array(
			'nama' => $nama,
			'email' => $email,
			'pass' => sha1($pass),
			'jabatan' => $jabatan,
            'telp' => $telp,
            'instansi' => 'DPUPR',
            'status' => 0,
			
		);

		if (!empty($nama) )
		{
			$result = $this->Buka_peta->insert_data('tb_user',$args);
			
			if ($result != NULL)
			{
				$array_msg = array(
					'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Pengguna added Successfully',
					'alert' => 'info'
				);
				$this->session->set_flashdata('status', $array_msg);
			}
			else
			{
				$array_msg = array(
					'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error Pengguna cannot be added',
					'alert' => 'danger'
				);
				$this->session->set_flashdata('status', $array_msg);
			}
		}

		redirect('Pengguna');
	}
    public function ubah($id)
	{
		
		$nama = html_escape($this->input->post('nama'));
		$email = html_escape($this->input->post('email'));
		
		$jabatan = html_escape($this->input->post('jabatan'));
		$telp = html_escape($this->input->post('telp'));
		
		$data = array(
			
			'nama' => $nama,
			'email' => $email,
			
			'jabatan' => $jabatan,
            'telp' => $telp,
            'instansi' => 'DPUPR',
            'status' => 0,
		);
        $args = array(
			'table_name' => 'tb_user',
			'id' => $id,
            'field' => 'id'
		);
		$result = $this->Buka_peta->edit_record($args, $data);
       
		if ($result == 1)
		{
			$array_msg = array(
				'msg' => '<i style="color:#fff" class="fa fa-pencil-square-o" aria-hidden="true"></i> Pengguna Editted',
				'alert' => 'info'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		else
		{
			$array_msg = array(
				'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Pengguna cannot be Editted',
				'alert' => 'danger'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		redirect('Pengguna');
	}

	public function ganti_pwd($id)
	{
		
		$pass = html_escape($this->input->post('pass'));
		
		
		$data = array(
			'pass' => sha1($pass)
		);
        $args = array(
			'table_name' => 'tb_user',
			'id' => $id,
            'field' => 'id'
		);
		$result = $this->Buka_peta->edit_record($args, $data);
       
		if ($result == 1)
		{
			$array_msg = array(
				'msg' => '<i style="color:#fff" class="fa fa-pencil-square-o" aria-hidden="true"></i> Password Editted',
				'alert' => 'info'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		else
		{
			$array_msg = array(
				'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Password cannot be Editted',
				'alert' => 'danger'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		redirect('Pengguna/form_ganti');
	}
	
}
