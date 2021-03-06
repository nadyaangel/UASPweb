
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
    
         <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="<?php echo base_url()?>assets/images/kue.jpg" alt="First slide">
                  <div class="container">
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo base_url()?>assets/images/cheesecake.jpg" alt="Second slide">
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo base_url()?>assets/images/cookies.jpg" alt="Third slide">
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <div class="booking_ocline">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <div class="book_room">
                        <h1>Masukkan Data</h1>
                        <form method = "post" action = "<?= base_url('admin/create') ?>">
                           <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">ID</label>
                           <input type="text" class="form-control" id="id" name= "id" placeholder = "e.g 1, 2">
                           </div>
                           <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">Nama Kue</label>
                           <input type="text" class="form-control" id="nama_kue" name= "nama_kue" placeholder = "e.g Cheesecake">
                           </div>
                           <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">Harga Kue</label>
                           <input type="text" class="form-control" id="harga" name = "harga" placeholder = "e.g 50000">
                           </div>
                           <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                           <input type="text" class="form-control" id="deskripsi" name = "deskripsi">
                           </div>
              
             <button type="submit" class="btn btn-primary">Submit</button>
            </form>
                        <!-- <form class="book_now">
                           <div class="row">
                              <div class="col-md-12">
                                 <span>Arrival</span>
                                 <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="dd/mm/yyyy">
                              </div>
                              <div class="col-md-12">
                                 <span>Departure</span>
                                 <img class="date_cua" src="images/date.png">
                                 <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="dd/mm/yyyy">
                              </div>
                              <div class="col-md-12">
                                 <button class="book_btn">Book Now</button>
                              </div>
                           </div>
                        </form> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- about -->
     
      <!-- end about -->
      <!-- our_room -->
      <div  class="our_room">
         <div class="container">
            <div class = "titlepage">
            <h2>Ini Daftar Kue Kamu</h2>
            </div>
            
         <table class="table">
            <thead>
            <tr>
               <td><b>ID<b></td>
               <td><b>Nama Kue<b></td>
               <td><b>Harga Kue <b></td>
               <td><b>Deskripsi <b></td>
               <td colspan = "2"><b>Aksi <b></td>
            </tr>
            </thead>
            <tbody>
               <?php foreach ($cake_table as $data){ ?>
               <tr>
               <td> <?= $data->id ?></td>
               <td> <?= $data->nama_kue ?></td>
               <td> <?= $data->harga ?></td>
               <td> <?= $data->deskripsi ?></td>
               <td><a href= "<?= base_url('admin/edit/'. $data->id)?>" type="button" class="btn btn-primary">Edit</a></td>
               <td onclick= "javascript: return confirm('Yakin mau menghapus kue ini?')"><a href= "<?= base_url('admin/hapus/'. $data->id)?>" type="button" class="btn btn-danger">Delete</a></td>
               </tr>   
               
               <?php } ?>
            </tbody>
         
          </table>
         </div>
      </div>
      <!-- end our_room -->
      <!-- gallery -->
     
      <!-- end gallery -->
      <!-- blog -->

      <!-- end blog -->
      <!--  contact -->

      <!-- end contact -->
      <!--  footer -->
      
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="<?php echo base_url()?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/custom.js"></script>
   </body>
</html>