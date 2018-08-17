<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from steelcoders.com/space/demo/theme/templates/admin3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2018 18:59:32 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
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
                                <a class="active"> <font color="green">Dashboard </font></a>
                            </li>
                        </ul>
                    </div>
              
                    <div id="main-wrapper">

                        <!-- Row -->

                        <div class="progress" style="height: 20px;">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 20px; width: 20%">20%</div>
</div>
                            <div style="background: green; text-align: center;" >
                            <font color="#FFFFFF"><strong>The Oke Ogun Application form-JAMB UTME DATA</strong></font>
</div>

<style>
input {
border: 3px solid #bababa;
margin-top: 10px;
}

</style>
<form action="form1" method=post>


   <div style="width: 100%; overflow: hidden; margin-top: 20px;"><font size=2>
    {{ csrf_field() }}
    <div class="col-lg-4 col-lg-offset-1"><div class="row"> <b class="col-lg-5" style="padding-top: 13px;">UTME Reg No</b><input type="text" class="form-control col-lg-7"  style="border: 1px solid black; background-color:#e2e6e3" placeholder="Enter Jamb Registeration Number" value="83325238ii" name="utmeregno"/>
    </div><br>
        <div class="row">
            <strong class="col-lg-4">Subject 1</strong> 
            <select class="form-control col-lg-8"  name=subject1 style="color:#000;"  required>
                    <option value="" disabled="disabled" selected="selected">&nbsp;&nbsp;Subject 1</option>
                    <option value="English">&nbsp;&nbsp;English</option>
                    <option value="Mathematics">&nbsp;&nbsp;Mathematics</option>
                      <option value="Physics">&nbsp;&nbsp;Physics</option>
                    <option value="Biology">&nbsp;&nbsp;Biology</option>
                      <option value="Chemistry">&nbsp;&nbsp;Chemistry</option>
                    <option value="Geography">&nbsp;&nbsp;Geography</option>
            </select>
        </div><br>
    <div class="row">
    <strong class="col-lg-4">Subject 2</strong> 
        <select class="form-control col-lg-8"  name=subject2 style="color:#000;" required>
                <option value="" disabled="disabled" selected="selected">&nbsp;&nbsp;Subject 2</option>
                <option value="English">&nbsp;&nbsp;English</option>
                    <option value="Mathematics">&nbsp;&nbsp;Mathematics</option>
                      <option value="Physics">&nbsp;&nbsp;Physics</option>
                    <option value="Biology">&nbsp;&nbsp;Biology</option>
                      <option value="Chemistry">&nbsp;&nbsp;Chemistry</option>
                    <option value="Geography">&nbsp;&nbsp;Geography</option>
        </select>
    </div><br>

<div class="row">
                    <strong class="col-lg-4">Subject 3</strong>
                     <select class="form-control col-lg-8"  name=subject3 style="color:#000;" required>
                        <option value="" disabled="disabled" selected="selected">&nbsp;&nbsp;Subject 3</option>
                        <option value="English">&nbsp;&nbsp;English</option>
                    <option value="Mathematics">&nbsp;&nbsp;Mathematics</option>
                      <option value="Physics">&nbsp;&nbsp;Physics</option>
                    <option value="Biology">&nbsp;&nbsp;Biology</option>
                      <option value="Chemistry">&nbsp;&nbsp;Chemistry</option>
                    <option value="Geography">&nbsp;&nbsp;Geography</option>
                    </select>
</div><br>
                   
                    <div class="row">
    <strong class="col-lg-4">Subject 4</strong> 
        <select class="form-control col-lg-8"  name=subject4 style="color:#000;" required>
                <option value="" disabled="disabled" selected="selected">&nbsp;&nbsp;Subject 4</option>
                <option value="English">&nbsp;&nbsp;English</option>
                    <option value="Mathematics">&nbsp;&nbsp;Mathematics</option>
                      <option value="Physics">&nbsp;&nbsp;Physics</option>
                    <option value="Biology">&nbsp;&nbsp;Biology</option>
                      <option value="Chemistry">&nbsp;&nbsp;Chemistry</option>
                    <option value="Geography">&nbsp;&nbsp;Geography</option>
        </select>
    </div><br>
 <div class="row">
    <strong class="col-lg-4">Choice of Polytechnic</strong> 
        <select class="form-control col-lg-8"  name=polychoice style="color:#000;" required>
                <option value="Abia State Polythecnic" selected="selected">&nbsp;&nbsp;Abia State Polythecnic</option>
                <option value="The Oke Ogun Polythecnic" selected="selected">&nbsp;&nbsp;The Oke Ogun Polythecnic</option>
        </select>
    </div><br>
                   
                </div>
    <div class="col-lg-6 col-lg-offset-1"> 
       
<div class="row"> <b class="col-lg-5" style="padding-top: 13px;">UTME Score</b><input type="text" class="form-control col-lg-7"  style="border: 1px solid black; background-color:#e2e6e3" placeholder="Enter Score" value="400" disabled/>
    </div><br>

<div class="row"> <b class="col-lg-5" style="padding-top: 13px;">Score 1</b><input type="text" class="form-control col-lg-7"  style="border: 1px solid black; background-color:#e2e6e3" placeholder="Enter Score" value="100" name="score1"/>
    </div><br>

    <div class="row"> <b class="col-lg-5" style="padding-top: 13px;">Score 2</b><input type="text" class="form-control col-lg-7"  style="border: 1px solid black; background-color:#e2e6e3" placeholder="Enter Score" value="100" name="score2"/>
    </div><br>

      <div class="row"> <b class="col-lg-5" style="padding-top: 13px;">Score 3</b><input type="text" class="form-control col-lg-7"  style="border: 1px solid black; background-color:#e2e6e3" placeholder="Enter Score" value="100" name="score3"/>
    </div><br>

      <div class="row"> <b class="col-lg-5" style="padding-top: 13px;">Score 4</b><input type="text" class="form-control col-lg-7"  style="border: 1px solid black; background-color:#e2e6e3" placeholder="Enter Score" value="100" name="score4"/>
    </div><br>

</div>
</div></font>
<div align=center>
<button class="btn btn-primary" style=" width: 100px;">Save</button> <button  style=" width: 100px; height: 35px; border-radius: 5px; color:#428bca; border: 1px solid #428bca;">Next</button>
    </div>              <!-- Row -->
   </div>   
         </div>
     </form>


          
                      <!-- /Page Content -->
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