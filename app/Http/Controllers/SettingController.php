<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(Request $request){

        return view('admin.setting.index');
    }


    public function editForm(){

        return view('admin.setting.edit-form');
    }
}
