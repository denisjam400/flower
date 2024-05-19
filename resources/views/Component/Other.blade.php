<div id="hero" class="d-flex flex-col align-items-center breadcrumber" style="background: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1)),
        url('/images/bg/breadcrumb.jpg');background-size: cover;background-position: center;">
    <div class="container position-relative">
        <div class="d-flex justify-content-center">
            <div class="contct justify-content-center align-items-center space-y-7">
                <h2 class="text-center uppercase">
                    @if($Params === "shop/{id}")

                    {{ "Product Details" }}

                    @elseif ($Params === "admin/homepage")

                    {{ "Admin" }}

                    @elseif ($Params === "cart")

                    {{ "Cart" }}

                    @elseif ($Params === "blog/{id}")

                    {{ $BlogDetail->post_name }}

                    @elseif ($Params === "about")

                    {{ "About Us" }}

                    @else

                    {{ $Params }}

                    @endif
                </h2>
                <nav>
                    <ol>
                        <li><a href="/">Home</a></li>
                        @if ($Params === "blog/{id}")
                        <li><a href="/blog">Blog</a></li>

                        @endif
                        <li class="uppercase">
                            @if($Params === "shop/{id}")

                            {{ "Product" }}

                            @elseif ($Params === "admin/homepage")

                            {{ "Admin" }}

                            @elseif ($Params === "blog/{id}")

                            {{ substr($BlogDetail->post_name, 0, 10) }}...

                            @else

                            {{$Params}}
                            @endif
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


</div>