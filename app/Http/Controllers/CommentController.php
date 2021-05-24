<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Comment;
class CommentController extends Controller
{
    public function index(Request $request){

        
        if(!$request->has('keyword') || empty($request->keyword)){
            
            $models = Comment::orderBy('id','desc')->paginate(6);

        }else{

            $kw = $request->keyword;
     
            $models = Comment::where('pro_id','=',"$kw")->orderBy('id','desc')->paginate(6);
            // dd($models);
            $models -> withPath("comment?keyword=$kw");

        }   
        $products = Product::all();
        return view('admin.comment.index',compact('models','products'));
    }

    public function postStatus(Request $request){
        $model = Comment::find($request->id);
        $model->status = $request->status;
        $model->save();

        return redirect()->route('list.comment');
    }
}
