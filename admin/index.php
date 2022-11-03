<?php
include('includes/session.php');
include('includes/header.php'); 
include('includes/sidebar.php'); 
include('database.php');



?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Numbers</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>

  <!-- Content Row -->
  <div class="row">

     <!-- TOTAL ADMIN -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <h4>
                                  <?php 
                                     $query = "SELECT * FROM users ORDER BY id";
                                     $run = mysqli_query($conn, $query);

                                     $result = mysqli_num_rows($run);

                                     echo  $result;

                                      ?>
               </h4>

              </div>
            </div>
            <div class="col-auto">              
              <i class="fas fa-user-plus fa-2x text-gray-300 "></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- TOTAL STUDENTS -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">TOTAL APPROVED STUDENTS</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                
                <?php

                $query = "SELECT * FROM student WHERE student_status = 'approved' order by student_id";
                $run = mysqli_query($conn, $query);
                $result = mysqli_num_rows($run);

                echo $result;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- TOTAL TEACHERS -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">TOTAL APPROVED TEACHERS</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                    <?php

                    $query = "SELECT * FROM teacher WHERE teacher_status = 'approved' ORDER BY teacher_id";
                    $run = mysqli_query($conn, $query);

                    $result = mysqli_num_rows($run);

                    echo $result;
                   
                    ?>
                  </div>
                </div>
                <div class="col">
                 <!--  <div class="progress progress-sm mr-2"> -->
                    <!-- <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div> -->
                 <!--  </div> -->
                </div>
              </div>
            </div>
            <div class="col-auto">
             <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- TOTAL CLASS -->
     <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">TOTAL CLASS</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                    <?php 
                                     $query = "SELECT * FROM class ORDER BY class_id";
                                     $run = mysqli_query($conn, $query);

                                     $result = mysqli_num_rows($run);

                                     echo  $result;

                                      ?>
                  </div>
                </div>
                <div class="col">
                 
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- TOTAL SUBJECTS -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">TOTAL SUBJECTS</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                
                 <?php 
                                     $query = "SELECT * FROM subject ORDER BY subject_id";
                                     $run = mysqli_query($conn, $query);

                                     $result = mysqli_num_rows($run);

                                     echo  $result;

                                      ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-book-open fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <!-- Content Row -->








  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>