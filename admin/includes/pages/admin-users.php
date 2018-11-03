
<?php if (!isset($_GET['action'])): ?>
	
<div class="outline p-2 pl-4">
	
Admin > <span class="text-asbestos">Users</span> 
</div> 
<!-- User Permission grant -->
<!-- 
	User_role
	student
	teacher
	Librarian
	Accountant
	Teacher
	Event Manager
	Hr manager
	Student manager	 

 -->

<!-- Add User Staffs who add students -->
<!-- Block Users -->
<!-- See Users Detail -->

<!-- UnBlock Users -->
<!-- Send Warning To Users -->
<!-- Send Notice To Users -->

<div class="jumbotron row">
	<div class="card col-md-4 col-lg-3 text-center pt-4">
		<a href="#" class="text-normal" data-toggle='modal' data-target="#add-user-form">
			<i class="fa fa-user fa-4x text-midnight-blue card-img-top"></i>
			<i class="fa fa-plus fa-2x text-primary card-img-top absolute" style="right:0px;top:60px"></i>
			<div class="card-body">
				<p class="card-title">Add User</p>
			</div>
		</a>
	</div>
	
	<div class="card col-md-4 col-lg-3 text-center pt-4">
		<a href="#" class="text-normal">
			<i class="fa fa-plus fa-4x text-primary card-img-top"></i>
			<div class="card-body">
				<p class="card-title">Edit User</p>
			</div>
		</a>
	</div>
	<!--  
		Manage user permission eg: student,staff and teachers 
		Basically See All The Types Of Users Available
	-->
	<div class="card col-md-4 col-lg-3 text-center pt-4">
		<a href="#" class="text-normal">
			<i class="fa fa-plus fa-4x text-primary card-img-top"></i>
			<div class="card-body">
				<p class="card-title">User Types</p>
			</div>
		</a>
	</div>

	<!-- Block Users And See The List Of Blocked Users -->
	<div class="card col-md-4 col-lg-3 text-center pt-4">
		<a href="#" class="text-normal" data-toggle='modal' data-target='#block-user'>
			<i class="fa fa-ban fa-4x text-danger card-img-top absolute p-4 mr-2"></i>
			<i class="fa fa-user fa-4x text-primary card-img-top"></i>
			<div class="card-body">
				<p class="card-title">Block Users</p>
			</div>
		</a>
	</div>

	<!-- UnBlock Users -->
	<div class="card col-md-4 col-lg-3 text-center pt-4">
		<a href="#" class="text-normal" data-toggle='modal' data-target='#unblock-user'>
			<i class="fa fa-plus fa-4x text-primary card-img-top"></i>
			<div class="card-body">
				<p class="card-title">Unblock Users</p>
			</div>
		</a>
	</div>

	<!-- Send Warning To Individual Student Or Staffs -->
	<div class="card col-md-4 col-lg-3 text-center pt-4">
		<a href="#" class="text-normal">
			<i class="fa fa-plus fa-4x text-primary card-img-top"></i>
			<div class="card-body">
				<p class="card-title">Send Warning</p>
			</div>
		</a>
	</div>

	<!-- Send Warning To Individual Or Group Of Or All Student Or Staffs -->
	<div class="card col-md-4 col-lg-3 text-center pt-4">
		<a href="#" class="text-normal">
			<i class="fa fa-comment-o fa-4x text-primary card-img-top"></i>
			<div class="card-body">
				<p class="card-title">Send Notice</p>
			</div>
		</a>
	</div>

	<!-- Send The Details Of The Users In The Institution -->
	<div class="card col-md-4 col-lg-3 text-center pt-4">
		<a href="index.php?option=users&action=detail" class="text-normal">
			<i class="fa fa-id-card-o fa-4x text-midnight-blue card-img-top"></i>
			<div class="card-body">
				<p class="card-title">See User Detail</p>
			</div>
		</a>
	</div>
</div>

<div class="modal fade" id="add-user-form" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" accept-charset="utf-8">
			<div class="form-group">
				<label for="user-name">Name</label>
				<input type="text" name="name" id="user-name" class="form-control">
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
						<label for="user-position">Position</label>
						<input type="text" name="position" id="user-position" class="form-control">
					</div>				

					<div class="col-sm-6">
						<label for="user-permission">User Permission</label>
						<select name="user-permission" id="user-permission" class="form-control">
							<option value="librarian">Librarian</option>
							<option value="hr">Human Resource</option>
							<option value="accountant">Accountant</option>
							<option value="accountant">Receptionist</option>
						</select>
					</div>				
				</div>
			</div>
			<div class="form-group">
				<label for="user-department">Department</label>
				<input type="text" name="department" id="user-department" class="form-control">
			</div>
        </form>
      </div>
      <div class="modal-footer">
      	<input type="submit" class="btn btn-primary" value="Add User" name="add">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="unblock-user" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Unblock User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 		<table class="table">	
 			<thead>
 				<tr>
 					<th>Name</th>
 					<th>Address</th>
 					<th>Unblock</th>
 				</tr>
 			</thead>
 			<tbody>
 				<tr>
 					<td>John Doe</td>
 					<td>Anywhere-123,nowhere,Noplace</td>
 					<td><a href="#" class="link">Unblock</a></td>
 				</tr>
 			</tbody>
 		</table>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="block-user" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Block User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="" method="POST" accept-charset="utf-8">
			<div class="row">
				<div class="col-md-5">
					<input type="text" class="form-control" placeholder="Name">
				</div>
				<div class="col-md-5">
					<input type="text" class="form-control" placeholder="Position">
				</div>
				<div class="col-md-2">
					<input type="submit" name="submit" value="Search" class="btn btn-primary">
				</div>
			</div>
		</form>
      </div>
    </div>
  </div>
</div>
<?php endif ?>

<?php if (isset($_GET['action'])): ?>
<?php 
	if ($_GET['action'] == 'detail')
	{
		echo "This is user detail section Where I include User Details";
		include_once 'user-detail.php';
	}
?>
<?php endif ?>