<!-- Checkout Area Start Here -->
<div class="checkout-area mt-no-text mb-no-text">
    <div class="container custom-container">
        <form class="row" action="/checkout" method="POST">@csrf
            <div class="col-lg-6 col-12 col-custom">
                <div>
                    <div class="checkbox-form">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-md-12 col-custom">
                                <div class="checkout-form-list">
                                    <label>Country <span class="required">*</span></label>
                                    <input placeholder="Country" type="text" name="country">
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="checkout-form-list">
                                    <label>First Name <span class="required">*</span></label>
                                    <input placeholder="First Name" type="text" name="firstName">
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="checkout-form-list">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input placeholder="Last Name" type="text" name="lastName">
                                </div>
                            </div>
                            <div class="col-md-12 col-custom">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input placeholder="Street address" type="text" name="Address">
                                </div>
                            </div>
                            <div class="col-md-12 col-custom">
                                <div class="checkout-form-list">
                                    <input placeholder="Apartment, suite, unit etc. (optional)" type="text"
                                        name="Address_2">
                                </div>
                            </div>
                            <div class="col-md-12 col-custom">
                                <div class="checkout-form-list">
                                    <label>City / State <span class="required">*</span></label>
                                    <input placeholder="City / State" type="text" name="State">
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="checkout-form-list">
                                    <label>Town / County <span class="required">*</span></label>
                                    <input placeholder="Town / County" type="text" name="Town">
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="checkout-form-list">
                                    <label>Postcode / Zip <span class="required">*</span></label>
                                    <input placeholder="Postcode / Zip" type="number" name="PostalCode">
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input placeholder="Email Address" type="email" name="Email">
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="checkout-form-list">
                                    <label>Phone <span class="required">*</span></label>
                                    <input placeholder="Phone" type="text" name="Phone" id="Phone">
                                </div>
                            </div>
                        </div>
                        <div class="different-address">
                            <div class="order-notes mt-3">
                                <div class="checkout-form-list checkout-form-list-2">
                                    <label>Order Notes</label>
                                    <textarea id="checkout-mess" cols="30" rows="10"
                                        placeholder="Notes about your order, e.g. special notes for delivery."
                                        name="NoteFromSeller"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 col-custom">
                <div class="your-order">
                    <h3>Your order</h3>
                    <div class="your-order-table table-responsive">
                        @if ($Carts !== [null])
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-product-name">Product</th>
                                    <th class="cart-product-total">Total</th>
                                </tr>
                            </thead>
                            @php($totalPrice = 0)
                            @php($mainProductTotal = 0)
                            @foreach ($Carts as $CartItem)
                            <tbody>
                                <tr class="cart_item">
                                    <td class="cart-product-name">{{ $CartItem->ProductName }}
                                        <strong class="product-quantity font-extrabold"> ×
                                            {{ $CartItem->AmountOfProduct }}
                                        </strong>
                                    </td>
                                    <td class="cart-product-total text-center">
                                        <span class="amount">£{{
                                            $mainProductTotal = $CartItem->ProductDiscount * $CartItem->AmountOfProduct
                                            }}.00
                                        </span>
                                    </td>
                                    @php($totalPrice += $mainProductTotal)
                                </tr>
                            </tbody>
                            @endforeach
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Cart Subtotal</th>
                                    <td class="text-center">
                                        <span class="amount">£{{ $totalPrice}}.00
                                        </span>
                                    </td>

                                </tr>
                                {{-- <tr class="order-total">
                                    <th>Order Total</th>
                                    <td class="text-center"><strong><span class="amount">£{{ $CartItem->ProductDiscount
                                                *
                                                $CartItem->AmountOfProduct }}.00</span></strong></td>
                                </tr> --}}
                            </tfoot>
                        </table>
                        @else
                        <h4>U've not added anything to your Cart</h4>
                        @endif
                    </div>
                    <div class="mt-5">
                        <div class="">
                            <div class="w-full h-[35px] mb-7">
                                <img class="w-full h-full object-contain" src="/images/payment/payment-icon.png"
                                    alt="Payment Logo">
                            </div>
                            <button
                                class="w-full h-[40px] text-[16.6px] bg-black text-white hover:bg-[#e72463] hover:text-white"
                                type="submit">Place
                                Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Checkout Area End Here -->