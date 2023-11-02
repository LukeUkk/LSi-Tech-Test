<x-mail::message>
# Product Enquiry

Prouct enquiry for product {{$product}} requested from this page {{$page_refered_from}}

# User Info
<h3>Name: {{$name}}</h3>
<h3>Email: {{$email}}</h3>
<h3>Phone: {{$phone}}</h3>
<h3>Product: {{$product}}</h3>
<h3>Message: {{$message}}</h3>


<x-mail::button :url="$page_refered_from">
View Product Page
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
