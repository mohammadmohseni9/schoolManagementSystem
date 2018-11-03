<p class="text-center">Take Attendance</p>
<!-- <div class="row"> -->
	<form class="form-inline border border-inverse p-4" id="attendance_form" method="POST">
		<div class="form-group">
			<label for="name" class="pl-3 pr-3">Name</label>
			<input type="text" class="form-control" name="name" id="name">
		</div>
		<div class="form-group">
			<label for="grade" class="pl-3 pr-3">Grade</label>
			<input type="text" class="form-control" name="grade" id="grade">
		</div>
		<div class="form-group">
			<label for="rollno" class="pl-3 pr-3">Roll No</label>
			<input type="text" class="form-control" name="rollno" id="rollno">
		</div>
		<div class="form-group">
			<button type="submit" id="search_student" class="btn btn-primary"><i class="fa fa-search"></i></button>
			<!-- <input type="submit" class="btn btn-primary" value="Search" id="search_student"> -->
		</div>
	</form>
<!-- </div> -->
		
<div id="absentStudent"></div>	
<div class="row">
	<div class="col-sm-12">
		<table class="table table-striped" id="student_table">
			<thead>
				<tr>
					<td>Name</td>
					<td>address</td>
					<td>grade</td>
					<td>Click to absent Student</td>
				</tr>
			</thead>
			<tbody id="studentTable">
			</tbody>
		</table>
	</div>
</div>
	
