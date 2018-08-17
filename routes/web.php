<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	//initializing $wrong as null
	$wrong= null;
	$econfirm= null;
    return view('students.login',['wrong'=>$wrong],['econfirm'=>$econfirm]);
});

Route::post('/','Logincontroller@login');
//geting login form and sending to controller
Route::post('students/login','Logincontroller@login');

// Route::get('register', function(){

// 	return view('students.register');
// });


Route::get('register',['as'=>'students.registered','uses'=>'Logincontroller@register']);

//geting register form and sending to controller
Route::get('students', function () {
	//initializing $wrong as null
	
    return view('students.register');
});

Route::post('students','Registercontroller@store');

Route::get('verify/{token}','Verifycontroller@VerifyUser');
Route::get('dashbd','Dashboardcontroller@dashboard');

Route::get('application','Dashboardcontroller@application');
Route::post('getcourses','Dashboardcontroller@courses');
Route::post('addprograme','Dashboardcontroller@addcourses');
Route::get('processing','Dashboardcontroller@forms');
Route::post('form1','Dashboardcontroller@form1');

Route::get('/deleteprogram/{id}','Dashboardcontroller@delete');
Route::get('ajaxtable','Dashboardcontroller@ajax');
Route::post('actiondelete','Dashboardcontroller@actiondelete');
Route::post('addprogram','Dashboardcontroller@addprogram');

//Route::get('test2/{email}/{name}/{state}','Verifycontroller@teste2');





 // public function mail(Request $request){
 //        $request->validate([
 //        	'email' => 'required',
 //        	'subject' => 'required',
 //        	]);
 //        $data = [
 //        	'email'=>$request->email,
 //        	'subject'=>$request->subject,
 //        	'bmessage'=> $token = str_random(100)

 //        ];

 //        Mail::Send('mail.mail',$data,function($message) use ($data){
 //        	$message->from('herzelisamahi@gmail.com','noreply@oes.com.ng');
 //        	$message->to('nwudoebuka@gmail.com');
 //        	$message->subject('testing mail function');
 //        });

        	

 //        	$em = $data['email'];
 //        	DB::insert('insert into verifyemail (email,vcode) values (?,?)',[$em,$token]);
 //        	session()->flash('emailsent',"click on the link sent to your email to reset your password");
 //            return view('administrator.forgetpasswordpage',$data); 

 //        	// return redirect()->back();
 //    }


// Route::resource('students','Registercontroller');

