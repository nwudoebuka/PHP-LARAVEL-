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
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 20px; width: 40%">40%</div>
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
<form action="form2" method=post>


   <div style="width: 100%; overflow: hidden; margin-top: 20px;"><font size=2>
    {{ csrf_field() }}
    <div class="col-lg-4 col-lg-offset-1"><div class="row"> <b class="col-lg-5" style="padding-top: 13px;">Surename</b><input type="text" class="form-control col-lg-7"  style="border: 1px solid black; background-color:#e2e6e3" placeholder="Surename" value="" name="surename"/>
    </div><br>

    <div class="row">
        <strong class="col-lg-4">Date of birth</strong> 
        <div class="col-lg-8">
            <select class="form-control col-lg-4"  name=subject1 style="color:#000; width: 80px"  required>
                    <option value="" selected="selected">&nbsp;&nbsp;01</option>
                    <option value="English">&nbsp;&nbsp;02</option>
                    <option value="Mathematics">&nbsp;&nbsp;03</option>
                    <option value="English">&nbsp;&nbsp;04</option>
                    <option value="Mathematics">&nbsp;&nbsp;05</option>
                    <option value="English">&nbsp;&nbsp;06</option>
                    <option value="Mathematics">&nbsp;&nbsp;07</option>
                    <option value="English">&nbsp;&nbsp;08</option>
                    <option value="Mathematics">&nbsp;&nbsp;09</option>
                    <option value="English">&nbsp;&nbsp;10</option>
                    <option value="Mathematics">&nbsp;&nbsp;11</option>
                    <option value="English">&nbsp;&nbsp;12</option>
                    <option value="Mathematics">&nbsp;&nbsp;13</option>
                    <option value="English">&nbsp;&nbsp;14</option>
                    <option value="Mathematics">&nbsp;&nbsp;15</option>
                    <option value="English">&nbsp;&nbsp;16</option>
                    <option value="Mathematics">&nbsp;&nbsp;17</option>
                    <option value="English">&nbsp;&nbsp;18</option>
                    <option value="Mathematics">&nbsp;&nbsp;19</option>
                    <option value="English">&nbsp;&nbsp;20</option>
                    <option value="Mathematics">&nbsp;&nbsp;21</option>
                       <option value="English">&nbsp;&nbsp;22</option>
                    <option value="Mathematics">&nbsp;&nbsp;23</option>
                    <option value="English">&nbsp;&nbsp;24</option>
                    <option value="Mathematics">&nbsp;&nbsp;25</option>
                    <option value="English">&nbsp;&nbsp;26</option>
                    <option value="Mathematics">&nbsp;&nbsp;27</option>
                    <option value="English">&nbsp;&nbsp;28</option>
                    <option value="Mathematics">&nbsp;&nbsp;29</option>
                    <option value="English">&nbsp;&nbsp;30</option>
                    <option value="Mathematics">&nbsp;&nbsp;31</option>
            </select> 

             <select class="form-control col-lg-4"  name=subject1 style="color:#000; width: 80px"  required>
                    <option value="" selected="selected">&nbsp;&nbsp;01</option>
                    <option value="English">&nbsp;&nbsp;02</option>
                    <option value="Mathematics">&nbsp;&nbsp;03</option>
                    <option value="English">&nbsp;&nbsp;04</option>
                    <option value="Mathematics">&nbsp;&nbsp;05</option>
                    <option value="English">&nbsp;&nbsp;06</option>
                    <option value="Mathematics">&nbsp;&nbsp;07</option>
                    <option value="English">&nbsp;&nbsp;08</option>
                    <option value="Mathematics">&nbsp;&nbsp;09</option>
                    <option value="English">&nbsp;&nbsp;10</option>
                    <option value="Mathematics">&nbsp;&nbsp;11</option>
                    <option value="English">&nbsp;&nbsp;12</option>
            </select>

            <select class="form-control col-lg-4"  name=subject1 style="color:#000; width: 80px"  required>
                    <option value="" selected="selected">&nbsp;&nbsp;1990</option>
                    <option value="English">&nbsp;&nbsp;1991</option>
                    <option value="Mathematics">&nbsp;&nbsp;1992</option>
                    <option value="English">&nbsp;&nbsp;1993</option>
                    <option value="Mathematics">&nbsp;&nbsp;1994</option>
                    <option value="English">&nbsp;&nbsp;1995</option>
                    <option value="Mathematics">&nbsp;&nbsp;1996</option>
                    <option value="English">&nbsp;&nbsp;1997</option>
                    <option value="Mathematics">&nbsp;&nbsp;1998</option>
                    <option value="English">&nbsp;&nbsp;1999</option>
                    <option value="Mathematics">&nbsp;&nbsp;2000</option>
                    <option value="English">&nbsp;&nbsp;2001</option>
            </select>
           
            <div class="clearfix"></div>
        </div>
        </div><br>
       
                   
                </div>
    <div class="col-lg-6 col-lg-offset-1"> 
       
<div class="row"> <b class="col-lg-5" style="padding-top: 13px;">Other Names</b><input type="text" class="form-control col-lg-7"  style="border: 1px solid black; background-color:#e2e6e3" placeholder="Enter Score" value="400" disabled/>
    </div><br>

<div class="row">
            <strong class="col-lg-4">Gender</strong> 
            <select class="form-control col-lg-8"  name=subject1 style="color:#000;"  required>
                    <option value="" disabled="disabled" selected="selected">&nbsp;&nbsp;Gender</option>
                    <option value="English">&nbsp;&nbsp;Male</option>
                    <option value="Mathematics">&nbsp;&nbsp;Female</option>
            </select>
        </div><br>

</div>
</div></font>
<div align=center>
    <a href="processing"><button type="button" style=" width: 100px; height: 35px; border-radius: 5px; color:#428bca; border: 1px solid #428bca;">Previous</button></a>
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