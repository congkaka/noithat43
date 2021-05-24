<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Category::all();
        // $products = Product::all();
        // return view('pages.home.index', compact('categories', 'products'));
        // $categories = Category::all();
        // $categories= Category::where('status',1)->orderBy('name','ASC')->get();
        $products = Product::all();

        // return view('pages.home.index', compact('categories', 'products'));
        return view('pages.home.index', compact('products'));
    }


    //     return view('pages.product.index');        
    // }
    public function category(Request $request , $slug){
        // $categories = Category::where('slug', $slug)->first();
        $categories = Category::where('slug', $slug)->first();
        $products = Product::where('category_id', $categories->id);

        if($request->price){
            $price =$request->price;
            switch($price){
                case'1':
                    $products->where('price', '<',1000000);
                    break;

                case'2':
                     $products->whereBetween('price', [1000000, 3000000]);
                    break;
                case'3':
                        $products->whereBetween('price', [3000000, 5000000]);
                       break;
                case'4':
                        $products->whereBetween('price', [5000000, 7000000]);
                 break;   
                
                 case'5':
                    $products->whereBetween('price', [7000000, 10000000]);
                break; 

                case'6':
                    $products->where('price', '>',10000000);
                break; 

              
                }
        }
        if($request->orderby){
            $orderby = $request->orderby;
            switch($orderby){
                case 'price_max':
                    $products->orderBy('price','ASC');
                    break;
                case 'price_min':
                     $products->orderBy('price','DESC');
                      break;  
                default:
                    $products->orderBy('id','DESC'); 
                }  
        }

        $products =$products->paginate(5);
      
        return view('pages.category.index', compact(['products']));
    }


    public function search(Request $request){
        $result = $request->result;
        $data['keyword'] = $result;
        $result = str_replace(' ', '%' , $result);
        $data['items']= Product::where('name', 'like', '%'.$result.'%')->get();
        return view('pages.category.search', $data);
    }
    public function contact(){
        return view('pages.home.contact');
    }
}
