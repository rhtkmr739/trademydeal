<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;

use DB;
use Livewire\Component;

class Industry extends Component
{
    public function render()
    {
        return view('livewire.industry');
    }


    /**
     * Show the sub category / industry screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $categorySku
     * @return \Illuminate\View\View
     */

    public function show(Request $request, $categorySku)
    {
        $getParentCategory =  DB::select("call uspGetCategoryBySku('".$categorySku."')");
        if($getParentCategory){
            $getIndustries =  DB::select("call uspGetAllActiveIndustries('".$getParentCategory[0]->category_id."')");
            return view('livewire.industry',['getIndustries'=>$getIndustries,'getParentCategory'=>$getParentCategory]);
        }
    }

}
