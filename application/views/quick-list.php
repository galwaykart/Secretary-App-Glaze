<!doctype html>
<html>
<?php $this->load->view('head'); ?>
<body class="body style-6"><!-- body tag start -->
   <!-- globle header for comman start --> 
    <?php $this->load->view('header'); ?>
    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Quick Work</p></div>
    <div class="dailly-notes-index-panel">
            <div class="table-res">
                    <div class="table-view">
                        <table>
                            <thead>
                                <tr><th>Sr No</th><th>Date </th><th>Task</th><th>Delegate To</th><th>Target Date</th><th>Priority</th><th>Remarks</th><th>Status</th><th>Active</th></tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td><td>12/07/2018</td><td>no tasks</td><td>self</td><td>12/09/2018</td><td>High</td><td>No remarks</td><td>pending</td><td>Active</td>
                              </tr>
                                  <tr>
                                  <td>1</td><td>12/07/2018</td><td>no tasks</td><td>self</td><td>12/09/2018</td><td>High</td><td>No remarks</td><td>pending</td><td>Active</td>
                              </tr>
                                  <tr>
                                  <td>1</td><td>12/07/2018</td><td>no tasks</td><td>self</td><td>12/09/2018</td><td>High</td><td>No remarks</td><td>pending</td><td>Active</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>

            </div>
    </div><!-- dailly index panel end -->
   
     <br /><br /><br />
    <div style="height:50px;"></div>
    <?php $this->load->view('footer'); ?>
</body>
</html>
