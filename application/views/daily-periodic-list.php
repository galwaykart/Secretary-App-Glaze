<!doctype html>
<html>
<head>

 <?php $this->load->view('head'); ?>
    <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
	<div class="clear"></div>
	<div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Dailly Periodic task</p></div>
    <div class="dailly-notes-index-panel">
    <div class="delegatesheet-view "><!-- monthly periodic panel start -->
             
<?php if($this->session->flashdata('msg')): ?>
 <p style="color:red;"><?php echo $this->session->flashdata('msg'); ?></p>
<?php endif; ?>
    <table>
                   <thead>
                   <tr><th>Sr No.</th><th>Day</th><th>Start Date</th><th>Time</th><th>Task</th><th>Supervised By</th>
                       <th>Remark</th><th>Active/Inactive</th>
                   </tr>
                       </thead>
                   <tbody>
					    <?php  $i=1;
					     foreach($fetch as $arr){?>
                       <tr onclick='daily_status(<?php echo $arr->daily_periodic_id; ?>)'>
						 <td><?php echo $i++;?></td>
						 <td><?php if($arr->daily_periodic_day==1){echo "Monday";} if($arr->daily_periodic_day==2){echo "Tuesday";} if($arr->daily_periodic_day==3){echo "Wednesday";}if($arr->daily_periodic_day==4){echo "Thursday";}if($arr->daily_periodic_day==5){echo "Friday";}if($arr->daily_periodic_day==6){echo "Saturday";}if($arr->daily_periodic_day==7){echo "Sunday";}?></td>
						 <td><?php echo $arr->daily_periodic_start_date;?></td>
						 <td><?php echo $arr->daily_periodic_time;?></td>
						 <td><?php echo $arr->daily_periodic_task;?></td>
						 <td><?php echo $arr->daliy_periodic_supervise;?></td>
						 <td><?php echo $arr->daily_periodic_remark;?></td>
						 <td><?php if($arr->daily_periodic_status==1){echo "Active";}else{echo "Inactive";}?></td>
                       </tr>
						 <?php }  ?>
                   </tbody>
               </table>
                <br /><br /><br /><br />
						<div class="pagination">
							  <?php echo $links; ?>  
						</div>
        </div><!-- right deshbrad end -->
        </div>
    </div><!-- Main Dashbrad end -->
				<div class="clear"></div>


 <div style="height:50px;"></div>
      <?php $this->load->view('footer'); ?>

    <!-- don-t change -->
    <div style="height:50px;"></div>
    <footer id="footer">
        <p>&copy; Copyright By Glaze India Pvt. Ltd.</p>
    </footer>



     <!-- globle header for comman end --> 
    <script>
        $(document).ready(function () {
            var count = 0;
            var count2 = 0;


            $('#sec-header #toggle-btn-box span#bar').click(function () {
                if ($(window).width() >= 769) {
                    if (count % 2 == 0) { $('#aside').css('display', 'none'); $('.main-area-dashboard #left').css('width', '0%'); $('.main-area-dashboard #right').css('width', '100%'); }
                    else { $('#aside').css('display', 'block'); $('.main-area-dashboard #left').css('width', '15%'); $('.main-area-dashboard #right').css('width', '85%'); }
                    count++;
                }
                else {

                    if (count2 % 2 == 0) { $('.mobile-menu-bar').css('display', 'block'); }
                    else { $('.mobile-menu-bar').css('display', 'none'); }
                    count2++;
                }

            });

            $('.log-popup').on('click', function () {
                $('.log-up-body').toggle('slow');

            });




            // window resize option
            $(window).bind('resize', function () {
                if ($(window).width() > 768) {
                    $('#aside').css('display', 'block'); $('.mobile-menu-bar').css('display', 'none');
                    $('.main-area-dashboard #right').css('width', '85%');
                    $('.main-area-dashboard #left').css('width', '15%');
                }
                else {
                    $('#aside').css('display', 'none');
                    $('.main-area-dashboard #right').css('width', '100%'); $('.mobile-menu-bar').css('display', 'none');
                }
            });
        });

    </script>
		 <script>
      
			function daily_status(id) {
			   // console.log("id ====" ,id);
				var url = "<?php echo base_url(); ?>Dailyperiodic/view/"+id;
				window.location.assign(url);
			}
			</script>

       
</body>
</html>
