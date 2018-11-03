<?php if (!isset($_GET['action'])): ?>
<div class="row">
	<?php  $pageurl = "management=payment"; ?>
	<div class="offset-md-1 col-md-3 col-lg-2">
		<a href="index.php?<?php echo $pageurl; ?>&action=pay">
			<div class="card text-center text-midnight-blue p-3">
				<div class="card-img-top">
					<i class="fa fa-user fa-2x p-2"></i>
				</div>
				<div class="card-title">
					Pay Student Bill
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
					Remaining 
				</div>
			</div>
		</a>
	</div>

	<div class="col-md-3 col-lg-2">
		<a href="index.php?<?php echo $pageurl; ?>&action=paidlist">
			<div class="card text-center text-danger p-3">
				<div class="card-img-top">
					<i class="fa fa-money fa-2x p-2"></i>
				</div>
				<div class="card-title">
					Paid
				</div>
			</div>
		</a>
	</div>

	<div class="col-md-3 col-lg-2">
		<a href="index.php?<?php echo $pageurl; ?>&action=issuebills">
			<div class="card text-center text-danger p-3">
				<div class="card-img-top">
					<i class="fa fa-bill fa-2x p-2"></i>
				</div>
				<div class="card-title">
					Issue Bills
				</div>
			</div>
		</a>
	</div>
</div>
<?php endif ?>
<?php if (isset($_GET['action'])): ?>
	<?php if ($_GET['action'] == 'pay'): ?>
			<form action="" method="POST" accept-charset="utf-8" class="form-inline border border-inverse">
				<div class="form-group"><label for="name" class="p-4 pr-2">Name</label><input type="text" id="name" name="name" class="form-control"></div>
				<div class="form-group"><label for="grade" class="p-4 pr-2">Grade</label><input type="text" id="grade" name="grade" class="form-control"></div>				
				<button type="submit" class="btn" id="payment_search"><i class="fa fa-search"></i></button>
			</form>
			<table id="paymentTable" class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Address</th>
						<th>Grade</th>
						<th>Pay</th>
						<th>Payment Detail</th>
					</tr>
				</thead>
				<tbody id="paymentTableData">
					
				</tbody>
			</table>
	<?php endif ?>
	
	<?php if ($_GET['action'] == 'unpaidlist'): ?>
			

	<?php endif ?>

	<?php if ($_GET['action'] == 'issuebills'): ?>
		<?php include_once 'management/includes/payment/issueBills.php'; ?>
	<?php endif ?>

	<?php if ($_GET['action'] == 'payStudent'): ?>
		<?php include_once 'management/includes/payment/pay.php' ?>
	<?php endif ?>
<?php endif ?>