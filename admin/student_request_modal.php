<!-- View student details-->
<div class="modal fade" id="view_details<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div  class="modal-content">
            <div style="background: #374c9d; "   class="modal-header">
                  <h4 style="color: white;" class="modal-title" id="myModalLabel">Student Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>       
            </div>
            <div class="modal-body"> 
            <div class="row">
  <div class="col">
    <label>Fullname</label>
    <input type="text" class="form-control" value="<?php echo $row['firstname'].' '.$row['lastname'];?>" >
  </div>
  <div class="col">
    <label>Student Number</label>
    <input type="text" class="form-control" value=" <?php echo $row['username']; ?> " placeholder="Last name" aria-label="Last name">
  </div>
</div>   
<br>
 <div class="col">
    <label>Date of Request</label>
    <input type="text" class="form-control" value=" <?php echo $row['date_of_request']; ?> " placeholder="Last name" aria-label="Last name">
  </div>
<br>
                
                <label>COR image</label>
                <img src="../teacher/<?php echo $row['student_cor']; ?>" height="200" width="470">\
                 <form action ="admin_approval.php" method ="POST">
                                        <input type = "hidden" name="id" value = "<?php echo $id; ?>"/>
                                        
                                        <button class="btn btn-success" type="submit" name="student_approve"><i class="fas fa-thumbs-up"></i> Approved</button>
                                        <button class="btn btn-danger" type="submit" name="student_decline"> <i class="fas fa-ban"></i> Decline</button>
                                      </form>
               
            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>