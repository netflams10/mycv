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
              <h3 class="h3 mb-2 text-gray-800 text-gray">Edit Educational Quality</h3>
    
              
              <!-- DataTales Example -->
                <div class="card shadow mb-4">
                  <div>
                    <!-- <p class="text-right py-2 mr-1"><button class="btn btn-primary semimolope" >Add More</button></p> -->
                  </div>
                    <!-- <div class="card-header py-3">
                     <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> 
                     <a href="add_work_experience.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">ADD MORE</a>
                    </div> -->
                    <div class="card-body">
                      <div class="form justify-content-centers">
                          <div class="row">
                            
    
                          </div>

                            <form class="form" action="../includes/work_exp.php" method="post">
                                <div class="row">

                                    <?php 
                                        $id = $_GET['id'];
                                        require __DIR__.'/../includes/dbh.php';
                                        $sql = "SELECT * FROM `edu_qua` WHERE eq_id='".$id."' ";
                                        $result = mysqli_query($conn, $sql);

                                        if(mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    ?>
                        
                                    <!-- <div class="row"> -->
                                        <div class="col-sm-12 col-lg-12 col-md-12 mt-3">
                                            <input type="text" name="organisation[]" class="form-control" value="<?php echo $row['organisation']; ?>">
                                        </div>
            
                                        <div class="col-sm-12 col-lg-6 col-md-6 mt-3">
                                            <input type="date" name="from_date[]" class="form-control" value="<?php echo $row['from_date']; ?>">
                                        </div>
                                    <!-- </div> -->
        
                                    <!-- <div class="row"> -->
                                        <div class="col-sm-12 col-lg-6 col-md-6 mt-3">
                                            <input type="date" name="to_date[]" class="form-control" value="<?php echo $row['to_date']; ?>">
                                        </div>
            
                                        <div class="col-sm-12 col-lg-12 col-md-12 mt-3">
                                            <textarea name="qualification[]" class="form-control" value="<?php echo $row['qualification']; ?>"></textarea>
                                        </div>
                                    <!-- </div> -->
 
                                <?php
                                        } 
                                    }
                                ?>
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
    
      </div>
      <!-- End of Page Wrapper -->
      <?php require __DIR__.'/../includes/foot.php'; ?>
    
    
    
    