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
          <h1 class="h3 mb-2 text-gray-800 text-gray">Educational Qualities</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="add_edu_qua.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">ADD MORE</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Organisation</th>
                      <th>From</th>
                      <th>End Date</th>
                      <th>Qualification</th>
                      <th class="text-center">Action</th>
                      <!-- <th>Post And Responsibility</th> -->
                    </tr>
                  </thead>

                  <tbody>
                    <?php 
                        $id = $_SESSION['user_id'];
                        require __DIR__.'/../includes/dbh.php';
                        $sql = "SELECT * FROM `edu_qua` WHERE p_id=$id ";
                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                    ?>
                            <tr>
                              <td><?php echo $row['organisation']; ?></td>
                              <td><?php echo $row['from_date']; ?></td>
                              <td><?php echo $row['to_date']; ?></td>
                              <td><?php echo $row['qualification']; ?></td>
                              <td><a href="training_edit.php?user=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fas fa-fw fa-edit"></i></a>&nbsp;&nbsp;<a href="delete.php?user=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-fw fa-times"></i></a></td>
                            </tr>

                    <?php
                          } 
                        }
                    ?>
                  </tbody>
                  </table>
                </table>
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

