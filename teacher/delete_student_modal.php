
  <!-- delete student -->
  <div class="modal fade" id="<?php echo $id; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete Student</h4>
        </div>
        <div class="modal-body">    
                <p class="text-center">Are you sure you want to Remove this Student?</p>
                <!-- <h2 class="text-center"><?php echo $row['firstname'].''.$row['lastname']; ?></h2> -->
            </div>
        <div class="modal-footer">
                <button style="border: none;" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="delete_student.php?id=<?php echo $id; ?>" class="btn btn-danger"><span style="padding: 5px;" class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>
      </div>
      
    </div>
  </div>
  
