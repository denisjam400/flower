<!-- my account wrapper start -->
<div class="my-account-wrapper mt-no-text mb-16">
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
                                <a href="#add_product" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i>Add
                                    Product</a>
                                <a href="#customer_orders" data-bs-toggle="tab"><i class="fa fa-map-marker"></i>
                                    Orders</a>
                                <a href="#customer_orders_details" data-bs-toggle="tab"><i class="fa fa-map-marker"></i>
                                    Orders Detail</a>
                                <a href="#add_admin" data-bs-toggle="tab"><i class="fa fa-map-marker"></i>
                                    Add Admin</a>
                                <a href="#create_blog" data-bs-toggle="tab"><i class="fa fa-user"></i>Create Blog</a>
                                <a href="login.html"><i class="fa fa-sign-out"></i> Logout</a>
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
                                            <p>Hello, <strong class="text-bold"></strong>
                                            </p>
                                        </div>
                                        <p class="mb-0">From your account dashboard. you can easily check & view your
                                            recent orders, manage your shipping and billing addresses and edit your
                                            password and account details.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <form action="addProduct" method="POST" id="add_product"
                                    class="tab-pane fade flex flex-col gap-12 justify-center"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="flex flex-col md:flex-row gap-5">
                                        <h5 class="flex flex-col gap-2 w-[100%] md:w-[45%]">
                                            <label for="productName" class="text-lg font-bold">Product Name</label>
                                            <input type="text" name="productName">
                                        </h5>
                                        <h5 class="flex flex-col gap-2 w-[100%] md:w-[23%]">
                                            <label for="SkU" class="text-lg font-bold">In Stock</label>
                                            <input type="number" name="SKU">
                                        </h5>
                                        <h5 class="flex flex-col gap-2 w-[100%] md:w-[23%]">
                                            <label for="Price" class="text-lg font-bold">Price</label>
                                            <input type="number" name="Price">
                                        </h5>
                                    </div>

                                    <div class="mt-7 flex flex-col md:flex-row gap-6">
                                        <h5 class="flex flex-col gap-2 w-[100%] md:w-[40%]">
                                            <label for="first Desc" class="text-lg font-bold">Short Product
                                                Description</label>
                                            <textarea name="firstDesc" cols="24" rows="10"></textarea>
                                        </h5>
                                        <h5 class="flex flex-col gap-2 w-[100%] md:w-[40%]">
                                            <label for="Main Desc" class="text-lg font-bold">Main Description</label>
                                            <textarea name="mainDesc" cols="24" rows="10"></textarea>
                                        </h5>
                                        <h5 class="flex flex-col gap-2 w-[100%] md:w-[13%]">
                                            <label for="discount" class="text-lg font-bold">Discount</label>
                                            <input name="discount" type="number" />
                                        </h5>
                                        <h5 class="flex flex-col gap-2 w-[100%] md:w-[13%]">
                                            <label for="image" class="text-lg font-bold">ImageFile</label>
                                            <input type="file" multiple name="Image[]">
                                        </h5>
                                    </div>

                                    <button
                                        class="mt-7 px-6 py-2 text-[17px] rounded-xl w-[40%] md:w-[18%] bg-[#e72463] text-white"
                                        type="submit">Add
                                        Product
                                    </button>
                                </form>

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="customer_orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Product Name</th>
                                                        <th>Amount Of Product</th>
                                                        <th>Image</th>
                                                        <th>Price</th>
                                                        <th>Date Added</th>
                                                        <th>Status</th>
                                                        <th>Other Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($CustomerOrder as $Order)
                                                    <tr>
                                                        <td>{{ $Order->id }}</td>
                                                        <td>{{ $Order->ProductName }}</td>
                                                        <td>{{ $Order->AmountOfProduct }}</td>
                                                        <td class="flex justify-center items-center"><img
                                                                class="w-[60px] h-[60px] object-contain"
                                                                src="{{ $Order->ProductPics }}"
                                                                alt="{{ $Order->ProductName }}"></td>
                                                        <td>${{ $Order->ProductPrice }}</td>
                                                        <td>{{ $Order->created_at->diffForHumans() }}</td>
                                                        <td>Pending</td>
                                                        <td class="flex justify-center items-center"><a href=""
                                                                class="btn w-fit h-[45px] px-[30px] flex justify-center items-center text-base bg-[#e72463] text-white rounded-sm">View</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->


                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="customer_orders_details" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders Detail</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Product Name</th>
                                                        <th>Amount Of Product</th>
                                                        <th>Image</th>
                                                        <th>Price</th>
                                                        <th>Status</th>
                                                        <th>Other Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($CustomerOrder as $Order)
                                                    <tr>
                                                        <td>{{ $Order->id }}</td>
                                                        <td>{{ $Order->ProductName }}</td>
                                                        <td>{{ $Order->AmountOfProduct }}</td>
                                                        <td><img class="w-[50px] h-[50px]"
                                                                src="{{ asset($Order->ProductPics) }}" alt=""></td>
                                                        <td>{{ $Order->ProductPrice }}</td>
                                                        <td>{{ $Order->created_at->diffForHumans() }}</td>
                                                        <td>Pending</td>
                                                        <td></td>
                                                        <td class="flex justify-center items-center"><a href=""
                                                                class="btn w-fit h-[45px] px-[30px] flex justify-center items-center text-base bg-[#e72463] text-white rounded-sm">View</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Billing Address</h3>
                                        <address>
                                        </address>
                                        <a href="" class="btn flosun-button secondary-btn theme-color rounded-0"><i
                                                class="fa fa-edit mr-2"></i>Edit Address</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="add_admin" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Add Admin</h3>
                                        <div class="account-details-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6 col-custom">
                                                        <div class="single-input-item mb-3">
                                                            <label for="first-name" class="required mb-1">First
                                                                Name</label>
                                                            <input type="text" placeholder="First Name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-custom">
                                                        <div class="single-input-item mb-3">
                                                            <label for="user-name" class="required mb-1">User
                                                                Name</label>
                                                            <input type="text" placeholder="User Name" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-9 col-custom">
                                                        <div class="single-input-item mb-3">
                                                            <label for="email" class="required mb-1">Email
                                                                Addres</label>
                                                            <input type="email" id="email"
                                                                placeholder="Email Address" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-custom">
                                                        <div class="single-input-item mb-3">
                                                            <label for="add_as_admin" class="required mb-1">Add As
                                                                Admin</label>
                                                            <input type="text" placeholder="Add As Admin" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-input-item single-item-button">
                                                    <button
                                                        class="btn flosun-button secondary-btn theme-color  rounded-0">Save
                                                        Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- Single Tab Content End -->

                                <form action="createblog" method="POST" id="create_blog"
                                    class="tab-pane fade flex flex-col gap-12 justify-center"
                                    enctype="multipart/form-data">@csrf
                                    <div class="flex gap-5">
                                        <h5 class="flex flex-col gap-2 w-[40%]">
                                            <label for="first Desc">Blog Title</label>
                                            <input type="text" name="blogName">
                                        </h5>
                                        <h5 class="w-[25%]">
                                            <input type="file" multiple name="image">
                                        </h5>
                                    </div>
                                    <h5 class="flex flex-col gap-2 mt-2 mb-4 w-[50%]">
                                        <label for="keyNote">Key Note</label>
                                        <textarea name="keyNote" cols="8" rows="8"></textarea>
                                    </h5>
                                    <h5 class="flex flex-col gap-2 mb-5">
                                        <label for="mainBlogContent font-bold">Blog Content</label>
                                        <textarea name="mainBlogContent" cols="24" rows="10"></textarea>
                                    </h5>

                                    <button
                                        class="mt-7 px-6 py-2 text-[17px] rounded-xl w-[40%] md:w-[18%] bg-[#e72463] text-white"
                                        type="submit">Add
                                        Product
                                    </button>
                                </form>
                            </div>
                        </div> <!-- My Account Tab Content End -->
                    </div>
                </div> <!-- My Account Page End -->
            </div>
        </div>
    </div>
</div>
<!-- my account wrapper end -->