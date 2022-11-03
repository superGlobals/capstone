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
         <div id="block_bg" class="block">
                            <!-- <div class="navbar navbar-inner block-header">
              <?php   $query = mysqli_query($conn,"select * FROM files where class_id = '$get_id' order by fdatein DESC ")or die(mysqli_error());
                  $count = mysqli_num_rows($query);
              ?>
                                <div id="" class="muted pull-right"><span class="badge badge-info"><?php echo $count; ?></span></div>
                            </div> -->
                           
                   
                <?php
                  $query = mysqli_query($conn,"select * FROM student_send_files where class_id = '$get_id' order by fdatein DESC ")or die(mysqli_error());
                  $count = mysqli_num_rows($query); 
               
                ?>
                
                 <form action="copy_file.php" method="post">
                
                  <!-- <a data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-info" name=""><i class="icon-file"></i> Copy Check item</a> -->
                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                  <!-- <?php include('move_to_school_year.php'); ?> -->
                    <thead>
                            <tr>
                        <th>Date Upload</th>
                        <th>File Name</th>
                        <th>Description</th>
                        <th>Uploaded by</th>
                        <th>Actions</th>
                        
                        </tr>
                        
                    </thead>
                    <tbody>
                      
                                  <?php
                    $query = mysqli_query($conn,"select * FROM files where class_id = '$get_id'  order by fdatein DESC ")or die(mysqli_error());
                    while($row = mysqli_fetch_array($query)){
                    $id  = $row['file_id'];
                  ?>                              
                    <tr id="del<?php echo $id; ?>">
                  
                     <td><?php echo $row['fdatein']; ?></td>
                     <td><?php  echo $row['fname']; ?></td>
                     <td><?php echo $row['fdesc']; ?></td>                                      
                     <td><?php echo $row['uploaded_by']; ?></td>                                      
                     <td width="">
                     <a  data-placement="bottom" title="Download" id="<?php echo $id; ?>download" href="<?php echo $row['floc']; ?>"><i class="fas fa-download"></i></a>
                     <a  data-placement="bottom" title="Remove" id="<?php echo $id; ?>remove" href="#<?php echo $id; ?>" data-toggle="modal"><i class="fas fa-trash-alt"></i></a>
                     <?php include('delete_download_modal.php'); ?>
                     </td>                                      
                    
                             
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
                               
                                </tr>
                         
             <?php } ?>
               
                              
                    </tbody>
                  </table>
                  </form>
            
          
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


          
          <script type="text/javascript">
  $(document).ready( function() {

    
    $('.remove').click( function() {
    
    var id = $(this).attr("id");
      $.ajax({
      type: "POST",
      url: "delete_file.php",
      data: ({id: id}),
      cache: false,
      success: function(html){
      $("#del"+id).fadeOut('slow', function(){ $(this).remove();}); 
      $('#'+id).modal('hide');
      $.jGrowl("Your Post is Successfully Deleted", { header: 'Data Delete' });
    
      }
      }); 
      
      return false;
    });       
  });

</script>

                </div>
                            </div>
                        </div>
                        <!-- /block -->

                        <!--  <div class="grid-item-two">
        <div class="grid-title">Send Files here.</div>
      
            
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
                              <input type="text" name="desc" Placeholder="Description"  class="input" required>
                               
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">

                                <button style="background: #374c9d; margin-left: 20px; text-align: center; color: white;" class="btn btn-primary" name="Upload" value="Upload" type="submit"/><i class="fas fa-paper-plane"></i>&nbsp;Send</button>
                            </div>
                        </div>
                    </form>
          
                     <script>
      jQuery(document).ready(function($){
        $("#add_downloadble").submit(function(e){
          $.jGrowl("Uploading File Please Wait......", { sticky: true });
          e.preventDefault();
          var _this = $(e.target);
          var formData = new FormData($(this)[0]);
          $.ajax({
            type: "POST",
            url: "upload_save.php",
            data: formData,
            success: function(html){
              $.jGrowl("File Successfully  Added", { header: 'File Added' });
                            setTimeout(function(){
                                window.location = 'downloadable_files.php<?php echo '?id='.$get_id; ?>';
                            },2000)
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
                        </div> -->
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
