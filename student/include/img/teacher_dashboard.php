<?php
include "session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NEUST-POC LMS</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			  $(".wrapper").toggleClass("active")
			})
		});
	</script>
</head>
<body>

<div class="wrapper">

	<div class="top_navbar">
		<div class="logo">
			<a href="#">Coding Market</a>
		</div>
		<div class="top_menu">
			<div class="home_link">
				<a href="logout.php">
					<span class="icon"><i class="fas fa-home"></i></span>
					<span>Home</span>
				</a>
			</div>
			<div class="right_info">
				<div class="icon_wrap">
					<div class="icon">
						<i class="fas fa-bell"></i>
					</div>
				</div>
				<div class="icon_wrap">
					<div class="icon">
						<i class="fas fa-cog"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main_body">
		
		<div class="sidebar_menu">
	        <div class="inner__sidebar_menu">
	        	
	        	<ul>
		          <li>
		            <a href="#" class="active">
		              <span class="icon">
		              	<i class="fas fa-users"></i></span>
		              <span class="list">My class</span>
		            </a>
		          </li>
		          <li>
		            <a href="#" >
		              <span class="icon"><i class="fas fa-plus-circle"></i></i></span>
		              <span class="list">Add announcement</span>
		            </a>
		          </li>
		          <li>
		            <a href="#"	>
		              <span class="icon"><i class="fas fa-plus-circle"></i></i></span>
		              <span class="list">Add assignment</span>
		            </a>
		          </li>
		          <li>
		            <a href="#">
		              <span class="icon"><i class="fas fa-bars"></i></i></i></span>
		              <span class="list">Quiz</span>
		            </a>
		          </li>
		          <li>
		            <a href="#">
		              <span class="icon"><i class="far fa-file-alt"></i></i></span>
		              <span class="list">Shared files</span>
		            </a>
		          </li>
		          <li>
		            <a href="#">
		              <span class="icon"><i class="fas fa-map-marked-alt"></i></span>
		              <span class="list">Maps</span>
		            </a>
		          </li>
		        </ul>

		        <div class="hamburger">
			        <div class="inner_hamburger">
			            <span class="arrow">
			                <i class="fas fa-long-arrow-alt-left"></i>
			                <i class="fas fa-long-arrow-alt-right"></i>
			            </span>
			        </div>
			    </div>

	        </div>
	    </div>

	    <div class="container">
	    	 <?php
                    include("database.php");

                    $sy_query = mysqli_query($conn, "select * from schoolyear order by school_year DESC");
                    $sy_row = mysqli_fetch_array($sy_query);
                    $sy = $sy_row['school_year'];

                    ?>
                <h5 class="mt-2" style="margin-bottom: 20px; ">
                    School year: <?php echo $sy_row['school_year'];  ?>
                </h5>
	    	<div class="item_wrap">
	    		
	    		<div class="card-main" style="width: 55rem; height: 30rem; box-shadow: 1px 1px 1px 2px;	">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <div class="card bg-light mb-3" style="max-width: 10rem; height: 10rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text"></p>
  </div>
</div>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>	

<!-- <div class="div1" style=" width: 55rem;
  height: 30rem;
  border: 1px solid blue;">This div is smaller (width is 300px and height is 100px).</div> -->


	    			<div class="card" style="width: 20rem; height: 20rem; margin-left: 20px; box-shadow: 1px 1px 1px 2px;">
  <div class="card-body">
    <h5 class="card-title">Add Class</h5>
   <form method="post" action="add_class.php" method="post">
										<div class="control-group">
											<label>Class Name:</label>
                                          <div class="controls">
											<input type="hidden" name="session_id" value="<?php echo $session_id; ?>">

											<select class="form-select" name="class_id" aria-label="Default select example" style="width: 12rem; height: 2rem; cursor: pointer; border-color:  #1e90ff; border-radius: 5px;">
												  <option selected></option>
												  <?php
											$query = mysqli_query($conn,"select * from class order by class_name");
											while($row = mysqli_fetch_array($query)){
											
											?>
												 <option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
											<?php } ?>
                                            </select>




                                          
											
											
                                          </div>
                                        </div>




                                        	<div class="control-group">
											<label>Subject:</label>
                                        <select class="form-select"  name="subject_id" aria-label="Default select example" style="width: 12rem; height: 2rem; cursor: pointer; border-color:  #1e90ff; border-radius: 5px;">
												  <option selected></option>
												 <?php
											$query = mysqli_query($conn,"select * from subject order by subject_code");
											while($row = mysqli_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['subject_id']; ?>"><?php echo $row['subject_code']; ?></option>
											<?php } ?>
                                            </select>
										
									
                                     
										
										<div class="control-group">
											<label>School Year:</label>
                                          <div class="controls">
											<?php
											$query = mysqli_query($conn,"select * from schoolyear order by school_year DESC");
											$row = mysqli_fetch_array($query);
											?>


											 <input type="text" name="school_year" class="form-control"  name="school_year" value="<?php  echo $row['school_year']; ?>"  required>




											 <button name="save" class="btn btn-success" style="margin-top: 10px;">Add</button>

											
                                </form>
  </div>
</div>






	    						<!-- block -->
                       <!--  <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"><h4><i class="icon-plus-sign"></i> Add class</h4></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12"> -->
								
								
           <!--  <script>
			jQuery(document).ready(function($){
				$("#add_class").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "add_class_action.php",
						data: formData,
						success: function(html){
						if(html=="true")
						{
						$.jGrowl("Class Already Exist", { header: 'Add Class Failed' });
						}else{
							$.jGrowl("Classs Successfully  Added", { header: 'Class Added' });
							var delay = 500;
							setTimeout(function(){ window.location = 'dasboard_teacher.php'  }, delay);  
						}
						}
					});
				});
			});
			</script>	 -->	

								</div>
                            </div>
                        </div>
                        <!-- /block -->
						
</div>
	    		
	    	</div>
	    	
	    	
	    </div>
	</div>
</div>
	

</body>
</html>