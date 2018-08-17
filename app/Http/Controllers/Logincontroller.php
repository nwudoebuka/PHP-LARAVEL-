<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Register;

class Logincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response


     */


    public function test(){


        // $data = [
            
        //     'bmessage'=> $token = str_random(100)

        // ];

        // Mail::Send('mail.mail',$data,function($message) use ($data){
        //     $message->from('The Oke Ogun Poly','noreply@top.ng');
        //     $message->to('nwudoebuka@gmail.com');
        //     $message->subject('testing mail function');
        // });

        // $to      = 'nwudoebuka@gmail.com';
        // $subject = 'the subject';
        // $message = 'hello';
        // $headers = 'From: webmaster@example.com' . "\r\n" .
        //     'Reply-To: webmaster@example.com' . "\r\n" .
        //     'X-Mailer: PHP/' . phpversion();

        // mail($to, $subject, $message, $headers);

    }

    public function login(Request $request)
    {
        try { //

            $wrong = ['Invalid login details!'];
            $econfirm = ['confirmation working'];

            $usernameinput=$request->input('username');
            $passwordinput=$request->input('password');
            $verified = "1";
            $unverified = "0";
            $passencrypt=$request->input('password');
            
            $this->validate($request,[
                'password' => 'required|min:6'
            ]);

            $notverified = Register::where('username', '=', $usernameinput)
                                    ->where('status', '=', $unverified)
                                    ->first();  //this selects three columns from database
            
            if ($notverified){

                if(\Hash::check($passencrypt, $notverified->password)){
                    $myerror = 'You need to verify your email !';
                    \Session::put('myerror',$myerror);
              
                    return redirect('/');
                }else{
                    $myerror = 'Invalid Login !!!';
                    \Session::put('myerror',$myerror);
                    
                    return redirect('/');
                }
            }else{

                $login = Register::where('username', '=', $usernameinput)->where('status', '=', $verified)->first();  //this selects three columns from database
                if ($login){
                    //return $passencrypt;

                    // echo $usernameinput."__________".$passencrypt."__________".$verified;
                    
                    if(\Hash::check($passencrypt, $login->password)){
                        $message = 'Login succesful!';
                        \Session::put('message',$message);
                        \Session::put('user',$login);
                      // \Session::put('username',$usernameinput);
                         
                        return redirect('dashbd');

                    }else{
                        $myerror = 'Invalid Login !!!';
                        \Session::put('myerror',$myerror);
                          
                        return redirect('/');//for route
                    }
                
                    // echo count($login);
                }else{
                    // echo $usernameinput."__________".$passencrypt."__________".$verified;
                    $myerror = 'Invalid Login !';
                    \Session::put('myerror',$myerror);

                    //return view('students/login');
                    return redirect('/');
                }
            }
        }catch(\Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }

        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "top_studentreg";
        // $date = date('d-m-Y H:m:s');
        // // Create connection
        // $conn = new \mysqli($servername, $username, $password, $dbname);
        // // Check connection
        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        // }
        // $sql = "SELECT * FROM registers WHERE username = '".$usernameinput."' AND password = '".$passwordinput."'";
        // $result = $conn->query($sql);
        // if ($result->num_rows > 0 ) {
        // return view('students/login',['wrong'=>$wrong],['econfirm'=>$econfirm]);

            
        // }else{
        // echo $usernameinput."_____".$password;

        //     // return redirect('register');
        // }
        
        // return view('students/login',['wrong'=>$wrong],['econfirm'=>$econfirm]);

    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('students.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
