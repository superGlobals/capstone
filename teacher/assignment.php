<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>
<?php include('../admin/database.php');?>
   <?php $get_id = $_GET['id']; ?>
<?php include('assignment_sidebar.php');?>
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
      <div class="container">
    <div class="panel panel-default">
      <div style="/*border-left: 15px solid #eba550;*/ background: #374c9d;" class="panel-heading">
        <h4 class="panel-title">
          <p style="padding-top: 10px; margin-left: 10px; color: white; " data-toggle="collapse" data-parent="#accordion" href="#collapse1">Download Files here.
          </p>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><strong></strong>
         <div class="block-content collapse in">
                                <div class="span12">
                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                    <thead>
                            <tr>
                        <th>Date Upload</th>
                        <th>File Name</th>
                        <th>Description</th>
                        <th>Action</th>
                        <th>View Submitted Assignment</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                                  <?php
                    $query = mysqli_query($conn,"select * FROM assignment where class_id = '$get_id' and teacher_id = '$session_id' order by fdatein DESC ")or die(mysqli_error());
                    while($row = mysqli_fetch_array($query)){
                    $id  = $row['assignment_id'];
                    $floc  = $row['floc'];
                  ?>                              
                <tr>
                     <td><?php echo $row['fdatein']; ?></td>
                     <td><?php  echo $row['fname']; ?></td>
                     <td><?php echo $row['fdesc']; ?></td>                                      
                     <td>
                     
                    <?php 
                    if ($floc == ""){
                    }else{
                    ?>
                     <a data-placement="bottom" title="Download" id="<?php echo $id; ?>download" href="<?php echo $row['floc']; ?>"><i class="fas fa-download"></i></a>
                    <?php } ?>
                     <a data-placement="bottom" title="Remove" id="<?php echo $id; ?>remove" href="#<?php echo $id; ?>" data-toggle="modal"><i class="fas fa-trash-alt"></i></a>

                     <!-- <?php include('delete_assigment_modal.php'); ?> -->                  
                  </td>
                  <td> <form method="post" action="view_submit_assignment.php<?php echo '?id='.$get_id ?>&<?php echo 'post_id='.$id ?>">
                    <button class="btn btn-success" style="cursor: pointer;" data-placement="bottom" title="View Student who submit Assignment" id="<?php echo $id; ?>view"><i class="fas fa-folder-open"></i>View</button>
                    
                    </form> </td>                                      
                            <script type="text/javascript">
                            $(document).ready(function(){
                              $('#<?php echo $id; ?>download').tooltip('show');
                              $('#<?php echo $id; ?>download').tooltip('hide');
                            });
                            </script>
                            <script type="text/javascript">
                            $(document).ready(function(){
                              $('#<?php echo $id; ?>remove').tooltip('show');
                              $('#<?php echo $id; ?>remove').tooltip('hide');
                            });
                            </script>
                            <script type="text/javascript">
                            $(document).ready(function(){
                              $('#<?php echo $id; ?>view').tooltip('show');
                              $('#<?php echo $id; ?>view').tooltip('hide');
                            });
                            </script>
                                </tr>
             <?php } ?>
                    </tbody>
                  </table>
                                </div>
                            </div>
                        </div>

                </div>
                            </div>
                        </div>
                        <!-- /block -->

                        
                        <!-- /block -->
            

  </div>
</div>
            

  </div>
</div>
       
                      
                    
    </section>
  </section>

  <?php 
  // include("footer.php");
  include("scripts.php");
   ?>