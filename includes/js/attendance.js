  $('#student_table').css("display","none");
  $('#search_student').click(function(e){
    e.preventDefault();

    var name = $('#name').val();
    var grade = $('#grade').val();
    var rollno = $('#rollno').val();
    
    $.ajax({
      url:'management/libs/ajaxStudent.php',
      method: "POST",
      data:{action:'search','name':name,'grade': grade,'rollno': rollno},
      dataType: 'JSON',
      success : function(data){
        $('#student_table').css("display","block");
        if (data.length > 0) {
          $("#studentTable").text(" ");
          for (var i = 0; i < data.length ; i++) {
            var tableData = "<tr><td>"+data[i].name+"</td><td>"+data[i].address+"</td><td>"+data[i].grade+"</td><td><a href='#' class='absent' data-id='"+data[i].id+"' data-name='"+data[i].name+"' data-grade='"+data[i].grade+"'>Absent</a></td></tr>";
            
            $("#studentTable").append(tableData);
          }
        
          $('.absent').click(function(){
            var id = $(this).data('id');
            var grade = $(this).data('grade');
            var studentName = $(this).data('name');
            $("#absentStudent").text(" ");
            $.ajax({
              url:'management/libs/ajaxAttendance.php',
              method:'POST',
              data:{action:'absent',id: id,name:studentName},
              dataType:"HTML",
              success: function(data){
                var message = data+"<br>";
                $("#absentStudent").append(message);
              }
            });

          });
        } else {
          var error = "<tr><td colspan=4> Sorry We couldnot find this person</td> </tr>";
          $("#studentTable").text(" ");
          $("#studentTable").append(error);
        }
      }
    })
  });
