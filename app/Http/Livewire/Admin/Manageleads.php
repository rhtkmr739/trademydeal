<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;

class Manageleads extends Component
{
    public function render()
    {
        return view('livewire.admin.manageleads');
    }

    public function createNewLead(Request $request)
    {
        $getCategories =  DB::select("call uspGetAllActiveCategories()");

        return view('livewire.admin.lead.create',['getCategories'=>$getCategories]);
    }

    public function saveNewLead(Request $request)
    {
         // dd($request->all());
         try{
           
// handling inserting into DB
             $getAddLeadResponse =  DB::select("call uspAddVerifiedLead('".$request->title."','".$request->description."','".$request->contactname."',".$request->mobile.",'".$request->email."',".$request->categoryid.",'details','".$request->address."','".$request->city."','".$request->state."',".$request->pincode.",".session('userdetail')[0]->userDetailId.")");
             
             if(isset($getAddLeadResponse[0]->error)){
                return redirect()->back()
                ->withErrors(['error' => $getAddLeadResponse[0]->error]);
             }else{
                return redirect('/admin/dashboard')->withSuccess('YOUR VERIFIED ADDED SUCCESSFULLY !');
             }
              
        }catch (\Exception $ex) {
              //print_r($ex); exit();
              print_r($ex->getMessage()); exit();
            return redirect()->back()
                ->withErrors(['error' => 'Error while creating Lead Response in DB, Please try again later!']);
        }
    }

    public function getVerifiedLeads(Request $request)
    {
         // dd($request->all());
         try{
           
// get verified leads list
             $getVerifiedLeads =  DB::select("call uspGetVerifiedLeads()");
             
             if(isset($getVerifiedLeads[0]->error)){
                return redirect()->back()
                ->withErrors(['error' => $getVerifiedLeads[0]->error]);
             }else{
                return view('livewire.admin.lead.verified-lead-list',['getVerifiedLeads'=>$getVerifiedLeads]);
             }
              
        }catch (\Exception $ex) {
              //print_r($ex); exit();
              print_r($ex->getMessage()); exit();
            return redirect()->back()
                ->withErrors(['error' => 'Error while creating Lead Response in DB, Please try again later!']);
        }
    }
    

}
