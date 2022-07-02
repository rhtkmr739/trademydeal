<?php

namespace App\Http\Livewire;

use DB;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;

class Header extends Component
{
    public function render(Request $request)
    {
        $getHeaderMenus =  DB::select("call uspGetHomeMenu()");
        //dd($getHeaderMenus);
        
        $showDashboardLink = ($request->route()->uri()) ? false : true;
         
        return view('livewire.header',['getHeaderMenus'=>$getHeaderMenus,"showDashboardLink"=>$showDashboardLink]);
    }
}
