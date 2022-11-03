<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 class="modal-title text-dark" id="myModalLabel">Add New</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <form method="POST" action="add_users.php">
           <div class="modal-body">
			<div class="container-fluid">      
		  <div class="form-group">
		    <label class="text-dark">Firstname</label>
		    <input type="text" name="firstname" class="form-control" placeholder="firstname" required>
		  </div>
		  <div class="form-group">
		     <label class="text-dark">Lastname</label>
		    <input type="text"  name="lastname" class="form-control"  placeholder="lastname" required>
		  </div>
		  <div class="form-group">
		     <label class="text-dark">Username</label>
		    <input type="text"  name="username" class="form-control"  placeholder="username" required>
		  </div>
		   <div class="form-group">
		     <label class="text-dark">Password</label>
		    <input type="password"  name="password" class="form-control"  placeholder="password" required>
		  </div>
		  </div>
		  
      </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><i class="fas fa-save"></i> Add User</a>
			</form>
            </div>

        </div>
    </div>
</div>


<!-- ADD SUBJECT -->
<div class="modal fade" id="addsubject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h5 class="modal-title pull-left text-dark" id="crudModal">Add Subject</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
			 <form action="add_subject.php" method="post">
      <div class="modal-body">
			<div class="container-fluid">      
		  <div class="form-group">
		    <label class="text-dark">Subject Code</label>
		    <input type="text" name="subjectcode" class="form-control" placeholder="Subject Code" required>
		  </div>
		  <div class="form-group">
		     <label class="text-dark">Subject Title</label>
		    <input type="text"  name="subjecttitle" class="form-control"  placeholder="Subject Title" required>
		  </div>
		  <div class="form-group">
		     <label class="text-dark">Number of units</label>
		    <input type="number"  name="units" class="form-control"  placeholder="Number of units" required>
		  </div>
		  <div class="form-group">
		    <label class="text-dark">Semester</label>
		    <select name="semester" required>
				<option></option>
				<option value="1st">1st</option>
				<option value="2nd">2nd</option>
			</select>
		  </div>
		  <div class="form-group">
		     <label class="text-dark">Description</label>
		    <div class="form-floating">
 			 <textarea class="form-control" name="description" placeholder="Add Description here...." id="floatingTextarea2" style="height: 100px" required></textarea>

</div>
		  </div>
		  
      </div>

      <div class="modal-footer">
       <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="submit" name="add_subject" class="btn btn-primary"><i class="fas fa-save"></i> Add Subject</a>
      </div>
        </form> 
    </div>
  </div>
</div>


        </div>
    </div>
</div>





<!-- add class  -->
<div class="modal fade" id="addclass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 class="modal-title text-dark" id="myModalLabel">Add Class</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_class.php">
				<div class="form-group">
					
						<label class="text-dark">Classname</label>
					
					<div class="form-group">
						<input type="text" class="form-control" name="classname" placeholder="Classname..." required>
					</div>
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" name="add_class" class="btn btn-primary"><i class="fas fa-save"></i> Add Class</a>
			</form>
            </div>

        </div>
    </div>
</div>




<!-- Add Department  -->
<div class="modal fade" id="adddept" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 class="modal-title text-dark" id="myModalLabel">Add Department</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_department.php">
				<div class="form-group">
					
						<label class="text-dark">Department</label>
					
					<div class="form-group">
						<input type="text" class="form-control" name="department" placeholder="Department..." required>
					</div>
				</div>
				<div class="form-group">
					
						<label class="text-dark">Person incharge</label>
					
					<div class="form-group">
						<input type="text" class="form-control" name="person" placeholder="Person incharge..." required>
					</div>
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" name="add_department" class="btn btn-primary"><i class="fas fa-save"></i> Add Department</a>
			</form>
            </div>

        </div>
    </div>
</div>






<!-- Add Teacher  -->
<div class="modal fade" id="addteacher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 class="modal-title text-dark" id="myModalLabel">Add Teacher</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_teacher.php">
				<div class="form-group">
		    <label class="text-dark">Department</label>
		    <select name="department" required>
				<option></option>
				<?php
	            $query = mysqli_query($conn,"select * from department order by department_name");
			    while($row = mysqli_fetch_array($query)){
												
				?>
				<option value="<?php echo $row['department_id']; ?>"><?php echo $row['department_name']; ?></option>
				<?php } ?>
			</select>
		
		  </div>
				<div class="form-group">
					
						<label class="text-dark">Firstname</label>
					
					<div class="form-group">
						<input type="text" class="form-control" name="firstname" placeholder="Firstname..." required>
					</div>
				</div>
				<div class="form-group">
					
						<label class="text-dark">Lastname</label>
					
					<div class="form-group">
						<input type="text" class="form-control" name="lastname" placeholder="Lastname..." required>
					</div>
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" name="add_teacher" class="btn btn-primary"><i class="fas fa-save"></i> Add Teacher</a>
			</form>
            </div>

        </div>
    </div>
</div>



<!-- Add Stundent  -->
<div class="modal fade" id="addstudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 class="modal-title text-dark" id="myModalLabel">Add Student</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_student.php">
				<div class="form-group">
		    <label class="text-dark">COURSE YR & SECTION</label>
		    <select name="section" required>
				<option></option>
				<?php
	            $query = mysqli_query($conn,"select * from class order by class_name");
			    while($row = mysqli_fetch_array($query)){
												
				?>
				<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
				<?php } ?>
			</select>
		
		  </div>
		  		<div class="form-group">
					
						<label class="text-dark">ID Number</label>
					
					<div class="form-group">
						<input type="text" class="form-control" name="idnumber" placeholder="ID Number..." required>
					</div>
				</div>
				<div class="form-group">
					
						<label class="text-dark">Firstname</label>
					
					<div class="form-group">
						<input type="text" class="form-control" name="firstname" placeholder="Firstname..." required>
					</div>
				</div>
				<div class="form-group">
					
						<label class="text-dark">Lastname</label>
					
					<div class="form-group">
						<input type="text" class="form-control" name="lastname" placeholder="Lastname..." required>
					</div>
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" name="add_student" class="btn btn-primary"><i class="fas fa-save"></i> Add Student</a>
			</form>
            </div>

        </div>
    </div>
</div>









<!-- Add Stundent  -->
<div class="modal fade" id="addsy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 class="modal-title text-dark" id="myModalLabel">ADD SCHOOL YEAR</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_sy.php">
				<div class="form-group">
		    
		  </div>
		  		<div class="form-group">
					
						<label class="text-dark">SCHOOL YEAR</label>
					
					<div class="form-group">
						<input type="text" class="form-control" name="sy" placeholder="SCHOOL YEAR..." required>
					</div>
				</div>
			</div>
		</div>
				
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" name="add_sy" class="btn btn-primary"><i class="fas fa-save"></i> Add SY</a>
			</form>
            </div>

        </div>
    </div>
</div>