<?php
include("include/session.php");
include("include/header.php");
include("teacher_quiz_sidebar.php");

?>
    <h1 id="welcome-title"> <?php
                   include('../admin/database.php');

                    $sy_query = mysqli_query($conn, "select * from schoolyear order by school_year DESC");
                    $sy_row = mysqli_fetch_array($sy_query);
                    $sy = $sy_row['school_year'];

                    ?>
                <h4 style="margin-bottom: 20px; margin-left: 25px; ">
                    School year: <?php echo $sy_row['school_year'];  ?>
               /Quiz </h4></h1>


<!-- Add data session -->   
             <?php

          if (isset($_SESSION['message'])): ?> 
            <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-success text-center" id="hide">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
          <?php endif?>


<!-- delete data session -->
            <?php
            if (isset($_SESSION['quiz_delete'])): ?> 
              <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-danger text-center" id="hide">
                  <?php
                  echo $_SESSION['quiz_delete'];
                  unset($_SESSION['quiz_delete']);
                  ?>
              </div>
            <?php endif?>


<!-- update data session -->
            <?php
            if (isset($_SESSION['update_message'])): ?> 
              <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-success text-center" id="hide">
                  <?php
                  echo $_SESSION['update_message'];
                  unset($_SESSION['update_message']);
                  ?>
              </div>
            <?php endif?>


<!-- validate username session -->
             <?php
            if (isset($_SESSION['validate'])): ?> 
              <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-danger text-center" id="hide">
                  <?php
                  echo $_SESSION['validate'];
                  unset($_SESSION['validate']);
                  ?>
                  </div>
            <?php endif?>





<section id="grid-container-quiz" style="margin-top: 20px; width: 100%;">
          <div class="container-quiz" style="width: 100%;" >
            <div class="panel panel-default" style="margin-left: 20px; width: 95%;">
   

         <div style="background: #374c9d;" class="panel-heading">
                <h4 class="panel-title">
                   <p style="padding-top: 10px; margin-left: 10px; color: white;" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Quiz</p>
        </h4>
       
      </div>
     
      <div id="collapse1" class="panel-collapse collapse in">

        <div class="panel-body"><strong></strong>
          <div class="pull-right">
                  <a href="add_quiz.php" style="margin-top: 20px; margin-bottom: 20px; background: #4e73df;" class="btn btn-info"><i class="fas fa-plus-circle"></i> Add Quiz Category</a>
                  <td width="30"><a href="add_quiz_to_class.php"  style="margin-top: 20px; margin-bottom: 20px;"  class="btn btn-success"><i class="fas fa-plus-circle"></i> Add Quiz to Class</a></td>   
                  </div>
                
                  <form action="delete_quiz.php" method="post">
                   <table class="table" id="example">
                 
                    <thead>
                            <tr>
                        <th></th>
                        <th>Quiz title</th>
                        <th>Description</th>
                        <th>Date Added</th>
                        <th>Questions</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                                  <?php
                    $query = mysqli_query($conn,"select * FROM quiz where teacher_id = '$session_id'  order by date_added DESC ")or die(mysqli_error());
                    while($row = mysqli_fetch_array($query)){
                    $id  = $row['quiz_id'];
                  ?>                              
                    <tr id="del<?php echo $id; ?>">
                    <td>
                    <!--   <input id="optionsCheckbox" class="" name="selector[]" type="checkbox" value="<?php echo $id; ?>"> -->
                    </td>
                     <td><?php echo $row['quiz_title']; ?></td>
                                         <td width="200"><?php  echo $row['quiz_description']; ?></td>
                                         <td><?php echo $row['date_added']; ?></td>                                      
                                         <td><a class="btn btn-primary" href="quiz_question.php<?php echo '?id='.$id; ?>"><i class="fas fa-plus-circle"></i> AddQuestions</a></td>                                      
                                         <td><a title="Edit" href="edit_quiz.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a> 
                                          <a title="Delete" href="#deleteq_<?php echo $id; ?>" data-toggle='modal' class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td> 
                                         
                                         
                                         </tr>
  <?php include("delete_quiz_modal.php"); ?> 
                  <?php } ?>
                    </tbody>

                  </table>
                  </form>


                        </div>
                          <?php 
 
  include("scripts.php");
  
   ?>