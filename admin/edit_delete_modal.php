


<!-- Edit User-->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 style="text-align: left;" class="modal-title" id="myModalLabel">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Firstname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="firstname" value="<?php echo htmlspecialchars($row['firstname']); ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Lastname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Username:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Password:</label>
					</div>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success">Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete User-->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	  <h4 class="modal-title" id="myModalLabel">Delete User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>       
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['firstname'].' '.$row['lastname']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>


<!-- Edit Subject-->
<div class="modal fade" id="editsub_<?php echo $row['subject_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h5 class="modal-title pull-left text-dark" id="crudModal">Edit Subject</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
			 <form action="edit_subject.php" method="post">
			 	<input type="hidden" class="form-control" name="subject_id" value="<?php echo $row['subject_id']; ?>">
      <div class="modal-body">
			<div class="container-fluid">      
		  <div class="form-group">
		    <label class="text-dark">Subject Code</label>
		    <input type="text" name="subjectcode" class="form-control" placeholder="Subject Code" value="<?php echo $row['subject_code']; ?>" required>
		  </div>
		  <div class="form-group">
		     <label class="text-dark">Subject Title</label>
		    <input type="text"  name="subjecttitle" class="form-control"  placeholder="Subject Title" value="<?php echo $row['subject_title']; ?>" required>
		  </div>
		  <div class="form-group">
		     <label class="text-dark">Number of units</label>
		    <input type="number"  name="units" class="form-control"  placeholder="Number of units" value="<?php echo $row['unit']; ?>" required>
		  </div>
		  <div class="form-group">
		    <label class="text-dark" >Semester</label>
		    <select name="semester" required>
				<option ><?php echo $row['semester']; ?></option>
				<option value="1st">1st</option>
				<option value="2nd">2nd</option>
			</select>
		  </div>
		  <div class="form-group">
		     <label class="text-dark">Description</label>
		    <div class="form-floating">
 			 <textarea class="form-control" name="description"  id="floatingTextarea2"  style="height: 100px"><?php echo $row['description']; ?></textarea>

</div>
		  </div>
		  
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit_subject" class="btn btn-primary">Edit Subject</button>
      </div>
        </form> 
    </div>
  </div>
</div>


        </div>
    </div>
</div>

<!-- Delete Subject-->
<div class="modal fade" id="subject_<?php echo $row['subject_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	  <h4 class="modal-title" id="myModalLabel">Delete Subject</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>       
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><!-- <?php echo $row['firstname'].' '.$row['lastname']; ?> --></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_subject.php?id=<?php echo $row['subject_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>





<!-- Edit Class-->
<div class="modal fade" id="editclass_<?php echo $row['class_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h5 class="modal-title pull-left text-dark" id="crudModal">Edit Subject</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
			 <form action="edit_class.php" method="post">
			 	<input type="hidden" class="form-control" name="class_id" value="<?php echo $row['class_id']; ?>">
      <div class="modal-body">
			<div class="container-fluid">      
		  <div class="form-group">
		    <label class="text-dark">Class</label>
		    <input type="text" name="class" class="form-control" placeholder="Class" value="<?php echo $row['class_name']; ?>" required>
		  </div>
		 
		  </div>
		  
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit_class" class="btn btn-primary">Edit Subject</button>
      </div>
        </form> 
    </div>
  </div>
</div>


        </div>
    </div>
</div>

<!-- Delete Class-->
<div class="modal fade" id="deleteclass_<?php echo $row['class_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	  <h4 class="modal-title" id="myModalLabel">Delete Class</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>       
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['class_name'];?> Class</h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_class.php?id=<?php echo $row['class_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>





<!-- Edit Department-->
<div class="modal fade" id="editdept_<?php echo $row['department_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h5 class="modal-title pull-left text-dark" id="crudModal">Edit Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
			 <form action="edit_department.php" method="post">
			 	<input type="hidden" class="form-control" name="department_id" value="<?php echo $row['department_id']; ?>">
      <div class="modal-body">
			<div class="container-fluid">      
		  <div class="form-group">
		    <label class="text-dark">Department name</label>
		    <input type="text" name="department" class="form-control" placeholder="Department name" value="<?php echo $row['department_name']; ?>" required>
		  </div>
		 
		  <div class="form-group">
		    <label class="text-dark">Person incharge</label>
		    <input type="text" name="person" class="form-control" placeholder="Class" value="<?php echo $row['p-incharge']; ?>" required>
		  </div>
		  </div>
		  
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit_department" class="btn btn-primary">Edit Department</button>
      </div>
        </form> 
    </div>
  </div>
</div>


        </div>
    </div>
</div>

<!-- Delete Department-->
<div class="modal fade" id="deletedept_<?php echo $row['department_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	  <h4 class="modal-title" id="myModalLabel">Delete Department</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>       
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['department_name'];?> Department?</h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_department.php?id=<?php echo $row['department_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>





<!-- Edit Teacher-->
<div class="modal fade" id="edit_teacher<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title pull-left text-dark" id="crudModal">Edit Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
             <form action="edit_teacher.php" method="post">
                <input type="hidden" class="form-control" name="teacher_id" value="<?php echo $row['teacher_id']; ?>">
      <div class="modal-body">
            <div class="container-fluid">

         <div class="form-group">

                                            <label>Department:</label>
                                          
                                            <select name="department" required>
                                            <?php
                                            $query_teacher = mysqli_query($conn,"select * from teacher inner join department order by department_name")or die(mysqli_error());
                                            $row_teacher = mysqli_fetch_array($query_teacher);
                                            
                                            ?>
                                            
                                                <option value="<?php echo $row_teacher['department_id']; ?>">
                                                <?php echo $row_teacher['department_name']; ?>
                                                </option>
                                            <?php
                                            $department = mysqli_query($conn,"select * from department order by department_name");
                                            while($department_row = mysqli_fetch_array($department)){
                                            
                                            ?>
                                            <option value="<?php echo $department_row['department_id']; ?>"><?php echo $department_row['department_name']; ?></option>
                                            <?php } ?>
                                            </select>
                                          </div>
                                        
         
          <div class="form-group">
            <label class="text-dark">Firstname</label>
            <input type="text" name="firstname" class="form-control" placeholder="Class" value="<?php echo $row['firstname']; ?>" required>
          </div>
           <div class="form-group">
            <label class="text-dark">Lastname</label>
            <input type="text" name="lastname" class="form-control" placeholder="Class" value="<?php echo $row['lastname']; ?>" required>
          </div>
          </div>
          
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit_teacher" class="btn btn-primary">Edit Teacher</button>
      </div>
        </form> 
    </div>
  </div>
</div>


        </div>
    </div>
</div>

<!-- Delete Teacher-->
<div class="modal fade" id="teacher_delete<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Teacher Department</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>       
            </div>
            <div class="modal-body">    
                <p class="text-center">Are you sure you want to Delete</p>
                <!-- <h4 class="text-center">Teacher</h4> -->
                <h2 class="text-center"><?php echo $row['firstname'].' '.$row['lastname'];?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_teacher.php?id=<?php echo $row['teacher_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>




<!-- Edit Student-->
<div class="modal fade" id="edit_student<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title pull-left text-dark" id="crudModal">Edit Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
             <form action="edit_student.php" method="post">
                <input type="hidden" class="form-control" name="student_id" value="<?php echo $row['student_id']; ?>">
      <div class="modal-body">
            <div class="container-fluid">

         <div class="form-group">

                                            <label>COURSE YEAR & SECTION</label>
                                          
                                            <select name="class" required>
                                            <?php
                                            $query_student = mysqli_query($conn,"select * from student LEFT JOIN class ON class.class_id = student.class_id where student_id = '$id' ")or die(mysqli_error());
                                            $row_student = mysqli_fetch_array($query_student);
                                            
                                            ?>
                                            
                                                <option value="<?php echo $row_student['class_id']; ?>">
                                                <?php echo $row_student['class_name']; ?>
                                                </option>
                                            <?php
                                            $student = mysqli_query($conn,"select * from class order by class_name");
                                            while($student_row = mysqli_fetch_array($student)){
                                            
                                            ?>
                                            <option value="<?php echo $student_row['class_id']; ?>"><?php echo $student_row['class_name']; ?></option>
                                            <?php } ?>
                                            </select>
                                          </div>
            
             <div class="form-group">
            <label class="text-dark">ID NUMBER</label>
            <input type="text" name="id" class="form-control" placeholder="Class" value="<?php echo $row['username']; ?>" required>
          </div>       
         
          <div class="form-group">
            <label class="text-dark">Firstname</label>
            <input type="text" name="firstname" class="form-control" placeholder="Class" value="<?php echo $row['firstname']; ?>" required>
          </div>
           <div class="form-group">
            <label class="text-dark">Lastname</label>
            <input type="text" name="lastname" class="form-control" placeholder="Class" value="<?php echo $row['lastname']; ?>" required>
          </div>
          </div>
          
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit_student" class="btn btn-primary">Edit Student</button>
      </div>
        </form> 
    </div>
  </div>
</div>


        </div>
    </div>
</div>

<!-- Delete Student-->
<div class="modal fade" id="delete_delete<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Student</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>       
            </div>
            <div class="modal-body">    
                <p class="text-center">Are you sure you want to Delete</p>
                <!-- <h4 class="text-center">Teacher</h4> -->
                <h2 class="text-center"><?php echo $row['firstname'].' '.$row['lastname'];?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_student.php?id=<?php echo $row['student_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>



<!-- Edit Subject-->
<div class="modal fade" id="editsy_<?php echo $row['sy_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title pull-left text-dark" id="crudModal">Edit School Year</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
             <form action="edit_sy.php" method="post">
                <input type="hidden" class="form-control" name="sy_id" value="<?php echo $row['sy_id']; ?>">
      <div class="modal-body">
            <div class="container-fluid">      
          <div class="form-group">
            <label class="text-dark">School Year</label>
            <input type="text" name="sy" class="form-control" placeholder="School Year" value="<?php echo $row['school_year']; ?>" required>
          </div>
         
          
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit_sy" class="btn btn-primary">Edit School Year</button>
      </div>
        </form> 
    </div>
  </div>
</div>


        </div>
    </div>
</div>

<!-- Delete Subject-->
<div class="modal fade" id="deletesy_<?php echo $row['sy_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Delete Subject</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>       
            </div>
            <div class="modal-body">    
                <p class="text-center">Are you sure you want to Delete</p>
                <h2 class="text-center">SY <?php echo $row['school_year']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_sy.php?id=<?php echo $row['sy_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>


