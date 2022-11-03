<div class="grid-item-two">
        <div class="grid-title">Submit Your Assignment here</div>
      
            
                <form id="add_assignment"   method="post" enctype="multipart/form-data">
                        <div class="control-group">
                            <label class="control-label" for="inputEmail"></label>
                            <div class="controls">
              <input name="uploaded_file"  class="input-file uniform_on" id="fileInput" type="file" required>
                         
                                <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                                <input type="hidden" name="id" value="<?php echo $post_id; ?>"/>
                                <input type="hidden" name="get_id" value="<?php echo $get_id; ?>"/>
                            </div>
                        </div>
                        <div class="control-group">
                      
                            <div class="controls">
                                <input type="text" name="name" Placeholder="File Name"  class="input" required>
                            </div>
                        </div>
                        <div class="control-group">
                          
                            <div class="controls">
                              <textarea style="margin-left: 20px;" name="desc" placeholder="Description" required></textarea>
                               
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">

                                <button style="background: #374c9d; margin-left: 20px; text-align: center; color: white; width: 100px;" class="btn btn-primary" name="Upload" type="submit"/><i class="fas fa-paper-plane"></i> Submit</button>
                            </div>
                        </div>
                    </form>
          
                     <script>
      jQuery(document).ready(function($){
        $("#add_assignment").submit(function(e){
          e.preventDefault();
          var _this = $(e.target);
          var formData = new FormData($(this)[0]);
          $.ajax({
            type: "POST",
            url: "upload_assignment.php",
            data: formData,
            success: function(html){
              
              window.location = 'submit_assignment.php<?php echo '?id='.$get_id.'&'.'post_id='.$post_id; ?>';
            },
            cache: false,
            contentType: false,
            processData: false
          });
        });
      });
      </script> 
                </div>
                            </div>
                        </div>