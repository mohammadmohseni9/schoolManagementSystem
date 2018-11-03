
<?php if (!isset($_GET['action'])): ?>
<h2>User Permission</h2>
<div class="row">
	
	<div class="card col-sm-6 col-md-4 col-lg-3 text-center">
		<a href="#" class="text-normal" data-toggle='modal' data-target='#permission-types'>
			<i class="fa fa-users fa-4x p-4"></i>
			<div class="card-body">
				<p class="card-title">10 Types Of Permissions</p>
			</div>
		</a>
	</div>
	<div class="card col-sm-6 col-md-4 col-lg-3 text-center">
		<a href="#" class="text-danger" data-toggle='modal' data-target='#new-permission-type'>
			<i class="fa fa-users fa-4x p-4"></i>
			<div class="card-body">
				<p class="card-title">Add permission type</p>
			</div>
		</a>
	</div>
	<div class="card col-sm-6 col-md-4 col-lg-3 text-center">
		<a href="#" class="text-danger">
			<i class="fa fa-users fa-4x p-4"></i>
			<div class="card-body">
				<p class="card-title">Give Individual Permission</p>
			</div>
		</a>
	</div>
	<div class="card col-sm-6 col-md-4 col-lg-3 text-center">
		<a href="index.php?option=permission&action=manage" class="text-danger">
			<i class="fa fa-users fa-4x p-4"></i>
			<div class="card-body">
				<p class="card-title">Manage permissions</p>
			</div>
		</a>
	</div>
</div>
<?php endif ?>


<div class="modal fade" id="permission-types" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Types Of Permissions </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<ul class="list-unstyled">
		    <li>
		    	<a href="#">Teacher </a>
		    </li>
		    <li>
		    	<a href="#">Librarian </a>
		    </li>
		    <li>
		    	<a href="#">Accountant </a>
		    </li>
		    <li>
		    	<a href="#">Receptionist </a>
		    </li>
		    <li>
		    	<a href="#">Schedule Manager</a>
		    </li>
		    <li>
		    	<a href="#">Event Manager</a>
		    </li>
		    <li>
		    	<a href="#">Student Managemet</a>
		    </li>
		    <li>
		    	<a href="#">Staff Management</a>
		    </li>
		</ul>
      </div>
      <div class="modal-footer">
        <a href="" class="link">Librarians</a>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="new-permission-type" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New Permission Type </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="admin-permission_submit" method="POST" accept-charset="utf-8">
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="permission">Permission</label>
				<select name="permission" multiple class="form-control">
					<option value="attendance">Attendance</option>
					<option value="notice">Notice</option>
					<option value="library">Library</option>
					<option value="schedule">Schedule</option>
				</select>
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<input type="text" class="form-control">
			</div>			
		</form>
      </div>
      <div class="modal-footer">
        <a href="" class="link">View All Permission Types</a>
      </div>
    </div>
  </div>
</div>


<?php if (isset($_GET['action'])): ?>
<?php if ($_GET['action'] == 'manage'): ?>
<form action="" method="POST">
	<div class="row">
		<div class="col-md-5">
			<label for="title">Permission</label>
			<input type="text" class="form-control">
		</div>
		<div class="col-md-2 mt-4">
			<input type="submit" class="btn btn-primary mt-2" value="Search">
		</div>
	</div>
</form>	



<?php endif ?>
<?php endif ?>



<!-- Types of User Permission -->
<!-- 
	<div class="col-md-6">
		<div class="jumbotron">
			<h2>Librarian</h2>
			<p>Has schedule </p>
			<p>Take attendance </p>
			<p>Add Student </p>
			<p>Edit Student </p>
			<p>Update Student </p>
			<p>Manage Fees </p>
			<p>Add Users </p>
			<p>Add Staffs </p>
			<p>Manage schedule </p>
			<p>Manage todo </p>
			<p>Send Message </p>
			<p>Send notice </p>
		</div>
	</div>
 -->
</div>



