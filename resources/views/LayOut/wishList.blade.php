<!-- Wishlist main wrapper start -->
<div class="wishlist-main-wrapper mt-no-text mb-36">
    <div class="container container-default-2 custom-area">
        <div class="row">
            <div class="col-lg-12">
                <!-- Wishlist Table Area -->
                <div class="wishlist-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="pro-thumbnail">Image</th>
                                <th class="pro-title">Product</th>
                                <th class="pro-price">Price</th>
                                <th class="pro-stock">Stock Status</th>
                                <th class="pro-cart">Add to Cart</th>
                                <th class="pro-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wishListOfEachUser as $wishList)
                            <tr>
                                <td class="pro-thumbnail"><a href="/shop/{{ $wishList->id }}"><img class="img-fluid"
                                            src="/images/product/small-size/1.jpg" alt="Product" /></a></td>
                                <td class="pro-title"><a href="/shop/{{ $wishList->id }}">Product dummy title <br> s /
                                        green</a></td>
                                <td class="pro-price"><span>${{ $wishList->ProductPrice }}.00</span></td>
                                <td class="pro-stock"><span><strong>{{ $wishList->AmountOfProduct }}</strong></span>
                                </td>
                                <td class="pro-cart">
                                    <form action="cart/{{ $wishList->product_id }}" method="POST"
                                        class="bg-black text-white h-11 rounded-md flex justify-center items-center text-base">
                                        @csrf
                                        <button type="submit">Add to Cart</button>
                                    </form>
                                </td>
                                <td class="pro-remove">
                                    <form action="/wishlist/delete/{{ $wishList->product_id }}" method="POST"
                                        class="text-[26px]">@csrf
                                        <button type="submit" class="outline-none">
                                            <i class="lnr lnr-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Wishlist main wrapper end -->