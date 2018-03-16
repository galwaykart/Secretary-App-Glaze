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
        <div class="notepad-tag" title="Open Notepad">
            <span class="fa fa-edit"></span>
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
            <!-- daily notification start -->
            
        <div class="notification">
                    <div class="header"><span class="close" id="" >&times;</span></div>
                    <div class="left"><br /><span>TODAY</span><p> Next Metting</p></div>
                    <div class="right">
                        <h2>After 15 Minuts</h2>
                        <p>In Galway 2nd Flor</p>

                    </div>


        </div>
            
            <!-- daily notification end -->

        <!-- notepad start -->

	<div class="notePad">
            <div class="notepad-container">
                <textarea id="" class="notepad-area" cols="12" rows="10"></textarea>
            </div>
    </div>


   

      <!-- notepad ends -->
     <!-- globle header for comman end --> 
	 
	 <script>
        $(document).ready(function () {
          var  count = 0;
          var count2 = 0;
         
              
                $('#sec-header #toggle-btn-box span#bar').click(function () {
                    if ($(window).width() >= 769) {
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

    <!-- notification script -->
    <script>
       
        $(function () {

            $('.close').on('click', function () { $('.notification').hide(400) });
            $('.notepad-tag').on('click', function () { $('.notePad').toggle(); });
           

        });
         

    </script>
	
    <script type="text/javascript" src="<?php echo base_url(); ?>js/caleandar.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>js/popup.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/forcast.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/quickworkCalender.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/thems.js"></script> 
	 
 
</body>
</html>