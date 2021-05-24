<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddFormProductRequest;
use Illuminate\Support\Arr;
use App\Product;
use App\Category;
class ProductController extends Controller
{
    public function index(Request $request){

        if(!$request->has('keyword') || empty($request->keyword)){
            
            $models = Product::orderBy('id','desc')->paginate(5);

        }else{

            $kw = $request->keyword;
     
            $models = Product::where('name','like',"%$kw%")->orderBy('id','desc')->paginate(5);

            $models -> withPath("product?keyword=$kw");

        }   

        return view('admin.product-thu-nhiem.index', compact('models'));
    }

    public function addNew(){
        $cates = Category::all();
        return view('admin.product-thu-nhiem.add-form', compact('cates'));
    }

    public function saveAddNew(AddFormProductRequest $request){

        $fileTypes = [];
        $fileImages = [];

        if(!empty($request->file('type')['file'])){
            foreach ($request->file('type')['file'] as $key => $file) {
                // $oriFileName = $file->getClientOriginalName();
                // $filename = str_replace(' ', '-', $oriFileName);
                $filename = '.'.$file->getClientOriginalExtension();
                $filename = uniqid() . $filename;
                $file->move('images/types', $filename);

                $fileTypes[$key] = $filename;
            }
        }

        if($request->hasFile('image')){
            foreach ($request->file('image') as $key => $file) {
                // $oriFileName = $file->getClientOriginalName();
                // $filename = str_replace(' ', '-', $oriFileName);
                $filename = '.'.$file->getClientOriginalExtension();
                $filename = uniqid() . $filename;
                $file->move('images/types', $filename);

                $fileImages[$key] = $filename;
            }
        }

        $typeData = $request->type;
        $typeData['file'] = $fileTypes;

        $model = new Product();
        $model->name = $request->name;
        $model->image = $fileImages;
        $model->price = $request->price;
        $model->type = $typeData;
        $model->size = $request->size;
        $model->exist = $request->exist;
        $model->category_id = $request->category_id;
        $model->detail = $request->detail;
        $model->save();
        // dd($model);
        return redirect()->route('list.pro');
    }

    public function editForm($id){
        $model = Product::find($id);
        $cates = Category::all();
        return view('admin.product-thu-nhiem.edit-form', compact('model','cates'));
    }

    public function saveEdit(AddFormProductRequest $request){

        $model = Product::find($request->id);

        $fileTypes = [];
        $fileImages = [];

        if(!empty($request->file('type')['file'])){
            foreach ($request->file('type')['file'] as $key => $file) {
                // $oriFileName = $file->getClientOriginalName();
                // $filename = str_replace(' ', '-', $oriFileName);
                $filename = '.'.$file->getClientOriginalExtension();
                $filename = uniqid() . $filename;
                $file->move('images/types', $filename);

                $fileTypes[$key] = $filename;

            }
        }

        if($request->hasFile('image')){
            foreach ($request->file('image') as $key => $file) {
                // $oriFileName = $file->getClientOriginalName();
                // $filename = str_replace(' ', '-', $oriFileName);
                $filename = '.'.$file->getClientOriginalExtension();
                $filename = uniqid() . $filename;
                $file->move('images/types', $filename);

                $fileImages[$key] = $filename;
        
            }
        }

  
        $typeData = $request->type;
        $groupType = ($fileTypes + $model->type['file']);
        $typeData['file'] = $groupType;
       
        $model->name = $request->name;
        $model->image = ($fileImages + $model->image);  
        $model->price = $request->price;
        $model->type = $typeData;
        $model->size = $request->size;
        $model->exist = $request->exist;
        $model->category_id = $request->category_id;
        $model->detail = $request->detail;

        $model->save();
        // dd($model->image);
        return redirect()->route('list.pro');

        // $test = $model->image;
        // unset($test[1]);
        // dd($test);
    }

    public function delete($id){
        $model = Product::find($id)->delete();
        return redirect()->route('list.pro');
    }
}
