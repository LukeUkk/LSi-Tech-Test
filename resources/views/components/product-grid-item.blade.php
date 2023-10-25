<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">

    <a class="product-item" <a href="{{ route('product.show', ['name' => str_replace(' ', '-', $product->name)]) }}">
        <img src="{{ asset('images/product/' . $product->main_image) }}" alt="{{ $product->name }}" class="img-fluid product-thumbnail">
        <h3 class="product-title">{{ $product->name }}</h3>
        <strong class="product-price">£ {{number_format($product->price, 2, '.', '')}}</strong>

        <span class="icon-cross">
            <img src="{{ asset('images/cross.svg') }}" class="img-fluid">
        </span>
    </a>
</div> 