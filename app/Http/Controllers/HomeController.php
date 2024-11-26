<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleMake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

     public function index(){
      //Session::flush();
        $data = $this->homeheader("Hello Tractor");
        $data['makes'] = VehicleMake::orderBy('name','ASC')->get();
        return view('front.home',$data);
     }

     public function alldata(){
        $data = $this->homeheader("Tractors");
        $data['vehicles'] = Vehicle::all();
        return view('front.vehicles',$data);
     }

     public function vehicle($slug){
      $vehicle = Vehicle::where('slug',$slug)->first();
      if($vehicle == null){
         return abort(404);
      }
      $data = $this->homeheader("Vehicle");
      $data['vehicle'] = $vehicle;
        
        return view('front.vehicle',$data);
     }
    

}
