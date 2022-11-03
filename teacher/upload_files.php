<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>
<?php include('upload_files_sidebar.php');?>
<?php include('../admin/database.php');?>



    <h1 id="welcome-title"> <?php
                    include('../admin/database.php');

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
        <section id="grid-container" style="margin-top: 20px; width: 100%;">
          <div class="container" style="width: 100%;" >
            <div class="panel panel-default" style="width: 140%;">
   

         <div style="background: #374c9d;" class="panel-heading">
                <h4 class="panel-title">
                   <p style="padding-top: 10px; margin-left: 10px; color: white;" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Upload files</p>
        </h4>
       
      </div>
     
      <div id="collapse1" class="panel-collapse collapse in">

        <div class="panel-body"><strong></strong>
          <form class="" id="add_downloadble" method="post" enctype="multipart/form-data" name="upload" >
                        <div class="control-group">
                            <label class="control-labels" for="inputEmail">File:</label>
                            <div class="controlas">
                <input name="uploaded_file"  class="input-file uniform_on" id="fileInput" type="file" required>
                         
                                <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                                <input type="hidden" name="id" value="<?php echo $session_id ?>"/>
                            </div>
                        </div>
                        <div class="control-group">
                   
                            <div class="controlas">

                                <input type="text" placeholder="file name" name="name" class="input" required>
                            </div>
                        </div>
                        <div class="control-group">
                          
                            <div class="controlas">

                                <textarea name="desc" Placeholder="Description"  class="input" required></textarea>
                            </div>
                        </div>

                        <script>
      jQuery(document).ready(function($){
        $("#add_downloadble").submit(function(e){
          e.preventDefault();
          var _this = $(e.target);
          var formData = new FormData($(this)[0]);
          $.ajax({
            type: "POST",
            url: "upload_files_save.php",
            data: formData,
            success: function(html){
              // console.log(html)
              // return false
              setTimeout(function(){
                window.location = 'upload_files.php';
              },1000)
            },
            cache: false,
            contentType: false,
            processData: false
          });
        });
      });
      </script>

      </div>
                  <div class="span8">
                      
      <!-- <div class="alert alert-info">Check The Class you want to put this file.</div> -->
          
                  <div class="pull-left">
              Check All <input style="cursor: pointer;" type="checkbox"  name="selectAll" id="checkAll" />
                <script>
                $("#checkAll").click(function () {
                  $('input:checkbox').not(this).prop('checked', this.checked);
                });
                </script>         
              </div>
                      <table cellpadding="0" cellspacing="0" border="0" class="table" id="">

                    <thead>
                            <tr>
                        <th></th>
                        <th>Class Name</th>
                        <th>Subject Code</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                      
                                <?php $query = mysqli_query($conn,"select * from teacher_class
                    LEFT JOIN class ON class.class_id = teacher_class.class_id
                    LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
                    where teacher_id = '$session_id' and school_year = '$sy' ")or die(mysqli_error());
                    $count = mysqli_num_rows($query);

                    while($row = mysqli_fetch_array($query)){
                    $id = $row['teacher_class_id'];
        
                    ?>                             
                    <tr id="del<?php echo $id; ?>">
                      <td width="30">
                        <input style="cursor: pointer;" id="" class="" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                      </td>
                      <td><?php echo $row['class_name']; ?></td>
                      <td><?php echo $row['subject_code']; ?></td>                                                                   
                    </tr>
                         
            <?php } ?>
              
               
                              
                    </tbody>
                  </table>
            
                  
                                </div>
                <div class="span10">
                <hr>
                  
                  <div class="control-group">
                        <div class="controls">
                          <button style="margin:0px 0px 10px 10px; width: 100px;" name="Upload" type="submit" value="Upload" class="btn btn-success" /><i class="fas fa-paper-plane"></i>Upload</button>
                        </div>
                        </div>
                 
             
                   </form>    
                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
      

                </div>
              <?php/*  include('teacher_right_sidebar.php')  */?>
  
            </div>

        </div>
    <?php include('scripts.php'); ?>
          
          
                
                 


























      