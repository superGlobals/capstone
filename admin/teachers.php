<?php
include('includes/session.php');
include('includes/header.php'); 
include('includes/teacher_sidebar.php'); 

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
 @media (max-width: 500px){
  #table1{
   width: auto;
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
                          <!--  <a id="addbtn" href="#addteacher" style=" width: 150px;  
                         margin-top: 20px;" data-toggle="modal" class="btn btn-primary ">Add Teacher</a> -->
                        <div class="card-body">
                            <table id="table1" class="table table-hover text-dark">
                    <thead>  
                        <th>PHOTO</th>          
                        <th>NAME</th>
                        <th>USERNAME</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </thead>
                    <tbody>
                       <?php
                                    $teacher_query = mysqli_query($conn,"select * from teacher where teacher_status = 'approved' order by teacher_id desc") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($teacher_query)) {
                                    $id = $row['teacher_id'];
                                    
                                        ?>
                                    <tr>
                                       
                                   <td width="40"><img class="img-circle" src="../teacher/<?php echo $row['picture']; ?>" height="70" width="70"></td>
                                    <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
                                    <td><?php echo $row['username']; ?></td> 
                                    <td><?php echo $row['teacher_status'];?></td>
                                   
                                    <td>
                                   <a href="#edit_teacher<?php echo $id; ?>" data-toggle='modal' class="btn btn-success"><i class='far fa-edit'></i></a>
                                  <a data-toggle="modal" href="#teacher_delete<?php echo $id; ?>" id="delete"  class="btn btn-danger" name=""><i class="fas fa-trash-alt"></i></a>
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



