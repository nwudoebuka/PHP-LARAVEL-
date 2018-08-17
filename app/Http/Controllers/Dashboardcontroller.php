<?php

namespace App\Http\Controllers;

use App\Application;
use App\Program;
use App\Register;
use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
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



 public function dashboard()
    {
        //
         if(\Session::has('user')){
            $user = \Session::get('user');
             $test=$user->id;
             // return view('students.admin.index'); //for view directly
             $status = Application::where('userid', '=', $test)->first();
              $data = array('status'=>$status);
        return view('students.admin.index',$data);
         }else{
        return view('students.login');
         }
        
       
    }

    public function application()
    {
     

       if(\Session::has('user')){
            $user = \Session::get('user');
             $test=$user->id;
             // return view('students.admin.index'); //for view directly
             $apply = Program::select('program')->distinct()->get();
             $show = null;
              $data = array('apply'=>$apply, 'show'=>$show);
        return view('students.admin.application',$data);
         }else{
            $myerror = 'Session expired !';
            \Session::put('myerror',$myerror);
        return view('students.login');
         }  
       
    }

    public function courses(Request $request)
    {

            $courses = Program::where('program', '=', $request->pg)->get(['courses', 'id']);

               // foreach ($courses as $key=>$course){
                 //   echo "<option>".$course->courses."</option>";
                     return response()->json(['courses'=>$courses]);
             

                //}

               
                   
        
       
    }



public function forms()
    {

         
return view('students.admin.applicationform');
               
    }

    public function ajax()
    {
         $ajax = Program::all();
         // $ajax = Program::select('program','id','courses')->get();
         $data = array('ajax'=>$ajax);
return view('students.admin.ajaxview',$data);
    }

    public function form1(Request $request)
    {
            // $score1=$request->input('score1');
            // $score2=$request->input('score2');
            // $score3=$request->input('score3');
            // $score4=$request->input('score4');
            // $subject1=$request->input('subject1');
            // $subject2=$request->input('subject2');
            // $subject3=$request->input('subject3');
            // $subject4=$request->input('subject4');
            // \Session::put('score1',$score1);
            //  \Session::put('score2',$score2);
            //  \Session::put('score3',$score3);
            //  \Session::put('score4',$score4);
            //  \Session::put('subject1',$subject1);
            //  \Session::put('subject2',$subject2);
            //  \Session::put('subject3',$subject3);
            //  \Session::put('subject4',$subject4);
            //   $scored1 = \Session::get('score1');
            //   $scored2 = \Session::get('score2');
            //   $scored3 = \Session::get('score3');
            //   $scored4 = \Session::get('score4');
            //   $subjectd1 = \Session::get('subject1');
            //   $subjectd2 = \Session::get('subject2');
            //   $subjectd3 = \Session::get('subject3');
            //   $subjectd4 = \Session::get('subject4');
        // echo $scored1."____".$scored2."_______".$score3."______".$score4;

               $form1details= [
            'sc1'=>$request->score1,
            'sc2'=>$request->score2,
            'sc3'=>$request->score3,
            'sc4'=>$request->score4, 
             'sb1'=>$request->score1,
            'sb2'=>$request->score2,
            'sb3'=>$request->score3,
            'sb4'=>$request->score4,
            'utmeregno'=>$request->utmeregno,             
             ];
         \Session::put('alldetails',$form1details);
          $all =array('formdetails' => \Session::get('alldetails'));

  
            return view('students.admin.applicationform2',$all);
             

             // return $all['sb4'];
          // return \Session::get('alldetails')['sc1'];
               
    }



 public function addcourses(Request $request)
    {
         if(\Session::has('user')){

          $add = \Session::get('user');
          $user = Register::where('username', '=', $add->username)->first();

        if ($user) {
            $adduser = Application::where('userid', '=', $add->id)->first();

        if ($adduser) {
           $myerror = 'you have an outstanding application';
            \Session::put('myerror',$myerror);
        }else{
            $regnumber="T001";
   $appling =  Application::create([
            'reg_no' => $regnumber,
            'userid' => $add->id,
             'program' => $request->get('program'),
             'courses' => $request->get('level'),
             ]);
   if($appling){

    $message = 'program added';
            \Session::put('message',$message);
   }else{
 $myerror = 'Something went wrong';
            \Session::put('myerror',$myerror);

   }
              
        }

        }
             
             

             // return view('students.admin.application');
        // return redirect()->back();
             
return redirect('application');

}

  }

    public function actiondelete(Request $request)
    {
       
      $program = $request->get('program');
       $course = $request->get('course');
       $id = $request->get('id');

       return $id;
        // $delete = Program::where('prograrm', '=', $program)->where('courses', '=', $course)->delete();
       $delete = Program::where('id', '=', $id)->delete();
       return redirect()->back();


    }

    public function addprogram(Request $request)
    {
       
      $programname = $_POST['programname'];
       $coursename = $_POST['coursename'];

       $add =  Program::create([

            'program' => $request->get('programname'),
             'courses' => $request->get('coursename'),
           
        ]);
       if($add){

    $message = 'program added';
            \Session::put('message',$message);

        return response()->json(['message'=>"worked like a charm"]);
   }else{
 $myerror = 'Something went wrong';
            \Session::put('myerror',$myerror);

   }

return redirect()->back();

   }

    public function delete($id)
    {
       
      // return $id;
      //   // $delete = Program::where('prograrm', '=', $program)->where('courses', '=', $course)->delete();
       $delete = Program::where('id', '=', $id)->delete();
       return redirect()->back();


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
