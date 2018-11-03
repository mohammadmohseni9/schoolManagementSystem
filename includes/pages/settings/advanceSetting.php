<?php  
	if (isset($_POST['name'])) {
		$data = ['content'=>trim($_POST['institution_name'])];
		$result = $option->setOptions($data,$idOfInstitution);
		if($result)
		{
			header ('Location: index.php?page=settings&subpage=advance');
		}
	}
?>

<form action="" method="POST" class="col-md-4">
	<div class="form-group">
		<label for="name">Institution Name</label>
		<input type="text" name="institution_name" class="form-control" value="<?php echo $nameOfInstitution; ?>">
	</div>
	<div class="form-group text-right">
		<input type="submit" name="name" class="btn asbestos">
	</div>
</form>