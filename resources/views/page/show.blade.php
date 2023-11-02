<x-layout>
    <x-slot:title>{{ $page->title }}</x-slot>
    <!-- Start Hero Section -->
        <x-hero/>
    <!-- End Hero Section -->

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
                    <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. </p>
                    <p><a href="shop.html" class="btn">Explore</a></p>
                </div> 
                <!-- End Column 1 -->

                @isset($products)
                    @foreach($products as $key => $product)
                        @if ($key <= 2)
                            <x-product-grid-item :product="$product"/>
                        @endif
                    @endforeach
                @endisset


            </div>
        </div>
    </div>
    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->
        <x-why-choose-us/>
    <!-- End Why Choose Us Section -->

    <!-- Start We Help Section -->
    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="imgs-grid">
                        <div class="grid grid-1"><img src="{{ asset('images/product/example-product-3-black.jpg') }} "alt="Product book"></div>
                        <div class="grid grid-2"><img src="{{ asset('images/product/example-product-1-white.jpg') }}" alt="Product white"></div>
                        <div class="grid grid-3"><img src="{{ asset('images/product/example-product-2.jpg') }}" alt="Product Pen"></div>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">We Help You Make Modern Promotional Merchandise</h2>
                    <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada</p>

                    <ul class="list-unstyled custom-list my-4">
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                    </ul>
                    <p><a herf="#" class="btn">Explore</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End We Help Section -->

    <!-- Start Popular Product -->
    <div class="popular-product">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('images/product/example-product-3-blue.jpg') }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="pt-3">
                            <h3>Book</h3>
                            <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
                            <p><a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('images/product/example-product-4-red.jpg') }}"src="images/product-2.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="pt-3">
                            <h3>Earphones</h3>
                            <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
                            <p><a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{ asset('images/product/example-product-2-orange.jpg') }}"src="images/product-3.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="pt-3">
                            <h3>Pen</h3>
                            <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
                            <p><a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Popular Product -->

    <!-- Start Testimonial Slider -->
    <x-testimonial/>
    <!-- End Testimonial Slider -->	
</x-layout>