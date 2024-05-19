<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use App\Models\CartModel;
use App\Models\CommentModel;
use App\Models\ProductModel;
use App\Models\ProductReview;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Route;

class GenController extends Controller
{
    public function getCart()
    {
        $Params = Route::current()->uri;
        $RouteAccess = Route::current()->items;
        $Auth = Auth::user()->id;
        $UserCart = CartModel::where('user_id', $Auth)->get();
        $CartCount = $UserCart->count();
        $CartSum = $UserCart->sum('ProductPrice');
        $Carts = CartModel::where('user_id', $Auth)->get();

        return view('User.Cart', compact('Params', 'RouteAccess', 'Carts', 'CartCount', 'CartSum'));
    }

    public function submitReview(Request $request, $id)
    {
        $Auth = Auth::user()->id;

        $Review = ProductReview::create(
            [
                'user_id' => $Auth,
                'userName' => $request->username,
                'userEmail' => $request->useremail,
                'comment' => $request->comment,
                'product_id' => $id,
            ]
        );

        return back();
    }

    public function addToCart(Request $request, string $id)
    {

        $userAuth = Auth::user()->id;

        $Products = ProductModel::where('id', $id)->get();

        foreach ($Products as $Product) {
            $explodedIMG = explode('|', $Product->ProductPics);

            $Cart = CartModel::create([
                'user_id' => $userAuth,
                'product_id' => $id,
                'ProductName' => $Product->ProductName,
                'ProductPics' => $explodedIMG[0],
                'ProductPrice' => $Product->ProductPrice,
                'ProductDesc' => $Product->ProductDesc,
                'ProductDiscount' => $Product->ProductDiscount,
            ]);

        }

        return back();

    }

    public function removeFromCart(string $id)
    {
        $authUser = Auth::user()->id;
        $rio = CartModel::where('user_id', $authUser)->where('product_id', $id)->delete();

        return back();
    }

    public function blogDetail(string $id)
    {
        $Params = Route::current()->uri;
        $BlogComment = CommentModel::where('blog_id', $id)->get();
        $BlogCommentCount = $BlogComment->count();

        $BlogDetailArray = BlogModel::where('id', $id)->get();

        foreach ($BlogDetailArray as $BlogDetail) {

        }

        // $BlogDetail = $BlogDetail;

        $Blogs = BlogModel::inRandomOrder()->take(6)->get();

        if (Auth::check()) {
            $Auth = Auth::user()->id;
            $UserCart = CartModel::where('user_id', $Auth)->get();
            $CartCount = $UserCart->count();
            $CartSum = $UserCart->sum('ProductPrice');
            $Carts = CartModel::where('user_id', $Auth)->paginate(3);

            return view('User.BlogDetails', compact('Params', 'Blogs', 'Carts', 'CartCount', 'BlogDetail', 'BlogComment', 'BlogCommentCount', 'CartSum'));
        }

        return view('User.BlogDetails', compact('Params', 'Blogs', 'BlogDetail', 'BlogCommentCount', 'BlogComment'));
    }

    public function blogComment(Request $request, string $id)
    {
        CommentModel::create(['user_id' => Auth::user()->id, 'userName' => $request->userName, 'message' => $request->message, 'blog_id' => $id, 'userEmail' => $request->userEmail]);

        return back();
    }

    public function accountUpdate(Request $request)
    {

        User::where('id', Auth::user()->id)->update(['name' => $request->firstName, 'username' => $request->userName, 'email' => $request->email]);

        return back();
    }
}
