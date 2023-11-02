<div class="container mt-5 mb-5" id="product_enquiry_form" @if (!$errors->any())style="display: none"@endif>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h2>Product Enquiry Form</h2>
    <form action="/generate_email/product_enquiry" method='POST'>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="name">Your Name *</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="email">Email address *</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter your phone number" value="{{ old('phone') }}">
        </div>
        <div class="form-group">
            <label for="product">Product Name *</label>
            <input type="text" name="product" class="form-control" id="product" placeholder="Enter the product name" value="{{ old('product') }}">
        </div>
        <div class="form-group">
            <label for="message">Your Enquiry *</label>
            <textarea class="form-control" name="message" id="message" rows="4" placeholder="Enter your enquiry" value="{{ old('message') }}"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-5">Submit Enquiry</button>
    </form>
</div>