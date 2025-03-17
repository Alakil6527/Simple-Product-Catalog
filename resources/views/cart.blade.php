<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shopping Cart</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Shopping Cart</h1>
        <a href="{{ route('home') }}" class="btn btn-primary mb-3">Back to Products</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="cart-body"></tbody>
        </table>

        <h3>Total: $<span id="total">0</span></h3>
        <h4>Discount: $<span id="discount">0</span></h4>
        <h3>Final Total: $<span id="final-total">0</span></h3>
    </div>

    <script src="{{ asset('js/cart.js') }}"></script>
</body>
</html>
