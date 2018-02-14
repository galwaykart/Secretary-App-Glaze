<!doctype html>
<html>
<?php $this->load->view('head'); ?>
<body class="body style-6"><!-- body tag start -->
   <!-- globle header for comman start --> 
    <?php $this->load->view('header'); ?>
   
    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Users</p></div>
    <div class="col-md-12 all-user-panel">
            <div class="container">
                <h2>All Users</h2>
            </div>
        <div class="user-content-panel-view">
			  <div class="left-button-fixed-panel col-md-12 text-right">
					<a href="<?php echo site_url('user/signup') ?>"><button class="add btn" title="Add New User"><span class="fa fa-plus" ></span>&nbsp;Add</button></a>
			   </div>
               <div class="table-res">
                   <table>
                       <thead>
                           <tr><th>User Name</th><th>First Name</th><th>Last Name</th><th>Mobile No</th><th>Email Id</th><th>User Type</th><th>Status</th></tr>
                       </thead>
                       <tbody>
									<!--show data from database-->
					        <?php foreach($list as $get){?>
							<tr>
								  <td><?php echo $get->username;?></td>
								  <td><?php echo $get->firstname;?></td>
								  <td><?php echo $get->lastname;?></td>
								  <td><?php echo $get->phonenumber;?></td>
								  <td><?php echo $get->email;?></td>
								  <td><?php echo $get->type;?></td>
								  <td><?php echo $get->status;?></td>
							</tr>								  
							<?php } ?>
                       </tbody>
                   </table>

               </div>
        </div>
    </div>
   
     <br /><br /><br />
    <div style="height:50px;"></div>
    <?php $this->load->view('footer'); ?>
</body>
</html>
