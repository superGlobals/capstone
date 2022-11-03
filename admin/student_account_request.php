<?php
include('includes/session.php');
include('includes/header.php'); 
include('includes/accounts_request_sidebar.php'); 

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

          if (isset($_SESSION['approved'])): ?> 
            <div class="alert-success text-center" id="hide">
                <?php
                echo $_SESSION['approved'];
                unset($_SESSION['approved']);
                ?>
            </div>
          <?php endif?>


<!-- delete data session -->
            <?php
            if (isset($_SESSION['decline'])): ?> 
              <div class="alert-danger text-center" id="hide">
                  <?php
                  echo $_SESSION['decline'];
                  unset($_SESSION['decline']);
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
                        <div style="background: #374c9d; height: 35px;" class="card-header" >
                          <p style="color: white; margin-bottom: 15px; font-size: 15px;">Student's Accounts Request</p>
                        </div>
                           <a id="addbtn" href="accounts_request.php" style=" width: 150px;  
                         margin-top: 20px;" class="btn btn-primary ">Back</a>
                        <div class="card-body">
                            <table id="table1" class="table table-hover text-dark">
                    <thead>  
                        <!-- <th>PHOTO</th>      -->                
                        <th>NAME</th>
                        <th>USERNAME</th>
                        <th>DATE OF REQUEST</th>
                        <th>ACTIONS</th>
                        
                    </thead>
                    <tbody>
                       <?php
                                    $teacher_query = mysqli_query($conn,"select * from student where student_status = 'pending' order by student_id DESC") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($teacher_query)) {
                                    $id = $row['student_id'];
                                    
                                        ?>
                                    <tr>
                                       
                                   <!--  <td width="40"><img class="img-circle" src="../teacher/<?php echo $row['picture']; ?>" height="70" width="70"></td>  -->
                                    <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
                                    <td><?php echo $row['username']; ?></td> 
                                    <td><?php echo $row['date_of_request']; ?></td>
                                    <td> <a href="#view_details<?php echo $id; ?>" data-toggle='modal' class="btn btn-success"><i class="fas fa-eye"></i> View Details</a></td> 
                                    <?php include('student_request_modal.php');?>
                                    
                                  
                                       
                                   
                               
                                    
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



<!-- <td><form action ="admin_approval.php" method ="POST">
                                        <input type = "hidden" name="id" value = "<?php echo $id; ?>"/>
                                        
                                        <button class="btn btn-success" type="submit" name="student_approve"><i class="fas fa-thumbs-up"></i> Approved</button>
                                        <button class="btn btn-danger" type="submit" name="student_decline"> <i class="fas fa-ban"></i> Decline</button>
                                    </form></td> -->