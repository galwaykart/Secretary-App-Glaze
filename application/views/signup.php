<?php
/*



*/
?>

<?php $this->load->view('head'); ?>
<style>
.form_error{color:red; font-size:10px;}
</style>

   <?php $this->load->view('header'); ?>

    <!-- registration design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Registration</p></div>
	<div class="clear"></div>
    <div class="registration">
            <div class="container-3">
                <h2>Registration form</h2>
				<!-- Display error or success message-->
				<?php  
               $success_msg = $this->session->flashdata('success_msg');
               $error_msg   = $this->session->flashdata('error_msg');

                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div class="form_error">
                      <?php echo $error_msg; ?> 
					  
                    </div>
                    <?php
                  }  
                  ?>
	<form method="post" action="<?php if($list){echo base_url()."User/register_user/".$list[0]->id;}else{echo base_url()."User/register_user/";} ?>">
					 <div class="col-md-12 top-feaild">
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-check-square-o"></span></div> 
												    <div class="form-control"><input type="text" placeholder="User Name" id="username" name="username" tabindex="1" <?php if($list){ if($list[0]->username){echo "readonly";}}?> value="<?php if($list){echo $list[0]->username;}?>"/></div> 
													 <?php echo form_error('username', '<span class="form_error">', '</span>'); ?></span>
												</div>
											</div>
					 </div><!-- col-md12 -end -->
					<div class="col-md-12">
								<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-user" ></span></div> 
													<div class="form-control"><input type="text" placeholder="First Name" id="firstname" name="firstname" tabindex="2" value="<?php if($list){echo $list[0]->firstname;} else{ echo set_value('firstname'); }?>"/></div>
							                        <?php echo form_error('firstname', '<span class="form_error">', '</span>'); ?></span>
												</div>
											</div>
							   </div>
								   <div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-user" ></span></div> 
													<div class="form-control"><input type="text" placeholder="Last Name" id="lastname" name="lastname" tabindex="3" value="<?php if($list){echo $list[0]->lastname;} else{ echo set_value('lastname');} ?>" /></div>
						                        	<?php echo form_error('lastname', '<span class="form_error">', '</span>'); ?></span>
												</div>
											</div>
							   </div>
					  </div><!-- col-md12 -end -->
						<div class="col-md-12">
								<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-lock" ></span></div> 
													<div class="form-control"><input type="password" placeholder="Enter Password" id="password" name="password" tabindex="5" value="<?php  echo set_value('password'); ?>" /></div>
						                            <?php echo form_error('password', '<span class="form_error">', '</span>'); ?></span>	
												</div>
											</div>
							   </div>
								   <div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-unlock-alt" ></span></div>
													<div class="form-control"><input type="password" placeholder="Confirm Password" name="confirm_password" value=""<?php echo set_value('confirm_password'); ?>"" /></div>
													<?php echo form_error('confirm_password', '<span class="form_error">', '</span>'); ?></span>	
												</div>
											</div>
							   </div>
					  </div><!-- col-md12 -end -->
					 <div class="col-md-12">
								<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-phone" ></span></div> 
													<div class="form-control"><input type="text" placeholder="Phone Number" id="phonenumber" name="phonenumber" tabindex="6" value="<?php if($list){echo $list[0]->phonenumber;} else{ echo set_value('phonenumber');} ?>"  /></div>
							                        <?php echo form_error('phonenumber', '<span class="form_error">', '</span>'); ?></span>
												</div>
											</div>
							    </div>
								   <div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa  fa fa-envelope-o" ></span></div> 
													<div class="form-control"><input type="text" placeholder="Enter Email Id" id="email" name="email" tabindex="4" value="<?php if($list){echo $list[0]->email;} else{ echo set_value('email');} ?>"  /></div>
							                       <?php echo form_error('email', '<span class="form_error">', '</span>'); ?></span>
												</div>
											</div>
							   </div>
					  </div><!-- col-md12 -end -->
					  <div class="col-md-12">
								<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa fa-calendar-check-o" ></span></div>
													<div class="form-control"> 
														<select name="type"  value="<?php  echo set_value('type'); ?>">
															<option value=""hidden>Select User Type</option> 
															 <option value="1" <?php if($list){if($list[0]->type == "1"){ echo "selected"; }} ?>>Director</option>
															 <option value="2" <?php if($list){if($list[0]->type == "2"){ echo "selected"; }} ?>>HOD</option>
															 <option value="3" <?php if($list){if($list[0]->type == "3"){ echo "selected"; }} ?>>Secretary</option>
														 </select>
														 <?php echo form_error('type', '<span class="form_error">', '</span>'); ?></span>
													</div>
												</div>
											</div>
							   </div>
                    <div class="col-md-6 text-right">
                      <p class="active-para">Active/Deactivate</p>
                      <label class="switch">
                        <input type="checkbox"  name="status" value="active" >
                          <span class="slider round"> </span>
                        </label>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-12 sign-up-btn" style="text-align:center;">
                      <a href=""
                        <?php if($list){echo base_url() . "User/delete_id/" . $list[0]->id; }?>" class="btn mybtn del">Delete
                      </a>
                      <input type="submit" value="Registration" class="btn mybtn" />
                      <input type="reset" value="Reset" class="btn reset mybtn" />
                    </div>
                   
                  </div>
               <div class="clear"></div>
	 				  </div>
					  <!-- col-md12 -end -->
      <div class="clear"></div>
					
	</form> 
				 <div class="clear"> </div>
            </div><!-- container 3 end -->
    </div> 

     <!-- registration design page end --> 
     <br /><br /><br /> 
   <?php $this->load->view('footer'); ?>