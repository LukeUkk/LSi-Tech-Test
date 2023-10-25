<x-layout>

    <x-simple-hero :title="$page->title"></x-simple-hero>
    
    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">
                
                @isset($products)
                    @foreach($products as $product)
                            <x-product-grid-item :product="$product"/>
                    @endforeach
                @endisset

            </div>
        </div>
    </div>
    <!-- End Product Section -->


</x-layout>