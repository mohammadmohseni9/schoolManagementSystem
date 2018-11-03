<!-- Student Detail -->
<div class="title">
	<p class="lead text-center">Student Detail</p>
</div>
<?php if (isset($_GET['id'])): ?>
<?php 
$studentData= $student->getStudentDetailById($_GET['id']);
$guardianData = $guardian->getGuardianByStudentId($studentData[0]->id); 
$id = $studentData[0]->id;
?>
<div class="row">
	<div class="col-md-4">
		<div class="outline text-center p-4">
			<img src="users/img/bills.jpg" class="img-fluid" alt="asd" width="200" height="200">
		</div>
		
	</div>
	<div class="col-md-8">
		<div class="jumbotron">
			<table class="table table-striped">
				<tr>
					<th>Name</th>
					<td><?php echo $studentData[0]->name ?></td>
				</tr>
				<tr>
					<th>Address</th>
					<td><?php echo $studentData[0]->address ?></td>
				</tr>
				<tr>
					<th>email</th>
					<td><?php echo $studentData[0]->email ?></td>
				</tr>
				<tr>
					<th>Grade</th>
					<td><?php echo $studentData[0]->grade ?></td>
				</tr>
				<tr>
					<th>Contact</th>
					<td><?php echo $studentData[0]->contact_no ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<?php  
?>
<?php if (count($guardianData) == 1): ?>
<div id="student-family-detail">
	<p class="lead p-2 pl-4 border border-light">Family Detail</p>
		<table class="table table-striped">
			<tr>
				<th><?php echo $guardianData[0]->relationship; ?></th>
				<td><?php echo $guardianData[0]->name; ?></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><?php echo $guardianData[0]->address; ?></td>
			</tr>
			<tr>
				<th>Contact</th>
				<td><?php echo $guardianData[0]->contact; ?></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><?php echo $guardianData[0]->email; ?></td>
			</tr>
		</table>	
</div>
<?php endif ?>
<div class="jumbo" id="student-record">
	<h3 class="text-center p-4"><i class="fa fa-archive"></i> Records</h3>
	
	<div id="student-attendance-record">
		<p class="lead p-2 pl-4 border border-light">Attendance</p>
		
		<div class="row spacing">
			<div class="col-md-6">
				<table class="table table-striped">
					<tr>
						<th>Total study days</th>
						<td>241</td>
					</tr>
					<tr>
						<th>Present days</th>
						<td>131</td>
					</tr>
					<tr>
						<th>Absent days</th>
						<td><?php echo $attendance->countOneStudentAbsent($studentData[0]->id)[0]; ?></td>
					</tr>
					<tr>
						<th>Total School Days Till Now</th>
						<td>155</td>
					</tr>
				</table>
			</div>
			<!-- Pie Chart Insert Here -->
			<div class="col-md-6 pie-chart">
				<p>This is pie chart that depends on student</p>
			</div>
			<!-- ./Pie Chart -->
		</div>
	</div>

	<div id="student-library-record" class="spacing">
		<p class="lead p-2 pl-4 border border-light">Library Records</p>
		<div class="p-4">
			<?php  
				$burrowed_books = $burrowBook->getBurrowedBooksByStudent($id); 
				$total_burrowed_books = count($burrowed_books);
			?>
			<?php if ($total_burrowed_books >= 1): ?>
			<p class="pl-4"><?php  echo $total_burrowed_books; ?> Books Taken Up Till Now</p>
			<ul>
				<?php for ($i = 0; $i < $total_burrowed_books; $i++) { ?>
					<li><?php echo $burrowed_books[$i]->title ?></li>
				<?php  } ?>
			</ul>
			<?php endif ?>
			<?php if ($total_burrowed_books == 0): ?>
				<p class="text-danger text-center">Student hasn't taken any books from library</p>
			<?php endif ?>
		</div>
	</div>
</div>
<?php endif ?>
