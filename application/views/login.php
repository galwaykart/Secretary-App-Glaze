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
	<p><?php if(isset($title)) { echo $title; } ?></p>
    <div class="panel2">
        <div class="body-tag">
		
           <h2>Welcome !</h2>
			<p style="color: white;text-align: left;margin-left: 13px;font-family: sans-serif;font-size: 13px;">Login to continue</p>
			   <form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
					<div class="form-group">
						 <div class="input-group">
							 <div class="input-addon"><span class="fa fa-user"></span></div>
							 <div class="input-feild"><input type="text" placeholder="User Name" id="username" name="username" value="" tabindex="1" required /></div> 
						 </div>
					 </div>
					<div class="form-group">
					<div class="form-group">
						 <div class="input-group">
							 <div class="input-addon"><span class="fa fa-unlock-alt"></span></div>
							 <div class="input-feild"><input type="password" placeholder="Password" id="password" name="password" value="" tabindex="2" required /></div>
						 </div>
					 </div>
					

					<button id="btn"  " tabindex="3" >Sign In &nbsp;&nbsp;<span class="fa fa-long-arrow-right"></span></button><br />
               </form>  
            <span id="eror" style=" font-size: 10px;color: red;font-weight: 700;"></span>
            <br />
          

		</div>
		<?php  
               $success_msg = $this->session->flashdata('success_msg');
               $error_msg   = $this->session->flashdata('error_msg');
              //  $error_msg   = $this->session->flashdata('error_msg');

                  if($success_msg){
                    ?>
                    <div class="alert alert-success" class="text-align:left;color:white;">
                    <p class="log-eror" style="">  <?php echo $success_msg; ?></p>
                    </div>
                  <?php
                  }  
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                    <p class="log-ero2">  <?php echo $error_msg; ?></p> 
					  
                    </div>
                    <?php
                  }  
                  ?>
    </div>
     
</div>
<script>


$('#btn').on('click',function(){$('.log-ero2 , .log-eror').css('display','block');});
</script>
  
</body>
</html>