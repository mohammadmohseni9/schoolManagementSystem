<?php if (isset($_GET['action'])): ?>
<?php  
	switch ($_GET['action']) {
		case 'add':
			include_once 'management/includes/users/addUser.php';
			break;

		case 'blockUsers':
			include_once 'management/includes/users/removeUsers.php';
			break;

		case 'listUsers':
			include_once 'management/includes/users/listUsers.php';
			// code...
			break;
	}

?>
<?php endif ?>


<?php if (!isset($_GET['action'])): ?>
<div class="row">

	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
  		<a href="?management=users&action=add" class="text-normal text-asbestos">
			<div class="card text-center">
			  <div class="card-img-top text-center"><i class="fa fa-plus"></i><i class="fa fa-user fa-4x p-1 m-1"></i> </div>
			  <div class="card-block">
			    <p class="card-title p-2 m-0">Add Users</p>
			  </div>
			</div>
		</a>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 bg-light">
	  	<div class="card text-center">
	  		<a href="?management=users&action=searchUser" class="text-normal text-asbestos">
			  <div class="card-img-top text-center"><i class="fa text-primary fa-search p-1 m-1 fa-4x"></i></div>
			  <div class="card-block">
			    <p class="card-title p-2 m-0">Search Users</p>
	  		</div>
		  </div>
		</a>
	</div>
	

	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
		<a href="index.php?management=users&action=listUsers" class="text-normal">
			<div class="card text-center">
			  <div class="card-img-top text-center"><i class="fa fa-book fa-4x p-1 m-1"></i></div>
			  <div class="card-block">
			    <p class="card-title p-2 m-0"> List Users</p>
			  </div>
		  	</div>
		</a>
	</div>

</div>
<?php endif ?>