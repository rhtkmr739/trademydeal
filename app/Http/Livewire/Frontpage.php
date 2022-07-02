<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;

use DB;
use Livewire\Component;

class Frontpage extends Component
{
    public function render()
    { 
        if (Auth::check()) {
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
        }else{
            session()->put('userdetail', null);
            session()->put('userRoles', null);
        }
        


        // get category list for search filter
        $getCategoriesList =  DB::select("call uspGetAllActiveCategories()");

        // get top 4 category for below search filter
        $getCategoryBelowFilter =  DB::select("call uspGetHomeMenu()");

        // get top most categories name list
        $getMostPolpularCategoriesNames =  DB::select("call uspGetHomeMostPolpularCategories()");

        // get top most categories with sub category details
        $getMostPolpularCategoriesWithSubCategoryDetails =  DB::select("call uspGetHomeMostPolpularCategoriesDetails()");

        // get top 10 verifed Leads 
        $getVerifiedLeads =  DB::select("call uspGetVerifiedLeadsForHomePage()");

        $buyerListCounter = 1;

        return view('livewire.frontpage',['getCategoriesList'=>$getCategoriesList,'getCategoryBelowFilter'=>$getCategoryBelowFilter,'getMostPolpularCategoriesNames'=>$getMostPolpularCategoriesNames,'getMostPolpularCategoriesWithSubCategoryDetails'=>$getMostPolpularCategoriesWithSubCategoryDetails,'getVerifiedLeads'=>$getVerifiedLeads,'buyerListCounter'=>$buyerListCounter]);
    }
}
