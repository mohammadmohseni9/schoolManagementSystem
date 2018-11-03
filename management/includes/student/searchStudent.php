<div class="searchForm">
	<form method="post" accept-charset="utf-8" class="form-inline inline-form-spacing">
		<div class="form-group">
			<label for="student_name" class="control-label">Student Name</label>
			<input type="text" name="student_name" class="form-control" id="student_name">
		</div>
		<div class="form-group offset-1">
			<label for="student_grade" class="control-label">Grade</label>
			<input type="text" name="student_grade" class="form-control" id="student_grade">
		</div>
		<div class="form-group text-right">
			<input type="submit" name="search" class="btn btn-primary" id="search_student" value="Search">
		</div>
	</form>
</div>
<table class="table table-striped" id="editAndDeleteTable">
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Grade</th>
		</tr>
	</thead>
	<tbody id="studentTableData">
	</tbody>
</table>