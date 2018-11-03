<?php  
	$book = new Books();
	$books_options = $book->getBooksGenre();
?>


<div class="border-ud">
	<form method="post" accept-charset="utf-8" class="form-inline inline-form-spacing">
		<div class="form-group w-50 px-md-3">
			<label for="book_name" class="control-label">Book Name</label>
			<input type="text" name="book_name" class="form-control w-100" id="book_name" placeholder="Little robin hood, Isabella ...">
		</div>
		<div class="form-group w-50 px-md-3">
			<label for="book_genre" class="control-label">Book Genre</label>
			<select name="book_genre" class="form-control w-100" id="book_genre">
				<?php for ($i = 0; $i < count($books_options); $i++) : ?>
					<option value="<?php echo $books_options[$i][0]; ?>"><?php echo $books_options[$i][0]; ?></option>
				<?php endfor ?>
			</select>
			<!-- <input type="text" name="book_genre" class="form-control" id="book_genre"> -->
		</div>
		<div class="form-group mt-2 w-100">
			<input type="submit" name="search" class="btn btn-primary" id="search_books" value="Search">
		</div>
	</form>
</div>
<div id="books_data">
	<table class="table table-stripped table-hover">
		<thead>
			<tr>
				<th>title</th>
				<th>quantity</th>
				<th>author</th>
				<th>genre</th>
			</tr>
		</thead>
		<tbody id="books_individual_data">
		</tbody>
	</table>
</div>