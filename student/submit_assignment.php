<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>
<?php include('../admin/database.php');?>
  <?php $get_id = $_GET['id']; ?>
<?php 
    $post_id = $_GET['post_id'];
    if($post_id == ''){
    ?>
    <script>
    window.location = "assignment_files.php<?php echo '?id='.$get_id; ?>";
    </script>
    <?php
    }
  
 ?>
   <?php include('assignment_files_sidebar.php');?>
		<h1 id="welcome-title"> <?php
                    $sy_query = mysqli_query($conn, "select * from schoolyear order by school_year DESC");
                    $sy_row = mysqli_fetch_array($sy_query);
                    $sy = $sy_row['school_year'];

                    ?>
                <h4 style="margin-bottom: 20px; margin-left: 25px; ">
                    School year: <?php echo $sy_row['school_year'];  ?>
                </h4></h1>
						 <!-- end breadcrumb -->
					<?php

          if (isset($_SESSION['success'])): ?> 
            <div style="padding: 10px; margin-bottom: 15px; font-weight: bold; color: black;" class="alert-success text-center" >
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </div>
          <?php endif?>	
						
                        <!-- block -->
                       <section id="grid-container">
      <div class="container">
    <div class="panel panel-default">
      <div style="/*border-left: 15px solid #eba550;*/ background: #374c9d;" class="panel-heading">
        <h4 class="panel-title">
          <p style="padding-top: 10px; margin-left: 10px; color: white; " data-toggle="collapse" data-parent="#accordion" href="#collapse1"><?php
									$query1 = mysqli_query($conn,"select * FROM assignment where assignment_id = '$post_id'")or die(mysqli_error());
									$row1 = mysqli_fetch_array($query1);
								
								?>
								Submit Assignment in : <?php echo $row1['fname']; ?>
								
								<div id="">
          </p>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><strong></strong>
									
  											
												
				<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
						
										<thead>
										        <tr>
												<th>Date Upload</th>
												<th>File Name</th>
												<th>Description</th>
												<th>Submitted by:</th>
												<th>Score</th>
                      						    <th>Teacher Comment</th>
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
										$query = mysqli_query($conn,"select * FROM student_send_assignment 
										LEFT JOIN student on student.student_id  = student_send_assignment.student_id
										where assignment_id = '$post_id'  order by assignment_fdatein DESC")or die(mysqli_error());
										while($row = mysqli_fetch_array($query)){
										$id  = $row['student_assignment_id'];
										$student_id = $row['student_id'];
									?>                              
										<tr>
										 <td><?php echo $row['assignment_fdatein']; ?></td>
                                         <td><?php  echo $row['fname']; ?></td>
                                         <td><?php echo $row['fdesc']; ?></td>                                                                        
                                         <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>   
										 <?php if ($session_id == $student_id){ ?>
                                         <td>
										 <span class="label label-success"><?php echo $row['grade']; ?></span>
                     					<td><?php echo $row['teacher_commend']; ?></td>   
										 </td>
										 <?php }else{ ?>
										 <td></td>
										 <?php } ?>										 
                                </tr>
                         
						 <?php } ?>
						   
                              
										</tbody>
									</table>
									</div>
								
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
					
                        <!-- /block -->
            

  </div>
</div>
				
            </div>

        </div>
        <?php include('submit_assignment_sidebar.php') ?>
		<?php include('scripts.php'); ?>
    </body>
</html>