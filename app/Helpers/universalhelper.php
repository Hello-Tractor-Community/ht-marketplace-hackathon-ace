<?php

use App\Models\Favourite;
use App\Models\User;
use App\Models\Vehicle;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

if (!function_exists('timeAgo')) {
    function timeAgo($dateTime)
    {
        $today = Carbon::now();
        $daysDifference = abs(ceil($today->diffInDays($dateTime)));
        $monthsDifference = abs(ceil($today->diffInMonths($dateTime)));
        $yearsDifference = abs(ceil($today->diffInYears($dateTime)));

        if ($yearsDifference > 0) {
            return $yearsDifference . " years ago";
        } elseif ($monthsDifference > 0) {
            return $monthsDifference . " months ago";
        } elseif ($daysDifference > 0) {
            return $daysDifference . " days ago";
        } else {
            return "less than a day ago";
        }
    }
}

if(!function_exists("favourite")){
    function favourite($vehicle){
        if(Auth::check()){
            $favourite = Favourite::where('vehicle_id',$vehicle)->where('user_id',Auth::user()->id)->first();
            if($favourite == null){
                return "white";
            }else{
                return "orange";
            }
        }else{
            return "white";
        }
    }
}

if(!function_exists("chatuser")){
    function chatuser($id){
        $data = explode("-",$id);
        $user = User::find($data[3]);
        $vehicle = Vehicle::find($data[2]);
        $dt = [
            'user'=>$user,
            'vehicle'=> $vehicle
        ];
        return $dt;
    }
}
