﻿    <?php $this->load->view('head'); ?>
	<?php $this->load->view('header'); ?>
    <div class="clear"></div>
    <!--  changes-->
    <form method="POST" action="<?php echo base_url().'WeeklyPeriodic/add_data/'.$list['data1'][0]->weekly_periodic_id?>" >
<div class="main-area-dashboard"><!-- Main Dashbrad start -->

    <div id="right"><!-- right deshbrad start -->
                           
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Weeklly Periodic View</p></div>
    <div class="dailly-notes-index-panel"> 
       <div class="container-5">                     
                        <div class="col-md-12">
                        <?php
                        // echo "<pre>";
                        // print_r($list);  
                        // echo "</pre>";                      ?>
                                    <h2>Perodic Task View</h2>
                                    <div class="col-md-12"><p>Task Name : <span id="projectname">my task</span></p></div>
                                   
                                    <div class="clear"></div>
                                    <div class="col-md-4">
                                         <div class="form-group">
                                                        <label>End Date</label>
                                                        
                                                        <div class="input-group">
                                                            <div class="input-addon">
                                                            <span class="fa fa-calendar" ></span>
                                                            </div>
                                                            <div class="form-control"><input type="date" title="End date" value = "<?php echo $list['data1'][0]->weekly_periodic_end_date?>" /></div>
                                                        </div>
                                                </div>
                                               
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Supervised by:</label>
                                            <div class="input-group">
                                                <div class="input-addon">
                                                <span class="fa fa-american-sign-language-interpreting" ></span>
                                                </div>
                                                <div class="form-control"><input type="text" title="Supervised by:" placeholder="Supervised by" value = "<?php echo $list['data1'][0]->weekly_periodic_supervision?>"/></div>
                                            </div>
                                        </div>
                                    </div>


 
                                            
                            <div class="col-md-12">
        
                                <!-- autometic delegates start -->
        
                                <div id="auto-del">
                                    <div class="auto-del">
                                        <div class="left">
                                            <div class="form-group">
                                                <label>Delegate To</label>
                                                <div class="input-group">
                                                    <div class="form-control"><input required type="text" id ="gm1" name="delegate_to[]" title="Delegate To" value="<?php echo $list['data2'][0]->weekly_periodic_delegates_name?>"/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="center">
                                            <div class="form-group">
                                                <label>Email Id</label>
                                                <div class="input-group">
                                                    <div class="form-control">
                                                        <input required type="text" id="gm2"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="delegate_email[]" value="<?php echo $list['data2'][0]->weekly_periodic_delegates_email ?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right text-center">
                                            <div class="btn-group">
                                                <a href="#" class="plus" id="plus"><span class="fa fa-plus" ></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
        
                                    for($i=1 ; $i<sizeof($list['data2']) ; $i++){
                                        $j = $i - 1;
                                    ?>
                                    <div id="<?php   echo "rm".$j ?>" class="auto-del">
                                            <div class="left">
                                                <div class="form-group">
                                                    <label>Delegate To</label>
                                                    <div class="input-group">
                                                        <div class="form-control"><input required type="text"  name="delegate_to[]" title="Delegate To" value="<?php echo $list['data2'][$i]->weekly_periodic_delegates_name?>"/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="center">
                                                <div class="form-group">
                                                    <label>Email Id</label>
                                                    <div class="input-group">
                                                        <div class="form-control">
                                                            <input required type="text"   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="delegate_email[]" value="<?php echo $list['data2'][$i]->weekly_periodic_delegates_email?>"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right text-center">
                                                <div class="btn-group"><a style="background: red;" href="#"  onclick="setValues(<?php echo $j; ?>)"><span class="fa fa-minus" style="color: white;"></span></a>
                                                </div>
                                            </div>                                    
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                                    
                            </div>

                                            <div class="col-md-4">
                                                        
                                            </div>
                                </div><!-- col-md-12 end -->
                                <div class="clear"></div>
                        <div class="delegatesheet-view">
                                <div class="">
                                        <table >
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>End Date</th>
                                                    <th>Status</th>
                                                    <th>Remark</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                    if($list['data1']){
                                                    $i=1;
        
                                                    echo "<tr>"; 
                                                    echo "<td>".$i."</td>"; 
                                                    echo "<td>".$list['data1'][0]->weekly_periodic_end_date."</td>"; 
                                                    echo "<td>".$list['data1'][0]->weekly_periodic_status."</td>"; 
                                                    echo "<td>".$list['data1'][0]->weekly_periodic_remark."</td>"; 
                                                    echo "</tr>"; 
        
                                                }
                                    ?>
                                            </tbody>
                                        </table>
                                </div>
                    </div>
                                
        
                            <div class="col-md-12">
        

        
        <div id="auto-del1">
            <div class="auto-del">
                <div class="left">
                    <div class="form-group">
                        <label>Date</label>
                        <div class="input-group">
                            <div class="form-control"><input required type="date"  name="status_date[]" title="Delegate To" value="<?php if($list['data3']){ echo $list['data3'][0]->weekly_periodic_status_date ;}?>"/></div>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <div class="form-group">
                        <label>Note</label>
                        <div class="input-group">
                            <div class="form-control">
                            <textarea required type="text"  name="status_note[]"><?php if($list['data3']){ echo $list['data3'][0]->weekly_periodic_status_note; }?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right text-center">
                    <div class="btn-group">
                        <a href="#" class="plus" id="plus1"><span class="fa fa-plus" ></span></a>
                    </div>
                </div>
            </div>



            <?php 
        
            for($k=1 ; $k<sizeof($list['data3']) ; $k++){
                $j = $k - 1;
            ?>
            <div id="<?php   echo "dm".$j ?>" class="auto-del">
                    <div class="left">
                        <div class="form-group">
                            <label>Date</label>
                            <div class="input-group">
                                <div class="form-control"><input required type="date"  name="status_date[]" title="Date" value="<?php echo $list['data3'][$k]->weekly_periodic_status_date?>"/></div>
                            </div>
                        </div>
                    </div>
                    <div class="center">
                        <div class="form-group">
                            <label>Note</label>
                            <div class="input-group">
                                <div class="form-control">
                                    <textarea required type="text"  name="status_note[]"><?php echo $list['data3'][$k]->weekly_periodic_status_note?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right text-center">
                        <div class="btn-group"><a style="background: red;" href="#"  onclick="dsetValues(<?php echo $j; ?>)"><span class="fa fa-minus" style="color: white;"></span></a>
                        </div>
                    </div>                                    
            </div>
            <?php
            }
            ?>
        </div>

            <div class="col-md-12">
                <button type="submit" class="btargetDatetn-primary btn">Save</button>
                <!-- <a href="#">Add</a> -->
            </div>  

    
                         
</div>



       </div><!-- container 5 end -->


        </div><!-- right deshbrad end -->

            

    </div><!-- Main Dashbrad end -->
   
    </form> 
   














   
    













    

    <!-- don-t change -->
    <div style="height:50px;"></div>
    <footer id="footer">
        <p>&copy; Copyright By Glaze India Pvt. Ltd.</p>
    </footer>

     
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

    <script type="text/javascript"> 
        $(function() {
            $('a#plus').click(function(e) {
                e.preventDefault();
                var lnth = $('#auto-del .auto-del').length; 
                $('#auto-del').append('<div class="clear"></div><div id="rm'+lnth+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Delegate To</label><div class="input-group"><div class="form-control"><input required type="text" title="Delegate To" name="delegate_to[]" /></div></div></div></div><div class="center"><div class="form-group"><label>Email Id</label><div class="input-group"><div class="form-control"><input required type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="delegate_email[]"/></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="setValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');
                
            });
        });
            function setValues(id){     
                    document.getElementById("rm"+id).remove();
            }


        $(function() {
            $('a#plus1').click(function(e) {
                e.preventDefault();
                var lnth = $('#auto-del1 .auto-del').length; 
                $('#auto-del1').append('<div class="clear"></div><div id="dm'+lnth+'" class="auto-del"><div class="auto-del"><div class="left"><div class="form-group"><label>Date</label><div class="input-group"><div class="form-control"><input required type="date" value="" name="status_date[]" title="Date" /></div></div></div></div><div class="center"><div class="form-group"><label>Note</label><div class="input-group"><div class="form-control"><textarea required type="text"  name="status_note[]" value=""></textarea></div></div></div></div><div class="right text-center"><div class="btn-group"><a style="background: red;" href="#"  onclick="dsetValues('+ lnth + ')"><span class="fa fa-minus" style="color: white;"></span></a></div></div></div></div>');
                
            });
        });
            function dsetValues(id){     
                    document.getElementById("dm"+id).remove();
            }
    </script>

  