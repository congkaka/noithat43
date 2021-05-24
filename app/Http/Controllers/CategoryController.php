<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddFormCategoryRequest;
use App\Category;
use App\Product;
class CategoryController extends Controller
{
    public function index(Request $request){

        $models = Category::orderBy('id','desc')->get();

        return view('admin.category.index', compact('models'));
    }

    public function addNew(){

        return view('admin.category.add-form');
    }

    public function saveAddNew(AddFormCategoryRequest $request){
        $model = new Category();
        $model->fill($request->all());
        $model->save();

        return redirect()->route('list.cate');
        // dd($model);


        // if(empty($request->detail)){
        //    $data = $request->except('detail');
        // }else{
        //     $data = $request->all();
        // }
        // $model->fill($data);
        // dd($model);
    }

    public function editForm($id){
        $model = Category::find($id);
        return view('admin.category.edit-form', compact('model'));
    }

    public function saveEdit(AddFormCategoryRequest $request){
        $model = Category::find($request->id);
        $model->fill($request->all());
        $model->save();

        return redirect()->route('list.cate');
    }

    public function delete($id){
        $model = Category::find($id);
        $model->delete();
        $model2 = Product::where('category_id',$id)->delete();
        return redirect()->route('list.cate');
    }
}
