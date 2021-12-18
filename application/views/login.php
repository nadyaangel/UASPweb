<div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6 ">
                  <div class="titlepage">
                     <h2>Login Form</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form" method= "post" action = "<?= 
                  base_url('admin/login_aksi')?>">
                     <div class="row">
                        <div class="col-md-12 ">
                        <small class = "text-danger"><?= form_error('username'); ?></small>
                           <input class="contactus" placeholder="Username" type="type" name="username"> 
                        </div>
                        <div class="col-md-12">
                        <small class = "text-danger"><?= form_error('password'); ?></small>
                           <input class="contactus" placeholder="Password" type="password" name="password"> 
                        </div>
                        
                        <div class="col-md-12">
                           <button class="send_btn">Log In</button>
                        </div>
                     </div>
                  </form>
               </div>
               
            </div>
         </div>
      </div>

       <!-- Javascript files-->
       <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="<?php echo base_url()?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/custom.js"></script>
  