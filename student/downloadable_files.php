<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>
<?php include('../admin/database.php');?>
   <?php $get_id = $_GET['id']; ?>
<?php include('downloadable_sidebar.php');?>
		<h1 id="welcome-title"> <?php
                    $sy_query = mysqli_query($conn, "select * from schoolyear order by school_year DESC");
                    $sy_row = mysqli_fetch_array($sy_query);
                    $sy = $sy_row['school_year'];

                    ?>
                <h4 style="margin-bottom: 20px; margin-left: 25px; ">
                    School year: <?php echo $sy_row['school_year'];  ?>
                </h4></h1>

 <!-- uploading files session message -->
                <?php

          if (isset($_SESSION['upload'])): ?> 
            <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-success text-center" id="hide">
                <?php
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
                ?>
            </div>
          <?php endif?>

		<section id="grid-container">
      <div class="container-files">
    <div class="panel panel-default">
      <div style="/*border-left: 15px solid #eba550;*/ background: #374c9d;" class="panel-heading">
        <h4 class="panel-title">
          <p style="padding-top: 10px; margin-left: 10px; color: white; " data-toggle="collapse" data-parent="#accordion" href="#collapse1">Download Files here.
          </p>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><strong></strong>
         <div id="block_bg" class="block">
                            <!-- <div class="navbar navbar-inner block-header">
              <?php   $query = mysqli_query($conn,"select * FROM files where class_id = '$get_id' order by fdatein DESC ")or die(mysqli_error());
                  $count = mysqli_num_rows($query);
              ?>
                                <div id="" class="muted pull-right"><span class="badge badge-info"><?php echo $count; ?></span></div>
                            </div> -->
                           
                   
                <?php
                  $query = mysqli_query($conn,"select * FROM files where class_id = '$get_id' order by fdatein DESC ")or die(mysqli_error());
                  $count = mysqli_num_rows($query); 
                if ($count == '0'){ ?>
                <div class="alert alert-info"><i class="icon-info-sign"></i> No downloadable Modules currently uploaded.</div>
                <?php
                }else{
                ?>
                
                  <form action="#" method="post">
                    <table id="example" class="display">
            
                    <thead>
                            <tr>
                        
                        <th>Date Upload</th>
                        <th>File Name</th>
                        <th>Description</th>
                        <th>Uploaded by</th>
                        <th></th>
                        
                        </tr>
                        
                    </thead>
                    <tbody>
                      
                                  <?php
                    $query = mysqli_query($conn,"select * FROM files where class_id = '$get_id' order by fdatein DESC ")or die(mysqli_error());
                    while($row = mysqli_fetch_array($query)){
                    $id  = $row['file_id'];
                  ?>                              
                    <tr>
                   
                             
                     <td><?php echo $row['fdatein']; ?></td>
                                         <td><?php  echo $row['fname']; ?></td>
                                         <td><?php echo $row['fdesc']; ?></td>                                      
                                         <td><?php echo $row['uploaded_by']; ?></td>                                      
                                         <td width="30">
                     <a class="btn btn-primary" data-placement="bottom" title="Download" id="<?php echo $id; ?>Download" href="<?php echo $row['floc']; ?>"><i class="fas fa-download"></i>Download</a>
                     </td>            
                            <script type="text/javascript">
                            $(document).ready(function(){
                              $('#<?php echo $id; ?>Download').tooltip('show');
                              $('#<?php echo $id; ?>Download').tooltip('hide');
                            });
                            </script>                    
                                </tr>
                         
             <?php } ?>
               
                              
                    </tbody>
                  </table>
                  </form>
             <?php } ?>   
                                </div>
                            </div>
                        </div>
      </div>
    </div>
    </div>
  </div> 
    
  </section>

  <?php 
  // include("footer.php");
  include("scripts.php");
   ?>
