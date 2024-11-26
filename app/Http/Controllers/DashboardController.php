<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Favourite;
use App\Models\Make;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\VehicleMake;
use App\Models\VehicleModel;
use App\Models\VehicleType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $data = $this->homeheader("Dashboard");
        return view('dashboard.index',$data);
    }

    public function mytractors(){
        $data = $this->homeheader("My Tractors");
        return view('dashboard.mytractors',$data);
    }

    public function messages(){
        $data = $this->homeheader("Messages");
        $chatid = request('chat');
        if(isset($chatid)){
            $chat = Chat::where('chat',$chatid)->first();
            $datad = explode("-",$chat);
            $user = User::find($datad[3]);
            if($chat->vehicle_id != null){
                $data['vehicle'] = Vehicle::where('slug',$chat)->first();
            }
            $data['user'] = $user;
            $data['chatid'] = $chatid;
            
        }
        
        return view('dashboard.messages',$data);
    }

    public function profile(){
        $data = $this->homeheader("Profile");
        return view('dashboard.profile',$data);
    }


    public function updateprofile(Request $request){
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->company = $request->company;
        $user->job = $request->job;
        $user->description = $request->description;
         // You can also handle file uploads here
        $user->address = $request->address;
        if(isset($request->latitude)){
            $user->coordinates = json_encode(['latitude'=>$request->latitude,'longitude'=>$request->longitude]);
        }
        if(isset($request->profile)){
            $user->profile = $this->upload(config('constants.profile'),$request->profile);
        }

        $user->update();
        $this->success("Saved Successful");
        return redirect()->back();
    }

    public function addvehicle(){
        $data = $this->homeheader("Sell Tractor");
        return view('dashboard.addvehicle',$data);
    }

    public function storevehicle(Request $request){
        $make = VehicleMake::find($request->make);
        $model = VehicleModel::find($request->model);
        $vehicle = new Vehicle();
        $vehicle->name = $request->name;
        $vehicle->description = $request->description;
        $vehicle->price = $request->price;
        $vehicle->year = $request->year;
        $vehicle->make = $make->name;
        $vehicle->make_id = $request->make;
        $vehicle->model = $model->name;
        $vehicle->model_id = $request->model;
        $vehicle->type = $request->type;
        $vehicle->hp = $request->hp;
        $vehicle->transmission = $request->transmission;
        $vehicle->engine = $request->engine;
        $vehicle->millage = $request->millage;
        $vehicle->price = $request->price;
        $vehicle->condition = $request->condition;
        $vehicle->coordinates = json_encode([$request->latitude,$request->longitude]);
        $vehicle->address = $request->address;
        $images = [];
        foreach($request->file('images') as $image){
            $image = $this->upload(config('constants.listings'),$image);

            array_push($images,$image);
        }
        $vehicle->images = json_encode($images);

        $vehicle->user_id = Auth::user()->id;
        $vehicle->save();

        $this->success("Saved Successfully");
        return redirect()->back();
    }


    public function myfavourites(){
        $data = $this->homeheader("My Favourites");
        $data['favourites'] = Favourite::where('user_id',Auth::user()->id)->get();
        return view('dashboard.favourites',$data);
    }
}
