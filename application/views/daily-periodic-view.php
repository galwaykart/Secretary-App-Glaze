 <?php $this->load->view('head'); ?>
    <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
	<div class="clear"></div>
	<div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Dailly Perodic Task View</p></div>
    <div class="dailly-notes-index-panel">
     
       <div class="container-5">
                       
                        <div class="col-md-12">
                                    <h2>Perodic Task </h2>
                                    <div class="col-md-12"><p>Task Name : <span id="projectname">my task</span></p></div>
                                   
                                    <div class="clear"></div>
                                    <div class="col-md-4">
                                         <div class="form-group">
                                                        <label>End Date</label>
                                                        
                                                        <div class="input-group">
                                                            <div class="input-addon">
                                                            <span class="fa fa-calendar" ></span>
                                                            </div>
                                                            <div class="form-control"><input type="date" title="End date"  /></div>
                                                        </div>
                                                </div>
                                               
                                    </div>
                                     <div class="col-md-4">
                                                 <div class="form-group">
                                                                <label>Supervised By</label>
                                                        
                                                                <div class="input-group">
                                                                    <div class="input-addon">
                                                                    <span class="fa fa-user" ></span>
                                                                    </div>
                                                                    <div class="form-control"><input type="text" title="Supervised by"  /></div>
                                                                </div>
                                                        </div>
                                               
                                            </div>
                                    <div class="col-md-4">
                                          <div class="form-group">
                                                        <label>Delegate To</label>
                                                        
                                                        <div class="input-group">
                                                            <div class="input-addon">
                                                                <span class="fa fa-share" ></span>
                                                            </div>
                                                            <div class="form-control"><input type="text" title="Delegate To" placeholder="Delegate To" /></div>
                                                        </div>
                                                </div>
                                               
                                    </div>
                                    <div class="col-md-4">
                                                
                                    </div>
                                    <div class="col-md-4">
                                                
                                    </div>
                        </div><!-- col-md-12 end -->
                        <div class="clear"></div>
           <div class="delegatesheet-view">
                        <div class="table-res">
                                <table >
                                    <thead>
                                        <tr>
                                            <th>End Date</th><th>Status</th>
                                            <th>Remark</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <tr><td>12/04/2019</td><td>Active</td><td>no remarks</td></tr>
                                         
                                    </tbody>
                                </table>
                        </div>
               </div>
                        




       </div><!-- container 5 end -->
   

        </div><!-- right deshbrad end -->

            

    </div><!-- Main Dashbrad end -->
   

   
   
 <div style="height:50px;"></div>
      <?php $this->load->view('footer'); ?>













   
    













    

    <!-- don-t change -->
    <div style="height:50px;"></div>
    <footer id="footer">
        <p>&copy; Copyright By Glaze India Pvt. Ltd.</p>
    </footer>

     <!-- notepad start -->
        <div class="notepad-tag" title="Open Notepad">
            <span class="fa fa-edit"></span>
            </div>
            <div class="note-pad-box">
                <div >
                    <div class="header">
            
                         <p>Notepad:-</p>
                     </div>

                 </div>
                <div class="body"><textarea></textarea></div>
                <div class="footer"></div>
            </div>
              <!-- mobile menubar -->
               <div class="mobile-menu-bar">
                                  <aside class="" id="aside1">
                                    <div class="accordion" id="accordion2">
                                        <ul>
                                            <li>
                                                <div>Sollicitudin</div>
                                                <ul>
                                                    <li><a href="?11">Lorem ipsum</a></li>
                                                    <li><a href="?12">Dolor sit</a></li>
                                                    <li>
                                                        <div>Commodo Rhoncus</div>
                                                        <ul>
                                                            <li><a href="demo.html">Current</a></li>
                                                            <li><a href="?132">Consectetur</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div>Quis Porttitor</div>
                                                <ul>
                                                    <li><a href="?21">Finibus Bonorum</a></li>
                                                    <li><a href="?22">Sed ut</a></li>
                                                    <li><a href="?23">Neque porro</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div>Odio Ac</div>
                                                <ul>
                                                    <li><a href="?31">Minima veniam</a></li>
                                                    <li><a href="?32">Voluptate velit</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="?4">Sapien quam</a>
                                            </li>
                                        </ul>
                                    </div>
                        </aside>
               </div>
            <!-- mobile menubar end -->
  


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
    

</body>
</html>