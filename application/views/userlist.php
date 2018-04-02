<?php $this->load->view('head'); ?>
    <?php $this->load->view('header'); ?>
   
    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Users</p></div>
    <div class="col-md-12 all-user-panel">
            <div class="container">
                <h2>All Users</h2>
            </div>
	<?php if($this->session->flashdata('msg')): ?>
 <p style="color:red;"><?php echo $this->session->flashdata('msg'); ?></p>
<?php endif; ?>		
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
							<tr onclick='user(<?php echo $get->id; ?>)'>
								  <td><?php echo $get->username;?></td>
								  <td><?php echo $get->firstname;?></td>
								  <td><?php echo $get->lastname;?></td>
								  <td><?php echo $get->phonenumber;?></td>
								  <td><?php echo $get->email;?></td>
								  <td><?php if($get->type==1){echo "Director";} if($get->type==2){echo "HOD";}if($get->type==3){echo "Secretary";}?></td>
								  <td><?php echo $get->status;?></td>
							</tr>								  
							<?php } ?>
                       </tbody>
                   </table>

               </div>
        </div>
    </div>
   
     <br /><br /><br /> 
	 	<script>
	function user(id) {
   // console.log("id ====" ,id);
    var url = "<?php echo base_url(); ?>User/signUp/"+id;
    window.location.assign(url);
}
</script>
	 
    <?php $this->load->view('footer'); ?>  