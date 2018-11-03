<div class="row">
	<?php  $pageurl = "management=payment"; ?>
	<div class="col-md-3 col-lg-2">
		<a href="index.php?<?php echo $pageurl; ?>&action=pay">
			<div class="card text-center text-midnight-blue p-3">
				<div class="card-img-top">
					<i class="fa fa-money text-dark fa-2x p-2"></i>
				</div>
				<div class="card-title">
					Issue Bills
				</div>
			</div>
		</a>
	</div>

	<div class="col-md-3 col-lg-2">
		<a href="index.php?<?php echo $pageurl; ?>&action=unpaidlist">
			<div class="card text-center text-danger p-3">
				<div class="card-img-top">
					<i class="fa fa-user fa-2x p-2"></i>
				</div>
				<div class="card-title">
					Issued Bills
				</div>
			</div>
		</a>
	</div>

</div>