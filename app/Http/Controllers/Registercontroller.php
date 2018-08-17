<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Registercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function register(Request $request)
    {
        //
        $fullname=$request->input('fullname');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $username=$request->input('username');
        $password=$request->input('password');
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        // $wrong= null;
        // return view('students.register',['wrong'=>$wrong]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fullname' => 'required',
            'email' => 'required|email|unique:registers',//seting rules for email
            'phone' => 'required|min:11|max:13',
            'username' => 'required|unique:registers',
            'password' => 'required|min:6'
        ]);

        // $register = new Register([

        //     'full_name' => $request->get('fullname'),
        //      'email' => $request->get('email'),
        //      'phone' => $request->get('phone'),
        //      'username' => $request->get('username'),
        //      'password' => bcrypt($request->get('password'))//encrypting password
        // ]);
        // $register->save();

 $data = [
            'email'=>$request->email,
            'name'=>$request->fullname,
            'user'=>$request->username,
            'emailconfirm'=>bcrypt($request->email),
            'token'=> $token = str_random(100)

        ];

         $register =  Register::create([

            'full_name' => $request->get('fullname'),
             'email' => $request->get('email'),
             'phone' => $request->get('phone'),
              'token' => $token,
             'username' => $request->get('username'),
             'password' => bcrypt($request->get('password'))//encrypting password
        ]);
      
 // return  $register->full_name;

        
       // dd($data);...this displays all $data
        
        Mail::Send('mail.mail',$data,function($message) use ($data){
            $message->from('noreply@top.ng','The Oke Ogun Polythecnic');
            $message->to($data['email']);
            $message->subject('Confirm your email');
        });


        //uploading picture
$input = $request->all(); //get all the user input

        $phone = htmlspecialchars($input['phone']);
        $use = htmlspecialchars($input['username']);


 $file = $request ->file('fileToUpload');
$imageurl = "public\Dp\\".$data['user'].".jpg";//we can still use $use instead of $data['user']
\Storage::disk('local')->put($imageurl, File::get($file));
//the back slash b4 Storage is incase if we did not import the library

        //uploading picture
       $message = 'A confirmation link has been sent to your email';
        \Session::put('message',$message);
    
return redirect('register');
        // return redirect()->route('students.registered')->with('success','Registeration Sucessful!');
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
