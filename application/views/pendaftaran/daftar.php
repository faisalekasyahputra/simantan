
                    <!-- Column -->
                    
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent blogss -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <!-- Column -->
                    <div class="col-lg-4 col-md-6" data-toggle="modal" href="#myModal">
                        <div class="card ">
                            <div class="card-img-krk">
                                <img class="card-img-top img-responsive" src="<?=base_url('assets/images/siteplan-vector.png')?>" alt="Card">
                            </div>
                            <div class="card-body">
                                
                            <button type="button" onclick="OpenModal2('siteplan')" class="buttonku-sendiri">Site Plan</button>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-4 col-md-6" data-toggle="modal" href="#myModal">
                        <div class="card">
                            <div class="card-img-krk">
                                <img class="card-img-top img-responsive" src="<?=base_url('assets/images/krk-vector.png')?>" alt="Card">
                            </div>
                            <div class="card-body">
                                
                            <button type="button" onclick="OpenModal2('krk')" class="buttonku-sendiri">KRK</button>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-4 col-md-6" data-toggle="modal" href="#myModal">
                        <div class="card">
                            <div class="card-img-krk">
                                <img class="card-img-top img-responsive" src="<?=base_url('assets/images/dok kajian-vector.png')?>" alt="Card">
                            </div>
                            <div class="card-body">
                                
                            <button type="button" onclick="OpenModal3('dokumenkajian')" class="buttonku-sendiri">Dokumen Kajian</button>
                            </div>
                        </div>
                       
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="<?=base_url('assets/images/img21.jpg')?>" alt="Card">
                            <div class="card-body">
                               
                            <button type="button" onclick="OpenModal2()" class="btn btn-success">KRK</button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="<?=base_url('assets/images/img41.jpg')?>" alt="Card">
                            <div class="card-body">
                                
                            <button type="button" onclick="OpenModal()" class="btn btn-success">Kajian Dokumentasi</button>
                            </div>
                        </div>
                    </div> --> -->
                    <!-- modal -->

                    
              </div>
             
              <div class="overlay" id="overlay2">
                <div class="popup" style="width:850px;height:auto">
                    <div class="modal-dialog modal-lg" role="document" style="width:850px;height:auto">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Persyaratan yang harus disiapkan antara lain</h5><br>
                                <input type="hidden" id="head">
                                <button type="button" class="close" onclick="CloseModal2()" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                            <div class="modal-body">
                                <input type="checkbox" id="s1" checked value="">&nbsp;&nbsp;<label> Scan Dokumen KTP Asli</label><br>
                                <input type="checkbox" id="s2" >&nbsp;&nbsp;<label> Scan Dokumen Sertifikat Asli</label><br>
                                
                                <input type="checkbox" id="s3" >&nbsp;&nbsp;<label> Scan Surat Kuasa Asli (Bagi Pengurusan Yang Dikuasakan)</label><br>
                                <input type="checkbox" id="s4" >&nbsp;&nbsp;<label> Surat-Surat Pendukung Lainnya</label><br>
                                
                               
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="krk()">Daftar Sekarang</button>
                                <button type="button" class="btn btn-secondary" onclick="CloseModal2()">Close</button>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overlay" id="overlay3">
                <div class="popup" style="width:850px;height:auto">
                    <div class="modal-dialog modal-lg" role="document" style="width:850px;height:auto">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Persyaratan yang harus disiapkan antara lain</h5><br>
                                <input type="hidden" id="head">
                                <button type="button" class="close" onclick="CloseModal3()" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                            <div class="modal-body">
                                <input type="checkbox" id="s1" checked value="">&nbsp;&nbsp;<label> Scan Dokumen KTP Asli</label><br>
                                <input type="checkbox" id="s5" checked value="">&nbsp;&nbsp;<label> NPWP</label><br>
                                <input type="checkbox" id="s6" checked value="">&nbsp;&nbsp;<label> -	Surat Pernyataan Mandiri dari OSS</label><br>
                                <input type="checkbox" id="s2" >&nbsp;&nbsp;<label> Scan Dokumen Sertifikat Asli</label><br>
                                
                                <input type="checkbox" id="s3" >&nbsp;&nbsp;<label> Scan Surat Kuasa Asli (Bagi Pengurusan Yang Dikuasakan)</label><br>
                                <input type="checkbox" id="s4" >&nbsp;&nbsp;<label> Surat-Surat Pendukung Lainnya</label><br>
                                
                               
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="krk()">Daftar Sekarang</button>
                                <button type="button" class="btn btn-secondary" onclick="CloseModal3()">Close</button>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <script>
            function OpenModal2(jenis) {
                let element = document.getElementById('overlay2');
                
                document.getElementById('s1').checked  = false
                document.getElementById('s2').checked  = false
                document.getElementById('s3').checked  = false
                document.getElementById('s4').checked  = false
               
              
                document.getElementById('head').value  = jenis    
                element.style.display = 'block'
            }
            function OpenModal3(jenis) {
                let element = document.getElementById('overlay3');
                
                document.getElementById('s1').checked  = false
                document.getElementById('s2').checked  = false
                document.getElementById('s3').checked  = false
                document.getElementById('s4').checked  = false
               
              
                document.getElementById('head').value  = jenis    
                element.style.display = 'block'
            }
            function CloseModal2() {
                let element = document.getElementById('overlay2')
                element.style.display = 'none'
            }
            function CloseModal3() {
                let element = document.getElementById('overlay3')
                element.style.display = 'none'
            }
            function krk() {
                var s1 = document.getElementById('s1');
                var s2 = document.getElementById('s2');
                var s3 = document.getElementById('s3');
                var s4 = document.getElementById('s4');
               
                var jenis = document.getElementById('head').value;
                if (s1.checked == true || s2.checked == true || s3.checked || true && s4.checked || true ) {

                    location.href = "<?=base_url('Pendaftaran?jenis=')?>"+jenis;
                }
            }
        </script>
            