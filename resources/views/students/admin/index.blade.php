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
                  <!-- Row -->

     <h4><strong><center>MY APPLICATION</center></strong></h4><br>
 
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
                            <thead>
                                <tr class="row100 head">
                                    <th class="cell100 column1">Reg no</th>
                                    <th class="cell100 column2">Program</th>
                                    <th class="cell100 column3">Courses</th>
                                    <th class="cell100 column4">Screening Schedule</th>
                                    <th class="cell100 column5">Average Score</th>
                                    <th class="cell100 column5">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table100-body js-pscroll">
                        <table>
                            <tbody>

                                 @if(Session::has('user'))
                
                @if($status)
                   <tr class="row100 body">
                                    <td class="cell100 column1">{{$status->reg_no}}</td>
                                    <td class="cell100 column2">{{$status->program}}</td>
                                    <td class="cell100 column3">{{$status->courses}}</td>
                                    <td class="cell100 column4">{{$status->screening_schedule}}</td>
                                    <td class="cell100 column4">{{$status->average_score}}</td>
                                    <td class="cell100 column5"><font class="text-primary"><a href="processing"><button class="btn btn-info">Complete</button></a></font></td>
                                </tr>
                @else
                   <tr class="row100 body">
                                    <td class="cell100 column1"></td>
                                    <td class="cell100 column2"></td>
                                    <td class="cell100 column3">No application yet</td>
                                    <td class="cell100 column4"></td>
                                    <td class="cell100 column4"></td>
                                    <td class="cell100 column5"><a href="application" class="btn btn-primary">Apply</a></td>
                                </tr>
                @endif
                        
                        
                    
            @endif
                                

                            </tbody>
                        </table>
                    </div>
                </div>
                
                

                
             <h4><strong><center>MY ADMISSION</center></strong></h4><br>

           
   
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
                            <thead>
                                <tr class="row100 head">
                                    <th class="cell100 column1">Reg no</th>
                                    <th class="cell100 column2">Program Name</th>
                                    <th class="cell100 column3">Department</th>
                                    <th class="cell100 column4">Campus</th>
                                    <th class="cell100 column5">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="table100-body js-pscroll">
                        <table>
                            <tbody>
                                <tr class="row100 body">
                                    <td class="cell100 column1"></td>
                                    <td class="cell100 column2"></td>
                                    <td class="cell100 column3">No admission yet</td>
                                    <td class="cell100 column4"></td>
                                    <td class="cell100 column5"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
               </div>  



             </div>   
         </div>
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