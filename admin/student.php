<?php
include('includes/session.php');
include('includes/header.php'); 
include('includes/student_sidebar.php'); 

?>
<style type="text/css">
  @media (max-width: 500px){
     #addbtn{  
      width: 100px;
      margin-left: 160px;
    }
  }
  @media (min-width: 1000px){
    #addbtn{
      margin-left: 83%;
    }
  }
 @media (max-width: 400px){
    table, tr, td, tbody, thead, th {
        font-size: 14px;
        width: 100px;
    }
}
  }
</style>

<body>
    <div id="app">
        
                    <div class="d-flex justify-content-between">
                        
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
               
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

                                
<!-- Add data session -->   
             <?php

          if (isset($_SESSION['message'])): ?> 
            <div class="alert-success text-center" id="hide">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
          <?php endif?>


<!-- delete data session -->
            <?php
            if (isset($_SESSION['message_delete'])): ?> 
              <div class="alert-danger text-center" id="hide">
                  <?php
                  echo $_SESSION['message_delete'];
                  unset($_SESSION['message_delete']);
                  ?>
              </div>
            <?php endif?>


<!-- update data session -->
            <?php
            if (isset($_SESSION['update_message'])): ?> 
              <div class="alert-success text-center" id="hide">
                  <?php
                  echo $_SESSION['update_message'];
                  unset($_SESSION['update_message']);
                  ?>
              </div>
            <?php endif?>


<!-- validate username session -->
             <?php
            if (isset($_SESSION['validate'])): ?> 
              <div class="alert-danger text-center" id="hide">
                  <?php
                  echo $_SESSION['validate'];
                  unset($_SESSION['validate']);
                  ?>
                  </div>
            <?php endif?>
                </div>
                <section class="section">
                    <div class="card ml-3 mr-3">
                        <div style="background: #374c9d;" class="card-header" >
                          
                          
                        </div>
                       <!--  <div class="pull-right">
                                <ul class="nav nav-pills" style="padding-left: 75%; margin-top: 5px; list-style: none; ">
                              <li class="pull-right">
                                <a class="" style="margin: 10px;" href="student.php">All</a>
                              </li>
                              <li class="active">
                                <a style="margin: 10px;" href="unreg_students.php">Unregistered</a>
                              </li>
                              <li class="">
                              <a style="margin: 10px;" href="reg_students.php">Registered</a>
                              </li>
                              </ul> 
                        </div> -->
                        <!-- <a id="addbtn" href="#addstudent" style=" width: 150px;  
                         margin-top: 20px;" data-toggle="modal" class="btn btn-primary ">Add Student</a> -->
                        <div class="card-body">
                            <table id="table1" class="table table-hover text-dark">
                    <thead>  
                        <th>PHOTO</th>
                        <th>ID NUMBER</th>                     
                        <th>NAME</th>
                        <th>COURSE YEAR & SECTION</th>
                        <th>ACTION</th>
                    </thead>
                    <tbody>
                        <?php
                                    $student_query = mysqli_query($conn,"select * from student LEFT JOIN class ON student.class_id = class.class_id where student_status = 'approved' ORDER BY student.student_id DESC ") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($student_query)) {
                                    $id = $row['student_id'];
                                    
                                        ?>
                                    <tr>
                                       
                                    <td width="40"><img src="../teacher/<?php echo $row['picture']; ?>" height="70" width="70"></td>
                                    <td><?php echo$row['username'] ?></td> 
                                    <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
                                    <td><?php echo $row['class_name'] ?></td>
                                    
                                    <td>
                                   <a href="#edit_student<?php echo $id; ?>" data-toggle='modal' class="btn btn-success"><i class='far fa-edit'></i></a>
                                  <a data-toggle="modal" href="#delete_delete<?php echo $id; ?>" id="delete"  class="btn btn-danger" name=""><i class="fas fa-trash-alt"></i></a>
                                     <?php include('edit_delete_modal.php');?>
                                        </td> 
                                  
                                       
                                   
                               
                                    
                                    <?php } ?>
                                </tr>
                    </tbody>
                    
                </table>
                </section>
            </div>

            
        </div>
    </div>
<?php include('add_modal.php') ?>



  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>