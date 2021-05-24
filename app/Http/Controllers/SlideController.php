<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddFormSlideRequest;

use App\Slide;
class SlideController extends Controller
{
    public function index(Request $request){
        $models = Slide::orderBy('id','desc')->get();
        return view('admin.slide.index', compact('models'));
    }

    public function addNew(){

        return view('admin.slide.add-form');
    }

    public function saveAddNew(AddFormSlideRequest $request){

        $model = new Slide();
        if($request->hasFile('image')){
            $oriFileName = $request->image->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;

            $path = $request->file('image')->move('images/slides', $filename);
            $model->image =  'images/slides/'.$filename;
        }
        $model->fill($request->all());
        $model->save();

        return redirect()->route('list.slide');
    }

    public function editForm($id){
        $model = Slide::find($id);
        return view('admin.slide.edit-form',compact('model'));
    }

    public function saveEdit(AddFormSlideRequest $request){

        $model = Slide::find($request->id);
        if($request->hasFile('image')){
            $oriFileName = $request->image->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;

            $path = $request->file('image')->move('images/slides/uploads', $filename);
            $model->image =  'images/slides/uploads/'.$filename;
        }
        $model->fill($request->all());
        $model->save();

        return redirect()->route('list.slide');
    }

    public function delete($id){
        $model = Slide::find($id)->delete();
        return redirect()->route('list.slide');

    }
}
