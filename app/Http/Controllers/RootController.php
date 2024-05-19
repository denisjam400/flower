<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use App\Models\CartModel;
use App\Models\OrdersModel;
use App\Models\PlacedOrderModel;
use App\Models\ProductModel;
use App\Models\User;
use Auth;
use Route;

class RootController extends Controller
{
    public function homePage()
    {
        $Products = ProductModel::paginate(6);
        $DiscountedProducts = ProductModel::paginate(5);
        $Blogs = BlogModel::paginate(5);

        if (Auth::check()) {
            $Auth = Auth::user()->id;
            $UserCart = CartModel::where('user_id', $Auth)->get();
            $CartCount = $UserCart->count();
            $CartSum = $UserCart->sum('ProductPrice');
            $Carts = CartModel::where('user_id', $Auth)->paginate(3);

            return view('User.welcome', compact('Products', 'Blogs', 'Carts', 'CartCount', 'DiscountedProducts', 'CartSum'));
        }

        return view('User.welcome', compact('Products', 'Blogs', 'DiscountedProducts'));

    }

    public function Blog()
    {
        $Params = Route::current()->uri;
        $Blogs = BlogModel::paginate(15);

        if (Auth::check()) {
            $Auth = Auth::user()->id;
            $UserCart = CartModel::where('user_id', $Auth)->get();
            $CartCount = $UserCart->count();
            $CartSum = $UserCart->sum('ProductPrice');
            $Carts = CartModel::where('user_id', $Auth)->paginate(3);

            return view('User.Blog', compact('Params', 'Blogs', 'Carts', 'CartCount', 'CartSum'));
        }

        return view('User.Blog', compact('Params', 'Blogs'));

    }

    public function About()
    {
        $Params = Route::current()->uri;

        if (Auth::check()) {
            $Auth = Auth::user()->id;
            $UserCart = CartModel::where('user_id', $Auth)->get();
            $CartCount = $UserCart->count();
            $CartSum = $UserCart->sum('ProductPrice');
            $Carts = CartModel::where('user_id', $Auth)->paginate(3);

            return view('User.About', compact('Params', 'Carts', 'CartCount', 'CartSum'));
        }

        return view('User.About', compact('Params'));

    }

    public function Contact()
    {
        $Params = Route::current()->uri;

        if (Auth::check()) {
            $Auth = Auth::user()->id;
            $UserCart = CartModel::where('user_id', $Auth)->get();
            $CartCount = $UserCart->count();
            $CartSum = $UserCart->sum('ProductPrice');
            $Carts = CartModel::where('user_id', $Auth)->paginate(3);

            return view('User.Contact', compact('Params', 'Carts', 'CartCount', 'CartSum'));
        }

        return view('User.Contact', compact('Params'));
    }

    public function FAQ()
    {
        $Params = Route::current()->uri;

        if (Auth::check()) {
            $Auth = Auth::user()->id;
            $UserCart = CartModel::where('user_id', $Auth)->get();
            $CartCount = $UserCart->count();
            $CartSum = $UserCart->sum('ProductPrice');
            $Carts = CartModel::where('user_id', $Auth)->paginate(3);

            return view('User.FAQ', compact('Params', 'Carts', 'CartCount', 'CartSum'));
        }

        return view('User.FAQ', compact('Params'));
    }

    public function userProfile()
    {
        $Params = Route::current()->uri;
        $Items = Route::current()->items;
        $Auth = Auth::user()->id;
        $UserCart = CartModel::where('user_id', $Auth)->get();
        $CartCount = $UserCart->count();
        $CartSum = $UserCart->sum('ProductPrice');
        $Carts = CartModel::where('user_id', $Auth)->paginate(3);

        $userOrderData = PlacedOrderModel::where('user_id', $Auth)->get();
        $userOtherData = OrdersModel::where('user_id', $Auth)->get();

        foreach ($userOrderData as $userOrderData) {
        }
        foreach ($userOtherData as $userOtherData) {
        }

        $userX = User::where('id', $Auth)->get();
        foreach ($userX as $userX) {
            $userName = $userX->name;
            $userIMG = $userX->profile_photo_path;
        }

        return view('User.UserProfile', compact('Params', 'Carts', 'CartCount', 'CartSum', 'userOrderData', 'userName', 'userIMG', 'Items', 'userOtherData'));

    }
}
