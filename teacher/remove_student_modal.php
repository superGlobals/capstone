

  <!-- delete class -->
  <div class="modal fade" id="<?php echo $id; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete Class</h4>
        </div>
        <div class="modal-body">    
                <p class="text-center">Are you sure you want to Delete</p>
                <h3 class="text-center"><?php echo $row['firstname'] . " " . $row['lastname']; ?></h3>
               
            </div>
        <div class="modal-footer">
                <button style="border: none;" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button name="remove" class="btn btn-danger remove" id="<?php echo $id; ?>" ><i class="icon-check icon-large"></i> Yes</button>
            </div>
      </div>
      
    </div>
  </div>
  

				