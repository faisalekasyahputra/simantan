<?php
class Buka_peta extends CI_Model
{
    public function insert_data($tablename, $arg1)
    {
        $this->db->insert($tablename, $arg1);
        if ($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    public function fetch_record($tablename, $args,$field)
    {
        if ($args != NULL)
        {
            $this->db->where([$field => $args]);
            $query = $this->db->get($tablename);
        }
        else
        {
            $query = $this->db->get($tablename);
        }

        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return NULL;
        }
    }

    public function diproses($args,$sta)
    {
       
        $this->db->where(['id_user' => $args]);
        $this->db->where(['status' => $sta]);
         $query = $this->db->get('tb_krk');
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return NULL;
        }
    }
    public function dash($date1,$date2,$d)
    {
        $sql = "SELECT * FROM `tb_krk` where tanggal >= '".$date1."' and tanggal <=  '".$date2."' ";
       if ($d==1) {
         $sql= $sql."and status='".$d."'";
        }else{
            $sql= $sql."and status !='1'";
        }
       $query = $this->db->query($sql);;
        if ($query->num_rows() > 0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }
    public function edit_record($args, $data)
    {
        extract($args);
        $this->db->where($field, $id);
        $this->db->update($table_name, $data);
        return TRUE;
    }   
    public function up_foto($args, $data,$nama,$alamat,$rt)
    {
        $sql = "update tb_krk set ".$args." = '".$data. "' where  nama='".$nama."' and alamat='".$alamat."' and RT='".$rt."'"; 
        $query = $this->db->query($sql);;
        return '1';
       
    }   
    public function authenticate_user($Email, $password,$tabel)
    {
       
        $this->db->where('email =', $Email);
        $this->db->where('pass =', sha1($password));
        $this->db->where('status =', 0);
       
        $query = $this->db->get($tabel);
        if ($query->num_rows() > 0)
        {
           
            return $query->result();
        }
        else
        {
            return NULL;
        }
    }

    public function cetak_krk($id) {
		$krk = $this->fetch_record('tb_krk',$id,'id');
		$pdf = new FPDF('P', 'mm','Letter');
		$pdf->AddPage();
			
		$pdf->SetFont('Arial','B',18);
		$pdf->Image('assets/images/logo-icon-fix.png',15,10,20,25);
		$pdf->Cell(225,7,'PEMERINTAH KOTA PEKALONGAN',0,1,'C');
		$pdf->SetFont('Arial','B',18);
		$pdf->Cell(225,2,'',0,1,'C');
		$pdf->Cell(225,7,'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG',0,1,'C');
		$pdf->SetFont('Arial','B',9);
        $pdf->SetFont('Arial','B',9);
              $pdf->Cell(225,2,'',0,1,'C');
              $pdf->Cell(225,7,' Jalan Kusuma Bangsa No.45 Pekalongan 50132, Telepon (024) 3556435, Faksimile (024) 3556435',0,1,'C');
              $pdf->Cell(225,7,'',0,1,'C');
              $pdf->SetLineWidth(1);
              $pdf->Line(10,37,205,37);
              $pdf->SetLineWidth(0);
              $pdf->Line(10,38,205,38);
              
              $pdf->SetFont('Times','',12);
              $pdf->Cell(20,5,'Nomor',0,0,'L');
              $pdf->Cell(10,5,':',0,0,'C');
              $pdf->Cell(100,5,$krk[0]->no_siap,0,0,'L');
              $tanggal = date('d-m-Y', strtotime($krk[0]->tgl_siap));
              $pdf->Cell(70,5,'',0,1,'L');
              $pdf->Cell(20,5,'Lampiran',0,0,'L');
              $pdf->Cell(10,5,':',0,0,'C');
              $pdf->Cell(170,5,'1 Lembar',0,1,'L');
              
              $pdf->Cell(20,5,'Perihal',0,0,'L');
              $pdf->Cell(10,5,':',0,0,'C');
              $pdf->Cell(70,5,'Permohonan KRK',0,0,'L');
              $pdf->Cell(70,5,'Kepada',0,1,'L');
              $pdf->Cell(100,5,'',0,0,'L');
              $pdf->Cell(70,5,'Yth. Walikota Pekalongan',0,1,'L');
              $pdf->Cell(100,5,'',0,0,'L');
              $pdf->Cell(70,5,'Lewat :',0,1,'L');
              $pdf->Cell(110,5,'',0,0,'L');
              $pdf->Cell(100,5,'Kepala Dinas Pekerjaan Umum dan Penataan Ruang',0,1,'L');
              $pdf->Cell(110,5,'',0,0,'L');
              $pdf->Cell(100,5,'Kota Pekalongan',0,1,'L');
              $pdf->Cell(110,5,'',0,0,'L');
              $pdf->Cell(100,5,'di',0,1,'L');
              $pdf->Cell(115,5,'',0,0,'L');
              $pdf->Cell(100,5,'PEKALONGAN',0,1,'L');
              $pdf->Cell(20,5,'',0,1,'L');
              $pdf->Cell(120,5,'Yang bertanda tangan di bawah ini :',0,1,'L');
              $pdf->Cell(100,5,'',0,1,'L');
              $pdf->Cell(20,5,'Nama ',0,0,'L');
              $pdf->Cell(10,5,':',0,0,'C');
              $pdf->Cell(170,5,$krk[0]->nama,0,1,'L');

              $pdf->Cell(20,5,'Alamat ',0,0,'L');
              $pdf->Cell(10,5,':',0,0,'C');
			  if ($krk[0]->kelurahan !=0) {
              $kel = $this->fetch_record('tb_kelurahan',$krk[0]->kelurahan,'id');
              $kec_id = $kel[0]->KECAMATAN;
			  }else{
				  $kec_id = $krk->kecamatan_man1;
			  }
              $kec = $this->fetch_record('tb_kecamatan',$kec_id,'id');
              $pdf->Cell(170,5,$krk[0]->alamat.' '.$kel[0]->KELURAHAN.' '.$kec[0]->kecamatan,0,1,'L');
              $pdf->Cell(20,5,'Pekerjaan ',0,0,'L');
              $pdf->Cell(10,5,':',0,0,'C');
              $pdf->Cell(170,5,$krk[0]->pekerjaan,0,1,'L');
              $pdf->Cell(115,5,'',0,1,'L');
              $pdf->Cell(120,5,'       Mengajukan Permohonan Keterangan Rencana Pemanfaatan Ruang/Rekomendasi site plan',0,1,'L');
              $pdf->Cell(120,5,'untuk lahan yang terletak di :',0,1,'L');
              $pdf->Cell(100,5,'',0,1,'L');
              $pdf->Cell(20,5,'Jalan ',0,0,'L');
              $pdf->Cell(10,5,':',0,0,'C');
              $pdf->Cell(170,5,'Jalan-jalan',0,1,'L');
              $pdf->Cell(20,5,'Kelurahan ',0,0,'L');
              $pdf->Cell(10,5,':',0,0,'C');
              $pdf->Cell(170,5,$kel[0]->KELURAHAN,0,1,'L');
              $pdf->Cell(20,5,'Kecamatan ',0,0,'L');
              $pdf->Cell(10,5,':',0,0,'C');
              $pdf->Cell(170,5,$kec[0]->kecamatan,0,1,'L');
              $pdf->Cell(20,5,'Status Tanah ',0,0,'L');
              $pdf->Cell(10,5,':',0,0,'C');
              $pdf->Cell(170,5,$krk[0]->status_tanah,0,1,'L');
              $pdf->Cell(20,5,'No. Sertifikat ',0,0,'L');
              $pdf->Cell(10,5,':',0,0,'C');
              $pdf->Cell(170,5,$krk[0]->no_sertifikat,0,1,'L');
              $pdf->Cell(20,5,'Luas Tanah ',0,0,'L');
              $pdf->Cell(10,5,':',0,0,'C');
              $pdf->Cell(170,5,$krk[0]->luas_tanah,0,1,'L');
              $pdf->Cell(100,5,'',0,1,'L');
              $pdf->Cell(120,5,'       Permohonan ini kami buat untuk keperluan pengajuan Izin Perubahan Penggunaan Tanah/',0,1,'L');
              $pdf->Cell(120,5,'Ijin Mendirikan Bangunan',0,1,'L');
              $pdf->Cell(100,5,'',0,1,'L');
              $pdf->Cell(100,5,'',0,1,'L');
              $pdf->Cell(100,5,'',0,1,'L');
              $pdf->Cell(100,5,'',0,1,'L');
              $pdf->Cell(100,5,'',0,1,'L');
              $pdf->Cell(110,5,'',0,0,'L');
              $pdf->Cell(70,5,'Pekalongan, '.$tanggal,0,1,'C');
              $pdf->Cell(100,5,'',0,1,'L');
              $pdf->Cell(100,5,'',0,1,'L');
              $pdf->Cell(100,5,'',0,1,'L');
              $pdf->Cell(100,5,'',0,1,'L');

              $pdf->Cell(110,5,'',0,0,'C');
              $pdf->Cell(70,5,'('.$krk[0]->nama.')',0,1,'C');
             
              
		$pdf->Output('assets/file/krk.pdf','F'); 
	}
    public function delete_record($tablename, $arg,$field)
    {
        $db_debug = $this->db->db_debug;
        $this->db->db_debug = FALSE;
        $this->db->where([$field => $arg]);
        $this->db->delete($tablename);
        if ($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }

        $this->db->db_debug = $db_debug;
    }
    public function multi($user_id)
    {
        $this->db->select('tb_user.id,tb_user.nama,tb_menu.menu,tb_menu.icon,tb_menu.link');
        $this->db->join('tb_menu','tb_multi.menu = tb_menu.id');
        $this->db->join('tb_user','tb_multi.user_id = tb_user.id');
        $this->db->where(['tb_user.id' => $user_id]);
        $query = $this->db->get('tb_multi');
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return NULL;
        }
    }
    public function revisi($user_id)
    {
        $this->db->select('tb_krk.id,tb_krk.tanggal,tb_krk.kelurahan_lokasi,tb_krk.nama,tb_krk.alamat,tb_krk.no_sertifikat,tb_revisi.revisi,tb_krk.id_user');
        $this->db->join('tb_revisi','tb_krk.id = tb_revisi.id_krk');
        $this->db->where(['tb_krk.id_user' => $user_id]);
        $query = $this->db->get('tb_krk');
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return NULL;
        }
    }
    
    public function multi_user($id_user, $id_menu)
    {
       
        $this->db->where('user_id =', $id_user);
        $this->db->where('menu =', $id_menu);
       
        $query = $this->db->get('tb_multi');
        if ($query->num_rows() > 0)
        {
          
            return $query->result();
        }
        else
        {
            return NULL;
        }
    }
public function dash1($date1,$date2)
    {
      $sql= "SELECT * FROM `tb_krk` where tanggal >= '".$date1."' and tanggal <='".$date2."' AND status='4'";
       
       $query = $this->db->query($sql);;
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return 0;
        }
    }
}