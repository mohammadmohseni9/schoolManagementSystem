<?php  $pageurl = "management=library"; ?>
<?php  
	$total_burrowed_books = $burrowBook->countBurrowedBooks();
	
	if (isset($_POST['addBooks'])) {
		
		$title = $_POST['title'];
		$author = $_POST['author'];
		$genre = $_POST['genre'];
		$quantity = $_POST['quantity'];
		
		if (count($title) == 1) {
			$title = strtolower($title);
			$author = strtolower($author);
			$genre = strtolower($genre);
			$quantity = (int) $quantity;
			
			
			$addBook = ['title'=>$title,'author'=>$author,'genre'=>$genre,'quantity'=>$quantity];
			$books->addBooks($addBook);
			//-- Display message
		}else{
			for ($i=0; $i < count($title); $i++) { 
				$title[$i] = strtolower($title[$i]);
				$author[$i] = strtolower($author[$i]);
				$genre[$i] = strtolower($genre[$i]);
				$quantity[$i] = (int) $quantity[$i];
				
				$addBook[$i] = ['title'=>$title[$i],'author'=>$author[$i],'genre'=>$genre[$i],'quantity'=>$quantity[$i]];
				$duplicateCheck = [$title[$i],$author[$i]];
				if ($books->checkDuplicate($duplicateCheck)[0]) {
					$duplicate[] =  $title[$i]." Book exists already";
				}else{
					$books->addBooks($addBook[$i]);
					$success[] = $title[$i]."Book added successfully";
					//-- Display message
				}
			
			}
		}
	}

?>

<div class="row-fluid">
	<?php if (!isset($_GET['books']) && !isset($_GET['action'])): ?>
		
	<div class="group">
		<h4 class="border-ud p-4 text-center">Action</h4>
		<div class="row text-center jumbotron">

			<div class="card col-xs-12 col-sm-6 offset-md-1 col-md-3 col-lg-2 p-2">
		  		<a href="?management=library&action=burrow" class="text-normal text-asbestos">
					  <div class="card-img-top text-center"><i class="fa fa-book fa-4x p-1 m-1"></i></div>
					  <div class="card-block">
					    <p class="card-title p-2 m-0">Burrow Books</p>
					  </div>
				</a>
			</div>

			<div class="card col-xs-12 col-sm-6 col-md-3 offset-md-1 col-lg-2 p-2">
			  		<a href="?management=library&books=search" class="text-normal text-asbestos">
					  <div class="card-img-top text-center"><i class="fa text-primary fa-search p-1 m-1 fa-4x"></i></div>
					  <div class="card-block">
					    <p class="card-title p-2 m-0">Search For Available Books</p>
			  		</div>
				</a>
			</div>
			

			<div class="card col-xs-12 col-sm-6 col-md-3 col-lg-2 offset-md-1 p-2">
				<a href="index.php?management=library&action=returnBook" class="text-normal">
					  <div class="card-img-top text-center"><i class="fa fa-book fa-4x p-1 m-1"></i></div>
					  <div class="card-block">
					    <p class="card-title p-2 m-0"> Return Book</p>
					  </div>
				</a>
			</div>

		</div>
		<br>
		<h4 class="text-center border-ud p-4">Status</h4>
		<div class="row text-center jumbotron">

			<div class="card col-xs-12 col-sm-6 col-md-3 col-lg-2 p-2 offset-md-1">
		  		<a href="?management=library&books=list" class="text-normal text-asbestos">
					  <div class="card-img-top text-center"><i class="fa fa-book fa-4x p-1 m-1"></i></div>
					  <div class="card-block">
					    <p class="card-title p-2 m-0">200 Total Unique Books</p>
					  </div>
				</a>
			</div>

			<div class="card col-xs-12 col-sm-6 col-md-3 col-lg-2 p-2 offset-md-1">
				<a href="index.php?management=library&books=burrowed" class="text-normal">
					  <div class="card-img-top text-center"><i class="fa fa-book fa-4x p-1 m-1"></i></div>
					  <div class="card-block">
					    <p class="card-title p-2 m-0"><?php echo $total_burrowed_books[0][0];  ?> Books Borrowed By Students</p>
					  </div>
				</a>
			</div>

			<div class="card col-xs-12 col-sm-6 col-md-3 col-lg-2 p-2 offset-md-1">
				<a href="index.php?management=library&books=deadlineapproach" class="text-normal">
					  <div class="card-img-top text-center"><i class="fa fa-book fa-4x p-1 m-1"></i></div>
					  <div class="card-block">
					    <p class="card-title p-2 m-0"> 3 Deadline Approaching</p>
					  </div>
				</a>
			</div>

			<div class="card col-xs-12 col-sm-6 col-md-3 col-lg-2 p-2 offset-md-1">
				<a href="index.php?management=library&books=deadlinepassed" class="text-normal">
					  <div class="card-img-top text-center"><i class="fa fa-book fa-4x p-1 m-1"></i></div>
					  <div class="card-block">
					    <p class="card-title p-2 m-0"> 0 Deadline Passed</p>
					  </div>
				</a>
			</div>

		</div>
		<br>
		<h4 class="border-ud p-4 text-center">Books Management</h4>
		<div class="row text-center jumbotron">
			<div class="card col-xs-12 col-sm-6 col-md-3 col-lg-2 p-1 bg-light offset-md-1">
				  	<a href="?<?php echo $pageurl; ?>&books=add" class="text-normal text-asbestos" data-toggle='modal' data-target="#addBooks">
					  <div class="card-img-top text-center"><i class="fa text-primary fa-search fa-4x p-1 m-1"></i></div>
					  <div class="card-block">
					    <p class="card-title p-2 m-0"><i class="fa fa-plus"></i> Add Books</p>
				  	</div>
				</a>
			</div>
			
			<div class="card col-xs-12 col-sm-6 col-md-3 col-lg-2 p-1 bg-light offset-md-1">
				  	<a href="?<?php echo $pageurl; ?>&books=edit" class="text-normal text-asbestos">
					  <div class="card-img-top text-center"><i class="fa text-secondary fa-search fa-4x p-1 m-1"></i></div>
					  <div class="card-block">
					    <p class="card-title p-2 m-0"><i class="fa fa-plus"></i> Edit Books</p>
				  	</div>
		 		</a>
			</div>

			<div class="card col-xs-12 col-sm-6 col-md-3 col-lg-2 p-1 bg-light offset-md-1">
				  	<a href="?<?php echo $pageurl; ?>&books=delete" class="text-normal text-danger text-asbestos">
					  <div class="card-img-top text-center">
					  	<i class=" text-danger fa text-secondary fa-book fa-4x p-1 m-1"></i>
					  </div>
					  <div class="card-block">
					    <p class="card-title p-2 m-0"><i class="fa fa-minus"></i> Delete Books</p>
				  	</div>
		 		</a>
			</div>
		</div>
	</div>
	
	<?php endif ?><!-- ./end condition for this to be shown -->
		
	<div class="clearfix"></div>

	<?php  

	if (isset($_GET['books'])){ 
		switch ($_GET['books']) {
			case "search":
				include 'management/includes/library/searchBook.php';
				break;
			
			case "deadlineapproach":
				include 'management/includes/library/deadlinebook.php';
				break;
			
			case "deadlinepassed":
				include 'management/includes/library/searchBook.php';
				break;

			case "burrowed":
				include 'management/includes/library/listburrowbook.php';
				break;

			case "list":
				include 'management/includes/library/listBooks.php';
				break;

			case "add":
				include 'management/includes/library/addBooks.php';
				break;
			default:
				header("location: index.php?management=library");
				break;
		}
	}else if (isset($_GET['action'])){ 
		switch ($_GET['action']) {
			case "burrow":
				include 'management/includes/library/burrowbook.php';
				break;
			
			case "returnBook":
				include 'management/includes/library/returnbook.php';
				break;
			
			default:
				header("location: index.php?management=library");
				break;
		}
	}
	?>

	

	<div class="modal fade" id="addBooks" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Return Book </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
			<form action="" method="POST">
		      <div class="modal-body">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" name="title" required>
					</div>
					<div class="form-group">
						<label for="author">Author</label>
						<input type="text" class="form-control" name="author" required maxlength="100">
					</div>
					<div class="row">
						<div class="col-md-6">
							<label for="genre">Genre</label>
							<input type="text" class="form-control" name="genre" required>
						</div>
						<div class="col-md-6">
							<label for="quantity">Quantity</label>
							<input type="number" class="form-control" name="quantity" required>
						</div>
					</div>
			  </div>
		      <div class="modal-footer">
						<input type="submit" class="btn btn-primary" name="addBooks" value="Add Book">
		      </div>
			</form>
	    </div>
	  </div>
	</div>


</div>