<?php if($this->session->userdata('invoice')) { ?>
<!-- START OF MENU SIDE -->
<!-- START OF MENU SIDE -->
<?php

	$menu_list	= $this->auth_model->get_menuList('j');	
	$role = $this->session->userdata('role_type');
	$role_id =  $this->session->userdata('role_id');

	$auth_service = $this->auth_model->get_layanan($role_id);

	switch ($role) {
    case "User":
      	
      	unset($menu_list[7]); // Administrasi	
      	unset($menu_list[8]); // Administrasi	


        break;
    case "Admin Unit":
        unset($menu_list[20]); // master entity
        unset($menu_list[22]); // master nota
        unset($menu_list[25]); // master role		
        break;

    case "Admin Entity":
        unset($menu_list[22]); // master nota
        unset($menu_list[25]); // master role		
        break;
        
    default:
 
	}

if($auth_service->INV_ROLE_KAPAL==0) {
	unset($menu_list[1]);	
}

if($auth_service->INV_ROLE_PETIKEMAS==0){
	unset($menu_list[3]);	
}

if($auth_service->INV_ROLE_BARANG==0){
	unset($menu_list[2]);	
}

if($auth_service->INV_ROLE_RUPARUPA==0){
	unset($menu_list[4]);	
}	


?>
				
				<div id="nav-col">
					<section id="col-left" class="col-left-nano">
						<div id="col-left-inner" class="col-left-nano-content">
							<div id="user-left-box" class="clearfix hidden-sm hidden-xs dropdown profile2-dropdown">
								<img alt="" src="<?=CUBE_?>img/profile_picture.png" />
								<div class="user-box">
									<span class="name">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<?=$this->session->userdata('name_phd') ?> 
											<i class="fa fa-angle-down"></i>
										</a>
										<ul class="dropdown-menu">
											<li><a href="<?=ROOT?>customer/my_profile"><i class="fa fa-user"></i>Profile</a></li>
											<!--<li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
											<li><a href="#"><i class="fa fa-envelope-o"></i>Messages</a></li>-->
											<li><a href="<?=ROOT?>main/logout"><i class="fa fa-power-off"></i>Logout</a></li>
										</ul>
									</span>
									<!--<span class="status">
										<i class="fa fa-circle"></i> Online
									</span>-->
								</div>
							</div>
							<div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">	
								<ul class="nav nav-pills nav-stacked">
									<li class="nav-header nav-header-first hidden-sm hidden-xs">
										Navigation
									</li>
							<?php foreach($menu_list as $menu)
							{
								$child = 0;
								if($menu["PARENT"] == 0)
								{
								
									foreach($menu_list as $menu2)
									{
										if($menu2["PARENT"] == $menu["ID_MENU"])
										{
											$child = 1;
										}
									}
									
									if($child == 0)
									{
							?>
							
										<li class="active">
											<a href="<?=ROOT?><?=$menu["LINK"]?>" target="<?=$menu["LINK_TARGET"]?>">
												<i class="fa fa-dashboard"></i>
												<span><?=$menu["MENU"]?></span>
												<!-- <span class="label label-primary label-circle pull-right">28</span> -->
											</a>
										</li>
									
								
								<?php
									}
									else
									{
								?>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-table"></i>
											<span><?=$menu["MENU"]?></span>
											<i class="fa fa-angle-right drop-icon"></i>
										</a>
										<ul class="submenu">
											<?php foreach($menu_list as $menu3)
												{
													if($menu3["PARENT"] == $menu["ID_MENU"])
													{
												?>
													<li>
														<a href="<?=ROOT?><?=$menu3["LINK"]?>" target="<?=$menu["LINK_TARGET"]?>">
															<?=$menu3["MENU"]?>
														</a>
													</li>
												<?php
													}
												}?>
										</ul>
									</li>
									
								
								<?php
									}
								}
							}
							?>
								</ul>
							</div>
						</div>
					</section>
					<div id="nav-col-submenu"></div>
				</div>
<!-- END OF MENU SIDE -->
<!-- END OF MENU SIDE -->				

<?php } else { ?>


<!-- START OF MENU SIDE -->
<!-- START OF MENU SIDE -->
				<?php
					$menu_list	= $this->user_model->get_menuList($this->session->userdata('group_phd'));				
				?>
				
				<div id="nav-col">
					<section id="col-left" class="col-left-nano">
						<div id="col-left-inner" class="col-left-nano-content">
							<div id="user-left-box" class="clearfix hidden-sm hidden-xs dropdown profile2-dropdown">
								<img alt="" src="<?=CUBE_?>img/profile_picture.png" />
								<div class="user-box">
									<span class="name">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<?=$this->session->userdata('name_phd') ?> 
											<i class="fa fa-angle-down"></i>
										</a>
										<ul class="dropdown-menu">
											<li><a href="<?=ROOT?>customer/my_profile"><i class="fa fa-user"></i>Profile</a></li>
											<!--<li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
											<li><a href="#"><i class="fa fa-envelope-o"></i>Messages</a></li>-->
											<li><a href="<?=ROOT?>main/logout"><i class="fa fa-power-off"></i>Logout</a></li>
										</ul>
									</span>
									<!--<span class="status">
										<i class="fa fa-circle"></i> Online
									</span>-->
								</div>
							</div>
							<div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">	
								<ul class="nav nav-pills nav-stacked">
									<li class="nav-header nav-header-first hidden-sm hidden-xs">
										Navigation
									</li>
							<?php foreach($menu_list as $menu)
							{
								$child = 0;
								if($menu["PARENT"] == 0)
								{
								
									foreach($menu_list as $menu2)
									{
										if($menu2["PARENT"] == $menu["ID_MENU"])
										{
											$child = 1;
										}
									}
									
									if($child == 0)
									{
							?>
							
										<li class="active">
											<a href="<?=ROOT?><?=$menu["LINK"]?>" target="<?=$menu["LINK_TARGET"]?>">
												<i class="fa fa-dashboard"></i>
												<span><?=$menu["MENU"]?></span>
												<!-- <span class="label label-primary label-circle pull-right">28</span> -->
											</a>
										</li>
									
								
								<?php
									}
									else
									{
								?>
									<li>
										<a href="#" class="dropdown-toggle">
											<i class="fa fa-table"></i>
											<span><?=$menu["MENU"]?></span>
											<i class="fa fa-angle-right drop-icon"></i>
										</a>
										<ul class="submenu">
											<?php foreach($menu_list as $menu3)
												{
													if($menu3["PARENT"] == $menu["ID_MENU"])
													{
												?>
													<li>
														<a href="<?=ROOT?><?=$menu3["LINK"]?>" target="<?=$menu["LINK_TARGET"]?>">
															<?=$menu3["MENU"]?>
														</a>
													</li>
												<?php
													}
												}?>
										</ul>
									</li>
									
								
								<?php
									}
								}
							}
							?>
								</ul>
							</div>
						</div>
					</section>
					<div id="nav-col-submenu"></div>
				</div>
<!-- END OF MENU SIDE -->
<!-- END OF MENU SIDE -->				

<?php } ?>