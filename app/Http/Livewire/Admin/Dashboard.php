<?php

namespace App\Http\Livewire\Admin;


use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;


class Dashboard extends Component
{
    public function render()
    {
        try{
            $getAdminDashboardData =  DB::select("call uspGetAdminDashboardData(".Auth::user()->id.")");

             if(isset($getAdminDashboardData[0]->error)){
                return redirect()->back()
                ->withErrors(['error' => $getAdminDashboardData[0]->error]);
             }else{
                return view('livewire.admin.dashboard',['getAdminDashboardData'=>$getAdminDashboardData]);
             }
              
        }catch (\Exception $ex) {
              //print_r($ex); exit();
              print_r($ex->getMessage()); exit();
            return redirect()->back()
                ->withErrors(['error' => 'Error while getting admin data, Please try again later!']);
        }

    }
}
