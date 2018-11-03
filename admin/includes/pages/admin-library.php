<!-- Enable Disable Library Burrowing Book Facility Via Online -->
<!-- Enable Disable ADDING BOOKS -->
<h2>Library</h2>
<div class="jumbotron row">

	<div class="card col-md-4 col-lg-3 text-center">
		<a href="#" class="pt-4 text-normal" data-toggle='modal' data-target="#burrowed-books">
			<i class="fa fa-book fa-4x"></i>
			<div class="card-body">
				<p class="card-title">Burrowed Books</p>
			</div>
		</a>
	</div>
	<div class="card col-md-4 col-lg-3 text-center">
		<a href="#" class="pt-4 text-normal" data-toggle='modal' data-target='#returned-books'>
			<i class="fa fa-book fa-4x"></i>
			<div class="card-body">
				<p class="card-title">Returned Books</p>
			</div>
		</a>
	</div>
	<div class="card col-md-4 col-lg-3 text-center">
		<a href="#" class="pt-4 text-normal" data-toggle='modal' data-target='#return-book'>
			<i class="fa fa-book fa-4x"></i>
			<div class="card-body">
				<p class="card-title">Return Book</p>
			</div>
		</a>
	</div>
	<div class="card col-md-4 col-lg-3 text-center">
		<a href="#" class="pt-4 text-normal">
			<div class="card-img-top">
				<i class="fa fa-book fa-4x"></i>
			</div>
			<div class="card-body">
				<p class="card-title">Option Books</p>
			</div>
		</a>
	</div>
	<div class="card col-md-4 col-lg-3 text-center">
		<a href="#" class="pt-4 text-normal" data-toggle='modal' data-target='#list-librarian'>
			<i class="fa fa-university text-midnight-blue fa-4x"></i>
			<div class="card-body">
				<p class="card-title">Librarians Management Staffs</p>
			</div>
		</a>
	</div>
	<div class="card col-md-4 col-lg-3 text-center">
		<a href="#" class="pt-4 text-normal" data-toggle='modal' data-target="#issueNotice">
			<i class="fa fa-exclamation text-warning fa-4x"></i>
			<div class="card-body">
				<p class="card-title">Send Notice</p>
			</div>
		</a>
	</div>
</div>




<div class="modal fade" id="list-librarian" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Librarians </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<p>3 Librarian</p>
		<ul>
		    <li>Jenny Doe</li>
		    <li>John Doe</li>
		    <li>Doe Doe</li>
		</ul>
      </div>
      <div class="modal-footer">
        <a href="" class="link">Librarians</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="return-book" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Return Book </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<p>Return Book</p>
		<ul>
		    <li>Returned Condition Is Enabled</li>
		    <li>Records of returned books are kept</li>
		    <li>Deadline is fixed by librarian</li>
		</ul>
      </div>
      <div class="modal-footer">
        <a href="" class="link">Return Book Options</a>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="burrowed-books" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Burrowed Books</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<p>5 books burrowed</p>
        <table class="table table-striped">
        	<thead>
	        	<tr>
	        		<th>Book Name</th>
	        		<th>Student</th>
	        	</tr>
        	</thead>
       		<tbody id="burrowed-table">
	        	<!-- Display Data Here -->
       		</tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="" class="link">See All Burrowed Books</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="returned-books" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Returned Books</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<p>15 books returned today</p>
        <table class="table table-striped">
        	<thead>
	        	<tr>
	        		<th>Book Name</th>
	        		<th>Student</th>
	        	</tr>
        	</thead>
       		<tbody>
	        	<tr>
	        		<td>Alchemist</td>
	        		<td>Sarika</td>
	        	</tr>

	        	<tr>
	        		<td>Alice in the Wonderland</td>
	        		<td>Kurramra</td>
	        	</tr>
	        	<tr>
	        		<td>Wonderful Mind</td>
	        		<td>John DOe</td>
	        	</tr>

	        	<tr>
	        		<td>Nothing Matters</td>
	        		<td>Noone</td>
	        	</tr>
       		</tbody>
        </table>
      </div>
      <div class="modal-footer">
        <a href="" class="link">See All Retuned Books</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="issueNotice" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Issue Notice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<p>Issue Notice</p>

		<form action="" method="POST" accept-charset="utf-8">
			<div class="form-group">
				<label for="subject">Subject</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="date">Date</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label for="content">Content</label>
				<textarea name="content" class="form-control" rows="8"></textarea>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label for="audience">Audience</label>
						<select name="audience" class="form-control">
							<option value="staffs">Staffs</option>
							<option value="students">Students</option>
						</select>
					</div>

					<div class="col-md-6">
						<label for="status">Status</label>
						<select name="audience" class="form-control">
							<option value="draft">Draft</option>
							<option value="publish">Publish</option>
						</select>
					</div>					
				</div>
			</div>
		</form>
      </div>
      <div class="modal-footer">
        <a href="" class="link">See All Retuned Books</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>