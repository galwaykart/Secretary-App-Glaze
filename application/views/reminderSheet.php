<?php $this->load->view('head'); ?>
<?php $this->load->view('header'); ?>
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Reminder Sheet</p></div>
    <div class="clear"></div>
    <div class="monthly-periodic-task-sheet"><!-- Reminder  panel start -->
              <h2 id="paddin-left">Reminder Sheet </h2>
              <a href="#" id="open-popup" class="perdoci-task-add-btn" title="Add New"><span class="fa fa-plus" ></span>&nbsp;Add</a>
                <!--search button start-->
                        <div class="search-btn-perodic">
                            <input type="text" value="" placeholder="Search Reminder Task"/><button><span class="fa fa-search"></span></button>

                        </div>
                <!--search button end-->
                <div class="table-res style-4">
                            <table class="reminder-table-view-show">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Alert Frequency</th>
                                        <th>Subject</th>
                                        <th>Applicants</th>
                                        <th>Active/Inactive</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                </div>
            
                          
   </div><!-- reminder panel  end -->
            <br /><br /><br /><br />

        



   
  
    
      <!-- popup start -->

          <div class="popup">
            <div class="header">
                <h3>Reminder Sheet- <span id="work"> Add</span></h3>
                <span id="close-popup"  title="Close">&times;</span>
            </div>
            <div class="content"><!-- content start -->
                <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Start Date :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="date" title="Start Date" /></div>
                                        </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>End Date :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="date" title="End Date" /></div>
                                        </div>
                         </div>
                    </div>
                </div>
                <div class="clear"></div>
                 <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Start Time :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="date" title="Start Time" /></div>
                                        </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>End Time :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="date" title="End Time" /></div>
                                        </div>
                         </div>
                    </div>
                </div>
                <div class="clear"></div>
                  <div class="col-md-12">
                   
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Alert Frequency</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                                <select>
                                                    <option>Hourly </option>
                                                    <option>Every Day</option>
                                                    <option>Every Week</option>
                                                    <option>Every Month</option>
                                                    <option>Every Year</option>
                                                </select>

                                            </div>
                                        </div>
                          </div>
                        
                    </div>
                      <div class="col-md-6">
                           <div class="form-group">
                                       <label>Subject</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" placeholder="Subject"  title="Subject"/></div>
                                        </div>
                          </div>
                    </div>
                </div>
                <div class="clear"></div>
                    <div class="col-md-12">
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Applicants :</label>
                                        <div class="input-group">
                                            <div class="form-control"><input type="text" placeholder="Applicants" title="Applicants" /></div>
                                        </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                       <label>Active/Inactive :</label>
                                        <div class="input-group">
                                            <div class="form-control">
                                                <select>
                                                    <option>Active</option>
                                                    <option>Inactive</option>
                                                </select>

                                            </div>
                                        </div>
                         </div>
                    </div>
                </div>
                <div class="clear"></div>
                
                </div>
                <div class="footer">
                        <a href="#">Save</a>
                        <a href="#">Reset</a>
                </div>
              </div>
            <!--  popup end -->
               
               

        </div><!-- right deshbrad end -->

            

    </div><!-- Main Dashbrad end --> 
 
 
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


        $('#open-popup').on('click', function () { $('.popup').css('display', 'block'); });
        $('#close-popup').on('click', function () { $('.popup').css('display', 'none'); })
    </script>
 <?php $this->load->view('footer'); ?>
