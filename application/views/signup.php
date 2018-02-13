<!doctype html>
<html>

<?php $this->load->view('head'); ?>

<style>
.form_error{color:red; font-size:10px;}
</style>


<body class="body style-6"><!-- body tag start -->
   <!-- globle header for comman start --> 
   <?php $this->load->view('header'); ?>
 
    <!-- registration design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Registration</p></div>
    <div class="registration">
            <div class="container-3"><br />
              <div class="empty-box"></div>
                <h2>Registration form</h2>
				
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
				  <form role="form" method="post" action="<?php echo base_url('User/register_user'); ?>">
					 <div class="col-md-12 top-feaild">
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-check-square-o"></span></div> 
												    <div class="form-control"><input type="text" placeholder="User Name" id="username" name="username" tabindex="1"/></div> 
													 <?php echo form_error('username', '<span class="form_error">', '</span>'); ?></span>
												</div>
											</div>
					  </div><!-- col-md12 -end -->
					<div class="col-md-12">
								<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-user" ></span></div> 
													<div class="form-control"><input type="text" placeholder="First Name" id="firstname" name="firstname" tabindex="2" value="<?php echo set_value('firstname'); ?>"/></div>
							                        <?php echo form_error('firstname', '<span class="form_error">', '</span>'); ?></span>
												</div>
											</div>
							   </div>
								   <div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa-user" ></span></div> 
													<div class="form-control"><input type="text" placeholder="Last Name" id="lastname" name="lastname" tabindex="3" value="<?php echo set_value('lastname'); ?>" /></div>
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
													<div class="form-control"><input type="password" placeholder="Enter Password" id="password" name="password" tabindex="5" value="<?php echo set_value('password'); ?>" /></div>
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
													<div class="form-control"><input type="text" placeholder="Phone Number" id="phonenumber" name="phonenumber" tabindex="6" value="<?php echo set_value('phonenumber'); ?>"  /></div>
							                        <?php echo form_error('phonenumber', '<span class="form_error">', '</span>'); ?></span>
												</div>
											</div>
							   </div>
								   <div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa  fa fa-envelope-o" ></span></div> 
													<div class="form-control"><input type="text" placeholder="Enter Email Id" id="email" name="email" tabindex="4" value="<?php echo set_value('email'); ?>"  /></div>
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
														<select name="type"  value="<?php echo set_value('type'); ?>">
															<option value=""hidden>Select User Type</option> 
															 <option value="1">Director</option>
															 <option value="2">HOD</option>
															 <option value="3">Secretary</option>
														 </select>
														 <?php echo form_error('type', '<span class="form_error">', '</span>'); ?></span>
													</div>
												</div>
											</div>
							   </div>
								   <div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<div class="input-addon"><span class="fa fa fa-child"></span></div>
													<div class="form-control"><p>Male</p>&nbsp;<input type="radio" name="gender" /><p>FeMale</p>&nbsp;<input type="radio" name="gender" /></div>
												</div>
											</div>
							   </div>
					  </div><!-- col-md12 -end -->
					<div class="col-md-12 text-right">
						<p class="active-para">Active/Deactive</p>
							<label class="switch">
							  <input type="checkbox">
							  <span class="slider round"></span>
							</label>
					</div>
					<div class="clear"></div>
					<div class="col-md-12">
						<div class="col-md-6 text-right"><input type="submit" value="Delete" class="btn mybtn del" /></div>
						<div class="col-md-6 text-center">
							<input type="submit" value="Registration" class="btn mybtn" /> 
							<input type="reset" value="Reset" class="btn reset mybtn" />
						</div>
					</div>
				</form> 
            </div><!-- container 3 end -->

    </div> 

     <!-- registration design page end --> 
     <br /><br /><br />
    <div style="height:50px;"></div>
    <footer id="footer">
        <p>&copy; Copyright By Glaze India Pvt. Ltd.</p>
    </footer>


     <!-- globle header for comman end --> 
    <script>
        $(document).ready(function () {
            $('#aside').css('width', '20%');
            $('#sec-header #toggle-btn-box span#bar').click(function () {
                $('#sec-header #toggle-btn-box span#bar').hide();
                $('#sec-header #toggle-btn-box span#close').show();
                if ($(window).width() < 769) {
                    $('#aside').css('width', '70%').show().addClass('show');
                }
                else { $('#aside').css('width', '20%').show().addClass('show'); }
            });

            $('#sec-header #toggle-btn-box span#close').click(function () {
                $('#sec-header #toggle-btn-box span#bar ').show();
                $('#sec-header #toggle-btn-box span#close').hide();

                $('#aside').css('width', '0%');


            });

        });

    </script>
     <script type="text/javascript" src="js/caleandar.js"></script>
    <script type="text/javascript" src="js/demo.js"></script>
</body>
</html>
