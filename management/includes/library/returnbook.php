	<?php  $book = new Books();	?>
	<?php  $student = new student();	?>
	<h3 class="lead">Return Book</h3>
	<?php if (!isset($_GET['burrow_id'])): ?>
		
	<div class="row border-ud spacing">
		<form action="" method="POST" accept-charset="utf-8" class="form-inline">
			<div class="form-group">
				<label for="book_name">Book Name</label>
				<input type="text" class="form-control" id="book_name" name="books_name">
			</div>
			<div class="form-group">
				<label for="student_name">Student Name</label>
				<input type="text" class="form-control" id="student_name" name="student_name">
			</div>
			<input type="submit" class="btn btn-primary" name="return">
		</form>
	</div>

	<?php endif ?>

	<!-- Table to show data -->
	<?php if (isset($_POST['return'])): ?>
	
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Student</th>
				<th>Grade</th>
				<th>Book</th>
				<th>Burrowed Date</th>
				<th>Return</th>
			</tr>
		</thead>
		<!-- Burrowed student and book data -->
	
		<tbody>
		
		<?php  
			$studentName = isset($_POST['student_name']) ? $_POST['student_name'] : null;
			$bookName = isset($_POST['books_name']) ? $_POST['books_name'] : null;
			$totalBooks = $burrowBook->searchBurrowedBook($bookName,$studentName);
			for ($i = 0; $i < count($totalBooks); $i++) {
		?>
		
		<tr>
			<td class="align-middle"><?php echo $totalBooks[$i]->name ?></td>
			<td class="align-middle"><?php echo $totalBooks[$i]->grade ?></td>
			<td class="align-middle"><?php echo $totalBooks[$i]->title ?></td>
			<td class="align-middle"><?php echo date("D-M-Y",strtotime($totalBooks[$i]->burrowed)) ?></td>
			<td><a href="index.php?management=library&action=returnBook&burrow_id=<?php echo $totalBooks[$i]->id; ?>&book_id=<?php echo $totalBooks[$i]->book_id; ?>&student_id=<?php echo $totalBooks[$i]->student_id; ?>"><input type="button" class="btn btn-primary" name="" value="Return Book"></a></td>
		</tr>

		<?php } ?>
		<!-- ./Burrowed student and book data -->
		</tbody>
	</table>	
	<?php endif ?>

	<!-- Return Book -->
	<?php 
		if (isset($_POST['return_book'])) {
			$id = $_POST['burrow'];
			$condition = $_POST['condition'];
			if ($burrowBook->returnBook($id,$condition)) {
				header('Location: index.php?management=library&action=returnBook');
				$success = "Book Has Been Returned";	
			}

		}
	?>

	<?php if (isset($_GET['action']) && isset($_GET['burrow_id']) && isset($_GET['book_id']) && isset($_GET['student_id'])): ?>
	<?php  
		$bookDetail = $book->getDetailById($_GET['book_id']);
		$studentDetail = $student->getStudentDetailById($_GET['student_id']);
	?>
		<div class="col-md-8 col-lg-6 offset-md-2">
			<?php if (isset($success)): ?>
			<p class="title bg-success p-2 text-center"><?php echo $message = (isset($success))? $success : null;  ?></p>
			<?php endif ?>
			<div class="border border-inverse p-4">
				<div class="row">
					<div class="col-md-6">
						<p class="title text-normal">Name : <small class="h6"><?php echo $studentDetail[0]->name ?></small></p>
					</div>
					<div class="col-md-6">
						<p class="title text-normal">Grade : <small class="h6"><?php echo $studentDetail[0]->grade ?></small></p>
					</div>
				</div>
				<p class="title text-normal">Title : <small class="h6"><?php echo $bookDetail[0]->title ?></small></p>
				<p class="title text-normal">Genre : <small class="h6"><?php echo $bookDetail[0]->genre ?></small></p>
				<form action="" method="POST" accept-charset="utf-8">
					<input type="hidden" value="<?php echo $_GET['burrow_id']; ?>" name="burrow">
					<div class="form-group">
						<label for="condition" class="lead pt-2">Returned Book Condition</label>
						<textarea name="condition" id="condition" class="form-control" rows="5"></textarea>
					</div>
					<div class="form-group text-right">
						<input type="submit" name="return_book" class="btn btn-primary">
					</div>		
				</form>
			</div>
		</div>
	<?php endif ?>
	<!-- ./Return Book -->
