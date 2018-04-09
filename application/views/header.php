<header id="sec-header">
                                        <div id="toggle-btn-box">
                                                <span id="bar" class="fa  fa-navicon"  >
                                                   <!-- <div class="one"></div>
                                                    <div class="two"></div>
                                                    <div class="three"></div>-->

                                                </span>
                                            <span id="close">&times </span>
                                        </div>
										<a href="<?php echo base_url(); ?>">
											<img src="<?php echo base_url(); ?>img/galway_logo.png" alt="logo" id="img"/>
										</a>
                                        <h1><span>S</span>ecretary <span>Application</span></h1>
                                        <div class="rigth-log-box">

                                            <div class="inner">
											<?php 
<<<<<<< HEAD
													 $firstname = $this->session->firstname; 
													 $lastname   = $this->session->lastname;  ?>
                                                        <p class="person-name">WelCome !<br />  <?php  if($firstname){ echo $firstname; }  ?> <?php if($lastname){ echo $lastname; } ?></p>
                                                        <img src="<?php echo base_url(); ?>img/person.jpg" alt="person image" id="per-img" class="log-popup"/>
=======
													$firstname = $this->session->firstname; 
													$lastname   = $this->session->lastname;  ?>
                                                        <p class="person-name">Hello !<br />  <?php if($firstname){ echo $firstname; } ?> <?php if($lastname){ echo $lastname; } ?></p>
                                                        <img src="<?php echo base_url(); ?>img/person.png" alt="person image" id="per-img" class="log-popup"/>
>>>>>>> 77a204acbe730649846bd0cac83210a314027af0
                                            </div>

                                        </div>
                                        <div class="log-up-body">
                                           <ul>
                                               <li><a href="#"><span class="fa fa-user"></span>&nbsp;&nbsp;Profile</a></li>
                                                <li><a href="#"><span class="fa fa fa-cog"></span>&nbsp;&nbsp;Setting</a></li>
                                                <li><a href="<?php echo base_url('user/user_logout'); ?>"><span class="fa fa-sign-out"></span>&nbsp;&nbsp;LogOut</a></li>
                                           </ul>
                                        </div>
                                    </header>
    <div class="clear"></div>
            <!-- header ends -->
 
   
    <!--  changes-->
    <div class="main-area-dashboard"><!-- Main Dashbrad start -->

        <div id="left"><!-- left deshbrad start --> 
                    <aside  id="aside">
                                   <div class="profile">
                                     <div class="col-md-3">
                                          <img src="http://192.168.10.32/Secretary-App-Glaze/img/person.jpg" alt="person image" id="per-img" class="log-popup"/>
                                     </div>
                                     <div class="col-md-9">
                                          <h2><span class="name">Surendar Singh</span></h2>
                                          <p class="profile-name">Secratory</p>
                                     </div>
                                     <div class="clear"></div>
                                     <p class="socialbar">
                                                   <a href="#"><span class="fa fa-facebook-square"></span></a>
                                                   <a href="#"><span class="fa fa-google-plus-square"></span></a>
                                                   <a href="#"><span class="fa fa-twitter-square"></span></a>
                                                   <a href="#"><span class="	fa fa-linkedin-square"></span></a>
                                     </p>
                                   </div>
                                    <!--  profile section end-->
                                    <div  id="accordion">
									                  <ul>
									                       <li>
                                            
                                            <ul>
                                              <li>
                                                <a href=""
                                                  <?php echo site_url('indexmeeting'); ?>"><span class="fa fa-dashboard"></span> Dashboard
                                                </a>
                                              </li>
                                                    <li>
                                                      <a href="<?php echo site_url('indexmeeting'); ?>"><span class="fa fa-handshake-o"></span> Index Meeting in Progress</a></li>
                                                    <li><a href="<?php echo site_url('Daillynote'); ?>"><span class="fa fa-file-text"></span> Daily Notes</a></li>
                                                    <li><a href="<?php echo site_url('Quickwork'); ?>"><span class="fa fa-edit"></span> Quick Work</a></li>
                                                    <li><a href="<?php echo site_url('Appoinment'); ?>"><span class="fa fa-coffee"></span> Appointments</a></li>
                                                    <li><a href="<?php echo site_url('Projectdelegation'); ?>"><span class="fa fa-copy"></span> Project Delegation</a></li>
													                          <li>
                                                     
														                            <div class="has-menu-div">
                                                          <span class="fa  fa-puzzle-piece"></span> Periodic tasks <span class="fa fa-angle-down checge"></span>
                                                      </div>
														                                <ul class="has-menu"> 
															                                <li><a href="<?php echo site_url('yearlyperiodic') ?>">Yearly periodic Task</a></li>
															                                <li><a href="<?php echo site_url('Monthlyperiodic') ?>">Monthly periodic Task</a></li>
															                                <li><a href="">Everyday periodic Task</a></li> 
															                                <li><a href="<?php echo site_url('WeeklyPeriodic') ?>">Weekly periodic Task</a></li> 
														                                </ul>
													                          </li>
													                          <li><a href="<?php echo site_url('Reminder') ?>"><span class="fa fa-history"></span> Reminder Sheet</a></li>
													                          <li><a href="<?php echo site_url('user/userlist'); ?>"><span class="fa  fa-users"></span> Users</a></li>
                                            
                                                  </ul>
                                                 </li>
                                           </ul>
                                         </div>
                     </aside>


        </div><!-- left deshbrad end -->
        <div id="right"><!-- right deshbrad start -->
           