<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>

<?php include('../admin/database.php');?>
<?php $get_id = $_GET['id']; ?>
<?php include('join_meeting_sidebar.php');?>

  <?php $class_query = mysqli_query($conn,"select * from teacher_class 
    LEFT JOIN class ON class.class_id = teacher_class.class_id
    LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
    where teacher_class_id = '$get_id'")or die(mysqli_error());
    $class_row = mysqli_fetch_array($class_query);
    $class_id = $class_row['class_id'];
    $school_year = $class_row['school_year'];
    ?>
     <ul class="breadcrumb">
        <li><a href="#"><?php echo $class_row['class_name']; ?></a> </li>
        <li><a href="#"><?php echo $class_row['subject_code']; ?></a></li>
        <li><a href="#"><b>Live Class</b></a></li>
    </ul>
        <section id="grid-container">
            <div class="container-meeting" >
    <div class="panel panel-default">
      <div class="panel-heading" style=" background: #374c9d;">
        <h4 class="panel-title">
          <p style="padding-top: 10px; margin-left: 10px; color: white; " data-toggle="collapse" data-parent="#accordion" href="#collapse1">Join Meeting
          </p>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><strong></strong>

     <form action="#" method="post">
                    <table id="example" class="display" width="100%">
            
                    <thead>
                <tr>
                <th>Meeting Title</th>
                <th>Meeting Description</th>
                <th>Date Upload</th>
                <th>Meeting Start</th>
                <th>Meeting Link</th>
                
                
        </thead>
        <tbody>
            <?php  $query = mysqli_query($conn,"select * FROM online_meeting 
            where teacher_class_id = '$get_id' order by meeting_id DESC LIMIT 1 ")or die(mysqli_error());
            while ($row = mysqli_fetch_array($query)) {
                             ?>
         
                <td><?php echo $row['meeting_title']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['date_upload']; ?></td>
                <td><?php echo $row['meeting_start']; ?></td>
                <td><a class="btn btn-danger" href="<?php echo $row['meeting_code']; ?>"><i class="fab fa-youtube"></i>Join meeting</a></td>
            </tr>
  
            </tbody>
        </table>
    </form>
<?php }?>
        </div>
        </div>
        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>

        </div>
        <?php include('scripts.php'); ?>
      


      </div>
    </div>
    </div>
  </div> 
            
    </section>