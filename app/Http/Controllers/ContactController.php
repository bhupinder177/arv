<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Session;
use Curl;
use DB;
use Crypt;
use Auth;
use DateTime;
use App\Helpers\GlobalFunctions as CommonHelper;
use App\Model\Media;
use App\Model\Career;
use App\Model\Settings;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('front.contact.contact');
    }

    public function contactSave(Request $request)
    {
        $validator = Validator::make($request->all(),[
        'name' => 'required',
        'email' => 'required',
        'subject' => 'required',
        'phone' => 'required',
        'message' => 'required',

        ]);

        if ($validator->fails()) {
        $errors = $validator->errors();
        $response['validation']  = false;
        $response['errors']      = $errors;
        return response($response);
        }

        else
        {
        $mailData = array('email'=>$request->email,'phone'=>$request->phone,'subject'=>$request->subject,'name'=>$request->name,'message'=>$request->message);
        $res = CommonHelper::sendmail('test@gmail.com', 'test','test@gmail.com',$request->firstName, 'Contact us' , ['data'=>$mailData], 'emails.contact','',$attachment=null);
        if($res)
        {
        $output['success'] ="true";
        $output['success_message'] ="Contact Form Submitted Successfully";
        $output['resetform'] ='true';
        }
        else
        {
         $output['formErrors'] ="true";
         $output['errors'] ="Contact form not send";
         }
       }
        return response($output);

    }

    public function homeSave(Request $request)
    {
      $validator = Validator::make($request->all(),[
      'name' => 'required',
      'email' => 'required',
      'phone' => 'required',
      'message' => 'required',

      ]);

      if ($validator->fails()) {
      $errors = $validator->errors();
      $response['validation']  = false;
      $response['errors']      = $errors;
      return response($response);
      }

      else
      {
      $mailData = array('email'=>$request->email,'name'=>$request->name,'phone'=>$request->phone,'message'=>$request->message);
      $res = CommonHelper::sendmail('test@gmail.com', 'test','test@gmail.com',$request->firstName, 'GET IN TOUCH' , ['data'=>$mailData], 'emails.homegetintouch','',$attachment=null);
      if($res)
      {
      $output['success'] ="true";
      $output['success_message'] ="Form Submitted Successfully";
      $output['resetform'] ='true';
      }
      else
      {
       $output['formErrors'] ="true";
       $output['errors'] ="form not send";
       }
     }
      return response($output);

    }

    public function about()
    {
        return view('front.about.about');
    }






    public function gettouchSave(Request $request)
    {
      $validator = Validator::make($request->all(),[
      'name' => 'required',
      'email' => 'required',
      'message' => 'required',

      ]);

      if ($validator->fails()) {
      $errors = $validator->errors();
      $response['validation']  = false;
      $response['errors']      = $errors;
      return response($response);
      }

      else
      {
      $mailData = array('email'=>$request->email,'name'=>$request->name,'message'=>$request->message);
      $res = CommonHelper::sendmail('test@gmail.com', 'test','test@gmail.com',$request->name, 'Get In Touch' , ['data'=>$mailData], 'emails.getintouch','',$attachment=null);
      if($res)
      {
      $output['success'] ="true";
      $output['modelhide'] ="#exampleModal";
      $output['success_message'] ="Form Submitted Successfully";
      $output['resetform'] ='true';
      }
      else
      {
       $output['formErrors'] ="true";
       $output['errors'] ="Form not send";
       }
     }
      return response($output);
    }

}
