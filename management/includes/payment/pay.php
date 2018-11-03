<?php if (isset($_GET['id'])): ?>
<?php 

	$sessionDetail = Session::getSession();
	$studentData = $student->getStudentDetailById($_GET['id']);
	$studentFeeByGrade  = 	$fee->getFeeByGrade($studentData[0]->grade);
	$studentFeeByCourse  = 	$fee->getFeeByCourseId($studentData[0]->course_id);
	$studentFee =  (empty($studentFeeByCourse)) ? $studentFeeByGrade : $studentFeeByCourse;
	$staffDetail = $staff->getStaffDetailById($_SESSION['id']);


	$payment_recieved_by = $staffDetail[0]->name; 
	$payment =[
		  "Monthly"=>$studentFee[0]->monthly, 
		  "Sports"=>$studentFee[0]->sports, 	
		  "Transportation"=>$studentFee[0]->transportation, 
		  "Medical"=>$studentFee[0]->medical, 
		  "Other"=>$studentFee[0]->other, 
		];
	$total = $studentFee[0]->monthly+$studentFee[0]->sports+$studentFee[0]->transportation+$studentFee[0]->medical+$studentFee[0]->other;
?>
	<div class=" col-md-8 offset-md-2 border border-dark p-4">
		<!-- College Name -->
		<h4 class="text-center border-d p-1"><?php echo $nameOfInstitution; ?></h4>
		<div class="student-detail">
			<p class="pt-3">Student Name: <?php echo $studentData[0]->name; ?></p>
			<p><span class="pr-4">Grade: <?php echo $studentData[0]->grade; ?></span> <span class="pl-4">Roll no: <?php echo $studentData[0]->rollno; ?></span></p>
			<p>Month : July</p>
			<p></p>
		</div>
		<div class="payment-detail">
			<table class="table silver table-striped">
				<thead>
					<tr>
						<th>S.No</th>
						<th>Particular</th>
						<th>Amount</th>
					</tr>
				</thead>
				<tbody class="border border-dark">
					<?php
						$paymentParam = array_keys($payment);  
						for ($i = 0; $i < count($payment) ; $i++) {
							if (!empty($payment[$paymentParam[$i]])) {
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $paymentParam[$i]; ?></td>
						<td><?php echo $payment[$paymentParam[$i]]; ?></td>
					</tr>
					<?php  } } ?>										
				</tbody>
				<tfoot>
					<tr>
						<td colspan="2" class="font-weight-bold">Total</td>
						<td><?php echo $total; ?></td>
					</tr>
				</tfoot>
			</table>
		</div>
		<div class="paid row">
			<!-- Session Name or Logged In User Name -->
			<p><span><?php echo $payment_recieved_by;  ?></span><br><span class="border-u pt-1">Payment Received</span></p>
		</div>
			<div class="text-right">
				<input type="submit" class="btn btn-primary" value="Pay Bill">
			</div>
	</div>
<?php endif ?>