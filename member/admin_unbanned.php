	<div id="delete_user<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-danger">Are you Sure want to Unbanned this Student?</div>

		</div>
		<div class="modal-footer">
			<a class="btn btn-danger" href="admin_unbanned_confirm.php<?php echo '?id='.$id; ?>"><i class="icon-check"></i>&nbsp;Yes</a>
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
