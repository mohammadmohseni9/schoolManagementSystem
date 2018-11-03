var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

var page = getUrlParameter('management');
var action = getUrlParameter('books');
var actionpage = getUrlParameter('action');
$('#books_data').css('display', 'none');

$('#search_books').click(function(e){
  e.preventDefault();
  var bookName = $('#book_name').val();
  var bookGenre = $('#book_genre').val();
  $('#books_data').css('display', 'block');
  
  $.ajax({
    url:'management/libs/ajaxLibrary.php',
    type: "POST",
    data:{"action":"search",'name':bookName,'genre': bookGenre},
    dataType:"JSON",
    success : function(data){
      $('#books_individual_data').text(" ");
      $('#books_individual_data').text(" ");
      if (data.length >= 1) {
        for (var i = 0; i < data.length; i++) {
          var text = "<tr><td>"+data[i].title+"</td><td>"+data[i].quantity+"</td><td>"+data[i].author+"</td><td>"+data[i].genre+"</td></tr>";
          $('#books_individual_data').append(text);
          
        }
        
      } else {
        var error = "<tr><td class='text-danger'>Sorry We Couldnot Find This Item</td></tr>";
        $('#books_individual_data').text(" ");
        $('#books_individual_data').append(error);
      }

    }
  })
});

if (page = 'library') {

  if (action == 'burrowed') {
    $.ajax({
      url:'management/libs/ajaxLibrary.php',
      type: "POST",
      data:{"action":"burrowed"},
      dataType:"JSON",
      success : function(data){
        $('#books_individual_data').text(" ");
        var dataLength = data[0].length;
        if (dataLength > 1) {
          for (var i = 0; i < dataLength; i++) {

          /* 
          // BookDetail position 0
          // StudentDetail position 1
          // BookRelation position 2
          // Data Format Coming Here [BookDetail , StudentDetail, Deadline] 
          */ 

            var text = "<tr><td>"+data[0][i][0].title+"</td><td>"+data[1][i][0].name+"</td><td>"+data[1][i][0].grade+"</td><td>"+data[2][i].deadline+"</td></tr>";
            $('#burrowedBooks').append(text);
          }
          
        } else {
          var text = "<tr><td>"+data[0][1][0].title+"</td><td>"+data[1][1][0].name+"</td><td>"+data[1][1][0].grade+"</td><td>"+data[2][1].deadline+"</td></tr>";
          $('#burrowedBooks').append(text);
        }

      }
    })
  } 
  if (action == 'list') {
    $.ajax({
      url:'management/libs/ajaxLibrary.php',
      type: "POST",
      data:{"action":"list"},
      dataType:"JSON",
      success : function(data){
        $('#listBooks').text(" ");
        var dataLength = data.length;
        if (dataLength >= 1) {
          /* 
          // BookDetail position 0
          // StudentDetail position 1
          // BookRelation position 2
          // Data Format Coming Here [title,author,genre,quantity] 
          */ 

          $('.message').prepend(dataLength + " Books found");
          for (var i = 0; i < dataLength; i++) {
            var text = "<tr><td>"+data[i].title+"</td><td>"+data[i].author+"</td><td>"+data[i].genre+"</td><td>"+data[i].quantity+"</td></tr>";
            $('#listBooks').append(text);
          }
          
        } else {
          $('#listBooks').append("Sorry No Books Were Found");
        }

      }
    })
  } 
if (actionpage == 'burrow') {

  $('#student_table').hide();

  $('#search_student').click(function(e){
    e.preventDefault();

    var name = $('#student_name').val();
    var grade = $('#student_grade').val();
    $.ajax({
      url:'management/libs/ajaxStudent.php',
      method: "POST",
      data:{action:'search',name:name,grade: grade},
      dataType: 'JSON',
      success : function(data){
        $('#student_table').css("display","table");
        $("#student_data").text(" ");

        if (data.length > 0) {
          $("#studentTableData").text(" ");
            for (var i = 0; i < data.length ; i++) {
              var tableData = "<tr><td>"+data[i].name+"</td><td>"+data[i].grade+"</td><td><a href='index.php?management=library&action=burrow&student="+data[i].id+"'>Burrow Book</a></td></tr>";
              
            $("#student_data").append(tableData);
          }
        } else {
          var error = "<tr><td colspan=4> Sorry We couldnot find this person</td> </tr>";
          $("#student_data").text(" ");
          $("#student_data").append(error);
        }
      }
    })
  });

  $('#burrow_books').click(function(e){
    e.preventDefault();
    var bookName = $('#book_name').val();
    var bookGenre = $('#book_genre').val();
    var id = $('#student_id').val();
    
    $.ajax({
      url:'management/libs/ajaxLibrary.php',
      type: "POST",
      data:{"action":"search",'name':bookName,'genre': bookGenre},
      dataType:"JSON",
      success : function(data){
        $('#book_data').text(" ");
        if (data.length >= 1) {
          for (var i = 0; i < data.length; i++) {
            var text = "<tr><td>"+data[i].title+"</td><td>"+data[i].author+"</td><td>"+data[i].genre+"</td><td><a href=?management=library&action=burrow&student="+id+"&book="+data[i].id+" class='btn btn-primary'>Select</a></td></tr>";
            console.log(text);
            $('#book_data').append(text);
          }
          
        } else {
          var error = "<tr><td class='text-danger'>Sorry We Couldnot Find This Item</td></tr>";
          $('#book_data').text(" ");
          $('#book_data').append(error);
        }

      }
    })
  });

  $("#confirm_book").click(function(e){
    e.preventDefault();
    var student_id = $(this).data('studentid'); 
    var student_name = $(this).data('studentname'); 
    var book_id = $(this).data('bookid');

     $.ajax({
      url:'management/libs/ajaxLibrary.php',
      type: "POST",
      data:{"action":"burrow_book",studentid:student_id,bookid: book_id},
      dataType:"HTML",
      success : function(data){
        $("#message").text(data);
        $(location).attr('href','index.php?management=library');
      }
    })
 
});

}// ./burrow
}// ./library 
