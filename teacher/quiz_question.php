<?php
include("include/session.php");
include("include/header.php");
include("teacher_quiz_sidebar.php");

?>
<?php $get_id = $_GET['id']; ?>
		<h1 id="welcome-title"> <?php
                   include('../admin/database.php');

                    $sy_query = mysqli_query($conn, "select * from schoolyear order by school_year DESC");
                    $sy_row = mysqli_fetch_array($sy_query);
                    $sy = $sy_row['school_year'];

                    ?>
                <h3 style="margin-bottom: 20px; margin-left: 20px; ">
                    School year: <?php echo $sy_row['school_year'];  ?>
                /Question Table</h3></h1>


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
            if (isset($_SESSION['delete_question'])): ?> 
              <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-danger text-center" id="hide">
                  <?php
                  echo $_SESSION['delete_question'];
                  unset($_SESSION['delete_question']);
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


            <section id="grid-container" style="margin-top: 20px; width: 100%;">
          <div class="container" style="width: 100%;" >
            <div class="panel panel-default" style="width: 1080px;">
   

         <div style="background: #374c9d;" class="panel-heading">
                <h4 class="panel-title">
                   <p style="padding-top: 10px; margin-left: 10px; color: white;" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Quiz Queztion</p>
        </h4>
       
      </div>

     
      <div id="collapse1" class="panel-collapse collapse in">

        <div class="panel-body"><strong></strong>
                  <div class="pull-right">
                  <a href="add_question.php<?php echo '?id='.$get_id; ?>" style="margin-top: 20px; margin-bottom: 20px; background: #4e73df;" class="btn btn-info"><i class="icon-plus-sign"></i> Add Question</a>
                  <td width="30"><a href="teacher_quiz.php"  style="margin-top: 20px; margin-bottom: 20px;"  class="btn btn-success"><i class="icon-plus-sign"></i> back</a></td>   
                  </div>
                
                  <form action="delete_quiz_question.php" method="post">
                  	<input type="hidden" name="get_id" value="<?php echo $get_id; ?>">
                  	 
                    <table id="example" class="display" style="width:100%; color: black;">
                       <a data-toggle="modal" href="#delete_question" id="delete"  class="btn btn-danger" name=""><i class="fas fa-trash-alt"></i></a>
                 <?php include("delete_quiz_question_modal.php"); ?> 
                    <thead>
                            <tr>
                        <th></th>
                        <th>Question</th>
                        <th>Question Type</th>
                        <th>Answer</th>
                        <th>Date Added</th>
                        
                        </tr>
                    </thead>
                   <tbody>
                              	<?php
                    $query = mysqli_query($conn,"select * FROM quiz_question
                    LEFT JOIN question_type on quiz_question.question_type_id = question_type.question_type_id
                    where quiz_id = '$get_id'  order by date_added DESC ")or die(mysqli_error());
                    while($row = mysqli_fetch_array($query)){
                    $id  = $row['quiz_question_id'];
                  ?>                              
                    <tr >
                    <td width="30">
                      <input style="cursor: pointer;" id="optionsCheckbox" class="" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                    </td>
                        <td><?php echo $row['question_text']; ?></td>
                        <td><?php  echo $row['question_type']; ?></td>
                        <td><?php  echo $row['answer']; ?></td>   
                        <td><?php echo $row['date_added']; ?></td>                                                                          
                                                           
                    </tr>
                     
                  <?php } ?>
										</tbody>
									</table>
									</form>
                
                                </div>
                            </div>
                        </div>
	






	<?php 
	include("scripts.php");
	 ?>
