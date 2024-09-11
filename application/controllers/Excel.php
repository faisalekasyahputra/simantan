<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Buka_peta');
		
		date_default_timezone_set("Asia/Jakarta");
		}

	public function index()
	{
		
		if (isset($_GET['tgl1'])) {
			$t1 = date('Y/m/d',strtotime($_GET['tgl1']));
		}else { $t1="00/00/000"; 
		}
		if (isset($_GET['tgl2'])) {
			$t2 = date('Y/m/d',strtotime($_GET['tgl2']));
		}else { $t2="00/00/000"; 
		}
		
		$this->load->library('PHPExcel');
		
		if ($t1 == "-0001/11/30") {
			$data = $this->Buka_peta->fetch_record('tb_krk','4','status');
		}else{
			$data = $this->Buka_peta->dash1($t1,$t2);
		}
		
	
		
		$excel = new PHPExcel();
		$excel->getProperties()->setCreator('My Notes Code')
                 ->setLastModifiedBy('My Notes Code')
                 ->setTitle("Data Permohonan")
                 ->setSubject("Permohonan Ijin Tata Ruang")
                 ->setDescription("Laporan Permohonan Ijin Tata Ruang")
                 ->setKeywords("Permohonan Ijin Tata Ruang");
				 
		

		$excel->setActiveSheetIndex(0)->setCellValue('A2', "NO"); // Set kolom A3 dengan tulisan "NO"
		$excel->setActiveSheetIndex(0)->setCellValue('B2', "NAMA"); // Set kolom B3 dengan tulisan "NIS"
		$excel->setActiveSheetIndex(0)->setCellValue('C2', "ALAMAT LOKASI"); // Set kolom C3 dengan tulisan "NAMA"
		$excel->setActiveSheetIndex(0)->setCellValue('D2', "KOORDINAT"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
		$excel->setActiveSheetIndex(0)->setCellValue('E2', "NO. SERTIFIKAT");
		$excel->setActiveSheetIndex(0)->setCellValue('F2', "JENIS ");
		$excel->setActiveSheetIndex(0)->setCellValue('G2', "TANGGAL ");
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(50);
		$excel->getActiveSheet()->getColumnDimension('D')->setWidth(100);
		$excel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
		$excel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
		$excel->getActiveSheet()->getColumnDimension('G')->setWidth(10);
	
		if ($data !=null) {
			$col= 3;
			
			foreach($data as $d) {
				$kel = $this->Buka_peta->fetch_record('tb_kelurahan',$d->kelurahan,'id');
				$geojson = $d->geojson;
				$panjang = strlen($geojson);
				$p = $panjang-104;
				$awal= strpos($geojson, '[[['); 
				$p = $panjang-$awal-8;
				$geo=substr($geojson,$awal+2,$p);
				$excel->setActiveSheetIndex(0)->setCellValue('A'.$col, $col-2); // Set kolom A3 dengan tulisan "NO"
				$excel->setActiveSheetIndex(0)->setCellValue('B'.$col, $d->nama); // Set kolom B3 dengan tulisan "NIS"
				$excel->setActiveSheetIndex(0)->setCellValue('C'.$col, $d->alamat_lokasi.' RT.'.$d->RT_lokasi.' RW.'.$d->RW_lokasi.', Kel. '.$kel[0]->KELURAHAN); // Set kolom C3 dengan tulisan "NAMA"
				$excel->setActiveSheetIndex(0)->setCellValue('D'.$col, $geo); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
				$excel->setActiveSheetIndex(0)->setCellValue('E'.$col, $d->no_sertifikat);
				$excel->setActiveSheetIndex(0)->setCellValue('F'.$col, $d->jenis);
				$excel->setActiveSheetIndex(0)->setCellValue('g'.$col, date('d-m-Y',strtotime($d->tanggal)));
				$col++;
			}
		}
		$excel->getActiveSheet(0)->setTitle("Permohonan");
		$excel->setActiveSheetIndex(0);
		// Proses file excel
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="permohonan_ijin_tataruang.xlsx"'); // Set nama file excel nya
		header('Cache-Control: max-age=0');
		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		$write->save('php://output');
	}
	
}
