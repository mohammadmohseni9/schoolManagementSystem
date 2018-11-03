<?php include('../includes/header.php'); ?>
	
<div class="container-fluid">
<div class="row">
	
<div class="col col-md-3">
	<?php include('../includes/side-menu.php'); ?>
</div>

<div class="col col-md-6">
	<div class="post-question whitegrey ">
		<form action="" method="POST">
			<p class="lead">Ask Question</p>	
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label for="question">Question</label>
				<textarea name="question" class="form-control" rows="3"></textarea>
			</div>
			<div class="form-group text-right">
				<input type="submit" name="Ask Question" class="btn btn-primary">
			</div>
		</form>
	</div>
	<hr>
	<div class="row p-2">
		<!-- Other asked Question Section -->
		<div class="outline whitegrey">
			<div class="row">
					<div class="col col-sm-3 col-md-2 com-lg-1">
						<img src="../img/bills.jpg" class="img-fluid">
					</div>
					<div class="col col-sm-9 col-md-10 col-lg-9">
						<p class="name lead">Saroj Gautam <small>10-12-2017</small></p>
					</div>
			</div>
			<div>
				<div class="question-title">
					<p class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, deserunt.</p>				
				</div>
				<div class="question-description">
					<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium libero dolorem nesciunt commodi esse, reprehenderit. Minima quibusdam cum labore soluta ut expedita, sequi id ducimus ex quidem minus natus aut at, voluptates nulla distinctio hic autem sapiente. Consequatur, dicta, laudantium? Est fugit nostrum optio unde molestias provident, quasi reprehenderit ullam.</p>
				</div>
			</div>
			<div class="reply-section">
				<a href="" class="btn text-midnight-blue"><i class="fa fa-reply"></i>Reply</a>
				<a href="" class="btn text-midnight-blue"><i class="fa fa-comment"></i>Comment</a>
			</div>
			<!-- Answers given by other to that question -->
			<div class="answer-section">
				<div class="answers m-1 border-u">
					<div class="personal-detail section ">
						<div class="answer-wrapper">
							<p class="name">John Gautam</p>
							<div class="section">
								<p class="answer">
									The answer is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto quisquam, amet ipsum neque non velit enim obcaecati modi aspernatur laboriosam.
								</p>
							</div>
							<div class="comment-reply">
								<small>
									<a href="" class="text-normal text-midnight-blue"><i class="fa fa-reply"></i>Reply</a>
									<a href="" class="text-normal text-midnight-blue"><i class="fa fa-comment"></i>Comment</a>
								</small>
							</div>
						</div>		
					</div>
				</div>
				<!-- second answer -->
				<div class="answers m-1 border-u">
					<div class="personal-detail section">
						<div class="answer-wrapper">
							<p class="name">John Gautam</p>
							<div class="section">
								<p class="answer">
									The answer is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto quisquam, amet ipsum neque non velit enim obcaecati modi aspernatur laboriosam.
								</p>
							</div>
							<div class="comment-reply">
								<small>
									<a href="" class="text-normal text-midnight-blue"><i class="fa fa-reply"></i>Reply</a>
									<a href="" class="text-normal text-midnight-blue"><i class="fa fa-comment"></i>Comment</a>
								</small>
							</div>
						</div>		
					</div>
				</div>
				<a href="#" class="link btn btn-sm">... See More Answers</a>
			</div><!-- ./Answer Section -->
	
		</div>
	
	</div>
</div>
<!-- School Notices -->
<div class="col col-md-3">
	<?php include('../includes/pages-content/notice.php'); ?>
</div><!-- ./School Notice -->
</div>
</div><!-- /container-div -->
<?php include('../includes/footer.php'); ?>