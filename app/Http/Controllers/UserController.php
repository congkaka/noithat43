<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddFormUserRequest;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function index(Request $request){
        $models = User::orderBy('id','desc')->get();
        return view('admin.user.index',compact('models'));
    }

    public function addNew(){

        return view('admin.user.add-form');
    }

    public function saveAddNew(AddFormUserRequest $request){

        $model = new User();
        if($request->hasFile('avatar')){
            $oriFileName = $request->avatar->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;

            $path = $request->file('avatar')->move('images/users', $filename);
            $model->avatar =  'images/users/'.$filename;
        }
        $model->fill($request->all());
        $model->password = bcrypt($request->password);
        $model->save();

        return redirect()->route('list.user');
    }
    
    public function editForm($id){
        $model = User::find($id);
        return view('admin.user.edit-form',compact('model'));
    }

    public function saveEdit(AddFormUserRequest $request){

        $model = User::find($request->id);
        if($request->hasFile('avatar')){
            $oriFileName = $request->avatar->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;

            $path = $request->file('avatar')->move('images/users/uploads', $filename);
            $model->avatar =  'images/users/uploads/'.$filename;
        }
        if(empty($request->password)){
            $model->name = $request->name;
            $model->email = $request->email;
            $model->address = $request->address;
            $model->number = $request->number;
            $model->role = $request->role;
        }else{
            $model->fill($request->all());
            $model->password = bcrypt($request->password);
        }
        
       
        $model->save();
        // dd($model);

        return redirect()->route('list.user');
    }
    


    public function delete($id){
        $model = User::find($id)->delete();
        return redirect()->route('list.user');
  
    }



    public function loginForm(){
        return view('admin.auth.login');
    }

    public function postLogin(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            if(Auth::user()->role > 0){
                return redirect()->route('dashboard');
            }else{
                return redirect()->route('login')->with('errmsg','Khong ton tai tai khoan nay');
            }
        }else{
            return redirect()->route('login')->with('errmsg','Sai thong tin tai khoan/mat khau');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
       }


}
