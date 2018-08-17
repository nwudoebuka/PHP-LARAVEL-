<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from steelcoders.com/space/demo/theme/templates/admin3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2018 18:59:32 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>TOPS</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="../assets/plugins/icomoon/style.css" rel="stylesheet">
        <link href="../assets/plugins/uniform/css/default.css" rel="stylesheet"/>
        <link href="../assets/plugins/switchery/switchery.min.css" rel="stylesheet"/>
        <link href="../assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet">  
      
        <!-- Theme Styles -->
        <link href="../assets/css/space.min.css" rel="stylesheet">
        <link href="../assets/css/themes/admin3.css" rel="stylesheet">


<!-- for table -->

<link rel="icon" type="image/png" href="imagest/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendort/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fontst/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendort/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendort/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendort/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="csst/util.css">
    <link rel="stylesheet" type="text/css" href="csst/main.css">
      

<!-- for table end -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
           @include('students.admin.includes.sidebar')
            
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Header -->
            @include('students.admin.includes.header')

            
               <!-- /Page Header -->
                <!-- Page Inner -->
                 <div class="page-inner">
                    <div class="page-title">
                        <h3 class="breadcrumb-header">Dashboard</h3>
                    </div>
                    <div class="page-title">
                        <ul class="breadcrumb">
                            <li>
                                <a href=""> Home </a>
                            </li>
                        
                            <li>
                                <a> <font>Dashboard </font></a>
                            </li>

                            <li>
                                <a class="active"> <font color="green">Application </font></a>
                            </li>
                        </ul>
                    </div>
                    <div id="main-wrapper">
                        @include('includes.messages')




                        <!-- Row -->
                  <!-- Row -->
<h4><strong><center>NEW APPLICATION</strong></h4><br>

                   
                
                   <div align="center">
                     <form action="addprograme" method="post">

               <!--  csrf is always needed in form unless disabled -->
                {{csrf_field()}} 

                        <select class="form-control" id="level"  name=program  style="margin-left: 7px; height: 50px; color:#000;" required>
                        <option value="" disabled="disabled" selected="selected">&nbsp;&nbsp;Program</option>
                        @if($apply)
                            @foreach($apply as $app)
                                <option value="{{ $app->program}}" class="program">&nbsp;&nbsp;{{$app->program}}</option>
                            @endforeach
                        @else
                            <option>Programs are unavailable at the moment</option>
                        @endif

                    </select><br>
                    <select class="form-control" id="course"  name=level  style="margin-left: 7px; height: 50px;  color:#000;" required>
                        <option value="" disabled="disabled" selected="selected">&nbsp;&nbsp;Course</option>

                    </select>
                    <br>

                    <h5 id="price">Price for course is </h5>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Apply<button>
                    </form>

                       </div> 
                      
                
                        
                        
                    
          

    
            </center>          <!-- /Page Content -->
        <!-- /Page Container -->
       
        
        <!-- Javascripts -->
        <script src="../assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="../assets/plugins/switchery/switchery.min.js"></script>
        <script src="../assets/plugins/d3/d3.min.js"></script>
        <script src="../assets/plugins/nvd3/nv.d3.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="../assets/plugins/chartjs/chart.min.js"></script>
        <script src="../assets/js/space.min.js"></script>
        <script src="../assets/js/pages/dashboard.js"></script>



        <!--===============================================================================================-->  
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
   <!-- code to hide course select is found below -->
   <script type="text/javascript">
            $(document).ready(function(){
                $('#course').hide();
                $('#price').hide();
        $('.program').on('click', function(){
            $('#course').show();
            $('#price').show();
        })
       });
    </script>

    <script>
        $.ajaxSetup({
           headers: {
                'X-CSRF-TOKEN':
                    $("meta[name='csrf-token']").attr('content')
                }
        });

       $('#level').on('change', function(){
            var prog = $(this).find('option:selected').val();
            // alert(prog);
            //we now post to route getcourses
            $.post('/getcourses', {'pg':prog}, function(data){
                    // console.log(data.courses); 
                    //$('#course').html(data);
                   // alert(data['price']);
                    //$('#price').html(data['price']);
                    for(var i=0; i<data.courses.length; i++ ){
                        // console.log(data.courses[i].courses);
                        $('#course').append('<option value='+data.courses[i].courses+'>'+data.courses[i].courses+'</option>');
                        $('#price').html("The price for this course is "+data.courses[i].id);
                    }

                    // for each(course in data.courses){
                    //      console.log(course);
                    //  }
            });

       }) ;
    </script>
   

    <script>
        $('.js-pscroll').each(function(){
            var ps = new PerfectScrollbar(this);

            $(window).on('resize', function(){
                ps.update();
            })
        });
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>
    </body>

<!-- Mirrored from steelcoders.com/space/demo/theme/templates/admin3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2018 19:00:28 GMT -->
</html>