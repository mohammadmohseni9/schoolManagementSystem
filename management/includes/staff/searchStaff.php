<form action="" method="POST" class="form-inline border-ud p-4">
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" id="staffname">
	</div>
	<div class="form-group offset-md-1">
		<label for="position">Position</label>
		<input type="text" class="form-control" id="position">
	</div>
	<button class="btn btn-primary" type='submit' id="searchStaff"><i class="fa fa-search"></i></button>
</form>
<table class="table">
	<caption>Staff Result</caption>
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Position</th>
			<th>edit</th>
			<th>detail</th>
			<th>remove</th>
		</tr>
	</thead>
	<tbody id="staffDetailTable">
		<!-- "<tr>
			<td>"+data[i].name+"</td>
			<td>"+data[i].address+"</td>
			<td>"+data[i].position+"</td>
			<td><a href='index.php?management=students&action=editStudent&id="+data[i].id+"'  class='link'>Edit</a></td>
			<td><a href='index.php?management=staffs&action=getStaffDetail&id="+data[i].id+"'  class='link'>Detail</a></td>
			<td><a href='index.php?management=staffs&action=removeStaff&id="+data[i].id+"'  class='link'>Remove</a></td>
		</tr>" -->
	</tbody>
</table>	