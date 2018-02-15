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
                <h2 class="heading">All Mettings</h2>
            </div>
        <div class="Mettings-View-index-panel">
             
               <div class="table-res">
                   <table id="mettings-table">
                       <thead>
                           <tr><th>Ajenda</th><th>Participants</th><th>Previous Meetings Date</th><th>Next Metting Date</th><th>No of Mettings</th><th>Metting Called By (Name & Department)</th><th>Remarks</th><th>Active/Inactive</th></tr>
                       </thead>
                       <tbody>
                         <tr>
                             <td>design</td><td>one , two ,three</td><td><a href="#">12/02/2018</a></td><td>15/02/2018</td><td>3</td><td>xyz (IT software)</td><td>No remarks</td><td>Active</td>
                         </tr>
                            <tr>
                             <td>design</td><td>one , two ,three</td><td><a href="#">12/02/2018</a></td><td>15/02/2018</td><td>3</td><td>xyz (IT software)</td><td>No remarks</td><td>Active</td>
                         </tr>
                            <tr>
                             <td>design</td><td>one , two ,three</td><td><a href="#">12/02/2018</a></td><td>15/02/2018</td><td>3</td><td>xyz (IT software)</td><td>No remarks</td><td>Active</td>
                         </tr>
                            <tr>
                             <td>design</td><td>one , two ,three</td><td><a href="#">12/02/2018</a></td><td>15/02/2018</td><td>3</td><td>xyz (IT software)</td><td>No remarks</td><td>Active</td>
                         </tr>
                            <tr>
                             <td>design</td><td>one , two ,three</td><td><a href="#">12/02/2018</a></td><td>15/02/2018</td><td>3</td><td>xyz (IT software)</td><td>No remarks</td><td>Active</td>
                         </tr>
                            <tr>
                             <td>design</td><td>one , two ,three</td><td><a href="#">12/02/2018</a></td><td>15/02/2018</td><td>3</td><td>xyz (IT software)</td><td>No remarks</td><td>Active</td>
                         </tr>
                       </tbody>
                   </table>

               </div>
            <div class="col-md-12">
               <a href="#" class="btn" id="addmeeingsbtn"><span class="fa fa-plus" ></span>&nbsp;Add</a>
            </div>
        </div>
    </div> 
     <br /><br /><br />
    <div style="height:50px;"></div>
  		<?php $this->load->view('footer'); ?>
</body>
</html>
