     <!-- main theam chenges end -->

     <!-- header start -->
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
													$firstname = $this->session->firstname; 
													$lastname   = $this->session->lastname;  ?>
                                                        <p class="person-name">Hello !<br />  <?php if($firstname){ echo $firstname; } ?> <?php  if($lastname){ echo $lastname; } ?></p>
                                                        <img src="<?php echo base_url(); ?>img/person.png" alt="person image" id="per-img" class="log-popup"/>
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
                                    <div  id="accordion">
									  <ul>
									     <li>
                                            <div>MENU</div>
                                            <ul> 
                                                    <li><a href="<?php echo site_url('indexmeeting'); ?>">Index Meeting in Progress</a></li>
                                                    <li><a href="<?php echo site_url('Daillynote'); ?>">Daily Notes</a></li>
                                                    <li><a href="<?php echo site_url('Quickwork'); ?>">Quick Work</a></li>
                                                    <li><a href="<?php echo site_url('Appoinment'); ?>">Appointments</a></li>
                                                    <li><a href="<?php echo site_url('Projectdelegation'); ?>">Project Delegation</a></li>
													<li>
														<div>Periodic tasks</div>
														<ul>
															<li><a href="">Yearly periodic task (Quarterly)</a></li>
															<li><a href="<?php echo site_url('yearlyperiodic') ?>">Yearly periodic status sheet</a></li>
															<li><a href="<?php echo site_url('Monthlyperiodic') ?>">Monthly periodic Status Sheet</a></li>
															<li><a href="">Everyday periodic Task</a></li>
															<li><a href="">Everyday Periodic Status Sheet</a></li>
															<li><a href="<?php echo site_url('WeeklyPeriodic') ?>">Weekly periodic Task</a></li>
															<li><a href="">Weekly periodic status sheet</a></li> 
														</ul>
													</li>
													<li><a href="">Reminder Sheet</a></li>
													<li><a href="<?php echo base_url('user/userlist'); ?>">Users</a></li>
                                            
                                            </ul>
                                       </li>
                                     </ul>
                                    </div>
                     </aside>


        </div><!-- left deshbrad end -->
        <div id="right"><!-- right deshbrad start -->
           