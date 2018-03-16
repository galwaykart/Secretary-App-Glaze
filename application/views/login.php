<!DOCTYPE html>
<html> 
	<?php 
			
		if ($this->session->username) {   
          //   redirect('/user/dashboard');
 		}
	?>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>css/bootsnip.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>css/notify.css" rel="stylesheet" /> 
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet"/> 
    <!-- script src="<?php echo base_url(); ?>js/jquery-3.2.1.min.js"></script --> 
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	
</head>
<body class="log_body">
<div >
   <div class='login-section'>
	<h1>Secretary Application</h1>
    <div class="panel">
        <div class="body-tag">
		<p><?php if(isset($title)) { echo $title; } ?></p>
            <p>Sign in to start your session</p> 
			<?php  
               $success_msg = $this->session->flashdata('success_msg');
               $error_msg   = $this->session->flashdata('error_msg');
              //  $error_msg   = $this->session->flashdata('error_msg');

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
			   <form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
					<div class="form-group">
						 <div class="input-group">
							 <div class="input-addon"><span class="fa fa-user"></span></div>
							 <div class="input-feild"><input type="text" placeholder="User Name" id="username" name="username" tabindex="1" required /></div> 
						 </div>
					 </div>
					<div class="form-group">
					<div class="form-group">
						 <div class="input-group">
							 <div class="input-addon"><span class="fa fa-unlock-alt"></span></div>
							 <div class="input-feild"><input type="password" placeholder="Password" id="password" name="password" tabindex="2" required /></div>
						 </div>
					 </div>
					<input type="submit" id="btn" value="sign In" class="btn-log " tabindex="3" /><br />
               </form>  
            <span id="eror" style=" font-size: 10px;color: red;font-weight: 700;"></span>
            <br />
            <span class="fa fa-spinner glyphicon-refresh glyphicon-refresh-animate"></span>

		</div>

    </div>
     
</div>

  
</body>
</html>