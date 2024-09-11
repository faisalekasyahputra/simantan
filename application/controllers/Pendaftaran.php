<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Buka_peta');
		}

	public function index()
	{
		
		
        $isi['bread'] = 'Pendaftaran KRK';
		$isi['jenis'] = $_GET['jenis'];
        $data['content'] = $this->load->view('pendaftaran/form_pendaftaran',$isi,TRUE);
		$this->load->view('main',$data);
	}
	public function form_upload($jenis)
	{
		
		$isi['jenis'] = $jenis;
		$isi['nama'] = $_GET['nama'];
		$isi['alamat'] = $_GET['alamat'];
		$isi['rt'] = $_GET['rt'];
        $isi['bread'] = 'Upload Persyaratan';
        $data['content'] = $this->load->view('pendaftaran/form_upload',$isi,TRUE);
		$this->load->view('main',$data);
	}
    public function upload($jenis) {
		if(isset($_POST['uploadImage'])) {
			
			$user_name = $this->session->userdata('user_id');
			$user_id = $user_name['id'];
			$filename = $_FILES['uploadImageFile1']['name'];
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$rt = $_POST['rt'];
			if ($filename != null) {
				$folder=  $_SERVER['DOCUMENT_ROOT'].'/ijinkrk/assets/syarat/';
    				move_uploaded_file($_FILES["uploadImageFile1"]["tmp_name"], "$folder".$_FILES["uploadImageFile1"]["name"]);
					
					$result = $this->Buka_peta->up_foto('syarat1', $filename,$nama,$alamat,$rt);
			}

			$filename = $_FILES['uploadImageFile2']['name'];
			
			if ($filename != null) {
				$folder=  $_SERVER['DOCUMENT_ROOT'].'/ijinkrk/assets/syarat/';
    				move_uploaded_file($_FILES["uploadImageFile2"]["tmp_name"], "$folder".$_FILES["uploadImageFile2"]["name"]);
					$result = $this->Buka_peta->up_foto('syarat2', $filename,$nama,$alamat,$rt);
			}

			$filename = $_FILES['uploadImageFile3']['name'];
			
			if ($filename != null) {
				$folder=  $_SERVER['DOCUMENT_ROOT'].'/ijinkrk/assets/syarat/';
    				move_uploaded_file($_FILES["uploadImageFile3"]["tmp_name"], "$folder".$_FILES["uploadImageFile3"]["name"]);
					$result = $this->Buka_peta->up_foto('syarat3', $filename,$nama,$alamat,$rt);
			}
			$filename = $_FILES['uploadImageFile4']['name'];
			
			if ($filename != null) {
				$folder=  $_SERVER['DOCUMENT_ROOT'].'/ijinkrk/assets/syarat/';
    				move_uploaded_file($_FILES["uploadImageFile4"]["tmp_name"], "$folder".$_FILES["uploadImageFile4"]["name"]);
					$result = $this->Buka_peta->up_foto('syarat4', $filename,$nama,$alamat,$rt);
			}
		}

		$array_msg = array(
			'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Upload Persyaratan Sukses',
			'alert' => 'info'
		);
		$this->session->set_flashdata('status', $array_msg);
		redirect('Pendaftaran?jenis='.$jenis);

			
	}
	public function kecamatan()
	{
	

		$kec = $this->Buka_peta->fetch_record('tb_kecamatan',null,null);
		foreach ($kec as $k) {
       echo "<option value=".$k->id.">".$k->kecamatan."</option>"; }
	}
	public function tambah() {

		$user_name = $this->session->userdata('user_id');
		$foto1      = $_FILES['foto1']['name'];
		$foto2       = $_FILES['foto2']['name'];
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
		
		$user_id = $user_name['id'];
		$alamat=$_POST['alamat'];
		$nama=$_POST['nama'];
		
		if ($_POST['kecamatan_man1'] != '') {
			$kelurahan = '0';
			$kelurahan_man1=$_POST['kelurahan_man1'];
			$kecamatan_man1=$_POST['kecamatan_man1'];
		}else{
			$kelurahan=$_POST['kelurahan'];
			$kelurahan_man1='-';
			$kecamatan_man1='-';
		}
		
		if ($_POST['kecamatan_man2'] != '') {
			$kelurahan_lokasi = '0';
			$kelurahan_man2=$_POST['kelurahan_man2'];
			$kecamatan_man2=$_POST['kecamatan_man2'];
		}else{
			$kelurahan_lokasi=$_POST['kelurahan_lokasi'];
			$kelurahan_man2='-';
			$kecamatan_man2='-';
		}
		
		$rt=$_POST['rt'];
		$rw=$_POST['rw'];
		
		$pekerjaan=$_POST['pekerjaan'];
		$no_hp=$_POST['no_hp'];
		$geo=$_POST['geo'];
		$alamat_lokasi=$_POST['alamat_lokasi'];
		$rt_lokasi=$_POST['rt_lokasi'];
		$rw_lokasi=$_POST['rw_lokasi'];
		$rencana=$_POST['rencana'];
		$status=$_POST['status'];
		$no_sertifikat=$_POST['no_sertifikat'];
		$jenis=$_POST['jenis'];
		$luas=$_POST['luas'];
		$args = array(
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
			'status' => 1,
			'id_user' => $user_id,
			'tanggal' => date('Y-m-d'),
			'dibuka' => '0',
			'rencana' => $rencana,
			'syarat1' => $foto1,
			'syarat2' => $foto2,
			'kelurahan_man1' => $kelurahan_man1,
			'kecamatan_man1' => $kecamatan_man1,
			'kelurahan_man2' => $kelurahan_man2,
			'kecamatan_man2' => $kecamatan_man2,

		);
		if ($foto1 != null) {		
			$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/syarat/';
			move_uploaded_file($_FILES["foto1"]["tmp_name"], "$folder".$_FILES["foto1"]["name"]);
			
		}
		if ($foto2 != null) {		
			$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/syarat/';
			move_uploaded_file($_FILES["foto2"]["tmp_name"], "$folder".$_FILES["foto2"]["name"]);
			
		}
		if ($foto3!='') {		
			$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/syarat/';
			move_uploaded_file($_FILES["foto3"]["tmp_name"], "$folder".$_FILES["foto3"]["name"]);
			$foto_3 = array('syarat3'=>$foto3);
			$args = array_merge($args,$foto_3);
		}
		if ($foto4!='') {		
			$folder=  $_SERVER['DOCUMENT_ROOT'].'/assets/syarat/';
			move_uploaded_file($_FILES["foto4"]["tmp_name"], "$folder".$_FILES["foto4"]["name"]);
			$foto_4 = array('syarat4'=>$foto4);
			$args = array_merge($args,$foto_4);
		}
		$result = $this->Buka_peta->insert_data('tb_krk',$args);
		if ($result != NULL)
			{
				echo "Data Sukses";
			}
		else
			{
				echo "Data Gagal";
			}
	}
	public function kelurahan($a)
	{
	

		$kec = $this->Buka_peta->fetch_record('tb_kelurahan',$a,'KECAMATAN');
		foreach ($kec as $k) {
       	echo "<option value=".$k->id.">".$k->KELURAHAN."</option>"; }
	}

}
