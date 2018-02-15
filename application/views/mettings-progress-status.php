<!doctype html>
<html>
  <?php $this->load->view('head'); ?>
<body class="body style-6"><!-- body tag start -->
   <!-- globle header for comman start --> 
  <?php $this->load->view('header'); ?> 
    <!-- user View design page start -->
	
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Users</p></div>
    <div class="col-md-12 all-mettings">
            <div class="container">
                <h2 class="heading">Metting Status</h2>
            </div>
        <div class="Mettings-View-index-panel">
             
               <div class="table-res">
                   <table id="mettings-table">
                       <thead>
                           <tr><th>SR No</th><th>Ajenda of Metting</th><th>Participants</th><th>Previous Meetings Date</th><th>Next Metting Date</th></tr>
                       </thead>
                       <tbody>
					   <?php foreach($list as $get){?>
                        <tr>
							<td><?php echo $get->name;?></td>
							<td><?php echo $get->name;?></td>
							<td><?php echo $get->name;?></td>
                            <td><a href="<?php echo site_url('indexmeeting/metting_info') ?>"><?php if($get->date_of_meeting) {echo $get->date_of_meeting;} else{echo "";}?></a></td>
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
