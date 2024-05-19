<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use App\Models\OrdersModel;
use App\Models\PlacedOrderModel;
use App\Models\ProductModel;
use App\Models\ProductReview;
use App\Models\wishListModel;
use Auth;
use Illuminate\Http\Request;
use Route;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Params = Route::current()->uri;
        $Products = ProductModel::all();
        $PaginatedProduct = ProductModel::paginate(3);

        if (Auth::check()) {
            $Auth = Auth::user()->id;
            $UserCart = CartModel::where('user_id', $Auth)->get();
            $CartCount = $UserCart->count();
            $CartSum = $UserCart->sum('ProductPrice');
            $Carts = CartModel::where('user_id', $Auth)->paginate(3);

            return view('User.Shop', compact('Params', 'Products', 'PaginatedProduct', 'Carts', 'CartCount', 'CartSum'));
        }

        return view('User.Shop', compact('Params', 'Products', 'PaginatedProduct'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Params = Route::current()->uri;
        $Reviews = ProductReview::where('product_id', $id)->get();
        $Product = ProductModel::find($id);
        $TrendingProduct = ProductModel::inRandomOrder()->take(11)->get();

        $ProductIMGs = explode('|', $Product->ProductPics);

        // foreach ($ProductIMGs as $IMG) {
        // }

        // dd($IMG);

        if (Auth::check()) {
            $Auth = Auth::user()->id;
            $UserCart = CartModel::where('user_id', $Auth)->get();
            $CartCount = $UserCart->count();
            $CartSum = $UserCart->sum('ProductPrice');
            $Carts = CartModel::where('user_id', $Auth)->paginate(3);

            return view('User.ProductDetail', compact('Product', 'ProductIMGs', 'Params', 'Carts', 'TrendingProduct', 'Reviews', 'CartCount', 'CartSum'));
        }

        return view('User.ProductDetail', compact('Product', 'ProductIMGs', 'Params', 'TrendingProduct', 'Reviews'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function checkOut()
    {
        $Params = Route::current()->uri;

        $Auth = Auth::user()->id;
        $UserCart = CartModel::where('user_id', $Auth)->get();
        $CartCount = $UserCart->count();
        $CartSum = $UserCart->sum('ProductPrice');
        $Carts = CartModel::where('user_id', $Auth)->paginate(3);

        return view('User.CheckOut', compact('Params', 'Carts', 'CartCount', 'CartSum'));
    }

    public function mainCheckOut(Request $request)
    {
        $userId = Auth::user()->id;

        OrdersModel::create([
            'user_id' => $userId,
            'firstName' => $request->firstName,
            'country' => $request->country,
            'lastName' => $request->lastName,
            'Address' => $request->Address,
            'Address_2' => $request->Address_2,
            'State' => $request->State,
            'Town' => $request->Town,
            'PostalCode' => $request->PostalCode,
            'Email' => $request->Email,
            'Phone' => $request->Phone,
            'NoteFromSeller' => $request->NoteFromSeller,
        ]);

        $CartInvokement = $this->orderPlaced($userId);

        return redirect('/');
    }

    public function orderPlaced($userId)
    {
        $newRequestX = CartModel::where('user_id', $userId)->get();

        foreach ($newRequestX as $newRequest) {
            PlacedOrderModel::create([
                'user_id' => Auth::user()->id,
                'product_id' => $newRequest->product_id,
                'ProductName' => $newRequest->ProductName,
                'ProductPics' => $newRequest->ProductPics,
                'ProductPrice' => $newRequest->ProductPrice,
                'ProductDesc' => $newRequest->ProductDesc,
                'ProductDiscount' => $newRequest->ProductDiscount,
                'AmountOfProduct' => $newRequest->AmountOfProduct,
            ]);
        }

        CartModel::where('user_id', $userId)->delete();
    }

    public function wishList()
    {
        $Params = Route::current()->uri;
        $Auth = Auth::user()->id;
        $UserCart = CartModel::where('user_id', $Auth)->get();
        $CartCount = $UserCart->count();
        $CartSum = $UserCart->sum('ProductPrice');
        $Carts = CartModel::where('user_id', $Auth)->paginate(3);
        $wishListOfEachUser = wishListModel::where('user_id', $Auth)->get();

        return view('User.wishList', compact('Params', 'Carts', 'CartCount', 'wishListOfEachUser', 'CartSum'));
    }

    public function addToWishlist(string $id)
    {
        $Products = ProductModel::where('id', $id)->get();

        foreach ($Products as $Product) {
            wishListModel::create([
                'user_id' => Auth::user()->id,
                'product_id' => $Product->id,
                'ProductName' => $Product->ProductName,
                'ProductPics' => $Product->ProductPics,
                'ProductPrice' => $Product->ProductPrice,
                'AmountOfProduct' => $Product->AmountOfProduct,
            ]);
        }

        return back();
    }

    public function removeFromWishlist($id)
    {
        $authUser = Auth::user()->id;
        $rio = wishListModel::where('user_id', $authUser)->where('product_id', $id)->delete();

        return back();
    }
}
