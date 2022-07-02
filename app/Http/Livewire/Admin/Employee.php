<?php

namespace App\Http\Livewire\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Auth;

use DB;
use Livewire\Component;

class Employee extends Component
{
    public function render()
    {
        return view('livewire.employee');
    }

    public function createEmployee(){
        $countryList =  DB::select("call uspGetCountryList()");
        return view('livewire.admin.employee.create',["countryList"=>$countryList]);
    }

    public function saveEmployee(Request $request){
        //dd($request->all());
      // dd(Hash::make($request->password));
        Validator::make($request->input(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
        ])->validate();

        $request->password = Hash::make($request->password);
        $addLoginDetails =  DB::select("call uspAddLoginDetails('".$request->employee_name."','".$request->email."','".$request->password."')");
        
        if($addLoginDetails[0]->success == 'success'){

            $tempStart = explode('-',$request->dob);
            $request->dob = $tempStart[2].'-'.$tempStart[1].'-'.$tempStart[0];
			
            $addEmployeeDetails =  DB::select("call uspAddEmployeeDetails('".$request->employee_name."','".$request->gender."',".$request->mobile.",".$request->mobile2.",'".$request->email2."','".$request->email."','".$request->address."','".$request->city."','".$request->state."',".$request->pincode.",".$request->countryid.",".$request->aadhaar.",'".$request->pan."','".$request->dob."',".Auth::user()->id.")");
            //dd($addEmployeeDetails);
            if($addEmployeeDetails[0]->success == 'success'){
                return redirect('/admin/employee-lists')->withSuccess('YOUR EMPLOYEE ADDED SUCCESSFULLY !');
            }else{
                return redirect()->back()
                ->withErrors(['error' => $addEmployeeDetails[0]->error]);
            }
            
        }else{
            return redirect()->back()
                ->withErrors(['error' => $addLoginDetails[0]->error]);
        }
    }

// Employee Dashboard 

    public function dashboard(Request $request)
    {
        try{
            $getEmployeeDashboardData =  DB::select("call uspGetEmployeeDashboardData(".Auth::user()->id.")");

             if(isset($getEmployeeDashboardData[0]->error)){
                return redirect()->back()
                ->withErrors(['error' => $getEmployeeDashboardData[0]->error]);
             }else{
                return view('livewire.admin.employee.dashboard',['getEmployeeDashboardData'=>$getEmployeeDashboardData]);
             }
              
        }catch (\Exception $ex) {
              //print_r($ex); exit();
              print_r($ex->getMessage()); exit();
            return redirect()->back()
                ->withErrors(['error' => 'Error while getting admin data, Please try again later!']);
        }

    }

    public function createSeller(){
        $countryList =  DB::select("call uspGetCountryList()");
        
        $getAllActiveCategoriesForSeller =  DB::select("call uspGetAllActiveCategoriesForSeller()");

        $getStatusList =  DB::select("call uspGetStatusList()");
        

        return view('livewire.admin.employee.create-seller',["countryList"=>$countryList,"getAllActiveCategoriesForSeller"=>$getAllActiveCategoriesForSeller,"getStatusList"=>$getStatusList]);
    }

    public function addSeller(Request $request)
    {
        try{

            $request->password = Hash::make($request->password);
            
            $addLoginDetails =  DB::select("call uspAddLoginDetails('".$request->name."','".$request->email."','".$request->password."')");

                if($addLoginDetails[0]->success == 'success'){

                $getAddSellerByEmployeeResponse =  DB::select("call uspAddSellerByEmployee(".$addLoginDetails[0]->lastInsertId.",4,2,'".$request->name."','".$request->catalogurl."',".$request->mobile.",'".$request->email."','".$request->address."
                ','".$request->city."','".$request->state."',".$request->pincode.",".$request->lat.",".$request->long.",'".$request->description."','".$request->website."',".Auth::user()->id.",".$request->status_code_id.")");
                
                if(isset($getAddSellerByEmployeeResponse[0]->error)){
                    return redirect()->back()
                    ->withErrors(['error' => $getAddSellerByEmployeeResponse[0]->error]);
                }else{

                    //Add seller default categories
                    foreach($request->categories as $category){
                        $addSellerCategoryServices =  DB::select("call uspAddSellerCategoryServices(".$addLoginDetails[0]->lastInsertId.",".$category.",".Auth::user()->id.")");
                        if(isset($addSellerCategoryServices[0]->error)){
                            return redirect()->back()
                            ->withErrors(['error' => $addSellerCategoryServices[0]->error]);
                        }
                    }
                    $allTags = explode(",",$request->customtags);
                    //Add seller service tags
                    foreach($allTags as $tag){
                        $addSellerServicesTags =  DB::select("call uspAddSellerServicesTags(".$addLoginDetails[0]->lastInsertId.",'".$tag."',".Auth::user()->id.")");
                        if(isset($addSellerServicesTags[0]->error)){
                            return redirect()->back()
                            ->withErrors(['error' => $addSellerServicesTags[0]->error]);
                        }
                    }

                    if($addLoginDetails[0]->success && $getAddSellerByEmployeeResponse[0]->success && $addSellerCategoryServices[0]->success && $addSellerServicesTags[0]->success){
                        return redirect('/employee/dashboard')->withSuccess('SELLER INFORMATION AND ACCOUNT IS ADDED SUCCESSFULLY !');
                    }else{
                        return redirect()->back()->withErrors(['error' => 'UNABLE TO ADD SELLER INFORMATION AND ACCOUNT']);
                    }
                    
                }
            }else{
                return redirect()->back()->withErrors(['error' => $addLoginDetails[0]->error]);
            }
              
        }catch (\Exception $ex) {
              //print_r($ex); exit();
              print_r($ex->getMessage()); exit();
            return redirect()->back()
                ->withErrors(['error' => 'Error while creating Seller in DB, Please try again later!']);
        }
       
    }


    public function getEmployeeList(Request $request)
    {
         // dd($request->all());
         try{
           
            // get verified leads list
             $getEmployeeList =  DB::select("call uspGetEmployeeList(".Auth::user()->id.")");
             
             if(isset($getEmployeeList[0]->error)){
                return redirect()->back()
                ->withErrors(['error' => $getEmployeeList[0]->error]);
             }else{
                return view('livewire.admin.employee.employee-list',['getEmployeeList'=>$getEmployeeList]);
             }
              
        }catch (\Exception $ex) {
              //print_r($ex); exit();
              print_r($ex->getMessage()); exit();
            return redirect()->back()
                ->withErrors(['error' => 'Error while creating Lead Response in DB, Please try again later!']);
        }
    }

    public function getEmployeesVerifiedLeads(Request $request)
    {
         // dd($request->all());
         try{
           
// get verified leads list
             $getVerifiedLeads =  DB::select("call uspGetVerifiedLeadsForEmployee(".Auth::user()->id.")");
             
             if(isset($getVerifiedLeads[0]->error)){
                return redirect()->back()
                ->withErrors(['error' => $getVerifiedLeads[0]->error]);
             }else{
                return view('livewire.admin.employee.lead.verified-lead-list',['getVerifiedLeads'=>$getVerifiedLeads]);
             }
              
        }catch (\Exception $ex) {
              //print_r($ex); exit();
              print_r($ex->getMessage()); exit();
            return redirect()->back()
                ->withErrors(['error' => 'Error while creating Lead Response in DB, Please try again later!']);
        }
    }

    
    public function getSellerList(Request $request)
    {
         // dd($request->all());
         //dd(session()->all());
         try{
           
// get verified leads list
             $getSellerList =  DB::select("call uspGetSellerListForEmployee(".Auth::user()->id.")");
             
             if(isset($getSellerList[0]->error)){
                return redirect()->back()
                ->withErrors(['error' => $getSellerList[0]->error]);
             }else{
                return view('livewire.admin.employee.seller.seller-list',['getSellerList'=>$getSellerList]);
             }
              
        }catch (\Exception $ex) {
              //print_r($ex); exit();
              print_r($ex->getMessage()); exit();
            return redirect()->back()
                ->withErrors(['error' => 'Error while creating Lead Response in DB, Please try again later!']);
        }
    }

    
   
}
