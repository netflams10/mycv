<?php 
    if (isset($_POST['submit-work']))
        require __DIR__.'/../includes/dbh.php';

?>
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
          <h3 class="h3 mb-2 text-gray-800 text-gray">Add Educational Qualities</h3>

          
          <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div>
                <p class="text-right py-2 mr-1"><button class="btn btn-primary semiomolope" >Add More</button></p>
              </div>
                <!-- <div class="card-header py-3">
                 <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> 
                 <a href="add_work_experience.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">ADD MORE</a>
                </div> -->
                <div class="card-body">
                  <div class="form justify-content-centers">
                      <div class="row">
                        <div class="col-sm-12 col-lg-2 col-md-2">
                          <h5 class="text-center">Organisation</h5>
                        </div>

                        <div class="col-sm-12 col-lg-2 col-md-2">
                          <h5 class="text-center">Start From</h5>
                        </div>

                        <div class="col-sm-12 col-lg-2 col-md-2">
                          <h5 class="text-center">End Dtae</h5>
                        </div>

                        <div class="col-sm-12 col-lg-6 col-md-6">
                          <h5 class="text-left">Post and Responsiblity</h5>
                        </div>

                      </div>
  
                    <form class="form" action="../includes/experience.php" method="post">
                      <div class="row">
                          <div class="col-sm-12 col-lg-2 col-md-2">
                              <select name="institution_type[]" class="form-control">
                                  <option disabled selected value="selected">--select--</option>
                                  <option value="primary">Primary</option>
                                  <option value="secondary">Secondary</option>
                                  <option value="tertiary">Tertiary</option>
                                  <option value="professional">Professional</option>
                              </select>
                          </div>

                          <div class="col-sm-12 col-lg-2 col-md-2">
                            <input type="date" name="from_date[]" class="form-control" placeholder="organisation">
                          </div>

                          <div class="col-sm-12 col-lg-2 col-md-2">
                            <input type="date" name="to_date[]" class="form-control" placeholder="organisation">
                          </div>

                          <div class="col-sm-12 col-lg-6 col-md-6">
                            <textarea name="qualification[]" class="form-control" placeholder="organisation"></textarea>
                          </div>
                      </div>

                      <div class="row addinput">

                      </div>

                        <p class="text-center"><input type="submit" name="exp-submit" class="btn btn-success mt-1" value="SUBMIT"></p>
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
    <script src="function.js"></script>

  </div>
  <!-- End of Page Wrapper -->
  <?php require __DIR__.'/../includes/foot.php'; ?>



