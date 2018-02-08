<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Signup Area</title>
    <link href="<?php echo base_url(); ?>img/galway_logo.png" rel="shortcut icon" type="image/x-icon" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" />

    
</head>
<body class="log_body">
<div >
   <div class='login-section'>
	<h1>Secretary Application</h1>
	 
    <div class="panel">
        <div class="body-tag">
            <h4>Sign Up </h4>
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
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?> 
					  
                    </div>
                    <?php
                  }  
                  ?>
			   <form role="form" method="post" action="<?php echo base_url('User/register_user'); ?>">
					<div class="form-group">
						 <div class="input-group">
							 <div class="input-addon"><span class="fa fa-user"></span></div>
							 <div class="input-feild"><input type="text" placeholder="User Name" id="username" name="username" tabindex="1" required  /></div> 
						 </div>
					 </div>
					 <div class="form-group">
						 <div class="input-group">
							 <div class="input-addon"><span class="fa fa-user"></span></div>
							 <div class="input-feild"><input type="text" placeholder="First Name" id="firstname" name="firstname" tabindex="2" required /></div>
						 </div>
					 </div>	
					  <div class="form-group">
						 <div class="input-group">
							 <div class="input-addon"><span class="fa fa-user"></span></div>
							 <div class="input-feild"><input type="text" placeholder="Last Name" id="lastname" name="lastname" tabindex="3" required /></div>
						 </div>
					 </div>
					  <div class="form-group">
						 <div class="input-group">
							 <div class="input-addon"><span class="fa fa-envelope"></span></div>
							 <div class="input-feild"><input type="text" placeholder="Email-id" id="email" name="email" tabindex="4" required  /></div>
						 </div>
					 </div>
					<div class="form-group">
						 <div class="input-group">
							 <div class="input-addon"><span class="fa fa-lock"></span></div>
							 <div class="input-feild"><input type="password" placeholder="Password" id="password" name="password" tabindex="5" required /></div>
						 </div>
					 </div>
					  <div class="form-group">
						 <div class="input-group">
							 <div class="input-addon"><span class="fa fa-phone"></span></div>
							 <div class="input-feild"><input type="text" placeholder="Phone Number" id="phonenumber" name="phonenumber" tabindex="6" required /></div>
						 </div>
					 </div>
					 <div class="form-group">
						 <div class="input-group">
						<select name="type">
						 <option value="1">Director</option>
						 <option value="2">HOD</option>
						 <option value="3">Secretary</option>
						 </select>
						 </div>
					 </div>
					<input type="submit" id="btn" value="sign up" class="btn-log " tabindex="3" /><br />
               </form>  
            <span id="eror" style=" font-size: 10px;color: red;font-weight: 700;"></span>
            <br />
            <span class="fa fa-spinner glyphicon-refresh glyphicon-refresh-animate"></span>

		</div>

    </div>
     
</div>

  
</body>
</html>