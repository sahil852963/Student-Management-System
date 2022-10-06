<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"> 
  <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>




</head>
<body>

<div class="jumbotron text-center">
  <h1>Add new Course</h1>
  <div class="float-right mr-5">
    <a href="" class='btn btn-success'  data-toggle="modal" data-target="#myModal">Add Course</a>
  </div> 
</div>
  
<div class="container-fluid"> 

<div class="row">
@include('sidebar')
  
    <div class="col-10">
    
<table class="table" id='myTable'>
    <thead>
        <tr>
            <td>id</td>
            <td>Course_Name</td>
            <td>Teacher_Name</td>
            <td>Batch_Time </td>
            <td>Teaching_Day </td> 
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $c )
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->course_name}}</td>
            <td>{{$c->teacher_name}}</td>
            <td>{{$c->batch_time}} </td>
            <td>{{$c->teaching_day}} </td> 
            <td><a href="javascript:void(0)" class='btn btn-warning showEditModal'>Edit</a></td>

            <td>
              <form action="course/{{$c->id}}" method = 'POST'>
                @method('DELETE')
                @csrf
                <input type="submit" value="Delete" class='btn btn-danger'>
              </form>
            
            {{-- <form action="course/{{$c->id}}" method='POST'>
            @method('DELETE')
            @csrf
            <input type="submit"  value='Delete' class='btn btn-danger'>
            </form> --}}
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
    </div>
</div>



</div>







<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" >Add Course</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        <form action="course" method='POST' id='form'>
        @csrf
        <div class="form-group">
            <label for="">Course_Name</label>
            <input type="text" class='form-control' name='Course_Name' id='Course_Name'>
        </div>
        <div class="form-group">
            <label for="">Teacher_Name</label>
            <input type="text" class='form-control' name='Teacher_Name' id='Teacher_Name'>
        </div>
        <div class="form-group">
            <label for="">Batch_Time</label>
            <input type="text" class='form-control' name='Batch_Time' id='Batch_Time'>
        </div>
        <div class="form-group">
            <label for="">Teaching_Day</label>
            <input type="text" class='form-control' name='Teaching_Day' id='Teaching_Day'>
        </div>
        

        <div class="form-group">
            
            <input type="submit" class='form-control btn btn-success'  id='submit' value='Add Course'>
        </div> 
        </form>  
      </div> 
    </div>
  </div>
</div>


<script>

$(document).ready( function () {
    $('#myTable').DataTable();
} );


    $('.showEditModal').click(function(e){

        Teaching_Day = e.target.parentElement.previousElementSibling.innerText
        Batch_Time = e.target.parentElement.previousElementSibling.previousElementSibling.innerText
        Teacher_Name = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.innerText
        Course_Name = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText
        id = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText


$('#Course_Name').val(Course_Name);
$('#Batch_Time').val(Batch_Time);
$('#Teacher_Name').val(Teacher_Name);
$('#Teaching_Day').val(Teaching_Day);
$('#submit').val("Edit Course");
$('.modal-title').text('Edit Course')
$('form').attr('action','course/'+id)
$('form').append('<input type="hidden" name="_method" value="PUT">')
        $('#myModal').modal('show');
    })
</script>

</body>
</html>