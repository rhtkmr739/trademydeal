<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;

use DB;
use Livewire\Component;

class Search extends Component
{
    public function render()
    {
        return view('livewire.searchviews.search');
    }

    public function search(Request $request, $searchBy)
    {
        if($searchBy == 'productservice'){
            $getSearchProductsServices =  DB::select("call uspSearchProductsServices('".$request->keyword."')");
            $allDataInArray = [];
            foreach ($getSearchProductsServices as $data) {
                $tempArray = [];
                array_push($tempArray,"/detail/$data->product_url--/theme/images/products/$data->product_image-- $data->product_name--$data->product_address--cafe-cat--5--12--open", $data->product_lat, $data->product_long, 0 , '/theme/images/products/'.$data->product_image);
               
                array_push($allDataInArray,implode('||',$tempArray));
              }
            // search based on seller default category and tags 
            $getSearchServices =  DB::select("call uspSearchServices('".$request->keyword."')");

            return view('livewire.searchviews.products-services',['searchTerm'=>$request->keyword,'getSearchProductsServices'=>$getSearchProductsServices, 'allDataInArray'=>$allDataInArray, 'getSearchServices'=>$getSearchServices]);
            
        }else if($searchBy == 'company'){
            $getSearchCompanies =  DB::select("call uspSearchCompanies('".$request->keyword."')");
            $allDataInArray = [];
            foreach ($getSearchCompanies as $data) {
                $tempArray = [];
                array_push($tempArray,"/seller/catalog/$data->userCatalogUrl--/theme/images/seller/$data->userProfileImage-- $data->userCompanyName--$data->userCompanyAddress--cafe-cat--5--12--open", $data->userCompanyLat, $data->userCompanyLong, 0 , '/theme/images/seller/'.$data->userProfileImage);
               
                array_push($allDataInArray,implode('||',$tempArray));
              }
            return view('livewire.searchviews.company',['searchTerm'=>$request->keyword,'getSearchCompanies'=>$getSearchCompanies,'allDataInArray'=>$allDataInArray]);
            
        }else if($searchBy == 'verifiedlead'){
            $getSearchVerifiedLeads =  DB::select("call uspSearchVerifiedLeads('".$request->keyword."')");
            return view('livewire.searchviews.verified-lead',['searchTerm'=>$request->keyword,'getSearchVerifiedLeads'=>$getSearchVerifiedLeads]);
            
        }else{
            return view('livewire.searchviews.search',['searchTerm'=>$request->keyword]);
        }
        
    }
}
