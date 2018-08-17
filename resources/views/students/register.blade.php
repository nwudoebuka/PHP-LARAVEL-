<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Student Registeration portal</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Switch Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //fonts -->
    <!-- Font-Awesome-File-Links -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h1 class="title-agile text-center">Student Registeration Portal</h1>

    



    <div class="content-w3ls">

@include('includes.messages')
<!-- 
         @if(count($errors) > 0)
@foreach($errors->all() as $error)
            <div class="alert alert-danger" style="text-align: center;">{{ $error }}</div>
                <div class="clear-both"></div>
        @endforeach

      @endif

      @if(\Session::has('success'))

  <div class="alert alert-success" style="text-align: center;">{{ \Session::get('success') }}</div>
                <div class="clear-both"></div>


@endif -->

        <div class="content-top-agile">
            <h2>Create an account</h2>
        </div>
        <div class="content-bottom">
            <form action="{{url('students')}}" method="post"   enctype="multipart/form-data">

               <!--  csrf is always needed in form unless disabled -->
                {{csrf_field()}} 

                <div class="field-group">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="fullname" id="text1" type="text" value="" placeholder="full name" required>
                    </div>
                </div>

                <div class="field-group">
                    <span class="fa fa-envelope" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="email" id="text1" type="email" value="" placeholder="email" required>
                    </div>
                </div>

                <div class="field-group">
                    <span class="fa fa-phone" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="phone" id="text1" type="text" class="phone" value="" placeholder="phone" required>
                    </div>
                </div>

<label>  Photo  </label>

                        <input name="fileToUpload" id="fileToUpload" type="file" required class="form-control">

                        <br>
                  


                <div class="field-group">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="username" id="text1" type="text" value="" placeholder="username" required>
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="password" id="password"  type="Password" placeholder="password" required>
                    </div>
                </div>

<div class="field-group">
                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="confirm_password" min="11" max="13" id="confirm_password" type="Password" placeholder="confirm password" required>
                    </div>
                </div>


                <ul class="list-login">
                 
                
                    <li class="clearfix"></li>
                </ul>
                <div class="wthree-field">
                    <input id="saveForm" name="saveForm" type="submit" value="Register" />
                </div>
            </form>
<script>
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords do not match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

     <script>
  $('.phone').keyup(function(){
  if(this.value != this.value.replace(/[^0-9\+]/g, '')){
  this.value = this.value.replace(/[^0-9\+]/g, '');
}
});
  </script>
            <div align=center><font size="3">
                                    <a href="/" class="text-center">already registered?</a></font>
                    </div>
                   
        </div>
    </div>
    <div class="copyright text-center">
        <p>© 2018 New age. All rights reserved | Design by
            <a href="http://newage.ng">Newage</a>
        </p>
    </div>
</body>
<!-- //Body -->

</html>