<?php
    include('scripts.php');
?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>YouCode | Scrum Board</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
</head>
<body>
	<!-- TASK MODAL -->
	<div class="" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form-task">
					<div class="modal-header">
						<h5 class="modal-title">Form Validation</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
							<div class="mb-3">
								<label class="form-label">Title</label>
								<input type="text" class="form-control" name="task-title" id="task-title"/>
                                <p class="text-danger">
                                    <?php
                                        if(isset($titleVal)){
                                            echo $titleVal;
                                        }
                                    ?>
                                </p>
							</div>
							<div class="mb-3">
								<label class="form-label">Telephone</label>
								<input type="text" class="form-control" name="task-tel" id="task-tel"/>
                                <p class="text-danger">
                                    <?php
                                        if(isset($phoneVal)){
                                            echo $phoneVal;
                                        }
                                    ?>
                                </p>
							</div>
							<div class="mb-3">
								<label class="form-label">Mail</label>
								<input type="text" class="form-control" name="task-mail" id="task-mail"/>
                                <p class="text-danger">
                                    <?php
                                        if(isset($mailVal)){
                                            echo $mailVal;
                                        }
                                    ?>
                                </p>
							</div>
							<div class="mb-0">
								<label class="form-label">Description</label>
								<textarea class="form-control" rows="5" id="task-description" name="task-description"></textarea>
                                <p class="text-danger">
                                    <?php
                                        if(isset($descVal)){
                                            echo $descVal;
                                        }
                                    ?>
                                </p>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="save" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		//reloadTasks();
	</script>
</body>
</html>