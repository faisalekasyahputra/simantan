<style>
    .verticalLine {
        margin-left: 4px;
        border-left: 1px solid #cda5a5;
        height: 90px;
      }
      .verticalLineaktif {
        margin-left: 4px;
        border-left: 1px solid #f50c0c;
        height: 90px;
      }
    .circle {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #cda5a5;
        }
    .circleaktif {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #f50c0c;
        }
    .judul { font-weight: bold;
        color :#cda5a5;
    }
    .judulaktif { font-weight: bold;
        color :#f50c0c;
    }
    .badan { 
        color :#cda5a5;
    }
    .badanaktif { 
        color :#f50c0c;
    }
    </style>
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card form-pendaftaran">
                            <div class="card-body">
                           
                               
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead align="center">
                                            <tr>
                                             
                                                <td>
                                                <table border="0" >
                                                    <tr>
                                                        <td style="padding: 0px;margin:0px">
                                                        <?php if ($data[0]->status=='1' || $data[0]->status==null){
                                                            $verif='verif0b.jpg';
                                                           
                                                        }else{
                                                            $verif ='verif0a.jpg';
                                                           
                                                        }?>
                                                        <img src="<?=base_url('assets/images/'.$verif)?>" width="150px">
                                                           
                                                        </td>
                                                        <td style="padding: 0px;margin:0px">
                                                        <?php if ($data[0]->status=='2'){
                                                            $verif='verif1b.jpg';
                                                        }else{
                                                            $verif ='verif1a.jpg';
                                                        }?>
                                                        <img src="<?=base_url('assets/images/'.$verif)?>" width="150px">
                                                           
                                                        </td>
                                                        
                                                        <td style="padding: 0px;margin:0px">
                                                        <?php if ($data[0]->status=='3'){
                                                            $verif='verif2b.jpg';
                                                        }else{
                                                            $verif ='verif2a.jpg';
                                                        }?>
                                                        <img src="<?=base_url('assets/images/'.$verif)?>" width="150px">
                                                           
                                                        </td>

                                                        <td style="padding: 0px;margin:0px">
                                                        <?php if ($data[0]->status=='4'){
                                                            $verif='verif3b.jpg';
                                                        }else{
                                                            $verif ='verif3a.jpg';
                                                        }?>
                                                        <img src="<?=base_url('assets/images/'.$verif)?>" width="150px">
                                                           
                                                        </td>
                                                        
                                                        

                                                    
                                                    </tr>
                                                </table>

                                                </td>
                                            </tr>
                                            
                                        </thead>
                                        
                                    </table>

                                   
                                </div>  
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead align="center" style="padding:20px">
                                            <tr>
                                             
                                                <td>
                                                <table border="1" width="600px" >
                                                    <tr  height="35px" style="background: #cda5a5;">
                                                        <td style="padding: 0px;margin:0px;color:white">
                                                        
                                                           
                                                        </td>
                                                        <td style="padding: 0px;margin:0px"> 
                                                        &nbsp;&nbsp;&nbsp;  <b>Detail Proses Permohonan KRK</b>
                                                        </td>
                                                    </tr>
                                                    <tr height="10px" ></tr>
                                                    <?php if ($data[0]->status=='1' || $data[0]->status==null){
                                                             $judul = 'judulaktif';
                                                             $badan = 'badanaktif';
                                                             $ver =  'verticalLineaktif';
                                                             $cir = 'circleaktif';
                                                            
                                                        }else{
                                                            $judul = 'judul';
                                                            $badan = 'badan';
                                                            $ver =  'verticalLine';
                                                            $cir = 'circle';
                                                           
                                                        }?>
                                                    <tr height="90px" style="padding-top: 0px;padding-bottom:0px">
                                                        <td width="2px" valign="top"  style="padding-top: 0px;padding-bottom:0px" >
                                                            <div class="<?=$cir?>"></div>
                                                            <div class="<?=$ver?>"></div>
                                                        
                                                        </td>
                                                        <td  align="left" valign="top"   style="padding-top: 0px;padding-bottom:0px">
                                                                <div class="<?=$judul?>">Tahap Persiapan</div>
                                                                <div class="<?=$badan?>">Tahap Persiapan adalah tahap diterimanya permohonan anda ke dalam  <br>
                                                                 Aplikasi SIMANTAN.</div>
                                                        </td>
                                                    </tr>
                                                    <tr height="90px" style="padding-top:0px ;padding-bottom:0px" >
                                                    <?php if ($data[0]->status=='2'){
                                                             $judul = 'judulaktif';
                                                             $badan = 'badanaktif';
                                                             $ver =  'verticalLineaktif';
                                                             $cir = 'circleaktif';
                                                            
                                                        }else{
                                                            $judul = 'judul';
                                                            $badan = 'badan';
                                                            $ver =  'verticalLine';
                                                            $cir = 'circle';
                                                           
                                                        }?>    
                                                    
                                                    <td width="2px" valign="top"   style="padding-top: 0px;padding-bottom:0px">
                                                            <div class="<?=$cir?>"></div>
                                                            <div class="<?=$ver?>"></div>
                                                        
                                                        </td>
                                                        <td  align="left" valign="top" style="padding-top: 0px;padding-bottom:0px" >
                                                        <?php
                                                        if ($data[0]->ket_ver !=null) {
                                                            $ket1 = $data[0]->ket_ver;
                                                        }else {
                                                            $ket1 = 'Tahap verifikasi berkas adalah tahap pemeriksaan berkas yang telah  <br>
                                                            Anda sampaikan melalui aplikasi SIMANTAN. Petugas kami akan segera <br>
                                                            menghubungi Anda. Pastikan nomor Hp Anda Aktif'; }
                                                        ?>
                                                        <div class="<?=$judul?>">Verifikasi Berkas</div>
                                                                <div class="<?=$badan?>"><?=$ket1?></div>
                                                        </td>
                                                    </tr>
                                                    <tr height="90px" style="padding-top:0px ;padding-bottom:0px" >
                                                    <?php if ($data[0]->status=='3'){
                                                             $judul = 'judulaktif';
                                                             $badan = 'badanaktif';
                                                             $ver =  'verticalLineaktif';
                                                             $cir = 'circleaktif';
                                                            
                                                        }else{
                                                            $judul = 'judul';
                                                            $badan = 'badan';
                                                            $ver =  'verticalLine';
                                                            $cir = 'circle';
                                                           
                                                        }?>  
                                                    <td width="2px" valign="top"   style="padding-top: 0px;padding-bottom:0px">
                                                            <div class="<?=$cir?>"></div>
                                                            <div class="<?=$ver?>"></div>
                                                        
                                                        </td>
                                                        <td  align="left" valign="top" style="padding-top: 0px;padding-bottom:0px" >
                                                        <?php 
                                                        if ($data[0]->ket_survey != null) {
                                                            $ket2 = $data[0]->ket_survey.'<br>';
                                                        }else{
                                                        $ket2 ='Tahap Survey dan pengukuran terhadap lokasi yang telah Anda Ajukan.<br>
                                                        Petugas kami akan segera menghubungi Anda. Pastikan nomor Hp Anda Aktif. <br>';}
                                                        ?>
                                                        <div class="<?=$judul?>">Proses Survey</div>
                                                                <div class="<?=$badan?>"><?=$ket2?>
                                                                </div>
                                                        </td>
                                                    </tr>
                                                    <tr height="90px" style="padding-top:0px ;padding-bottom:10px" >
                                                    <?php if ($data[0]->status=='4'){
                                                             $judul = 'judulaktif';
                                                             $badan = 'badanaktif';
                                                             $ver =  'verticalLineaktif';
                                                             $cir = 'circleaktif';
                                                            
                                                        }else{
                                                            $judul = 'judul';
                                                            $badan = 'badan';
                                                            $ver =  'verticalLine';
                                                            $cir = 'circle';
                                                           
                                                        }?>  
                                                    <td width="2px" valign="top"   style="padding-top: 0px;padding-bottom:10px">
                                                            <div class="<?=$cir?>"></div>
                                                            <div class="<?=$ver?>"></div>
                                                        
                                                        </td>
                                                        <td  align="left" valign="top" style="padding-top: 0px;padding-bottom:10px" >
                                                        <?php
                                                        if ($data[0]->ket_siap !=null) {
                                                            $ket3 = $data[0]->ket_siap.'<br>';
                                                        }else {
                                                        $ket3 = 'Proses permohonan Anda telah selesai diproses. Dokumen bisa<br>
                                                                diambil di kantor kami dengan menyertkan nomor Sertifikat Anda. <br>';}
                                                                ?>
                                                        <div class="<?=$judul?>">Permohonan Siap</div>
                                                                <div class="<?=$badan?>"><?=$ket3?>
                                                                </div>
                                                        <br>
                                                        <div class="col-lg-6 col-md-6" >
                                                        <button type="button" onclick="OpenModal2('krk')" class="buttonku-sendiri">Ambil Hasil Permohonan</button>
                                                        </div>
                                                        </td>
                                                    </tr>
                                                        
                                                </table>

                                                </td>
                                            </tr>
                                            
                                        </thead>
                                        
                                    </table>

                                   
                                </div> 
                               
                            </div>
                        </div>
                    </div>
                </div>
<form action="<?=base_url('Draf_krk/survey')?>" method="post">
                <div class="overlay2" id="overlay2">
                <div class="popup" style="width:850px;height:auto">
                    <div class="modal-dialog modal-lg" role="document" style="width:850px;height:auto">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Survey Kepuasan Pelayanan</h5><br>
                                <input type="hidden" id="head">
                                <button type="button" class="close" onclick="CloseModal2()" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                            <div class="modal-body">
                           
  <p>1. Apakah persyaratan dalam permohonan perizinan telah sesuai dengan peraturan yang ada ?</p>
  <input type="radio" id="s1" name="s1" value="1">
  <label for="html">Tidak Sesuai</label>&nbsp;&nbsp;
  <input type="radio" id="s1" name="s1" value="2">
  <label for="css">Kurang Sesuai</label>&nbsp;&nbsp;
  <input type="radio" id="s1" name="s1" value="3">
  <label for="javascript">Sesuai</label>&nbsp;&nbsp;
<input type="radio" id="s1" name="s1" value="4">
  <label for="javascript">Sangat Sesuai</label>

<p>2. Pendapat saudara tentang kemudahan sistem, mekanisme dan prosedur pelayanan di DPUPR Kota Pekalongan?</p>
  <input type="radio" id="s2" name="s2" value="1">
  <label for="html">Tidak Mudah</label>&nbsp;&nbsp;
  <input type="radio" id="s2" name="s2" value="2">
  <label for="css">Kurang Mudah</label>&nbsp;&nbsp;
  <input type="radio" id="s2" name="s2" value="3">
  <label for="javascript">Sesuai</label>&nbsp;&nbsp;
<input type="radio" id="s2" name="s2" value="4">
  <label for="javascript">Sangat Sesuai</label>

<p>3. Pendapat saudara tentang ketepatan penyelesaian pelayanan terhadap janji waktu pelayanan ?</p>
  <input type="radio" id="s3" name="s3" value="1">
  <label for="html">Tidak Tepat</label>&nbsp;&nbsp;
  <input type="radio" id="s3" name="s3" value="2">
  <label for="css">Kurang Tepat</label>&nbsp;&nbsp;
  <input type="radio" id="s3" name="s3" value="3">
  <label for="javascript">Tepat</label>&nbsp;&nbsp;
<input type="radio" id="s3" name="s3" value="4">
  <label for="javascript">Sangat Tepat</label>

<p>4. Pendapat saudara tentang kesesuaian biaya/retribusi yang dibayarkan dengan biaya yang ditetapkan?</p>
  <input type="radio" id="s4" name="s4" value="1">
  <label for="html">Tidak Wajar</label>&nbsp;&nbsp;
  <input type="radio" id="s4" name="s4" value="2">
  <label for="css">Kurang Wajar</label>&nbsp;&nbsp;
  <input type="radio" id="s4" name="s4" value="3">
  <label for="javascript">Wajar</label>&nbsp;&nbsp;
<input type="radio" id="s4" name="s4" value="4">
  <label for="javascript">Sangat Wajar</label>

<p>5. Pendapat saudara apakah produk spesifikasi jenis pelayanan yang diberikan sudah sesuai dengan hasil pelayanan yang diterima? ?</p>
  <input type="radio" id="s5" name="s5" value="1">
  <label for="html">Tidak Sesuai</label>&nbsp;&nbsp;
  <input type="radio" id="s5" name="s5" value="2">
  <label for="css">Kurang Sesuai</label>&nbsp;&nbsp;
  <input type="radio" id="s5" name="s5" value="3">
  <label for="javascript">Sesuai</label>&nbsp;&nbsp;
<input type="radio" id="s5" name="s5" value="4">
  <label for="javascript">Sangat Sesuai</label>

<p>6. Pendapat saudara tentang kompetensi/kemampuan petugas dalam memberikan pelayanan?</p>
  <input type="radio" id="s6" name="s6" value="1">
  <label for="html">Sangat Tidak Baik</label>&nbsp;&nbsp;
  <input type="radio" id="s6" name="s6" value="2">
  <label for="css">Tidak Baik</label>&nbsp;&nbsp;
  <input type="radio" id="s6" name="s6" value="3">
  <label for="javascript">Baik</label>&nbsp;&nbsp;
<input type="radio" id="s6" name="s6" value="4">
  <label for="javascript">Sangat Baik</label>

<p>7. Pendapat saudara  tentang kesopanan dan keramah-tamahan petugas dalam memberikan pelayanan ?</p>
  <input type="radio" id="s7" name="s7" value="1">
  <label for="html">Sangat Tidak Sopan</label>&nbsp;&nbsp;
  <input type="radio" id="s7" name="s7" value="2">
  <label for="css">Tidak Sopan</label>&nbsp;&nbsp;
  <input type="radio" id="s7" name="s7" value="3">
  <label for="javascript">Sopan</label>&nbsp;&nbsp;
<input type="radio" id="s7" name="s7" value="4">
  <label for="javascript">Sangat Sopan</label>

<p>8. Apakah pengaduan dan masukan yang diberikan/diajukan ke petugas pengaduan mendapat respon atau ditindaklanjuti petugas ?</p>
  <input type="radio" id="s8" name="s8" value="1">
  <label for="html">Tidak Direspon</label>&nbsp;&nbsp;
  <input type="radio" id="s8" name="s8" value="2">
  <label for="css">Kurang Direspon</label>&nbsp;&nbsp;
  <input type="radio" id="s8" name="s8" value="3">
  <label for="javascript">Direspon</label>&nbsp;&nbsp;
<input type="radio" id="s8" name="s8" value="4">
  <label for="javascript">Sangat Direspon</label>

<p>9. Pendapat saudara tentang sarana dan prasarana pelayanan DPUPR Kota Pekalongan?</p>
  <input type="radio" id="s9" name="s9" value="1">
  <label for="html">Tidak Baik</label>&nbsp;&nbsp;
  <input type="radio" id="s9" name="s9" value="2">
  <label for="css">Kurang Baik</label>&nbsp;&nbsp;
  <input type="radio" id="s9" name="s9" value="3">
  <label for="javascript">Baik</label>&nbsp;&nbsp;
<input type="radio" id="s9" name="s9" value="4">
  <label for="javascript">Sangat Baik</label>
<p>10. Berikan Testimoni, kritik dan saran Untuk kami dalam meningkatkan pelayanan di DPUPR Kota Pekalongan?</p>
<textarea class="form-control" name="testi" ></textarea>


                                
                               
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" >Simpan</button>
                                <button type="button" class="btn btn-secondary" onclick="CloseModal2()">Close</button>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</form>
            <script>
            function OpenModal2(jenis) {
                let element = document.getElementById('overlay2');
                
               
                document.getElementById('head').value  = jenis    
                element.style.display = 'block'
            }
            function CloseModal2() {
                let element = document.getElementById('overlay2')
                element.style.display = 'none'
            }
            function survey() {
                var s2 = document.getElementById('s1').value;
                alert(s2);
            }
            </script>