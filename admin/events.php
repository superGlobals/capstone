<?php
include('includes/session.php');
include('includes/header.php'); 
include('includes/events_sidebar.php'); 

?>

<style>
  
  #calendar{
    color: black;
   
  }

 /* #events{
    color: green;
  }*/
</style>

 <?php
include('database.php');
$query = $conn->query("SELECT * FROM events ORDER BY id");
?>
  <script>
    $(document).ready(function() {
     var calendar = $('#calendar').fullCalendar({
      displayEventTime:false,
      editable:true,
      header:{
       left:'prev,next today',
       center:'title',
       right:'month,agendaWeek,agendaDay'
      },
      events: [<?php while ($row = $query ->fetch_object()) { ?>{ id : '<?php echo $row->id; ?>', title : '<?php echo $row->title; ?>', start : '<?php echo $row->start_event; ?>', end : '<?php echo $row->end_event; ?>', }, <?php } ?>],
      selectable:true,
      selectHelper:true,
      select: function(start, end, allDay)
      {
      var title = prompt("Enter Event Title");
      if(title)
      {
        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
        
        $.ajax({
        url:"add_event.php",
        type:"POST",
        data:{title:title, start:start, end:end},

        success:function(data)
        {
          // color: $("#colorPicker").val()
          calendar.fullCalendar('refetchEvents');
          alert("Added Successfully");
          window.location.replace("events.php");
        }
        })
      }
      },
 
      editable:true,
      eventResize:function(event)
      {
      var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
      var title = event.title;
      var id = event.id;
      $.ajax({
        url:"update_event.php",
        type:"POST",
        data:{title:title, start:start, end:end, id:id},
        success:function(){
        calendar.fullCalendar('refetchEvents');
        alert('Event Update');
        }
      })
      },
 
      eventDrop:function(event)
      {
      var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
      var title = event.title;
      var id = event.id;
      $.ajax({
        url:"update_event.php",
        type:"POST",
        data:{title:title, start:start, end:end, id:id},
        success:function()
        {
        calendar.fullCalendar('refetchEvents');
        alert("Event Updated");
        }
      });
      },
 
      eventClick:function(event)
      {
      if(confirm("Are you sure you want to remove it?"))
      {
        var id = event.id;
        $.ajax({
        url:"delete_event.php",
        type:"POST",
        data:{id:id},
        success:function()
        {
          calendar.fullCalendar('refetchEvents');
          alert("Event Removed");
        }
        })
      }
      },
 
    });
  });
</script>


  <div class="container">
    <div id="calendar"></div>
   
   </div>


 <!--   <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<?php
include("includes/footer.php");


?>