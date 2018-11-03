
$('#editAndDeleteTable').hide();

  $('#search_student').click(function(e){
    e.preventDefault();

    var name = $('#student_name').val();
    var grade = $('#student_grade').val();
    var rollno = $('#student_rollno').val();
    $.ajax({
      url:'management/libs/ajaxStudent.php',
      method: "POST",
      data:{action:'search',name:name,grade: grade,rollno: rollno},
      dataType: 'JSON',
      success : function(data){
        $('#editAndDeleteTable').css("display","table");
        $("#studentTableData").text(" ");
        if (data.length > 0) {
          $("#studentTableData").text(" ");
            for (var i = 0; i < data.length ; i++) {
              var tableData = "<tr><td>"+data[i].name+"</td><td>"+data[i].address+"</td><td>"+data[i].grade+"</td><td><a href='index.php?management=students&action=editStudent&id="+data[i].id+"' class='absent'>Edit</a></td><td><a href='index.php?management=students&action=deleteStudent&id="+data[i].id+"' class='removeStudent'>Remove</a></td><td><a href='index.php?management=students&action=studentDetail&id="+data[i].id+"'>Detail</a></td></tr>";
              
            $("#studentTableData").append(tableData);
          }
        } else {
          var error = "<tr><td colspan=4> Sorry We couldnot find this person</td> </tr>";
          $("#studentTableData").text(" ");
          $("#studentTableData").append(error);
        }
      }
    })
  });
