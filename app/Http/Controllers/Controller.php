<?php

namespace App\Http\Controllers;

use App\Models\VehicleMake;
use App\Models\VehicleModel;
use App\Models\VehicleType;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function homeheader($title){
        $data = [
            "title"=>$title,
            "makes"=>VehicleMake::all(),
            "models"=>VehicleModel::all(),
            "types"=>VehicleType::all()
        ];

        return $data;
    }

    public function success($message){
        Alert::success('Success', $message);
        //toast($message,'success');
    }

    public function error($message){
        Alert::error('Error', $message);
    }

    public function upload($path, $data)
    {
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        $file = rand(111111, 999999) . time() . '.' . $data->getClientOriginalExtension();
        $data->move(public_path($path), $file);
        
        return '/'.$path.$file;
    }

}
