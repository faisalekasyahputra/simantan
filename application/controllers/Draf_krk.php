<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Draf_krk extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Buka_peta');
		}

	public function index()
	{
		
		$user_name = $this->session->userdata('user_id');
		$user_id = $user_name['id'];
        $isi['bread'] = 'Draf Pendaftaran';
        $isi['data'] = $this->Buka_peta->diproses($user_id,'1');
        $data['content'] = $this->load->view('pendaftaran/draf_krk',$isi,TRUE);
		$this->load->view('main',$data);
	}
	public function ubah($id)
	{
        $isi['bread'] = 'Ubah Permohonan';
        $isi['data'] = $this->Buka_peta->fetch_record('tb_krk',$id,'id');
        $data['content'] = $this->load->view('pendaftaran/form_ubah',$isi,TRUE);
		$this->load->view('main',$data);
	}

	public function detail($id)
	{
        $isi['bread'] = 'Ubah Permohonan';
        $isi['data'] = $this->Buka_peta->fetch_record('tb_krk',$id,'id');
        $data['content'] = $this->load->view('pendaftaran/detail',$isi,TRUE);
		$this->load->view('main',$data);
	}
	public function lacak($id)
	{
        $isi['bread'] = 'Lacak Permohonan';
        $isi['data'] = $this->Buka_peta->fetch_record('tb_krk',$id,'id');
        $data['content'] = $this->load->view('pendaftaran/detail_lacak',$isi,TRUE);
		$this->load->view('main',$data);
	}
    public function proses_ubah() {
		if (isset($_FILES['foto1'])) {
			$foto1      = $_FILES['foto1']['name'];
		}else{
			$foto1 ='';
		}
		if (isset($_FILES['foto2'])) {
			$foto1      = $_FILES['foto2']['name'];
		}else{
			$foto2 ='';
		}
		if (isset($_FILES['foto3'])) {
			$foto3 = $_FILES['foto3']['name'];
		}else{
			$foto3 = '';
		}	
		if (isset($_FILES['foto4'])){
			$foto4 = $_FILES['foto4']['name'];
		}else{
			$foto4 ='';
		}
		$a=$_POST['a'];
		$b=$_POST['b'];
		$user_name = $this->session->userdata('user_id');
		$user_id = $user_name['id'];
		$alamat=$_POST['alamat'];
		$nama=$_POST['nama'];
		
		$rt=$_POST['rt'];
		$rw=$_POST['rw'];
		if ($a !=0) {
			$kelurahan=$_POST['kelurahan'];
			$kelurahan_man1 = "-";
			$kecamatan_man1 = "-";
		}else {
			$kelurahan = "0";
			$kelurahan_man1 = $_POST['kelurahan'];
			$kecamatan_man1 = $_POST['kecamatan'];;
		}
		if ($b !=0) {
			$kelurahan_lokasi=$_POST['kelurahan_lokasi'];
			$kelurahan_man2 = "-";
			$kecamatan_man2 = "-";
		}else {
			$kelurahan_lokasi = "0";
			$kelurahan_man2 = $_POST['kelurahan_lokasi'];
			$kecamatan_man2 = $_POST['kecamatan_lokasi'];;
		}
		$pekerjaan=$_POST['pekerjaan'];
		$no_hp=$_POST['no_hp'];
		$geo=$_POST['geo'];
		$alamat_lokasi=$_POST['alamat_lokasi'];
		$rt_lokasi=$_POST['rt_lokasi'];
		$rw_lokasi=$_POST['rw_lokasi'];
		$kelurahan_lokasi=$_POST['kelurahan_lokasi'];
		$status=$_POST['status'];
		$no_sertifikat=$_POST['no_sertifikat'];
		$jenis=$_POST['jenis'];
		$luas=$_POST['luas'];
		$id = $_POST['id'];
		$rencana=$_POST['rencana'];
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'RT' => $rt,
			'RW' => $rw,
			'kelurahan' => $kelurahan ,
			'pekerjaan' => $pekerjaan,
			'no_hp' => $no_hp,
			'geojson' => $geo,
			'alamat_lokasi' => $alamat_lokasi,
			'RT_lokasi' => $rt_lokasi,
			'RW_lokasi' => $rw_lokasi,
			'kelurahan_lokasi' => $kelurahan_lokasi ,
			'status_tanah' => $status,
			'no_sertifikat' => $no_sertifikat,
			'luas_tanah' => $luas,
			'rencana' => $rencana,
			'status' => 1,
			'id_user' => $user_id,
			'tanggal' => date('Y-m-d'),
			'dibuka' => '0',
			'jenis' => $jenis,
			'status' => 1,
			'kelurahan_man1' => $kelurahan_man1,
			'kecamatan_man1' => $kecamatan_man1,
			'kelurahan_man2' => $kelurahan_man2,
			'kecamatan_man2' => $kecamatan_man2,
			
			
		);
		if ($foto1!='') {		
			$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/syarat/';
			move_uploaded_file($_FILES["foto1"]["tmp_name"], "$folder".$_FILES["foto1"]["name"]);
			$foto_1 = array('syarat1'=>$foto1);
			$data = array_merge($data,$foto_1);
		}
		if ($foto2!='') {		
			$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/syarat/';
			move_uploaded_file($_FILES["foto2"]["tmp_name"], "$folder".$_FILES["foto2"]["name"]);
			$foto_2 = array('syarat2'=>$foto2);
			$data = array_merge($data,$foto_2);
		}
		if ($foto3!='') {		
			$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/syarat/';
			move_uploaded_file($_FILES["foto3"]["tmp_name"], "$folder".$_FILES["foto3"]["name"]);
			$foto_3 = array('syarat3'=>$foto3);
			$data = array_merge($data,$foto_3);
		}
		if ($foto4!='') {		
			$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/syarat/';
			move_uploaded_file($_FILES["foto4"]["tmp_name"], "$folder".$_FILES["foto4"]["name"]);
			$foto_4 = array('syarat4'=>$foto4);
			$data = array_merge($data,$foto_4);
		}
        $args = array(
			'table_name' => 'tb_krk',
			'id' => $id,
			'field' => 'id'
		);
		$result = $this->Buka_peta->edit_record($args, $data);
		
		if ($result != NULL)
			{
				echo "Data Sukses";
		}
		else
			{
				echo "Data Gagal";
		}
	}
    public function form_upload_edit($id)
	{
		
		
        $isi['bread'] = 'Edit Persyaratan';
        $isi['data'] = $this->Buka_peta->fetch_record('tb_krk',$id,'id');
		$isi['id'] = $id;
        $data['content'] = $this->load->view('pendaftaran/form_upload_edit',$isi,TRUE);
		$this->load->view('main',$data);
	}

	public function upload_edit($id) {
		
	
		if(isset($_POST['uploadImage'])) {

			$user_name = $this->session->userdata('user_id');
			$user_id = $user_name['id'];
			$filename = $_FILES['uploadImageFile1']['name'];
			
			if ($filename != null) {
				$folder=  $_SERVER['DOCUMENT_ROOT'].'/ijinkrk/assets/syarat/';
    				move_uploaded_file($_FILES["uploadImageFile1"]["tmp_name"], "$folder".$_FILES["uploadImageFile1"]["name"]);
					$args = array(
						'table_name' => 'tb_krk',
						'id' => $id,
						'field' => 'id'
					);
			
					$data = array('syarat1' =>$filename);
					$result = $this->Buka_peta->edit_record($args, $data);
			}

			$filename = $_FILES['uploadImageFile2']['name'];
			
			if ($filename != null) {
				$folder=  $_SERVER['DOCUMENT_ROOT'].'/ijinkrk/assets/syarat/';
    				move_uploaded_file($_FILES["uploadImageFile2"]["tmp_name"], "$folder".$_FILES["uploadImageFile2"]["name"]);
					$args = array(
						'table_name' => 'tb_krk',
						'id' => $id,
						'field' => 'id'
					);
			
					$data = array('syarat2' =>$filename);
					$result = $this->Buka_peta->edit_record($args, $data);
			}

			$filename = $_FILES['uploadImageFile3']['name'];
			
			if ($filename != null) {
				$folder=  $_SERVER['DOCUMENT_ROOT'].'/ijinkrk/assets/syarat/';
    				move_uploaded_file($_FILES["uploadImageFile3"]["tmp_name"], "$folder".$_FILES["uploadImageFile3"]["name"]);
					$args = array(
						'table_name' => 'tb_krk',
						'id' => $id,
						'field' => 'id'
					);
			
					$data = array('syarat3' =>$filename);
					$result = $this->Buka_peta->edit_record($args, $data);
			}
			$filename = $_FILES['uploadImageFile4']['name'];
			
			if ($filename != null) {
				$folder=  $_SERVER['DOCUMENT_ROOT'].'/ijinkrk/assets/syarat/';
    				move_uploaded_file($_FILES["uploadImageFile4"]["tmp_name"], "$folder".$_FILES["uploadImageFile4"]["name"]);
					$args = array(
						'table_name' => 'tb_krk',
						'id' =>$id,
						'field' => 'id'
					);
			
					$data = array('syarat4' =>$filename);
					$result = $this->Buka_peta->edit_record($args, $data);
			}
			
			
			
		}

		$array_msg = array(
			'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Upload Persyaratan Sukses',
			'alert' => 'info'
		);
		$this->session->set_flashdata('status', $array_msg);
		redirect('Draf_krk');

			
	}
	public function survey()
	{
		$user_name = $this->session->userdata('user_id');
		$nama = $user_name['nama'];
		
	
		$email = $user_name['email'];
	
		$s1 =  html_escape($this->input->post('s1'));
		$s2 =  html_escape($this->input->post('s2'));
		$s3 =  html_escape($this->input->post('s3'));
		$s4 =  html_escape($this->input->post('s4'));
		$s5 =  html_escape($this->input->post('s5'));
		$s6 =  html_escape($this->input->post('s6'));
		$s7 =  html_escape($this->input->post('s7'));
		$s8 =  html_escape($this->input->post('s8'));
		$s9 =  html_escape($this->input->post('s9'));
		$testi = html_escape($this->input->post('testi'));
		
		
		$args1 = array(
			'nama' => $nama,
			'email' => $email,
			's1' => $s1,
			's2' => $s2,
			's3' => $s3,
			's4' => $s4,
			's5' => $s5,
			's6' => $s6,
			's7' => $s7,
			's8' => $s8,
			's9' => $s9,
			'testi' => $testi,
		);
		$result = $this->Buka_peta->insert_data('tb_survey',$args1);
		echo "<script>
		
		alert('Proses Pengambilan KRK telah Selesai');
		top.location='".base_url()."KRK/utama';
		
		</script>";
		die();

		
	}
}
