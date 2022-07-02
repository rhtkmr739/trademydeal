<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class Userdashboard extends Component
{
    public function render(Request $request)
    {
        // dd(Auth::user());
        // dd(session()->all());
        
        session()->put('currentUserRole', 'user');

        $getUserDetailsById =  DB::select("call uspGetUserDetailsById(".Auth::user()->id.")");
        if($getUserDetailsById){
            session()->put('userdetail', $getUserDetailsById);
        }else{
            session()->put('userdetail', null);
        }

        $getUserRolesById =  DB::select("call uspGetUserRolesById(".Auth::user()->id.")");
        if($getUserRolesById){
            session()->put('userRoles', $getUserRolesById);
        }else{
            session()->put('userRoles', null);
        }

  //dd(session()->all());
        if(session('userRoles')[0]->isEmployee == 'Y'){
            session()->put('currentUserRole', 'employee');
            return redirect('/employee/dashboard');
        }else if(session('userRoles')[0]->isSeller == 'Y'){
            session()->put('currentUserRole', 'seller');
            return redirect('/sellerdashboard');
        }else if(session('userRoles')[0]->isAdmin == 'Y'){
            session()->put('currentUserRole', 'admin');
            return redirect('/admin/dashboard');
        }else{
            return view('livewire.userdashboard');
        }
        
      
        
    }
}
