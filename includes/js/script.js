$.ajax({
	url: '../management/libs/ajaxLibrary.php',
	type: 'POST',
	dataType: 'JSON',
	data: {action: 'burrowed'},
	success: function(data){
		var appendText=null;	
		var length = data[0].length;
		for (var i = 0; i < length; i++) {
			appendText = "<tr><td>"+data[0][i].title+"</td><td>"+data[0][i].name+"</td></tr>";
			$('#burrowed-table').append(appendText);
		}
	}
});