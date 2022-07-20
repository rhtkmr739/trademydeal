<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;


class Sellerdashboard extends Component
{
    public function render(Request $request)
    {
       // dd(Auth::user());
       // dd(session()->all());
       if ($request->session()->has('userRoles')) {

            session()->put('currentUserRole', 'seller');
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

            return view('livewire.sellerdashboard');
        }else{
            return redirect('/userdashboard');
        }
       
    }

    public function createSeller(Request $request)
    {
       if(session('userRoles')[0]->isSeller == 'Y'){
        return redirect('/sellerdashboard');
       }else{
        return view('seller.create');
       }
        
    }
    
    
    public function addSeller(Request $request)
    {
        try{
            if(session('userRoles')[0]->isSeller == 'Y'){
                return redirect('/sellerdashboard');
            }

             $getAddSellerResponse =  DB::select("call uspAddSeller(".Auth::user()->id.",4,2,'".$request->name."','".$request->catalogurl."',".$request->mobile.",'".$request->email."','".$request->address."
             ','".$request->city."','".$request->state."',".$request->pincode.",".$request->lat.",".$request->long.",'".$request->description."','".$request->website."')");
             
             if(isset($getAddSellerResponse[0]->error)){
                return redirect()->back()
                ->withErrors(['error' => $getAddSellerResponse[0]->error]);
             }else{
                return redirect('/userdashboard')->withSuccess('YOUR SELLER ACCOUNT IS ACTIVATED SUCCESSFULLY !');
             }
              
        }catch (\Exception $ex) {
              //print_r($ex); exit();
              print_r($ex->getMessage()); exit();
            return redirect()->back()
                ->withErrors(['error' => 'Error while creating Seller in DB, Please try again later!']);
        }
       
    }

    public function getCurrentSellerDetails(Request $request)
    {
        try{
            if(session('currentUserRole') == 'user'){
                return ["reponseStatus"=>false,"responseData"=>"Please switch as a seller."];
            }

             $getCurrentSellerDetails =  DB::select("call uspGetCurrentSellerDetails(".Auth::user()->id.")");
             
             if(isset($getCurrentSellerDetails[0])){
                return ["reponseStatus"=>true,"responseData"=>$getCurrentSellerDetails];
             }else{
                return ["reponseStatus"=>false,"responseData"=>'No data found of current seller!'];
             }
              
        }catch (\Exception $ex) {
              //print_r($ex); exit();
              //print_r($ex->getMessage()); exit();
            return ["reponseStatus"=>false,"responseData"=>$ex->getMessage()];
        }
       
    }

    public function showSellerCatalogForAll(Request $request, $sellerCatalogUrl){
        try{
            
             $getSellerCatalogByUrl =  DB::select("call uspGetSellerCatalogByUrlForFrontUser('".$sellerCatalogUrl."')");
             if($getSellerCatalogByUrl){
                
                $getSellerTagsList =  DB::select("call uspGetSellerTagsList(".$getSellerCatalogByUrl[0]->userId.")");

                $getSellerCategoryList =  DB::select("call uspGetSellerCategoryList(".$getSellerCatalogByUrl[0]->userId.")");

                $getProductsBySellerId =  DB::select("call uspGetProductsBySellerId(".$getSellerCatalogByUrl[0]->userDetailId.")");
                return view('livewire.catalog',['getSellerCatalogByUrl'=>$getSellerCatalogByUrl, 'getProductsBySellerId'=>$getProductsBySellerId, 'getSellerTagsList'=>$getSellerTagsList, 'getSellerCategoryList'=>$getSellerCategoryList]);
             }else{
                return redirect()->back()
                ->withErrors(['error' => 'No catalog found.']);
             }
             
              
        }catch (\Exception $ex) {
            // print_r($ex->getMessage()); exit();
            return redirect()->back()
            ->withErrors(['error' => 'No catalog found.']);
        }
    }

    public function showSellerCatalog(Request $request, $sellerCatalogUrl){
        try{
            
             $getSellerCatalogByUrl =  DB::select("call uspGetSellerCatalogByUrl('".$sellerCatalogUrl."')");
             if($getSellerCatalogByUrl){
                $getProductsBySellerId =  DB::select("call uspGetProductsBySellerId(".$getSellerCatalogByUrl[0]->userDetailId.")");
                return view('seller.catalog',['getSellerCatalogByUrl'=>$getSellerCatalogByUrl, 'getProductsBySellerId'=>$getProductsBySellerId]);
             }else{
                return redirect()->back()
                ->withErrors(['error' => 'No catalog found.']);
             }
             
              
        }catch (\Exception $ex) {
            // print_r($ex->getMessage()); exit();
            return redirect()->back()
            ->withErrors(['error' => 'No catalog found.']);
        }
    }

    public function restrictAccount(Request $request)
    {
        return view('restrict-account');
    }
    

    public function getPurchasedLeads(Request $request){
        try{

            $limit = 5;
            $offset = 0;
             $getVerifiedPurchasedLeadsForSellerDetails =  DB::select("call uspGetVerifiedPurchasedLeadsForSeller(".Auth::user()->id.",'',".$offset.",".$limit.")");

             if($getVerifiedPurchasedLeadsForSellerDetails){
                return view('seller.purchase-leads',['getVerifiedPurchasedLeadsForSellerDetails'=>$getVerifiedPurchasedLeadsForSellerDetails,'page'=>1,'limit'=>$limit]);
             }else{
                return redirect()->back()
                ->withErrors(['error' => 'No purchased leads found.']);
             }
             
              
        }catch (\Exception $ex) {
            //print_r($ex->getMessage()); exit();
            return redirect()->back()
            ->withErrors(['error' => 'No catalog found.']);
        }
    }

    
    public function getVerifiedLeads(Request $request){
        try{
            $limit = 5;
            $offset = 0;
            $getVerifiedNotPurchasedLeadsDetails =  DB::select("call uspGetVerifiedNotPurchasedLeads('',".$offset.",".$limit.")");

            if($getVerifiedNotPurchasedLeadsDetails){
                return view('seller.verified-leads-not-purchased',['getVerifiedNotPurchasedLeadsDetails'=>$getVerifiedNotPurchasedLeadsDetails, 'page'=>1, 'limit'=>$limit]);
            }else{
                return redirect()->back()->withErrors(['error' => 'No verified leads found.']);
            }
             
              
        }catch (\Exception $ex) {
            // print_r($ex->getMessage()); exit();
            return redirect()->back()
            ->withErrors(['error' => 'No catalog found.']);
        }
    }

        
    public function searchLoadMoreSellerVerifiedLead(Request $request){
        try{
            
             $getSearchLoadMoreSellerVerifiedLead =  DB::select("call uspGetVerifiedNotPurchasedLeads('".$request->searchText."',".$request->offset.",".$request->limit.")");
             //dd($getSearchLoadMoreSellerVerifiedLead);
             if($getSearchLoadMoreSellerVerifiedLead){
                $loadMoreEnable = (count($getSearchLoadMoreSellerVerifiedLead) < $request->limit) ? false : true; 
                $returnHTML = view('seller.search-load-more')->with('getSearchLoadMoreSellerVerifiedLead', $getSearchLoadMoreSellerVerifiedLead)->render();
                return response()->json(array('success' => true, 'html'=>$returnHTML, 'loadMoreEnable'=>$loadMoreEnable));
             }else{
                return response()->json(array('success' => false, 'html'=>'', 'loadMoreEnable'=>false));
             }
             
              
        }catch (\Exception $ex) {
            // print_r($ex->getMessage()); exit();
            return redirect()->back()
            ->withErrors(['error' => 'No catalog found.']);
        }
    }
    
    public function purchaseLead(Request $request){
        try{
             $purchaseLead =  DB::select("call uspPurchasedLeadBySeller(".$request->leadId.",".Auth::user()->id.")");
             if(isset($purchaseLead[0])){
                if($purchaseLead[0]->canPurchaseLead == 'Y'){
                    return ["responseStatus"=>true,"responseData"=>$purchaseLead[0]->response];
                }else{
                    return ["responseStatus"=>false,"responseData"=>$purchaseLead[0]->response];
                }
               
             }else{
                return ["responseStatus"=>false,"responseData"=>'Unable to purchases lead, Please try later!'];
             }
             
              
        }catch (\Exception $ex) {
             //print_r($ex->getMessage()); exit();
            return redirect()->back()
            ->withErrors(['error' => 'No catalog found.']);
        }
    }

    /*Added by shankar */
    public function searchLoadMoreSellerPurchasedLead(Request $request){
        try{
            $getsearchLoadMoreSellerPurchasedLead = DB::select("call uspGetVerifiedPurchasedLeadsForSeller(".Auth::user()->id.",'".$request->searchText."',".$request->offset.",".$request->limit.")");
           
             if($getsearchLoadMoreSellerPurchasedLead){
                $loadMoreEnable = (count($getsearchLoadMoreSellerPurchasedLead) < $request->limit) ? false : true;
                $returnHTML = view('seller.search-load-more-purchased-lead')->with('getsearchLoadMoreSellerPurchasedLead',$getsearchLoadMoreSellerPurchasedLead)->render();
                return response()->json(array('success' => true, 'html' => $returnHTML,
                'loadMoreEnable' =>$loadMoreEnable));
             }else{
                return response()->json(array('success' => false, 'html' =>'','loadMoreEnable'=>$loadMoreEnable));
             }


        }catch (\Exception $ex) {
           print_r($ex->getMessage()); exit();
           return redirect()->back()
           ->withErrors(['error' => 'No Data found.']);
       }
    }

}
