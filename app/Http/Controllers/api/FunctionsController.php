<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\Favourite;
use Illuminate\Http\Request;

class FunctionsController extends Controller
{
    public function savechat(Request $request){
        $chat = Chat::where('chat',$request->chat)->where('user_id',$request->user)->first();
        if($chat == null){
            $chat = new Chat();
            $chat->chat = $request->chat;
            $chat->vehicle_id = $request->vehicle;
            $chat->user_id = $request->user;
            $chat->save();
        }
        $alldata = explode('-',$request->chat);
        if($alldata[1] == "vehicle"){
            $user = $alldata[3];
        }else{
            $user = $alldata[2];
        }
        $chat2 = Chat::where('chat',$request->chat)->where('user_id',$user)->first();
        if($chat2 == null && $user != $request->user){
            $chat = new Chat();
            $chat->chat = $request->chat;
            $chat->vehicle_id = $request->vehicle;
            $chat->user_id = $user;
            $chat->save();
        }
        return responder()->success(['message'=>'Successfully Saved']);
    }

    public function favourite(Request $request){
        $favourite = Favourite::where('user_id',$request->user)->where('vehicle_id',$request->vehicle)->first();
        if($favourite == null){
            $favourite = new Favourite();
            $favourite->vehicle_id = $request->vehicle;
            $favourite->user_id = $request->user;
            $favourite->save();
            return responder()->success(['message'=>'Saved']);
        }else{
            $favourite->delete();
            return responder()->success(['message'=>"Remove"]);
        }
    }
}
