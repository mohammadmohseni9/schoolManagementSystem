$('#paymentTable').hide();

$('#payment_search').click(function(e){
    e.preventDefault();

    var name = $('#name').val();
    var grade = $('#grade').val();
    var rollno = $('#student_rollno').val();
    $.ajax({
      url:'management/libs/ajaxStudent.php',
      method: "POST",
      data:{action:'search',name:name,grade: grade,rollno: rollno},
      dataType: 'JSON',
      success : function(data){
        $('#paymentTable').css("display","table");
        console.log(data)
        if (data.length > 0) {
          $("#paymentTableData").text(" ");
            for (var i = 0; i < data.length ; i++) {
              var tableData = "<tr><td>"+data[i].name+"</td><td>"+data[i].address+"</td><td>"+data[i].grade+"</td><td><a href='index.php?management=payment&action=payStudent&id="+data[i].id+"' class='pay'>Pay</a></td><td><a href='index.php?management=payment&action=paymentDetail&id="+data[i].id+"'>Payment detail</a></td></tr>";
              
            $("#paymentTableData").append(tableData);
          }
        } else {
          var error = "<tr><td colspan=4> Sorry We student does not exists</td></tr>";
          $("#paymentTableData").text(" ");
          $("#paymentTableData").append(error);
        }
      }
    })
  });
