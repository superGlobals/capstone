   <!-- Sidebar -->
   <ul style="background: #374c9d;" class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center mt-3 mb-4 mr-2 justify-content-center" href="index.php"><img src="img/logo.jpg" alt="Logo" srcset="" style=" clip-path: circle(); width: 90px; height: 95px;">

 <!--  <div class="sidebar-brand-text mx-3">LMS POC</div> -->
</a>
  <h5 class="text-center text-white">LMS - POC</h5>
<!-- Divider -->
<hr class="sidebar-divider my-0">

<li class="nav-item ">
  <a class="nav-link" href="accounts_request.php">
   <i class="fab fa-wpforms"></i>
    <span>Accounts Request</span></a>
</li>

<hr class="sidebar-divider my-0">
<!-- Nav Item - Dashboard -->
<li class="nav-item ">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->

<hr class="sidebar-divider my-0">

<!-- Nav Item - Admin Users -->
<li class="nav-item  ">
  <a class="nav-link" href="admin_users.php">
    <i class="fas fa-users"></i>
    <span>Admin Users</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Subjects -->
<li class="nav-item ">
  <a class="nav-link" href="subject.php">
    <i class="fas fa-book-open"></i>
    <span>Subjects</span></a>
</li>



<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Subjects -->
<li class="nav-item ">
  <a class="nav-link" href="class.php">
    <i class="fas fa-users"></i>
    <span>Class</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Subjects -->
<li class="nav-item active">
  <a style="background: #ffcb01; color: white; padding: 10px; border-radius: 0px  20px 20px 0px;" class="nav-link" href="teachers.php">
   <i class="fas fa-users"></i>
    <span>Teachers</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Subjects -->
<li class="nav-item ">
  <a class="nav-link" href="student.php">
    <i class="fas fa-users"></i>
    <span>Students</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Subjects -->
<li class="nav-item ">
  <a class="nav-link" href="user_log.php">
   <i class="far fa-file-alt"></i>
    <span>User log</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Subjects -->
<li class="nav-item ">
  <a class="nav-link" href="activity_log.php">
    <i class="far fa-file-alt"></i>
    <span>Activity log</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Subjects -->
<li class="nav-item ">
  <a class="nav-link" href="school_year.php">
    <i class="fas fa-calendar-alt"></i>
    <span>School Year</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Subjects -->
<li class="nav-item ">
  <a class="nav-link" href="backup_database.php">
    <i class="fas fa-database"></i>   
    <span>Back-up Database</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand topbar mb-4 static-top shadow" style="height: 40px; background: #ffcb01;">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <h5 class="text-dark mt-2">Teacher</h5>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

         

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2" style="color:  #696969;">
                  
               <?php
               

               echo $_SESSION['username'];

               ?>
                  
                </span>
                <i class="fas fa-caret-down"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="activity_log.php">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                  <form action="logout.php" method="POST"> 
                <button type="submit" name="logout_btn" class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </button>
                </form>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 