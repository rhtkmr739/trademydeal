<?php

namespace App\Http\Livewire;

use DB;
use Livewire\Component;

class Plans extends Component
{
    public function render()
    {
        $buyerType = 3;
        $sellerType = 4;
        $planArray = [];
        $featuresArray = [];

        $uspGetAllUserTypeAvailableForSubscription =  DB::select("call uspGetAllUserTypeAvailableForSubscription()");

        $getUniqueSubscriptionPlanName =  DB::select("call uspGetAllSubscriptionAvailableForUserType()");
        $counter = 0;
        foreach($getUniqueSubscriptionPlanName as $plans){

            array_push($planArray,[$plans->subscription_plan_name => $plans]);

            foreach($uspGetAllUserTypeAvailableForSubscription as $user){
                $featuresList =  DB::select("call uspGetSubscriptionDetailsByRoleIdAndPlanName(".$user->user_type_id.",'".$plans->subscription_plan_name."')");
               
                array_push($planArray[$counter],$featuresList);

               if($user->user_type_id == $sellerType){
                    $planArray[$counter][$plans->subscription_plan_name]->subscription_plan_seller_price = $featuresList[0]->subscriptionPlanPrice;
                    $planArray[$counter][$plans->subscription_plan_name]->subscription_plan_seller_cycle = $featuresList[0]->subscriptionPlanCycle;
               }

               if($user->user_type_id == $buyerType){
                    $planArray[$counter][$plans->subscription_plan_name]->subscription_plan_buyer_price = $featuresList[0]->subscriptionPlanPrice;
                    $planArray[$counter][$plans->subscription_plan_name]->subscription_plan_buyer_cycle = $featuresList[0]->subscriptionPlanCycle;
               }
               
            }
            ++$counter;
        }
       

        return view('livewire.plans',["planArray"=>$planArray,'getUniqueSubscriptionPlanName'=>$getUniqueSubscriptionPlanName]);
    }
}


