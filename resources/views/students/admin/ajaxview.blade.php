<!DOCTYPE html>
<html>
<head>


	<!-- datatabels -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <meta name="csrf-token" content="{{csrf_token()}}">
  

<!-- datatabels -->
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: left;
}
table#t01 {
    width: 100%;    
    background-color: #f1f1c1;
}
</style>

</head>
<script>

$(document).ready( function () {
    $('#table_id').DataTable();
} );

</script>
<body>

<h2>AJAX DATABASE</h2>
@include('includes.messages')

<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
            <th>Column 3</th>
        </tr>
    </thead>
    <tbody>
        @if($ajax)
                            @foreach($ajax as $aja)
                               <tr>
    <td>{{$aja->id}}</td>
    <td>{{$aja->program}}</td>
    <td>{{$aja->courses}}</td>
  </tr>
                            @endforeach
                        @else
                            Programs are unavailable at the moment
    @endif
        

       
    </tbody>
</table>
<br>


<div id="myModaladd" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <form action="addprogram" method="post">
            {{csrf_field()}}
        <p><input placeholder="Program name" id="programname" name="programname"><br><br>
        <input placeholder="course name" id="coursename" name="coursename"><br><br>

        <input class="btn btn-primary" id="addnewuser" type="submit" value="Add">
    </form>
    </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        <p><input value="Program name" name="programname"><br><br>
        <input value="course name" name="course"><br><br>

        <input class="btn btn-success" type="submit" value="Update">
    </form>
    </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModaladd">Add Program</button>

<table id="table_id">
  <tr>
    <th>Id</th>
    <th>Program</th> 
    <th>Courses</th>
    <th>action</th>
  </tr>
    @if($ajax)
                            @foreach($ajax as $aja)
                               <tr>
    <td>{{$aja->id}}</td>
    <td>{{$aja->program}}</td>
    <td>{{$aja->courses}}</td>
    <td><a href="/deleteprogram/{{$aja->id}}" class="btn btn-default">Delete</a>

<a class="btn btn-default" data-toggle="modal" data-target="#myModal">Update</a>

    </td>
  </tr>
                            @endforeach
                        @else
                            Programs are unavailable at the moment
    @endif
</table>

<script src = "https://code.jquery.com/jquery-3.1.1.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>


<script>

$(document).ready( function () {
    $('#table_id').DataTable();
} );

</script>



</body>
</html>


   
<script> 
    $(document).ready(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('#addnewuser').click(function(e){
            e.preventDefault();
            $programname = $('#programname').val();
            $coursename = $('#coursename').val(); 

            
            $.ajax({
                    type: "POST",
                    url: "{{URL::to('/addprogram')}}",
                    data: {
                        programname: $programname,
                        coursename: $coursename,
                        
                    },
                    dataType:"json",
                    success: function(data){
                        console.log(data);
                        $('#table_id').load(location.href + ' #table_id');
                    }
                });

        });
    });
</script>

