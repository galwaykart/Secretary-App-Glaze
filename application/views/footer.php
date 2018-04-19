       </div><!-- Main Dashbrad end -->
		<div class="clear"></div>
		</div>
	   <div style="height:50px;"></div> 
		<!-- don-t change -->
		<div style="height:50px;"></div>  
 
		<footer id="footer">
			<p>&copy; Copyright By Glaze India Pvt. Ltd.</p>
		</footer>

				<!-- notepad start -->
        <div class="notepad-tag" title="Open Notepad"  id="notepad-tag">
                  <div id="notepad-tagheader">
                    <span class="fa fa-edit"></span>
                  </div>
        </div>  
         <!-- notepad start -->
	
<div class="notepad-overlap">
	<div class="notePad" id="">
	
	
			
            <div class="notepad-container">
			 <span class="close2">&times;</div>
                <textarea id="cktextarea" class="notepad-area" cols="12" rows="10" onchange('autoSave()');>
				<?php
			$CI =& get_instance();
			$CI->load->model('Draft_model');
			$result = $CI->Draft_model->get_list();   
			 // print_r($result);die;
			 if($result){
			  echo $result[0]->message; 
			 }
			   ?> 
			</textarea>
			</div>
 				<div id="autoSave"></div>  
    </div>
</div>

 <script>  
 $(document).ready(function(){  
      function autoSave()  
      {      
           var draft_Message = CKEDITOR.instances.cktextarea.getData();
            if(draft_Message != '')  
           {    
                $.ajax({  
                     url:'<?php echo base_url(); ?>/Draft/index/',  
                     method:'POST',  
                     dataType:'text', 
                    data:{DraftMessage:draft_Message},  	 
                     success:function(data)  
                     { 
					 console.log(data);
                          if(data != '')  
                          {  
                               $('#user_id').val(data);  
                          }  

                          $('#autoSave').text("Post save as draft");  
                          setInterval(function(){  
                               $('#autoSave').text('');  
                          }, 10);  
                     }  
                });  
           }            
      }  
      setInterval(function(){   
           autoSave();   
           }, 1000);  
 });  
 </script>

   

      <!-- notepad ends -->   
           
              <!-- mobile menubar -->
        <div class="mobile-menu-bar">
                                  <aside class="" id="aside1">
                                    <div class="accordion" id="accordion2">
                                      <ul>
                                        <li>
                                          <a href=""
                                            <?php echo site_url('indexmeeting'); ?>"><span class="fa fa-dashboard"></span> Dashboard
                                          </a>
                                        </li>
                                        <li>
                                          <a href=""
                                            <?php echo site_url('indexmeeting'); ?>"><span class="fa fa-handshake-o"></span> Index Meeting in Progress
                                          </a>
                                        </li>
                                        <li>
                                          <a href=""
                                            <?php echo site_url('Daillynote'); ?>"><span class="fa fa-file-text"></span> Daily Notes
                                          </a>
                                        </li>
                                        <li>
                                          <a href=""
                                            <?php echo site_url('Quickwork'); ?>"><span class="fa fa-edit"></span> Quick Work
                                          </a>
                                        </li>
                                        <li>
                                          <a href=""
                                            <?php echo site_url('Appoinment'); ?>"><span class="fa fa-coffee"></span> Appointments
                                          </a>
                                        </li>
                                        <li>
                                          <a href=""
                                            <?php echo site_url('Projectdelegation'); ?>"><span class="fa fa-copy"></span> Project Delegation
                                          </a>
                                        </li>
                                        <li>

                                          <div class="has-menu-div">
                                            <span class="fa  fa-puzzle-piece"></span> Periodic tasks <span class="fa fa-angle-down checge"></span>
                                          </div>
                                          <ul class="has-menu">
                                            <li>
                                              <a href=""
                                                <?php echo site_url('yearlyperiodic') ?>">Yearly periodic Task
                                              </a>
                                            </li>
                                            <li>
                                              <a href=""
                                                <?php echo site_url('Monthlyperiodic') ?>">Monthly periodic Task
                                              </a>
                                            </li>
                                            <li>
                                              <a href=""
                                                <?php echo site_url('Dailyperiodic') ?>">Everyday periodic Task
                                              </a>
                                            </li>
                                            <li>
                                              <a href=""
                                                <?php echo site_url('WeeklyPeriodic') ?>">Weekly periodic Task
                                              </a>
                                            </li>
                                          </ul>
                                        </li>
                                        <li>
                                          <a href=""
                                            <?php echo site_url('Reminder') ?>"><span class="fa fa-history"></span> Reminder Sheet
                                          </a>
                                        </li>
                                        <li>
                                          <a href=""
                                            <?php echo site_url('user/userlist'); ?>"><span class="fa  fa-users"></span> Users
                                          </a>
                                        </li>

                                      </ul>
                                      </li>
                                      </ul>
                                    </div>
                        </aside>
        </div>
            <!-- mobile menubar end -->
            <!-- daily notification start --> 
       <div class="notification">
			<?php
			 $CI =& get_instance();
			$CI->load->model('User_model');
			$result= $CI->User_model->footer();        
			  foreach($result as $row){ ?> 
					
            <div class="close-<?php echo $row->index_meeting_id; ?> notifyPOP">
                    <div class="header"><span class="close" id="close-<?php echo $row->index_meeting_id; ?>" onClick="reply_click(this.id)">&times;</span></div>
                    <div class="left"><br /><span>TODAY</span><p> Next Metting</p></div>
                    <div class="right">
                        <h2>After 15 Minuts</h2>
                        <p>In Galway 2nd Flor</p>

                    </div>
            </div> 
			<?php }  ?> 
        </div> 
		
		 
		 <!-- daily notification end -->
		 <!-- globle header for comman end --> 
	 
	 <script type="text/javascript">
        $(document).ready(function () {

          var  count = 0;
          var count2 = 0;
         
              
                $('#sec-header #toggle-btn-box span#bar').click(function () {
                    if ($(window).width() >= 920) {
                        if (count % 2 == 0) { $('#aside').css('display', 'none'); $('.main-area-dashboard #left').css('width', '0%'); $('.main-area-dashboard #right').css('width', '100%'); }
                        else { $('#aside').css('display', 'block'); $('.main-area-dashboard #left').css('width', '15%'); $('.main-area-dashboard #right').css('width', '85%'); }
                        count++;
                    }
                    else
                    {
                       
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
                if ($(window).width() > 920) {
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

    <!-- notification script -->
    <script type="text/javascript">
       function reply_click(clicked_id)
		{ 
		    $('.'+clicked_id).hide(400)  
            $('.notepad-tag , .notepad-tag span').on('click', function () { $('.notepad-overlap').css('display','block'); });
			      $('.notePad span.close2').on('click', function () { $('.notepad-overlap').css('display','none'); });
         
		}
    </script>
    <script type="text/javascript">
      var count=0;
      $('#accordion ul li ul li div.has-menu-div').on('click',function(){
      if(count%2==0){
      $('#accordion ul li ul li ul.has-menu').css('display','block');
      $('#accordion ul li ul li div.has-menu-div span.checge').removeClass('fa-angle-down').addClass('fa-angle-up');
      }
      else
      { $('#accordion ul li ul li ul.has-menu').css('display','none');$('#accordion ul li ul li div.has-menu-div span.checge').removeClass('fa-angle-up').addClass('fa-angle-down');}
      count++;

      });
    </script>
		
	<script type="text/javascript" src="<?php echo base_url(); ?>js/forcast.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/caleandar.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/popup.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/forcast.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/quickworkCalender.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/thems.js"></script>
    <script src="<?php echo base_url(); ?>js/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/utils.js"></script>
<script type="text/javascript">
                //console.log("editor enabled");
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'cktextarea' );
					
    </script>
<script type="text/javascript">
  $(function(){
  $('.notepad-tag').draggable({ containment: "window" });

  });
</script>
 
</body>
</html>