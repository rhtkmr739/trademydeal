<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use Mail;
use DB;
 
use App\Mail\NotifyMail;
use App\Mail\PromotionalMailOTPVerification;
use App\Mail\SendVerifyMail;

 
class SendEmailController extends Controller
{
     
    public function index()
    {
     
      Mail::to('support@trademydeal.com')->send(new PromotionalMailOTPVerification());
 
      if (Mail::failures()) {
           return response()->json('Sorry! Please try again latter');
      }else{
           return response()->json('Great! Successfully send in your mail');
         }
    } 

    public function sendMailOTP()
    {
     
          $getCreateOTP =  DB::select("call uspCreateOTP('PROMOTIONAL_MAIL_OTP')");
          
          if($getCreateOTP[0]->success){

               Mail::to('support@trademydeal.com')->send(new PromotionalMailOTPVerification($getCreateOTP[0]->otp));
 
               if (Mail::failures()) {
                    return response()->json(array('success' => false, 'data'=>'Unable to send OTP, Please try later.'));
               }else{
                    $returnHTML = view('emails.send-mail-otp-response')->with('getCreateOTP', $getCreateOTP[0])->render();
                    return response()->json(array('success' => true, 'data'=>$returnHTML));
               }
          }else{
               return response()->json(array('success' => false, 'data'=>'Unable to generate OTP, Please try later.'));
          }

    } 

    public function verifyMailOTP(Request $request)
    {
     if(isset($request->otpCode) && isset($request->otpId)){

          $getVerifyOTP =  DB::select("call uspVerifyOTP(".$request->otpId.",".$request->otpCode.")");
          
          if($getVerifyOTP[0]->success == 'Y'){
               $returnHTML = view('emails.send-mail-response')->with('getVerifyOTP', $getVerifyOTP[0])->render();
               return response()->json(array('success' => true, 'data'=>$returnHTML));
          }else{
               return response()->json(array('success' => false, 'data'=>$getVerifyOTP[0]->message));
          } 
      }else{
          return response()->json(array('success' => false, 'data'=>'Please enter valid OTP!'));
      }
    } 
    
    public function sendVerifiedMail(Request $request)
    {
     if(isset($request->getMailData) && isset($request->groupId)){

          $getPromotionalUsersListByGroupId =  DB::select("call uspGetPromotionalUsersListByGroupId(".$request->groupId.")");

          if($getPromotionalUsersListByGroupId){
               foreach ($getPromotionalUsersListByGroupId as $recipient) {
                    Mail::to($recipient->promotional_user_email)->send(new SendVerifyMail($request->getMailData));
                    if (Mail::failures()) {
                         Mail::to('support@trademydeal.com')->send($recipient->promotional_user_email.' email failed to send OTP');
                    }
               }
               return response()->json(array('success' => true, 'data'=>'Mail send successfully.'));
          }else{
               return response()->json(array('success' => false, 'data'=>'No uses found in group.'));
          } 
      }else{
          return response()->json(array('success' => false, 'data'=>'Group or mail content is not valid.'));
      }
    } 

}