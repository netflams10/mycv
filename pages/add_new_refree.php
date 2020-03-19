
<?php require __DIR__.'/../includes/head.php'; ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php require __DIR__.'/../includes/side_bar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
          <?php require __DIR__.'/../includes/top_bar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
            <?php require __DIR__.'/../includes/header.php'; ?>
          <!-- End of Page Heading -->

          <!-- Content Row -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h3 class="h3 mb-2 text-gray-800 text-gray">Add Refree</h3>

          
          <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div>
                <p class="text-right py-2 mr-1"><button class="btn btn-primary semimolope" >Add More</button></p>
              </div>
                <!-- <div class="card-header py-3">
                 <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> 
                 <a href="add_work_experience.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">ADD MORE</a>
                </div> -->
                <div class="card-body">
                  <div class="form justify-content-centers">
                      <div class="row">
                        

                      </div>
  
                    <form class="form" action="../includes/refree.php" method="post">
                        <div class="row">
                            <div class="col-sm-12 col-lg-2 col-md-2">
                                <input type="text" name="name[]" class="form-control" placeholder="Refree Name">
                            </div>

                            <div class="col-sm-12 col-lg-2 col-md-2">
                              <input type="text" name="position[]" class="form-control" placeholder="Position">
                            </div>

                            <div class="col-sm-12 col-lg-2 col-md-2">
                              <input type="text" name="work_address[]" class="form-control" placeholder="Address">
                            </div>

                            <div class="col-sm-12 col-lg-3 col-md-3">
                              <input name="phone_number[]" class="form-control" placeholder="Please Enter Phone Number">
                            </div>

                            <div class="col-sm-12 col-lg-3 col-md-3">
                              <input type="text" name="mail[]" class="form-control" placeholder="Please Enter Phone Number">
                            </div>
                        </div>

                        <div class="row addinput">

                        </div>

                        <p class="text-center"><input type="submit" name="refree-submit" class="btn btn-success mt-1" value="SUBMIT"></p>
                    </form>
                </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->





    </div>

    <!-- Footer -->
    <?php require __DIR__.'/../includes/footer.php'; ?>
    <!-- End of Footer -->

    <!-- End of Content Wrapper -->
    <script src="basith.js"></script>

  </div>
  <!-- End of Page Wrapper -->
  <?php require __DIR__.'/../includes/foot.php'; ?>



