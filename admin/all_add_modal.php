<!-- add quiz modal -->
<div class="modal fade" id="addquiz" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<h4 class="modal-title text-dark" id="myModalLabel">Add Class</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_class.php">
				<div class="form-group">
					
						<label class="text-dark">Classname</label>
					
					<div class="form-group">
						<input type="text" class="form-control" name="classname" placeholder="Classname..." required>
					</div>
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" name="add_class" class="btn btn-primary"><i class="fas fa-save"></i> Add Class</a>
                	</form>
            </div>

        </div>
    </div>
</div>