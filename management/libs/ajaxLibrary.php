<?php  
	session_start();
	include_once '../../classes/db.php';
	include_once '../../classes/books.php';
	include_once '../../classes/burrowbook.php';
	include_once '../../classes/student.php';

	if (!$_SESSION['logged_in']) {
		header('Location: ../../index.php');
	}
	$conn= new Db();
	$book =  new books();
	$student =  new Student();
	$burrowBook = new BurrowBook();

// Detecting Request Method
if (isset($_POST['action'])) {
	$action = $_POST['action'];
	switch ($action) {
		case 'search':
			$name = (isset($_POST['name'])&&!empty($_POST['name']))?$_POST['name']:null;
			$genre = (isset($_POST['genre'])&&!empty($_POST['genre']))?$_POST['genre']:null;

			$sql = "SELECT * FROM books WHERE ";

			$param = ['title LIKE'=>"$name","genre"=>$genre];
			$param = array_filter($param);
			$paramKey = array_keys($param);
			$paramValue = array_values($param);

			if (count($param) > 1) {

			 	for ($i=0; $i < count($param) ; $i++) { 
					 	$condition = ($i > 0) ? " AND ": null;
					 	if (strpos($paramKey[$i],"LIKE") !== false) {
					 		$sql .= "$condition $paramKey[$i] ? ";
					 		$paramValue[$i] = "%$paramValue[$i]%";
					 	}else{
					 		$sql .= "$condition $paramKey[$i] = ? ";
					 	}	
			 	}
			}else{
				if (strpos($paramKey[0],"LIKE") !== false) {
			 		$paramValue[0]="%$paramValue[0]%";
			 		$sql .= " $paramKey[0] ? ";
			 	}else{
			 		$sql .= " $paramKey[0]=? ";
			 	}
			} 
			// Replacing double space with single in query
			$sql = preg_replace('!\s+!', ' ', $sql);
			
			$query = $conn->query($sql,$paramValue);
			$result = $conn->fetchObject($query);
			echo json_encode($result);
			break;
		
		case 'delete':
			$data = $_POST['data'];
			$result = $books->deleteBooks($data);
			
			if ($result) {
				echo 'Successfully deleted Book';
			}
			break;
		
		case 'deadlineapproach':

			break;
		
		case 'burrowed':
			$burrowedBooks = $burrowBook->getBurrowedBooks();
			// Getting book and student id
			// print_r($burrowedBooks);

			if (count($burrowedBooks) > 1) {
				for ($i = 0; $i < count($burrowedBooks); $i++) {
					$book_id[] = $burrowedBooks[$i]->book_id;
					$student_id[] = $burrowedBooks[$i]->student_id;
				}
			}else{
				$book_id = $burrowedBooks[0]->book_id;
				$student_id = $burrowedBooks[0]->student_id;
			}

			// Echoing IN JSON DATA 
			echo json_encode([$burrowedBooks]);
			
			break;

		case 'burrow_book':
			$student = $_POST['studentid'];		
			$bookid = $_POST['bookid'];

			$data = $burrowBook->setBurrowedBooks($student,$bookid);
			if ($data) {
				echo "Book has been burrowed successfully";			
			}		
			break;
		case 'list':
			$totalBooks = $book->getBookDetail([1=>1]);
			echo json_encode($totalBooks);
			break;
	}



}





?>