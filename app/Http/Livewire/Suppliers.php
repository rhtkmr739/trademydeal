<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;

use DB;
use Livewire\Component;

class Suppliers extends Component
{
    public function render()
    {
        return view('livewire.suppliers');
    }

    public function show(Request $request, $categorySku)
    {
        $getParentCategory =  DB::select("call uspGetCategoryBySku('".$categorySku."')");
        if($getParentCategory){
            $getCategoryProducts =  DB::select("call uspGetAllActiveProductsBasedOnCategoryId('".$getParentCategory[0]->category_id."')");
            return view('livewire.suppliers',['searchTerm'=>$getParentCategory[0]->category_name,'getCategoryProducts'=>$getCategoryProducts,'getParentCategory'=>$getParentCategory]);
        }
    }

}
