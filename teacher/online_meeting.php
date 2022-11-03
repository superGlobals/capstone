<?php include('include/header.php'); ?>
<?php include('include/session.php'); ?>

<?php include('../admin/database.php');?>
<?php $get_id = $_GET['id']; ?>
<?php include('online_meeting_sidebar.php');?>

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
            <div class="container" >
    <div class="panel panel-default">
      <div class="panel-heading" style=" background: #374c9d;">
        <h4 class="panel-title">
          <p style="padding-top: 10px; margin-left: 10px; color: white; " data-toggle="collapse" data-parent="#accordion" href="#collapse1">Create Meeting
          </p>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><strong></strong>
           

          
<button style="width: 150px; margin-bottom: 10px;" id="start" class="btn btn-success" type="button">Get Meeting Link</button>

        <?php include('add_meeting_modal.php'); ?>
             <a id="addbtn" href="#addclass" style=" width: 180px;  
                         margin-top: 10px; margin-bottom: 10px;" data-toggle="modal" class="btn btn-primary ">Send Meeting Details</a>
               
                
         

     <form action="#" method="post">
                    <table id="example" class="display">
            
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
                <td><a class="btn btn-danger" href="<?php echo $row['meeting_code']; ?>"><i class="fas fa-play-circle"></i> Start Meeting</a></td>
               
            </tr>
  
            </tbody>
        </table>
    </form>
<?php }?>
        </div>
        </div>
        </div> -->
                        <!-- /block -->
                    </div>
                </div>
            </div>

        </div>
       
      


      </div>
    </div>
    </div>
  </div> 
    </section>
     <script type="text/javascript">
   $(document).ready(function() {
    $('#example').DataTable();
} );
 </script>

     <script src='https://meet.jit.si/external_api.js'></script>
<body>


<div id="jitsi-container" class="container align-items-center">
</div>

</div>

<script>
var button = document.querySelector('#start');
var container = document.querySelector('#jitsi-container');
var api = null;

button.addEventListener('click', () => {
    var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var stringLength = 30;

    function pickRandom() {
    return possible[Math.floor(Math.random() * possible.length)];
    }

var randomString = Array.apply(null, Array(stringLength)).map(pickRandom).join('');

    var domain = "meet.jit.si";
    var options = {
        "roomName": randomString,
        "parentNode": container,
        "width": 600,
        "height": 600,
    };
    api = new JitsiMeetExternalAPI(domain, options);
});

</script>

<script>
$(document).ready(function(){
$('#frm_data').submit(function(e){
   e.preventDefault();
    $.ajax({
        url:'insert_data.php',
        type:'GET',
        data: $(this).serialize(),
        dataType: 'json',
        success:function(data){
            if (data.status == 1) {
                alert('send successfully');
            }else{
                alert('failed');
            }
        
        },
        error: function(error){
            alert('Error accure in processing data');
        }
    });
});
});
</script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</body>
</html>