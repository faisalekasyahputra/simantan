<div class="headerbar">

		<!-- LOGO -->
        <div class="headerbar-left">
			<a href="index.html" class="logo"><img alt="Logo" class="me-3" src="<?=base_url('assets/images/logo-icon-fix.png')?>"/> <span>Admin</span></a>
        </div>

        <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
						
						<li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none"  href="#" role="button" aria-haspopup="false" aria-expanded="false" data-bs-toggle="modal" data-bs-target="#modalku">
                                <i class="fa fa-fw fa-question-circle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small>Help and Support</small></h5>
                                </div>

                                <!-- item-->
                                <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Do you want custom development to integrate this theme?</b>
                                        <span>Contact Us</span>
                                    </p>
                                </a>

                                <!-- item-->
                                <a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Do you want PHP version of the theme that save dozens of hours of work?</b>
                                        <span>Try Pike Admin PRO</span>
                                    </p>
                                </a>                               

                                <!-- All-->
                               

                            </div>
                        </li>
						
                        <li class="list-inline-item dropdown notif">
                           
                         
                            <?php $krk1 = $this->Buka_peta->fetch_record('tb_krk','0','dibuka');?>
                            
                           <?php if ($krk1 != null) {?>
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span>
                            </a>
                             <?php   $k = 0;
                                foreach ($krk1 as $kr) {
                                    $k++;
                                }
                            }else {$k=0;}
                                
                                ?>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right"><?=(int)$k?></span>Permohonan KRK Baru</small></h5>
                                </div>

                                <!-- item-->
                                <?php $krk = $this->Buka_peta->fetch_record('tb_krk','0','dibuka');
                                if ($krk != null) {
                                    foreach ($krk as $k) {
                                    ?>
                               
                                <a href="<?=base_url('PermohonanKRK/detail_permohonan2/'.$k->id)?>" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b><?=$k->nama?></b>
                                        <span>Permohonan KRK </span>
                                        <small class="text-muted"><?=date('d-m-Y',strtotime($k->tanggal))?></small>
                                    </p>
                                </a>
                                    <?php } 
                                    }?>
                                <!-- item-->
                                

                                <!-- item-->
                                

                                <!-- All-->
                                <a href="<?=base_url('PermohonanKRK')?>" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>
                       
						<li class="list-inline-item dropdown notif">
                        <?php $adu = $this->Buka_peta->fetch_record('tb_pengaduan','0','dibuka');?>
                            
                            <?php if ($adu != null) {?>
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
                            </a>
                            <?php  $k=0;
                            foreach ($adu as $kr) {
                                    $k++;
                                }
                             } 
                             
                             ?>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
                            
                                    <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right"><?=(int)$k?></span>Pengaduan</small></h5>
                                    </div>
								
                                <!-- item-->
                                <?php if ($adu != null) {
                                    foreach ($adu as $kr) { ?>
                                <a href="<?=base_url('Pengaduan/form_ubah/'.$kr->id)?>" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/img1.jpg" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b><?=$kr->nama?></b>
                                        <span><?=$kr->ket?></span>
                                        <small class="text-muted"><?=date('d-m-Y',strtotime($kr->tanggal))?></small>
                                    </p>
                                </a>
                                    <?php }
                                }?>
                                <!-- item-->
                               

                                <!-- All-->
                                <a href="<?=base_url('Pengaduan')?>" class="dropdown-item notify-item notify-all">
                                    View All Allerts
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?=base_url('assets/img/logo-krk.png')?>" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="pro-profile.html" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="<?=base_url('Admin/logout')?>" class="dropdown-item notify-item">
                                    <i class="fa fa-power-off"></i> <span>Logout</span>
                                </a>
								
								<!-- item-->
                                
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
								<i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>

        </nav>

	</div>