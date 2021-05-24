<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Bill;
use App\Order;
use App\Cart;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    public function index()
    {
        $productId = request()->item;
        $products = Product::find($productId);
        $productEquivalents = Product::where('category_id', $products->category_id)->get();
        return view('pages.product.index', compact('products', 'productEquivalents'));
    }
    public function order(Request $request)
    {
        try {
            $arrInput = $request->input();
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($arrInput);
            $request->session()->put('Cart', $newCart);
            if ($newCart->checkIsset == 1) {
                return json_encode(['status' => 1, 'url' => route('product.listOrder'), 'message' => 'Sản phẩm đã tồn tại, cập nhật số lượng!!!']);
            }
            return json_encode(['status' => 1, 'url' => route('product.listOrder'), 'message' => 'Đã thêm vào rỏ hàng']);
        } catch (\Exception $e) {
            return json_encode(['status' => 2, 'message' => 'Có lỗi xảy ra xin thử lại!!!']);
        }
    }

    public function listOrder()
    {
        return view('pages.product.listorder');
    }
    public function delete(Request $request, $id)
    {
        try {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->DeleteItemCart($id);
            if (count($newCart->products) > 0) {
                $request->session()->put('Cart', $newCart);
            } else {
                $request->session()->forget('Cart');
            }

            return json_encode(['status' => 1, 'url' => route('product.listOrder'), 'message' => 'Xóa thành công']);
        } catch (\Exception $e) {
            return json_encode(['status' => 2, 'message' => 'Có lỗi xảy ra xin thử lại!!!']);
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $quanty = $request->quanty;
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->UpdateItemCart($id, $quanty, $request->price);
            $request->session()->put('Cart', $newCart);

            return json_encode(['status' => 1, 'url' => route('product.listOrder'), 'message' => 'Xóa thành công']);
        } catch (\Exception $e) {
            return json_encode(['status' => 2, 'message' => 'Có lỗi xảy ra xin thử lại!!!']);
        }
    }

    public function store(Request $request)
    {
        try {
            $arrInput = $request->input();
            $arrInputErr = [];
            if (!$this->isValidVietnamMobilePhoneNumber($request->phone_number)) {
                $arrInputErr['phone'] = true;
                return view('pages.product.listorder', compact('arrInputErr'));
            }
            $order = new Order();
            $dataSession = Session::get('Cart');
            if(Session::has('Cart')){
                $order->name = $request->name ?? '';
                $order->email = $request->email_address ?? '';
                $order->address = $request->street_address;
                $order->number = $request->phone_number;
                $order->user_id = 1;
                $order->data = json_encode($dataSession);
                $order->total_pro = $dataSession->totalQuanty;
                $order->total_price = $dataSession->totalPrice;
                $order->save();
            }
            $request->session()->forget('Cart');
            // if ($products->count() > 0) {
            //     $users = $request->email_address;
            //     $message = [
            //         'type' => 'Thông tin đặt hàng',
            //         'products' => $products,
            //         'street' => $request->street_address,
            //         'name' => $request->name,
            //         'phone' => $request->phone_number,
            //         'note' => $request->note,
            //     ];
            //     SendEmail::dispatch($message, $users)->delay(now()->addMinute(1));
            // }
            // return view('pages.product.orderSuccess', compact('arrInputErr'));
            return redirect()->route('product.orderSuccess');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function orderSuccess()
    {
        return view('pages.product.orderSuccess');
    }

    private function isValidVietnamMobilePhoneNumber($phoneNumber)
    {
        if (substr($phoneNumber, 0, 3) === '+84') {
            $phoneNumber = '0' . substr($phoneNumber, 3);
        }
        $validPrefix = [
            //Viettel
            '086', '096', '097', '098', '032', '033', '034', '035', '036', '037', '038', '039',

            //Vinaphone
            '089', '090', '093', '070', '079', '077', '076', '078',

            //Mobilefone
            '088', '091', '094', '083', '084', '085', '081', '082',

            //Vietnammobile
            '092', '058', '056', '052',

            //Gmobile
            '099', '059',

            //iTelecom
            '087',

            //đầu số để tạo user seeding
            '009'
        ];
        if (!ctype_digit($phoneNumber)) {
            return false;
        }

        if (substr($phoneNumber, 0, 1) != '0') {
            $phoneNumber = '0' . $phoneNumber;
        }
        $network = substr($phoneNumber, 0, 3);
        if (!in_array($network, $validPrefix)) {
            return false;
        }
        return (strlen($phoneNumber) == 10);
    }
}
