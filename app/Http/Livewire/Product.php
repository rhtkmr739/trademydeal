<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;

use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        return view('livewire.product');
    }

    public function createProduct(Request $request)
    {
       if(session('currentUserRole') == 'user'){
        return redirect('/userdashboard');
       }else{
        $getCategories =  DB::select("call uspGetAllActiveCategories()");
        return view('product.create',['getCategories'=>$getCategories]);
       }
        
    }

    public function getIndustries(Request $request)
    {
       if(session('currentUserRole') == 'user'){
        return null;
       }else{
        $getIndustries =  DB::select("call uspGetAllActiveIndustries(".$request->categoryId.")");
        return $getIndustries;
       }
        
    }

    public function getMarkets(Request $request)
    {
       if(session('currentUserRole') == 'user'){
        return null;
       }else{
        $getMarkets =  DB::select("call uspGetAllActiveMarkets(".$request->categoryId.")");
        return $getMarkets;
       }
        
    }
    
    public function addProduct(Request $request)
    {
       // dd($request->all());
        try{
            if(session('currentUserRole') == 'user'){
                return redirect('/userdashboard');
            }
// handling product image
            if($request->hasfile('product_banner_image')){
                $product_banner_image = time().$request->file('product_banner_image')->getClientOriginalName();  
                $request->file('product_banner_image')->move(public_path('/theme/images/products'), $product_banner_image);
            }else{
                $product_banner_image = 'no-image.jpg'; 
            }
            
// handling product gallery images
           if ($request->hasfile('product_image_gallery')) {
               $allImages = [];
                foreach ($request->file('product_image_gallery') as $file) {
                    $name = time().$file->getClientOriginalName();
                    $file->move(public_path('/theme/images/products'), $name);
                    array_push($allImages,$name);
                }
                $product_image_gallery = implode("||",$allImages); 
            }else{
               $product_image_gallery = 'no-image.jpg'; 
            }

// handling inserting into DB
             $getAddProductResponse =  DB::select("call uspAddSellerProduct('".$request->product_name."','".$product_banner_image."','".$product_image_gallery."',1,".$request->subsubcategory.",'".$request->product_description."','".$request->product_url."',".session('userdetail')[0]->userDetailId.",1,".$request->lat.",".$request->long.",".$request->mobile.",'".$request->email."','".$request->address."
             ','".$request->city."','".$request->state."',".$request->pincode.")");
             
             if(isset($getAddProductResponse[0]->error)){
                return redirect()->back()
                ->withErrors(['error' => $getAddProductResponse[0]->error]);
             }else{
                return redirect('/sellerdashboard')->withSuccess('YOUR PRODUCT ADDED SUCCESSFULLY !');
             }
              
        }catch (\Exception $ex) {
              //print_r($ex); exit();
              print_r($ex->getMessage()); exit();
            return redirect()->back()
                ->withErrors(['error' => 'Error while creating Seller in DB, Please try again later!']);
        }
       
    }


}
