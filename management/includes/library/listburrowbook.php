<table class="table table-striped">
	<thead>
		<tr>
			<th>Student Name</th>
			<th>Grade</th>
			<th>Book Name</th>
			<th>Genre</th>
			<th>Deadline</th>
		</tr>
	</thead>
	<tbody>
	<?php  
		$list = $burrowBook->getBurrowedBooks();
		for ($i = 0; $i < count($list) ; $i++) {
	?>
	
	<tr>
		<td><?php echo $list[$i]->name ?></td>
		<td><?php echo $list[$i]->grade ?></td>
		<td><?php echo $list[$i]->title ?></td>
		<td><?php echo $list[$i]->genre ?></td>
		<td><?php echo $list[$i]->deadline ?></td>
	</tr>
		
	<?php } ?>		
	</tbody>
</table>