<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;

use DB;

use Livewire\Component;

class Detail extends Component
{
    public function render()
    {
        return view('livewire.detail');
    }

    public function show(Request $request, $productUrl)
    {
        $getProduct =  DB::select("call uspGetProductByUrl('".$productUrl."')");
        if($getProduct){
            $getAllProductCategory =  DB::select("call uspGetAllCategoryByProductId(".$getProduct[0]->product_id.")");
            $product_image_gallery = ($getProduct[0]->product_gallery) ? explode('||',$getProduct[0]->product_gallery) : $getProduct[0]->product_name;
            return view('livewire.detail',['searchTerm'=>$getProduct[0]->product_name,'getProduct'=>$getProduct,'getAllProductCategory'=>$getAllProductCategory,'product_image_gallery'=>$product_image_gallery]);
        }
    }
}
