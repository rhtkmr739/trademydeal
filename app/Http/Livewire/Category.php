<?php

namespace App\Http\Livewire;

use DB;
use Livewire\Component;

class Category extends Component
{
    public function render()
    { 
        $getCategories =  DB::select("call uspGetAllActiveCategories()");
        return view('livewire.category',['getCategories'=>$getCategories]);
    }
}
