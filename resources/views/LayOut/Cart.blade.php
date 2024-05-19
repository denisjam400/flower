<!-- cart main wrapper start -->
<div class="cart-main-wrapper mt-no-text">
    <div class="container custom-area">
        <div class="row">
            <div class="col-lg-12 col-custom">
                <!-- Cart Table Area -->
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="pro-thumbnail">Image</th>
                                <th class="pro-title">Product</th>
                                <th class="pro-price">Price</th>
                                <th class="pro-quantity">Quantity</th>
                                <th class="pro-subtotal">Total</th>
                                <th class="pro-remove">Remove</th>
                            </tr>
                        </thead>
                        @if ($RouteAccess===[0])

                        <tbody class="flex justify-between items-center w-full">
                            <tr>
                                <td class="text-2xl">You've Not Added Any Product To Your Cart</td>
                                <td class="text-base p-3 bg-blue-700 rounded-full text-white font-bold">Let Get You
                                    Started
                                </td>
                            </tr>
                        </tbody>

                        @else

                        @foreach ($Carts as $cart)
                        <tbody>
                            <tr>
                                <td class="pro-thumbnail">
                                    <a href="#">
                                        <img class="img-fluid" src='{{ $cart->ProductPics }}' alt="Product" />
                                    </a>
                                </td>
                                <td class="pro-title">
                                    <a href="{{ URL('/product', $cart->ProductID) }}">{{ $cart->ProductName }}</a>
                                </td>
                                <td class="pro-price"><span>${{ $cart->ProductPrice }}.00</span></td>
                                <td class="pro-quantity">
                                    <div class="quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" data-cart-value value="1" type="text">
                                            <div class="dec qtybutton">-</div>
                                            <div class="inc qtybutton">+</div>
                                            <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="pro-subtotal" data-product-price><span>${{ $cart->ProductPrice }}.00</span>
                                </td>
                                <td class="pro-remove"><a href="/cart/delete/{{ $cart->product_id }}"><i
                                            class="lnr lnr-trash"></i></a></td>
                            </tr>
                        </tbody>
                        @endforeach
                        @endif

                    </table>
                </div>
                <!-- Cart Update Option -->
                <div class="cart-update-option d-block d-md-flex justify-content-between">
                    <div class="apply-coupon-wrapper">
                        <form action="#" method="post" class=" d-block d-md-flex">
                            <input type="text" placeholder="Enter Your Coupon Code" required />
                            <button class="btn flosun-button primary-btn rounded-0 black-btn">Apply Coupon</button>
                        </form>
                    </div>
                    <div class="cart-update mt-sm-16">
                        <a href="#" class="btn flosun-button primary-btn rounded-0 black-btn">Update Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-10">
            <div class="col-lg-5 col-custom">
                <!-- Cart Calculation Area -->
                <div class="cart-calculator-wrapper">
                    <div class="cart-calculate-items">
                        <h3>Cart Totals</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>Sub Total</td>
                                    <td>$230</td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td>$70</td>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <td class="total-amount">$300</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <a href="/checkout" class="btn flosun-button primary-btn rounded-0 black-btn w-100">Proceed To
                        Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>