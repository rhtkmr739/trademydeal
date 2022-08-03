<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Auth;

use DB;
use Livewire\Component;

class Promotional extends Component
{
    public function render()
    {
        return view('livewire.admin.promotional');
    }

    public function getPromotionalUsers()
    {
        $promotionalUserList =  DB::select("call uspGetPromotionalUsersList()");
        
        return view('livewire.admin.promotional/promotional-users',["promotionalUserList"=>$promotionalUserList]);
    }

    public function renderPromotionalEmailCenter()
    {
        // $promotionalUserList =  DB::select("call uspGetPromotionalUsersList()");
        
        // return view('livewire.admin.promotional',["promotionalUserList"=>$promotionalUserList]);
    }
    
    
    public function getPromotionalGroups()
    {
        $promotionalGroupList =  DB::select("call uspGetPromotionalGroupsList()");
       echo env('APP_URL');
        return view('livewire.admin.promotional/promotional-groups',["promotionalGroupList"=>$promotionalGroupList]);
    }

 
    public function createPromotionalGroup(Request $request)
    {
        if(!isset($request->newGroupName)){
            return response()->json(array('responseStatus' => false, 'responseData'=>'Please enter group name!'));
        }else{
            $promotionalGroupList =  DB::select("call uspAddPromotionalGroup('".$request->newGroupName."')");
            if(isset($promotionalGroupList)){
                return response()->json(array('responseStatus' => true, 'responseData'=>$promotionalGroupList[0]->success));
            }else{
                return response()->json(array('responseStatus' => false, 'responseData'=>'Error while adding, Please try later!'));
            }
            
        }
        
    }

    
    public function getPromotionalUserByGroupId(Request $request){
        try{
            
             $getPromotionalUserByGroupId =  DB::select("call uspGetPromotionalUsersListByGroupId(".$request->currentGroupId.")");
             //dd($getPromotionalUserByGroupId);
             if($getPromotionalUserByGroupId){
                $returnHTML = view('livewire.admin.promotional.promotional-user-list-by-group-id')->with('getPromotionalUserByGroupId', $getPromotionalUserByGroupId)->render();
                return response()->json(array('success' => true, 'html'=>$returnHTML));
             }else{
                return response()->json(array('success' => false, 'html'=>'No users found in this group'));
             }

        }catch (\Exception $ex) {
             print_r($ex->getMessage()); exit();
            return redirect()->back()
            ->withErrors(['error' => 'No catalog found.']);
        }
    }

}
