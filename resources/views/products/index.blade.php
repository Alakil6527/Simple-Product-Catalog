<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Catalog</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Product Catalog</h1>
        <a href="{{ route('cart.show') }}" class="btn btn-success mb-3">View Cart</a> 

        <input type="text" id="search" class="form-control mb-3" placeholder="Search products...">

        <div class="d-flex flex-wrap gap-3" id="product-container">
            @foreach ($products as $product)
            <div class="product-card card p-3 mb-3" style="width: 18rem;">
                <h5>{{ $product['name'] }}</h5>
                <p>Price: ${{ $product['price'] }}</p>
                <button class="btn btn-primary add-to-cart" 
                        data-id="{{ $product['id'] }}" 
                        data-name="{{ $product['name'] }}" 
                        data-price="{{ $product['price'] }}">
                    Add to Cart
                </button>
            </div>
            @endforeach
        </div>
    </div>

    <script src="{{ asset('js/cart.js') }}"></script>
    <script src="{{ asset('js/search.js') }}"></script>

</body>
</html>
