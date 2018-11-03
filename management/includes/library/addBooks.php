
	<div id="add" class="row-fluid">
		<?php  $pageurl = "management=library&books=add"; ?>
			<a href="?<?php echo $pageurl; ?>&type=one">Add One</a>
			<a href="?<?php echo $pageurl; ?>&type=bulk">Add Many</a>
		<?php if (isset($_GET['type'])): ?>
		<?php  
			$type = $_GET['type'];
			if ($type == 'one') {
		?>
		<div class="col col-md-6 offset-md-2">
			<form action="" method="POST" name="one">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" name="title" required>
				</div>
				<div class="form-group">
					<label for="author">Author</label>
					<input type="text" class="form-control" name="author" required maxlength="100">
				</div>
				<div class="form-group">
					<label for="genre">Genre</label>
					<input type="text" class="form-control" name="genre" required>
				</div>
				<div class="form-group">
					<label for="quantity">Quantity</label>
					<input type="number" class="form-control" name="quantity" required>
				</div>
				<div class="form-group text-right">
					<input type="submit" class="btn btn-primary" name="addBooks">
				</div>
			</form>
		</div>
		<?php 
		} else{
		?>
		<!-- BUlk -->
		<form action="" method="POST" name="bulk">
			<table class="table">
				<caption>Add Books</caption>
				<thead>
					<tr>
						<th>Title</th>
						<th>Author</th>
						<th>Genre</th>
						<th>Quantity</th>
					</tr>
				</thead>
				<tbody>
					<div class="form-group">
						<tr class="add-book">
							<td><input type="text" name="title[]"></td>
							<td><input type="text" name="author[]" maxlength="100"></td>
							<td><input type="text" name="genre[]"></td>
							<td><input type="number" name="quantity[]"></td>
						</tr>
						<tr class="add-book">
							<td><input type="text" name="title[]"></td>
							<td><input type="text" name="author[]" maxlength="100"></td>
							<td><input type="text" name="genre[]"></td>
							<td><input type="number" name="quantity[]"></td>
						</tr>
						<tr class="add-book">
							<td><input type="text" name="title[]"></td>
							<td><input type="text" name="author[]" maxlength="100"></td>
							<td><input type="text" name="genre[]"></td>
							<td><input type="number" name="quantity[]"></td>
						</tr>
						<tr class="add-book">
							<td><input type="text" name="title[]"></td>
							<td><input type="text" name="author[]" maxlength="100"></td>
							<td><input type="text" name="genre[]"></td>
							<td><input type="number" name="quantity[]"></td>
						</tr>
					</div>	
				</tbody>
			</table>
			<div class="form-group text-right">
				<input type="submit" name="addBooks" class="btn btn-primary"> 
			</div>
		</form>
		<?php } ?>
		<?php endif ?>
	</div>