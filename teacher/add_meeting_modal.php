

<div class="modal fade" id="addclass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-dark" id="myModalLabel">Send Meeting Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
            <div class="container-fluid">
            <form action="add_meeting.php<?php echo '?id='.$get_id; ?>" method="POST">
                <div class="form-group">
                    
                        <!-- <label class="text-dark">Classname</label> -->
                    
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Title" required>

                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="meeting_id" placeholder="Meeting Code" required>
                       
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-control" name="meeting_start" placeholder="Start Time" required>
                       
                    </div>
                    <div class="form-group">
                       <?php $query = mysqli_query($conn,"select * from teacher_class
                    LEFT JOIN class ON class.class_id = teacher_class.class_id
                    LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
                    where teacher_class_id = '$get_id'")or die(mysqli_error());
                    $count = mysqli_num_rows($query);
                    

                    while($row = mysqli_fetch_array($query)){
                    $id = $row['teacher_class_id'];

                    ?>
                    <br>
                    <label>Send Meeting Code to This Class</label>
                    <br>
                    <input style="cursor: pointer;" type="hidden" id="selector" name="selector" value="<?php echo $id; ?>">
                    </td>
                    <?php echo $row['class_name']; ?>
                    <?php echo $row['subject_code']; ?>
                    </tr>
                    <?php } ?>
                    <br><br>
                     <div class="form-group">
                       <textarea style="width: 300px; height: 100px;" name="description" placeholder="Add Description..."></textarea>
                       
                    </div>
                       
                    </div>
                </div>
                
            </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button style="width: 150px;" type="submit" name="submit"  class="btn btn-primary"><i class="fas fa-save"></i> Send Details</a>
            </form>
            </div>

        </div>
    </div>
</div>
