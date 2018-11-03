<?php $student = new Student(); ?>
<?php $book = new Books(); ?>
<p id="message"></p>
<?php if (isset($_GET['action']) && !isset($_GET['student'])): ?>
	<div class="spacing border-ud">
		<form action="" method="POST" accept-charset="utf-8" class="form-inline ml-4 pl-4">
			<div class="form-group">
				<label for="student_name">Student Name</label>
				<input type="text" name="student_name" id="student_name" class="form-control">
			</div>
			<div class="form-group">
				<label for="grade">Grade</label>
				<input type="text" name="student_grade" id="student_grade" class="form-control">
			</div>	
			<div class="form-group text-right">
				<input type="submit" class="btn btn-primary" id="search_student">
			</div>
		</form>
	</div>
	<div id="student_table" class="col-12">
			<table class="table col-12">
				<thead>
					<tr>
						<th>Name</th>
						<th>Grade</th>
						<th>Burrow Book</th>
					</tr>
				</thead>
				<tbody id="student_data">
					
				</tbody>
			</table>
	</div>
<?php endif ?>
<?php if (isset($_GET['action']) && isset($_GET['student']) && !isset($_GET['book'])): ?>
	<div class="border-ud">
		<form method="post" accept-charset="utf-8" class="form-inline inline-form-spacing">
			<input type="hidden" id="student_id" value="<?php echo$_GET['student']; ?>">
			<div class="form-group">
				<label for="book_name" class="control-label">Book Name</label>
				<input type="text" name="book_name" class="form-control" id="book_name">
			</div>
			<div class="form-group">
				<label for="book_genre" class="control-label">Book Genre</label>
				<input type="text" name="book_genre" class="form-control" id="book_genre">
			</div>
			<div class="form-group text-right">
				<input type="submit" name="search" class="btn btn-primary" id="burrow_books" value="Search">
			</div>
		</form>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>Title</th>
				<th>Author</th>
				<th>Genre</th>
				<th>Burrow</th>
			</tr>
		</thead>
		<tbody id="book_data">
			
		</tbody>
	</table>	
<?php endif ?>
<?php if (isset($_GET['action']) && isset($_GET['student']) && isset($_GET['book'])): ?>
<?php 
	$burrowBookDetail = $book->getDetailById($_GET['book']); 
	$studentDetail = $student->getStudentDetailById($_GET['student']); 

?>
	<div class="jumbotron">
		<div class="outline col-md-8 offset-md-2">
			<p>Title: <?php echo $burrowBookDetail[0]->title ?></p>
			<p>Genre: <?php echo $burrowBookDetail[0]->genre ?></p>
			<p>Student Name: <?php echo $studentDetail[0]->name ?></p>
			<p>Grade: <?php echo $studentDetail[0]->grade ?></p>
			<form action="" method="POST" accept-charset="utf-8">
				<p class="text-danger">Are you sure the student want to take this book? <span class="ml-4 pl-4"><input type="submit" name="confirm_book" id="confirm_book" value="Confirm" data-studentid="<?php echo $_GET['student'] ?>" data-studentname="<?php echo $studentDetail[0]->name ?>" data-bookid="<?php echo $_GET['book'] ?>" class="btn btn-primary"></span></p>
			</form>

		</div>
	</div>
<?php endif ?>


