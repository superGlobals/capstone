<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>
<?php include('../admin/database.php');?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('announcement_sidebar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span9" id="content">
                     <div class="row-fluid">
					  <!-- breadcrumb -->
				
										<?php $class_query = mysqli_query($conn,"select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
										where teacher_class_id = '$get_id'")or die(mysqli_error());
										$class_row = mysqli_fetch_array($class_query);
										?>
				
					     <ul class="breadcrumb">
							<li><a href="#"><?php echo $class_row['class_name']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><?php echo $class_row['subject_code']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><b>Announcements</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                         <section id="grid-container">
            <div class="container-classmate" >
    <div class="panel panel-default">
      <div class="panel-heading" style=" background: #374c9d;">
        <h4 class="panel-title">
          <p style="padding-top: 10px; margin-left: 10px; color: white; " data-toggle="collapse" data-parent="#accordion" href="#collapse1">Teacher Announcement
          </p>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><strong></strong>
								 <?php
								 $query_announcement = mysqli_query($conn,"select * from teacher_class_announcements
																	where  teacher_class_id = '$get_id' order by date DESC
																	")or die(mysqli_error());
								$count = mysqli_num_rows($query_announcement);
								if ($count > 0){
								 while($row = mysqli_fetch_array($query_announcement)){
								 $id = $row['teacher_class_announcements_id'];
								 $date = $row['date']
								 ?>
											<div class="post"  id="del<?php echo $id; ?>">
												<strong>
											<?php echo $row['content']; ?>
										  <?php include_once('time_ago.php'); ?> 
                    						  &nbsp;<?php echo facebook_time_ago($date); ?></strong>
											<hr>

											</div>
											
								<?php }}else{ ?>
								<div class="alert alert-info"><i class="icon-info-sign"></i> No Announcements Found.</div>
								<?php } ?>
                                </div>
								
							
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
				
				

					<script type="text/javascript">
	$(document).ready( function() {

		
		$('.remove').click( function() {
		
		var id = $(this).attr("id");
			$.ajax({
			type: "POST",
			url: "remove_announcements.php",
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
		<?php include('scripts.php'); ?>
    </body>
</html>