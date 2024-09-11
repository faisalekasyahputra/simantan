<div class="left main-sidebar">
	
		<div class="sidebar-inner leftscroll">

			<div id="sidebar-menu">
        
			<ul>

					<li class="submenu">
            
						<a  href="<?=base_url('Admin/dashboard')?>"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                    </li>
          <?php 
          
          $user_name = $this->session->userdata('user_id');
		     
          if ($user_name != null) {
				$user_id = $user_name['id'];
				$menu = $this->Buka_peta->multi($user_id) ;
			if ($menu != null) {
				foreach($menu as $m) {
              ?>
					<li class="submenu">
                        <a href="<?=base_url($m->link)?>"><i class="<?=$m->icon?>"></i><span> <?=$m->menu?> </span> </a>
          </li>
					<?php 
				}
			}else {
			redirect('Admin'); }
          }else {
			  redirect('Admin');
          }?>
					
					
            </ul>

            <div class="clearfix"></div>

			</div>
        
			<div class="clearfix"></div>

		</div>

	</div>