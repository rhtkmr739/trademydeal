<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;

use DB;

use Livewire\Component;

class Market extends Component
{
    public function render()
    {
        return view('livewire.market');
    }
    
    /**
     * Show the sub sub category / market screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $categorySku
     * @return \Illuminate\View\View
     */

    public function show(Request $request, $categorySku)
    {
        $getParentCategory =  DB::select("call uspGetCategoryBySku('".$categorySku."')");
        if($getParentCategory){
            $getMarkets =  DB::select("call uspGetAllActiveMarkets('".$getParentCategory[0]->category_id."')");
            return view('livewire.market',['getMarkets'=>$getMarkets,'getParentCategory'=>$getParentCategory]);
        }
    }
}
