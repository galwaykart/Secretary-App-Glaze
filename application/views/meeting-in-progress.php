	<?php $this->load->view('head'); ?>
		<?php $this->load->view('header'); ?>
    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Users</p></div>
    <div class="col-md-12 all-mettings">
            <div class="container">
                <h2 class="heading">All Meeting</h2>
            </div>
        <div class="Mettings-View-index-panel">
             
               <div class="table-res style-4">
                   <table id="mettings-table">
                       <thead>
                           <tr>
							   <th>Sr No</th><th>Ajenda</th>
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
							 <td><?php echo $arr->index_meeting_next_date;?></td>
							 <td><?php echo $arr->index_meeting_next_date;?></td>
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
			<br>
               <a href="<?php echo site_url('indexmeeting/metting_info/'); ?>" class="btn" id="addmeeingsbtn"><span class="fa fa-plus" ></span>&nbsp;Add</a>
           
        </div>
		<div class=clear></div>
		<br><br>
		<div class="pagination">
	    <?php echo $links; ?>
    
		 <script>
      
			function newDoc(id) {
			   // console.log("id ====" ,id);
				var url = "<?php echo base_url(); ?>indexmeeting/mettings_status/"+id;
				window.location.assign(url);
			}
			</script>
  		<?php $this->load->view('footer');?>
	</div>
			
    </div> 
	
	
	 </div><div style="height:80px;"></div>
	 <div class="clear"></div>
	 
<?php $this->load->view('footer'); ?>
	
		

