<x-layout>

    <div class="container-fluid text-center" style="margin: 5%;">
        <div class="row align-items-center">

          <div class="col">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial-slider-wrap text-center">
        
                        <div id="testimonial-nav">
                            <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                            <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                        </div>
        
                        <div class="testimonial-slider" id="testimonial-slider">
                            @foreach (explode(',',$product->images) as $prodImage )
                                <div class="item">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 mx-auto">
        
                                            <div class="testimonial-block text-center">
                                                {{-- <div class="author-info">
                                                    <div class="author-pic"> --}}
                                                        <img src="{{ asset('images/product/' . $prodImage) }}" alt="{{ $product->name }}" alt="Maria Jones" class="img-fluid">
                                                    {{-- </div>
        
                                                </div> --}}
                                            </div>
        
                                        </div>
                                    </div>
                                </div> 
                            @endforeach
                            <!-- END item -->
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="col" style="text-align: left;">
            <main class="col-lg-8">
                <div class="ps-lg-3">
                  <h4 class="title text-dark">
                    {{$product->name}}
                  </h4>
                  <div class="d-flex flex-row my-3">
                    <div class="text-warning mb-1 me-2">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                      <span class="ms-1">
                        4.5
                      </span>
                    </div>
                    <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
                    <span class="text-success ms-2">In stock</span>
                  </div>
        
                  <div class="mb-3">
                    <span class="h5">£{{$product->price}}</span>
                  </div>
        
                  <p>
                    {!! $product->description !!}
                  </p>
        
                  <hr />
        

                <div class="container" style="margin-bottom: 5%; margin-top: 5%;">
                    <div class="row align-items-center">

                        <div class="col-lg-6">
                            <label class="mb-2 d-block">Quantity</label>
                            <div class="input-group" style="width: 170px;">
                                <button class="btn btn-white border border-secondary px-3 increment-quantity" type="button" id="button-addon1" data-mdb-ripple-color="dark" data-direction="-1">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <input type="text" id="quantity" name="quantity" min="1" max="500" class="form-control text-center border border-secondary" placeholder="14" aria-label="Example text with button addon" aria-describedby="button-addon1"/>
                                <button class="btn btn-white border border-secondary px-3 decrement-quantity" type="button" id="button-addon2" data-mdb-ripple-color="dark" data-direction="1">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <label class="mb-2 d-block">Colours</label>
                            <select class="form-select" aria-label="Default select example" aria-placeholder="Select Colour">
                                @foreach (explode(',',$product->colours) as $colour)
                                    <option value="{{$colour}}">{{$colour}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>
                
                </div>
                  <a href="#" class="btn btn-warning shadow-0"> Buy now </a>
                  <a href="#" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
                  <button class="btn btn-success" id="product_enquiry_form_btn"> Product Enquiry </button>
                </div>
              </main>
          </div>

        </div>
    
        <x-product-enquiry/>
    </div>
    
<script>
    $("button").on("click", function(ev) {
        var currentQty = $('input[name="quantity"]').val();
        var qtyDirection = $(this).data("direction");
        var newQty = 0;
        
        if (qtyDirection == "1") {
            newQty = parseInt(currentQty) + 1;
        }
        else if (qtyDirection == "-1") {
            newQty = parseInt(currentQty) - 1;
        }

        // make decrement disabled at 1
        if (newQty == 1) {
            $(".decrement-quantity").attr("disabled", "disabled");
        }
        
        // remove disabled attribute on subtract
        if (newQty > 1) {
            $(".decrement-quantity").removeAttr("disabled");
        }
        
        if (newQty > 0) {
            newQty = newQty.toString();
            $('input[name="quantity"]').val(newQty);
        }
        else {
            $('input[name="quantity"]').val("1");
        }
    });

    $("#product_enquiry_form_btn").on("click", function(ev) {
        $('#product_enquiry_form').toggle();

    });

</script>
</x-layout>