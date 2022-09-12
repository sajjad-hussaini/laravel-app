<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class userController extends Controller
{
    public function index(){
        $url=url('/user');
        $title = "user Registeration";
        $data = compact('url','title');
        return view('user')->with($data);
    }

    public function store(Request $request){
        // echo "<pre>";
        // print_r($request->all());
        $user = new user;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->address = $request['address'];
        $user->save();
        return redirect ('/user/view');
    }

    public function view(){
        $users = user::all();
        $data = compact('users');
        return view('user-view')->with($data);
    }

    public function delete($id){
        $user = user::find($id)->delete();
        return redirect('/user/view');

    }
    public function edit($id){
        $user = user::find($id);
        if(is_null($user)){
            return redirect('/user/view');
        }else{
            $url = url('/user/update')."/".$id;
            $title = "user Edit";
            $data = compact('user','url','title');
            return view('user')->with($data);
        }
    }

    public function update($id, Request $request){

        $user = user::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->address = $request['address'];
        $user->save();
        return redirect('/user/view/');
    }
    
}
