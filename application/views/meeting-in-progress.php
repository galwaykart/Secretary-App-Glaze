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
                <h2 class="heading">All Meeting</h2>
            </div>
        <div class="Mettings-View-index-panel">
             
               <div class="table-res">
                   <table id="mettings-table">
                       <thead>
                           <tr>
							   <th>Sno</th><th>Ajenda</th>
							   <th>No of Meeting</th>
							   <th>Previous Meetings Date</th>
							   <th>Next Meeting Date</th>
							   <th>Participants</th>
							   <th>Meeting Called By (Name & Department)</th>
							   <th>Remarks</th>
							   <th>Active/Inactive</th>
						   </tr>
                       </thead>
                       <tbody>
					   <?php  $i=1;
					     foreach($meeting as $arr){?>
                         <tr onclick='newDoc(<?php echo $arr->agenda_id; ?>)'>
							 <td><?php echo $i++;?></td>
							 <td><?php echo $arr->agenda_name;?></td>
							 <td><?php echo $arr->counter;?></td>
							 <td></td>
							 <td></td>
							 <td></td>
							 <td></td>
							 <td></td>
							 <td></td>
                         </tr>
					   <?php } ?>
                       </tbody>
                   </table>

               </div>
            <div class="col-md-12">
               <a href="<?php echo site_url('indexmeeting/metting_info/'); ?>" class="btn" id="addmeeingsbtn"><span class="fa fa-plus" ></span>&nbsp;Add</a>
            </div>
			<div style="height:80px;"></div>
        </div>
    </div> 
	<?php echo $links; ?>
     <br /><br /><br />
    <div style="height:50px;"></div>
  		<?php $this->load->view('footer'); ?>
		
		
		 <script>
      
function newDoc(id) {
   // console.log("id ====" ,id);
    var url = "<?php echo base_url(); ?>/indexmeeting/mettings_status/"+id;
    window.location.assign(url);
}
</script>
</body>
</html>
