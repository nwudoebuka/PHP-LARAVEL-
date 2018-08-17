<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\testController;
use App\Http\Controllers\Connection;
use App\Register;

class Verifycontroller extends Controller
{
	    //
	public function VerifyUser($token)
	{
		// $connection = new Connection;
		// $conn = $connection->connectToDB();

		// if($conn != null){
		// 	$sql = "SELECT * FROM registers WHERE status = 'x' WHERE username = 'dghgfd'";
		// 	$result = $conn->query($sql);
		// 	if ($conn->query($sql) === TRUE) {
		// 		return $result;
		// 	}else{
		// 		return 'no query';
		// 	}
		// }else{
		// 	return 'no connection';
		// }
		// Register::where('username', '=', $username)->where('username', '=', $username);  //this selects two columns from database
		// Register::all();
		$user = Register::where('token', '=', $token)->first();//replacing first() with get() will select all the rows where token is $token and first() will simply get the first row where token is $token.

		if ($user) {
	   // user found
			//$wrong = ['Invalid login details!'];
			$user->status = 1;
			$user->save();
	        $message = 'Email confirmation succesful';
	        \Session::put('message',$message);
	        return redirect('/');

		}else{

			$myerror = 'Something went wrong!';
	        \Session::put('myerror',$myerror);

	        //return view('students/login');
	         return redirect('/');

	         // return redirect()->intended('/'); // this will also redirect to route and call all our css and java script class
		}
	}

	// public function test(Request $request){
		

	// 	return $request->query('token');
	// }

	// public function test1($email,$name,$state){
	// 	// $name='Ebuka';
	// 	// $test = new testController($name);
	// 	// $firstname = $test->getusername();
	// 	// $test->setusername('Tola');
	// 	// $secondname = $test->getusername();

	// 	return $email."____".$name."___".$state;

	// 	//this test module will return variables in the url
	// }


// public function test2(Request $request){
// 		// $name='Ebuka';
// 		// $test = new testController($name);
// 		// $firstname = $test->getusername();
// 		// $test->setusername('Tola');
// 		// $secondname = $test->getusername();
//         //this test module will return variables in the url

// 		return $request->query('token');
// 	}



}
