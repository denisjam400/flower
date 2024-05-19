<!-- my account wrapper start -->
<div class="my-account-wrapper mt-no-text">
    <div class="container container-default-2 custom-area">
        <div class="row">
            <div class="col-lg-12 col-custom">
                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <!-- My Account Tab Menu Start -->
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-custom">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-bs-toggle="tab"><i class="fa fa-dashboard"></i>
                                    Dashboard</a>
                                <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                                <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i>
                                    address</a>
                                <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i>
                                    Account Details</a>
                                <a href="/logout" class="text-lg w-full">
                                    <i class="fa fa-sign-out"></i>
                                    Logout
                                </a>
                                <form action="/logout" method="POST" class="border-[1px] border-gray-400">@csrf
                                    <button type="submit" class="text-base ml-6 uppercase"><i
                                            class="fa fa-sign-out"></i>
                                        LogOut</button>
                                </form>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-md-8 col-custom">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>
                                        <div class="welcome h-fit flex justify-start items-center gap-4">
                                            <p>Hello, <strong class="text-bold">{{ $userName }}</strong>
                                            </p>
                                        </div>
                                        <p class="mb-0">From your account dashboard. you can easily check & view your
                                            recent orders, manage your shipping and billing addresses and edit your
                                            password and account details.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                @if($userOrderData.$Items === "[]")
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="flex justify-center items-center"></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="flex justify-center items-center"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $userOrderData->id }}</td>
                                                        <td>{{ $userOrderData->created_at->diffForHumans(now(), Carbon\CarbonInterface::DIFF_RELATIVE_AUTO, true, 2) }}
                                                        </td>
                                                        <td class="flex justify-center items-center">
                                                            <img class="w-[60px] h-[70px] object-contain"
                                                                src="{{ $userOrderData->ProductPics }}" alt="" />
                                                        </td>
                                                        <td>Pending</td>
                                                        <td>${{ $userOrderData->ProductPrice }}</td>
                                                        <td class="flex justify-center items-center"><a
                                                                href="shop/{{ $userOrderData->product_id }}"
                                                                class="btn w-fit h-[45px] px-[30px] flex justify-center items-center text-base bg-[#e72463] text-white rounded-sm">View</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                @endif


                                @if($userOrderData.$Items === "[]")
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Billing Address</h3>
                                        <address>
                                            <p class="capitalize"><strong>{{ $userName }}</strong></p>
                                            <p>"You've not checked Out"</p>
                                            <br>
                                        </address>
                                        <a href="" class="btn flosun-button secondary-btn theme-color rounded-0"><i
                                                class="fa fa-edit mr-2"></i>Edit
                                            Address</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                @else
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Billing Address</h3>
                                        <address>
                                            <p><strong>{{ $userName }}</strong></p>
                                            <p>First Address: {{ $userOtherData->Address }} <br>
                                                Second Address: {{ $userOtherData->Address_2 }}<br>
                                            </p>
                                            <br>
                                            <p>Email: {{ $userOtherData->Email }}</p>
                                            <p>Mobile: {{ $userOtherData->Phone }}</p>
                                        </address>
                                        <a href="" class="btn flosun-button secondary-btn theme-color rounded-0"><i
                                                class="fa fa-edit mr-2"></i>Edit
                                            Address</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                                @endif

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Account Details</h3>
                                        <div class="flex flex-col gap-7">
                                            <form action="/accountUpdate" method="POST">@csrf
                                                <div class="row">
                                                    <div class="col-lg-6 col-custom">
                                                        <div class="single-input-item mb-3">
                                                            <label for="first-name" class="required mb-1">First
                                                                Name</label>
                                                            <input type="text" id="first-name" placeholder="First Name"
                                                                name='firstName' />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-custom">
                                                        <div class="single-input-item mb-3">
                                                            <label for="user-name" class="required mb-1">User
                                                                Name</label>
                                                            <input type="text" id="user-name" placeholder="User Name"
                                                                name="userName" />
                                                        </div>
                                                    </div>
                                                    <div class="single-input-item mb-3">
                                                        <label for="email" class="required mb-1">Email Addres</label>
                                                        <input type="email" id="email" placeholder="Email Address"
                                                            name="email" />
                                                    </div>
                                                    <div class="single-input-item single-item-button">
                                                        <button
                                                            class="btn flosun-button secondary-btn theme-color rounded-0"
                                                            type="submit">Save
                                                            Changes</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div> <!-- Single Tab Content End -->
                            </div>
                        </div> <!-- My Account Tab Content End -->
                    </div>
                </div> <!-- My Account Page End -->
            </div>
        </div>
    </div>
</div>
<!-- my account wrapper end -->