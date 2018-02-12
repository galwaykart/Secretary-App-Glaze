<!doctype html>
<html>
<?php $this->load->view('head'); ?>
<body class="body style-6"><!-- body tag start -->
   <!-- globle header for comman start --> 
    <?php $this->load->view('header'); ?>
   
    <!-- user View design page start -->
    <div class="col-md-12 heading-tag"><p><span class="fa fa-home" ></span>&nbsp;Home / Users</p></div>
    <div class="col-md-12 all-user-panel">
            <div class="container">
                <h2>All Users</h2>
            </div>
        <div class="user-content-panel-view">
               <div class="left-button-fixed-panel col-md-12 text-right">
                 <a href="registration.html" > <button class="add btn" title="Add New User"><span class="fa fa-plus" ></span>&nbsp;Add</button></a>
               </div>
               <div class="table-res">
                   <table>
                       <thead>
                           <tr><th>User Name</th><th>MObile No</th><th>Email Id</th><th>User Type</th><th>Gender</th><th>Status</th></tr>
                       </thead>
                       <tbody>
                           <tr><td>xyz</td><td>7854543787</td><td>xyz@demo.com</td><td>simple</td><td>Male</td><td>Active</td></tr>
                              <tr><td>xyz</td><td>7854543787</td><td>xyz@demo.com</td><td>simple</td><td>Male</td><td>Active</td></tr>
                              <tr><td>xyz</td><td>7854543787</td><td>xyz@demo.com</td><td>simple</td><td>Male</td><td>Active</td></tr>
                              <tr><td>xyz</td><td>7854543787</td><td>xyz@demo.com</td><td>simple</td><td>Male</td><td>Active</td></tr>
                              <tr><td>xyz</td><td>7854543787</td><td>xyz@demo.com</td><td>simple</td><td>Male</td><td>Active</td></tr>
                              <tr><td>xyz</td><td>7854543787</td><td>xyz@demo.com</td><td>simple</td><td>Male</td><td>Active</td></tr>
                       </tbody>
                   </table>

               </div>
        </div>
    </div>
   
     <br /><br /><br />
    <div style="height:50px;"></div>
    <?php $this->load->view('footer'); ?>
</body>
</html>
