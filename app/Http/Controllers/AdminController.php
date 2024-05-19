<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use App\Models\CartModel;
use App\Models\OrdersModel;
use App\Models\PlacedOrderModel;
use App\Models\ProductModel;
use Auth;
use Illuminate\Http\Request;
use Route;

class AdminController extends Controller
{
    public function adminHomePage()
    {
        $Params = Route::current()->uri;
        $AuthUser = Auth::user()->id;
        $UserCart = CartModel::where('user_id', $AuthUser)->get();
        $CartCount = $UserCart->count();
        $CartSum = $UserCart->sum('ProductPrice');
        $CustomerOrder = PlacedOrderModel::all();
        $CustomerOrderDetails = OrdersModel::all();
        $Carts = CartModel::where('user_id', $AuthUser)->paginate(3);

        return view('Admin.homePage', compact('Params', 'CartCount', 'CartSum', 'Carts', 'CustomerOrder', 'CustomerOrderDetails'));
    }

    public function addProduct(Request $request)
    {
        $image = [];

        if ($files = $request->file('Image')) {
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'storage/product_images/';
                $imageURL = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $imageURL;
            }
        }

        ProductModel::insert([
            'ProductName' => $request->productName,
            'SKU' => $request->SKU,
            'ProductPrice' => $request->Price,
            'FirstDesc' => $request->firstDesc,
            'ProductDesc' => $request->mainDesc,
            'ProductDiscount' => $request->discount,
            'ProductPics' => implode('|', $image),
        ]);

        return back();
    }

    public function createBlog(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $imageURL = 'storage/blog_images/'.$imageName;

        $request->image->storeAs('public/blog_images', $imageName);

        BlogModel::create([
            'post_name' => $request->blogName,
            'post_pics' => $imageURL,
            'keyNote' => $request->keyNote,
            'post_content' => $request->mainBlogContent,
        ]);

        return back();
    }
}
