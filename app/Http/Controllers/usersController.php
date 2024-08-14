<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\users;

class usersController extends Controller
{
    function get_users($id=null){
        return $id?users::find($id):users::all();
    }

    function add(Request $req){
        $user = new users;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $result=$user->save();
        if($result){
            return ["result"=>"data has been submitted"];
        }
        else{
            return ["result"=>"error data not submitted"];
        }
        
    }

    function update(Request $req){
        $user = users:: find($req->id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $result=$user->save();
        if($result){
            return ["result"=>"data has been updated"];
        }
        
    }

    function delete($id){
        $user = users:: find($id);
        $result=$user->delete();
        if($result){
            return ["result"=>"data has been deleted"];
        }
        else{
            return ["result"=>"oparation failed"];
        }
        
    }

    function search($name){
        return users:: where("name","like","%".$name."%")->get();
        
        
    }
}
