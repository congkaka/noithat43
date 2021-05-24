<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddFormUserRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
class MenberController extends Controller
{
    public function signUp(){
        return view('pages.auth.signup');
    }

    public function saveSignUp(AddFormUserRequest $request){
       $model = new User();
       $model->name = $request->name;
       $model->email = $request->email;
       $model->password = $request->password;
       $model->password = bcrypt($request->password);
       
       $model->save();

       return redirect()->route('client.login');
    }



    public function loginForm(){
        return view('pages.auth.login');
    }

    public function postLogin(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('/');
        }else{
            return redirect()->route('client.login')->with('errmsg','Sai thong tin tai khoan/mat khau');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('client.login');
       }
}
