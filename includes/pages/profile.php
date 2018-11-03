<div class="jumbotron">
	<div class="general-info text-center">
		<img src="includes/img/college_image.jpg" width="600" class="img-fluid img-thumbnail">
	</div>
	<div class="text-center">
		<p class="pt-4"><span class="h4"><?php echo $nameOfInstitution; ?></span><small class="text-asbestos">(<?php echo $sloganOfInstitution; ?>)</small></p>
		<p><?php echo $addressOfInstitution; ?></p>
		<p><?php echo $contactOfInstitution; ?></p>
		<p><?php echo $emailOfInstitution; ?></p>
	</div>
</div>
<div class="row">
	<div class="col-md-4 silver">
		<div class="group p-3 mt-3">
			<p class="lead text-center text-midnight-blue">Established Date</p><hr>
			<p><?php echo date("M d Y",strtotime($establishedDateOfInstitution)); ?></p>
		</div>
		<div class="group p-2">
			<p class="lead text-midnight-blue text-center">Upcoming Events</p><hr>
			<ul class="list-unstyled">
			    <li class="list-group-item">lorem</li>
			    <li class="list-group-item">lorem</li>
			    <li class="list-group-item">lorem</li>
			    <li class="list-group-item">lorem</li>
			</ul>
		</div>
	</div>
	<div class="col-md-8">
		<div class="group p-3">
			<p class="lead text-midnight-blue">About Us</p><hr>
			<p><?php echo $aboutInstitution; ?></p>
		</div>
		<div class="group p-3">
			<p class="lead text-midnight-blue">Facilities</p> <hr>
			<p><?php echo $facilitiesOfInstitution; ?></p>
		</div>
	</div>
</div>
