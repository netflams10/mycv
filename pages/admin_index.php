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
          <h1 class="h3 mb-2 text-gray-800 text-gray">ADMINISTRATION</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="add_work_experience.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">ADD MORE</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-center">Name</th>
                      <th class="text-center">Tel No</th>
                      <th class="text-center">mail</th>
                      <th class="text-center">gender</th>
                      <th class="text-center">Position</th>
                      <th class="text-center">Action</th>
                      <!-- <th>Post And Responsibility</th> -->
                    </tr>
                  </thead>

                  <tbody>
                    <?php 
                        $id = $_SESSION['user_id'];
                        require __DIR__.'/../includes/dbh.php';
                        $sql = "SELECT * FROM `bio_data`, `in_search`";
                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    ?>
                            <tr>
                              <td><?php echo $row['fname']; ?></td>
                              <td><?php echo $row['tel_no']; ?></td>
                              <td><?php echo $row['mail']; ?></td>
                              <td><?php echo $row['gender']; ?></td>
                              <td><?php echo $row['course_of_study']; ?></td>
                              <td><a href="training_edit.php?user=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fas fa-fw fa-view"></i></a>&nbsp;&nbsp;<a href="delete.php?user=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-fw fa-times"></i></a></td>
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

