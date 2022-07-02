<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;

use DB;

use Livewire\Component;

class Queries extends Component
{
    public function render()
    {
        return view('livewire.queries');
    }
    
        
    public function postRequirement(Request $request)
    {
        
        try{

            $created_by = 0;
            $created_by_type = 0;

             $getAddLeadQueryResponse =  DB::select("call uspAddLeadQuery('".$request->postcompanyname."','".$request->postcontactname."',".$request->postmobile.",'".$request->postemail."','".$request->postaddress."
             ','".$request->postcity."','".$request->poststate."',".$request->postpincode.",'".$request->postdescription."',".$created_by.",".$created_by_type.")");
             
             if(isset($getAddLeadQueryResponse[0]->error)){
                return redirect()->back()
                ->withErrors(['error' => $getAddLeadQueryResponse[0]->error]);
             }else{
                return redirect('/')->withSuccess('YOUR REQUIREMENT SENT SUCCESSFULLY !');
             }
              
        }catch (\Exception $ex) {
              //print_r($ex->getMessage()); exit();
            return redirect()->back()
                ->withErrors(['error' => 'Error while sending request, Please try again later!']);
        }
       
    }
}
