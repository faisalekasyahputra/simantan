<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PermohonanKRK extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Buka_peta');
		include_once APPPATH . '/third_party/fpdf.php';
		}

	
	public function index()
	{
		$isi['jdl_hal'] = 'Data Permohonan';
		$isi['act'] = '1';
		$isi['data'] = $this->Buka_peta->fetch_record('tb_krk',null,null);
		$data['content'] = $this->load->view('admin/permohonankrk/permohonan_krk',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
	public function siap()
	{
		$isi['jdl_hal'] = 'Data Permohonan SIAP';
		$isi['act'] = '1';
		$isi['data'] = $this->Buka_peta->fetch_record('tb_krk','4','status');
		$data['content'] = $this->load->view('admin/permohonankrk/permohonan_siap',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
	public function detail_permohonan($id)
	{
		//$this->Buka_peta->cetak_krk($id);	
		redirect('permohonanKRK/detail_permohonan2/'.$id);
		

	}

	public function detail_permohonan2($id)
	{
		
		$isi['act'] = '1';
		$isi['jdl_hal'] = 'Detail Permohonan';
		$isi['data'] = $this->Buka_peta->fetch_record('tb_krk',$id,'id');
		$isi['id'] = $id;
		$data = array(	
			'dibuka' => '1',
		);

		$args = array(
			'table_name' => 'tb_krk',
			'id' => $id,
			'field' => 'id'
		);
		$result = $this->Buka_peta->edit_record($args, $data);
		$data['content'] = $this->load->view('admin/permohonankrk/detail_permohonan',$isi,TRUE);
		

		
		$this->load->view('admin/index',$data);
		

	}
	public function verifikasi($id) {
		$sesuai = $_GET['sesuai'];
		$ket = $_GET['ket'];
		
		$data = array(	
			'status' => $sesuai,
			'ket_ver' => $ket,
		);

		$args = array(
			'table_name' => 'tb_krk',
			'id' => $id,
			'field' => 'id'
		);

		$result = $this->Buka_peta->edit_record($args, $data);
		if ($result != NULL)
			{
				$array_msg = array(
				'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Peta Berhasil di edit',
				'alert' => 'info');
				$this->session->set_flashdata('status', $array_msg);
				echo "Data Berhasil Disimpan";
			}
	}
	public function ubah_peta($id) {
		$geo = $_GET['peta'];
		$data = array(	
			'geojson' => $geo,
		);

		$args = array(
			'table_name' => 'tb_krk',
			'id' => $id,
			'field' => 'id'
		);

		$result = $this->Buka_peta->edit_record($args, $data);
		if ($result != NULL)
			{
				$array_msg = array(
				'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Peta Berhasil di edit',
				'alert' => 'info');
				$this->session->set_flashdata('status', $array_msg);
				echo "sukses";
			}
	}
	public function proses_ubah($id) {
		if(isset($_POST['uploadImage'])) {

				
				$user_id = $_POST['id'];
				$nama=$_POST['nama'];
				$alamat=$_POST['alamat'];
				$pekerjaan=$_POST['pekerjaan'];
				$no_hp=$_POST['no_hp'];
				$j = $_POST['jenkel'];
				if ($j != '0') {
					$kelurahan=$_POST['kelurahan'];
					$kelurahan_man1 = "-";
					$kecamatan_man1 = "-";
				}else{
					$kelurahan = '0';
					$kelurahan_man1 = $_POST['kelurahan_man1'];
					$kecamatan_man1 = $_POST['kecamatan_man1'];
				}
				$status=$_POST['status'];
				$no_sertifikat=$_POST['no_sertifikat'];

				$filename1 = $_FILES['uploadImageFile1']['name'];
				$filename2 = $_FILES['uploadImageFile2']['name'];
				$filename3 = $_FILES['uploadImageFile3']['name'];
				$filename4 = $_FILES['uploadImageFile4']['name'];
			
				$luas=$_POST['luas'];
				$data = array(
					'nama' => $nama,
					'alamat' => $alamat,
					'pekerjaan' => $pekerjaan,
					'no_hp' => $no_hp,
					
					'kelurahan' => $kelurahan ,
					'status_tanah' => $status,
					'no_sertifikat' => $no_sertifikat,
					'luas_tanah' => $luas,
					'status' => 1,
					'kelurahan_man1' => $kelurahan_man1,
					'kecamatan_man1' => $kecamatan_man1,
				
					
				);

				$args = array(
					'table_name' => 'tb_krk',
					'id' => $id,
					'field' => 'id'
				);

				
				$result = $this->Buka_peta->edit_record($args, $data);
				if ($filename1 != null) {
					$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/syarat/';
						move_uploaded_file($_FILES["uploadImageFile1"]["tmp_name"], "$folder".$_FILES["uploadImageFile1"]["name"]);
						$args = array(
							'table_name' => 'tb_krk',
							'id' => $user_id,
							'field' => 'id'
						);
				
						$data = array('syarat1' =>$filename1);
						$result = $this->Buka_peta->edit_record($args, $data);
				}
				if ($filename2 != null) {
					$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/syarat/';
						move_uploaded_file($_FILES["uploadImageFile2"]["tmp_name"], "$folder".$_FILES["uploadImageFile2"]["name"]);
						$args = array(
							'table_name' => 'tb_krk',
							'id' => $user_id,
							'field' => 'id'
						);
				
						$data = array('syarat2' =>$filename2);
						$result = $this->Buka_peta->edit_record($args, $data);
				}
				
			
			if ($filename3 != null) {
				$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/syarat/';
    				move_uploaded_file($_FILES["uploadImageFile3"]["tmp_name"], "$folder".$_FILES["uploadImageFile3"]["name"]);
					$args = array(
						'table_name' => 'tb_krk',
						'id' => $user_id,
						'field' => 'id'
					);
			
					$data = array('syarat3' =>$filename3);
					$result = $this->Buka_peta->edit_record($args, $data);
			}
			
			
			if ($filename4 != null) {
				$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/syarat/';
    				move_uploaded_file($_FILES["uploadImageFile4"]["tmp_name"], "$folder".$_FILES["uploadImageFile4"]["name"]);
					$args = array(
						'table_name' => 'tb_krk',
						'id' => $user_id,
						'field' => 'id'
					);
			
					$data = array('syarat4' =>$filename4);
					$result = $this->Buka_peta->edit_record($args, $data);
			}
				if ($result != NULL)
					{
						$array_msg = array(
							'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Data Edited Successfully',
							'alert' => 'info'
						);
						$link = base_url()."PermohonanKRK/detail_permohonan2/".$user_id;
						$this->session->set_flashdata('status', $array_msg);
						echo "<script>alert('Data Telah Di Ubah');
						location.href='".$link."';</script>";
						
				}
				else
					{
						$array_msg = array(
							'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error Data cannot be Edited',
							'alert' => 'danger'
						);
						$this->session->set_flashdata('status', $array_msg);
				}
			}
		}

		public function proses_survey() {
			if(isset($_POST['uploadImage1'])) {
					$user_id = $_POST['id'];
					$nomor=$_POST['nomor'];
					$tanggal=$_POST['singledatepicker'];
					$keterangan=$_POST['keterangan'];
					$filename1 = $_FILES['uploadImageFile1']['name'];
					$filename2 = $_FILES['uploadImageFile2']['name'];
					$data = array(
						'no_survey' => $nomor,
						'tgl_survey' => date('Y-m-d',strtotime($tanggal)),
						'ket_survey' => $keterangan,
						'status_survey' => 2,
						'status' => 3,
					);
	
					$args = array(
						'table_name' => 'tb_krk',
						'id' => $user_id,
						'field' => 'id'
					);
	
					$result = $this->Buka_peta->edit_record($args, $data);
					if ($filename1 != null) {
						$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/syarat/';
							move_uploaded_file($_FILES["uploadImageFile1"]["tmp_name"], "$folder".$_FILES["uploadImageFile1"]["name"]);
							$args = array(
								'table_name' => 'tb_krk',
								'id' => $user_id,
								'field' => 'id'
							);
							$data = array('syarat5' =>$filename1);
							$result = $this->Buka_peta->edit_record($args, $data);
					}
					if ($filename2 != null) {
						$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/syarat/';
							move_uploaded_file($_FILES["uploadImageFile2"]["tmp_name"], "$folder".$_FILES["uploadImageFile2"]["name"]);
							$args = array(
								'table_name' => 'tb_krk',
								'id' => $user_id,
								'field' => 'id'
							);
					
							$data = array('syarat6' =>$filename2);
							$result = $this->Buka_peta->edit_record($args, $data);
					}
					if ($result != NULL)
						{
							$array_msg = array(
								'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Data Edited Successfully',
								'alert' => 'info'
							);
							$this->session->set_flashdata('status', $array_msg);
							echo "<script>alert('Data Berhasil Disimpan');</script>";
					}
					else
						{
							$array_msg = array(
								'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error Data cannot be Edited',
								'alert' => 'danger'
							);
							$this->session->set_flashdata('status', $array_msg);
					}
				}
			}
			public function proses_survey1() {
				$user_id = $_POST['id'];
				$nomor=$_POST['nomor'];
				$tanggal=$_POST['tanggal'];
				$keterangan=$_POST['keterangan'];
				if (isset( $_FILES['foto1']['name'])) {
					$filename1 = $_FILES['foto1']['name'];
				}else{
					$filename1 = null;
				}
				if (isset($_FILES['foto2']['name'])) {
					$filename2 = $_FILES['foto2']['name'];
				}else{
					$filename2 = null;
				}
				$data = array(
					'no_survey' => $nomor,
					'tgl_survey' => date('Y-m-d',strtotime($tanggal)),
					'ket_survey' => $keterangan,
					'status_survey' => 2,
					'status' => 3,
				);

				$args = array(
					'table_name' => 'tb_krk',
					'id' => $user_id,
					'field' => 'id'
				);

				$result = $this->Buka_peta->edit_record($args, $data);
				if ($filename1 != null) {
					$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/syarat/';
						move_uploaded_file($_FILES["foto1"]["tmp_name"], "$folder".$_FILES["foto1"]["name"]);
						$args = array(
							'table_name' => 'tb_krk',
							'id' => $user_id,
							'field' => 'id'
						);
						$data = array('syarat5' =>$filename1);
						$result = $this->Buka_peta->edit_record($args, $data);
				}
				if ($filename2 != null) {
					$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/syarat/';
						move_uploaded_file($_FILES["foto2"]["tmp_name"], "$folder".$_FILES["foto2"]["name"]);
						$args = array(
							'table_name' => 'tb_krk',
							'id' => $user_id,
							'field' => 'id'
						);
				
						$data = array('syarat6' =>$filename2);
						$result = $this->Buka_peta->edit_record($args, $data);
				}
				echo "Data Berhasil Disimpan";
			}
			public function proses_siap1() {
				$user_id = $_POST['id'];
				$nomor=$_POST['nomor'];
				$tanggal=$_POST['tanggal'];
				$keterangan=$_POST['keterangan'];
				$data = array(
					'no_siap' => $nomor,
					'tgl_siap' => date('Y-m-d',strtotime($tanggal)),
					'ket_siap' => $keterangan,
					'status_siap' => 2,
					'status' => 4,
				);

				$args = array(
					'table_name' => 'tb_krk',
					'id' => $user_id,
					'field' => 'id'
				);
				$result = $this->Buka_peta->edit_record($args, $data);
				echo "Data Berhasil Disimpan";
			}
			public function proses_siap() {
				if(isset($_POST['uploadImage2'])) {	
						$user_id = $_POST['id'];
						$nomor=$_POST['nomor'];
						$tanggal=$_POST['singledatepicker'];
						$keterangan=$_POST['keterangan'];
						
						$data = array(
							'no_siap' => $nomor,
							'tgl_siap' => date('Y-m-d',strtotime($tanggal)),
							'ket_siap' => $keterangan,
							'status_siap' => 2,
							'status' => 4,
						);
		
						$args = array(
							'table_name' => 'tb_krk',
							'id' => $user_id,
							'field' => 'id'
						);
						$result = $this->Buka_peta->edit_record($args, $data);
						if ($result != NULL)
							{
								$array_msg = array(
									'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Data Edited Successfully',
									'alert' => 'info'
								);
								$this->session->set_flashdata('status', $array_msg);
								redirect('PermohonanKRK');
						}
						else
							{
								$array_msg = array(
									'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error Data cannot be Edited',
									'alert' => 'danger'
								);
								$this->session->set_flashdata('status', $array_msg);
						}
					}
				}
	public function form_tambah()
	{
		$isi['jdl_hal'] = 'Tambah Permohonan';
		$data['content'] = $this->load->view('admin/permohonankrk/tambah',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
	public function upload_berkas() {
		if(isset($_POST['uploadImage1'])) {
				$user_id = $_POST['id'];
				$filename1 = $_FILES['uploadImageFile1']['name'];
				$filename2 = $_FILES['uploadImageFile2']['name'];
				$filename3 = $_FILES['uploadImageFile3']['name'];
				$filename4 = $_FILES['uploadImageFile4']['name'];
				
				if ($filename1 != null) {
					$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/berkas/';
						move_uploaded_file($_FILES["uploadImageFile1"]["tmp_name"], "$folder".$_FILES["uploadImageFile1"]["name"]);
						$args = array(
							'table_name' => 'tb_krk',
							'id' => $user_id,
							'field' => 'id'
						);
						$data = array('berkas1' =>$filename1);
						$result = $this->Buka_peta->edit_record($args, $data);
				}
				if ($filename2 != null) {
					$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/berkas/';
						move_uploaded_file($_FILES["uploadImageFile2"]["tmp_name"], "$folder".$_FILES["uploadImageFile2"]["name"]);
						$args = array(
							'table_name' => 'tb_krk',
							'id' => $user_id,
							'field' => 'id'
						);
				
						$data = array('berkas2' =>$filename2);
						$result = $this->Buka_peta->edit_record($args, $data);
				}
				if ($filename3 != null) {
					$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/berkas/';
						move_uploaded_file($_FILES["uploadImageFile3"]["tmp_name"], "$folder".$_FILES["uploadImageFile3"]["name"]);
						$args = array(
							'table_name' => 'tb_krk',
							'id' => $user_id,
							'field' => 'id'
						);
				
						$data = array('berkas3' =>$filename3);
						$result = $this->Buka_peta->edit_record($args, $data);
				}
				if ($filename4 != null) {
					$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/berkas/';
						move_uploaded_file($_FILES["uploadImageFile4"]["tmp_name"], "$folder".$_FILES["uploadImageFile4"]["name"]);
						$args = array(
							'table_name' => 'tb_krk',
							'id' => $user_id,
							'field' => 'id'
						);
				
						$data = array('berkas4' =>$filename4);
						$result = $this->Buka_peta->edit_record($args, $data);
				}
				if ($result != NULL)
					{
						$array_msg = array(
							'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Data Edited Successfully',
							'alert' => 'info'
						);
						$this->session->set_flashdata('status', $array_msg);
						redirect('PermohonanKRK');
				}
				else
					{
						$array_msg = array(
							'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error Data cannot be Edited',
							'alert' => 'danger'
						);
						$this->session->set_flashdata('status', $array_msg);
				}
			}
		}
function delete($args)

		{	
	
			
	
			$result = $this->Buka_peta->delete_record('tb_krk', $args,'id');
	
			if ($result == 1)
	
			{
	
				$array_msg = array(
	
					'msg' => '<i style="color:#fff" class="fa fa-trash-o" aria-hidden="true"></i>Permohonan removed',
	
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
	
			redirect('PermohonanKRK');
	
		}
	public function laporan()
	{
		$isi['jdl_hal'] = 'Laporan Permohonan';
		$isi['act'] = '1';
		$isi['data'] = $this->Buka_peta->fetch_record('tb_krk','4','status');
		$isi['tanggal1']="00-00-0000";
		$isi['tanggal2']="00-00-0000";
		$data['content'] = $this->load->view('admin/permohonankrk/laporan',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
	public function tgllap()
	{
		$isi['jdl_hal'] = 'Laporan Permohonan';
		$isi['act'] = '1';
		$tgl1 = $_POST['tgl1'];
		$tgl2 = $_POST['tgl2'];
		
		$isi['tanggal1']=date('d-m-Y',strtotime($tgl1));
		$isi['tanggal2']=date('d-m-Y',strtotime($tgl2));;
		$isi['data'] = $this->Buka_peta->dash1($tgl1,$tgl2);
		$data['content'] = $this->load->view('admin/permohonankrk/laporan',$isi,TRUE);
		$this->load->view('admin/index',$data);
	}
}
