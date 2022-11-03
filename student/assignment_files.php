<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>
<?php include('../admin/database.php');?>
   <?php $get_id = $_GET['id']; ?>
<?php include('assignment_files_sidebar.php');?>
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
      <div class="container-assignment">
    <div class="panel panel-default">
      <div style="/*border-left: 15px solid #eba550;*/ background: #374c9d;" class="panel-heading">
        <h4 class="panel-title">
          <p style="padding-top: 10px; margin-left: 10px; color: white; " data-toggle="collapse" data-parent="#accordion" href="#collapse1">Download & Submit Assigment here
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
                  $query = mysqli_query($conn,"select * FROM assignment where class_id = '$get_id' order by fdatein DESC ")or die(mysqli_error());
                  $count = mysqli_num_rows($query); 
                if ($count == '0'){ ?>
                <div class="alert alert-info"><i class="icon-info-sign"></i> No downloadable Assignments currently uploaded.</div>
                <?php
                }else{
                ?>
                
                  
                    <table id="example" class="display">
            
                    <thead>
                            <tr>
                        
                        <th>Date Upload</th>
                        <th>File Name</th>
                        <th>Description</th>
                        <th>Uploaded by</th>
                        <th>Download</th>
                        <th>Submit</th>

                        
                        </tr>
                        
                    </thead>
                    <tbody>
                      
                                 <?php
                    $query = mysqli_query($conn,"select * FROM assignment LEFT JOIN teacher on teacher.teacher_id = assignment.teacher_id where class_id = '$get_id' order by assignment_id DESC")or die(mysqli_error());
                    while($row = mysqli_fetch_array($query)){
                    $id  = $row['assignment_id'];
                    $floc = $row['floc'];
                  ?>                              
                    <tr>
                     <td><?php echo $row['fdatein']; ?></td>
                     <td><?php  echo $row['fname']; ?></td>
                     <td><?php echo $row['fdesc']; ?></td>   
                     <td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>                                   
                     <td>
                     <form id="assign" method="post" action="submit_assignment.php<?php echo '?id='.$get_id ?>&<?php echo 'post_id='.$id ?>">
                     <input type="hidden" name="id" value="<?php echo $id; ?>">
                     <?php
                      if ($floc == ""){
                      }else{
                     ?>
                      <a class="btn btn-primary" data-placement="bottom" title="Download" id="<?php echo $id; ?>download" href="<?php echo $row['floc']; ?>"><i class="fas fa-download"></i>Download</a>
                    <?php } ?>
                  </td>
                  <td>
                     <button style="width: 190px; margin-bottom: 10px;"  data-placement="bottom" title="Submit Assignment" id="<?php echo $id; ?>submit" class="btn btn-success" name="btn_assign"><i class="fas fa-paper-plane"></i>Submit Assignment</button>
                     </form>
                     </td>                                      
                            <script type="text/javascript">
                            $(document).ready(function(){
                              $('#<?php echo $id; ?>submit').tooltip('show');
                              $('#<?php echo $id; ?>submit').tooltip('hide');
                            });
                            </script>
                                          <script type="text/javascript">
                            $(document).ready(function(){
                              $('#<?php echo $id; ?>download').tooltip('show');
                              $('#<?php echo $id; ?>download').tooltip('hide');
                            });
                            </script>                
                                </tr>
                         
             <?php } ?>
               
                              
                    </tbody>
                  </table>
                 
             <?php } ?>   
                                </div>
                            </div>
                        </div>
      </div>
    </div>
    </div>
  </div> 
   <!--  <div class="grid-item-two">
        <div class="grid-title">Send Assignment Files here.</div>
      
            
                <form class="" id="add_downloadble" method="post" enctype="multipart/form-data" name="upload" >
                        <div class="control-group">
                            <label class="control-label" for="inputEmail"></label>
                            <div class="controls">
                <input name="uploaded_file"  class="input-file uniform_on" id="fileInput" type="file" required>
                         
                                <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                                <input type="hidden" name="id" value="<?php echo $session_id ?>"/>
                                <input type="hidden" name="id_class" value="<?php echo $get_id; ?>">
                            </div>
                        </div>
                        <div class="control-group">
                      
                            <div class="controls">
                                <input type="text" name="name" Placeholder="File Name"  class="input" required>
                            </div>
                        </div>
                        <div class="control-group">
                          
                            <div class="controls">
                              <textarea style="margin-left: 20px;" name="text" placeholder="Description" required></textarea>
                               
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">

                                <button style="background: #374c9d; margin-left: 20px; text-align: center; color: white;" class="btn btn-primary" name="Upload" type="submit"/><i class="fas fa-paper-plane"></i>&nbsp;Send</button>
                            </div>
                        </div>
                    </form>
          
                      <script>
      jQuery(document).ready(function($){
        $("#add_downloadble").submit(function(e){
          e.preventDefault();
          var _this = $(e.target);
          var formData = new FormData($(this)[0]);
          $.ajax({
            type: "POST",
            url: "send_files.php",
            data: formData,
            success: function(html){
              window.location = 'downloadable_files.php<?php echo '?id='.$get_id; ?>';
            },
            cache: false,
            contentType: false,
            processData: false
          });
        });
      });
      </script> 
                </div>
                            </div>
                        </div>
                        <!-- /block -->
            

  </div>
</div>
       
                      
                    
    </section> -->
  </section>

  <?php 
  // include("footer.php");
  include("scripts.php");
   ?>
