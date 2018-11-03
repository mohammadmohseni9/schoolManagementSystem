$('#add_staff').click(function(e){
	e.preventDefault();
	var name = $('#name').val();
	var address = $('#staff_address').val();
	var contact = $('#staff_contact_no').val();
	var email = $('#staff_email').val();
	var position = $('#staff_position').val();

	$.ajax({
		url: 'management/libs/ajaxStaff.php',
		type: 'POST',
		dataType: 'HTML',
		data: {action: 'add',name: name,address:address,contact:contact,position:position,email:email},
		success : function(data) {
		console.log(data);
		var detail_location = "?management=staffs&action=getStaffDetail&id=" + data;
		window.location.href = detail_location;
		}
	})	
});


$('#searchStaff').click(function(e){
	e.preventDefault();
	var name = $('#staffname').val();
	var position = $('#position').val();
	
	$.ajax({
		url:"management/libs/ajaxStaff.php",
		type:"POST",
		dataType:"JSON",
		data:{action:'search',name:name,position:position},
		success: function(data){
			$('#staffDetailTable').text(" ");
			if (data.length > 0) {
				var length = data.length;
				for (var i = 0; i < length; i++) {
					var individualData = "<tr><td>"+data[i].name+"</td><td>"+data[i].address+"</td><td>"+data[i].position+"</td><td><a href='index.php?management=staffs&action=editStaff&id="+data[i].id+"'  class='link'>Edit</a></td><td><a href='index.php?management=staffs&action=getStaffDetail&id="+data[i].id+"'  class='link'>Detail</a></td><td><a href='index.php?management=staffs&action=removeStaff&id="+data[i].id+"'  class='link'>Remove</a></td></tr>";
					$('#staffDetailTable').append(individualData);
				}
			}else{
				$('#staffDetailTable').text("Sorry this person name doesnot exist");
		}
		}
	});
});

$('#removeStaff').click(function(e){
	e.preventDefault();
	var id = $('#staff_id').val();
	$.ajax({
		url : 'management/libs/ajaxStaff.php',
		type: "POST",
		dataType : "HTML",
		data : {action:"delete",id:id},
		success : function(data){
			window.location.assign('index.php?management=staffs');
			// console.log(data);
		}
	});
});