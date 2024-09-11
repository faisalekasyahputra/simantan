
        <script src="<?=base_url('assets/editor/tinymce.min.js')?>"></script>        
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card form-pendaftaran">
                            <div class="card-body">
                           
                               
                                  
                                <div class="table-responsive">
                                    <form action="<?=base_url('Revisi_krk/tambah/'.$data[0]->id)?>" method="post">
                                    <table class="table user-table no-wrap">
                                        <thead align="center" style="padding:20px">
                                            <tr>
                                             
                                                <td>
                                                <table border="1" width="auto" >
                                                    <tr  height="35px" style="background: #cda5a5;">
                                                        <td style="padding: 0px;margin:0px;color:white">
                                                        &nbsp;&nbsp  <b>Poin Revisi</b>
                                                           
                                                        </td>
                                                        <td style="padding: 0px;margin:0px;color:white">
                                                        
                                                           
                                                        </td>
                                                        <td style="padding: 0px;margin:0px"> 
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr height="10px" ></tr>
                                                    
                                                    <tr  style="padding-top: 0px;padding-bottom:0px">
                                                        <td width="10px" valign="top"  style="padding-top: 0px;padding-bottom:0px" >
                                                            <b>Unduh Berkas 1</b>
                                                        
                                                        </td>
                                                        <td width="1px" valign="top"  style="padding-top: 0px;padding-bottom:0px" >
                                                           :
                                                        
                                                        </td>
                                                        <td  align="left" valign="top"   style="padding-top: 0px;padding-bottom:0px">
                                                        <a href="<?=base_url('assets/berkas/'.$data[0]->berkas1)?>" download>
                                                        Unduh File</a>
                                                        </td>
                                                    </tr>
                                                    <tr  style="padding-top: 0px;padding-bottom:0px">
                                                        <td width="10px" valign="top"  style="padding-top: 0px;padding-bottom:0px" >
                                                        <b>Unduh Berkas 2</b>
                                                        
                                                        </td>
                                                        <td width="1px" valign="top"  style="padding-top: 0px;padding-bottom:0px" >
                                                           :
                                                        
                                                        </td>
                                                        <td  align="left" valign="top"   style="padding-top: 0px;padding-bottom:0px">
                                                        <a href="<?=base_url('assets/berkas/'.$data[0]->berkas2)?>" download>
                                                        Unduh File</a>
                                                        </td>
                                                    </tr>
                                                    <tr  style="padding-top: 0px;padding-bottom:0px">
                                                        <td width="10px" valign="top"  style="padding-top: 0px;padding-bottom:0px" >
                                                        <b>Unduh Berkas 3</b>
                                                        
                                                        </td>
                                                        <td width="1px" valign="top"  style="padding-top: 0px;padding-bottom:0px" >
                                                           :
                                                        
                                                        </td>
                                                        <td  align="left" valign="top"   style="padding-top: 0px;padding-bottom:0px">
                                                        <a href="<?=base_url('assets/berkas/'.$data[0]->berkas3)?>" download>
                                                        Unduh File</a>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr height="10px" style="padding-top: 0px;padding-bottom:0px">
                                                        <td width="10px" valign="top"  style="padding-top: 0px;padding-bottom:0px" >
                                                        <b>Unduh Berkas 4</b>
                                                        
                                                        </td>
                                                        <td width="1px" valign="top"  style="padding-top: 0px;padding-bottom:0px" >
                                                           :
                                                        
                                                        </td>
                                                        <td  align="left" valign="top"   style="padding-top: 0px;padding-bottom:0px">
                                                        <a href="<?=base_url('assets/berkas/'.$data[0]->berkas4)?>" download>
                                                        Unduh File</a>
                                                        </td>
                                                    </tr>
                                                    
<script>
tinymce.init({
      selector: '#custom',
      height: 400,
      forced_root_block : "",
      force_br_newlines : true,
      force_p_newlines : false,
      plugins: [
        'autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
        'insertdatetime media nonbreaking save table contextmenu directionality',
        'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
      ],
      toolbar1: 'undo redo | insert | styleselect table | bold italic | hr alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media ',
      toolbar2: 'print preview | forecolor backcolor emoticons | fontselect | fontsizeselect | codesample code fullscreen',
      templates: [
        { title: 'Test template 1', content: '' },
        { title: 'Test template 2', content: '' }
      ],
      content_css: [
        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
        '//www.tinymce.com/css/codepen.min.css'
      ],
    });

 </script>
                                                                                                            
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

