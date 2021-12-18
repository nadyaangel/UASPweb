

<div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6 ">
                  <div class="titlepage">
                     <h2>Registration Form</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form" method= "post" action = "<?= 
                  base_url('admin')?>">
                     <div class="row">
                        <div class="col-md-12 ">
                        <small class = "text-danger"><?= form_error('username'); ?></small>
                           <input class="contactus" placeholder="Username" type="type" name="username"> 
                        </div>
                        
                        <div class="col-md-12 ">
                        <small class = "text-danger"><?= form_error('email'); ?></small>
                           <input class="contactus" placeholder="Email" type="type" name="email"> 
                        </div>
                        <div class="col-md-12">
                        <small class = "text-danger"><?= form_error('password'); ?></small>
                           <input class="contactus" placeholder="Password" type="password" name="password"> 
                        </div>      
                        
                           <div class="col-md-12">
                              <button class="send_btn">Register</button>
                              <br>
                           </div>
                           <div class="col-md-7">
                              <a href="<?= base_url('admin/login')?>">Have an Account? Login!</a>
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
  