@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Have A Nice Shopping') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Form for ordering all products at once -->
                    <form id="orderForm" action="{{ route('order.storeAll') }}" method="POST">
                        @csrf
                        <!-- "Order All" button -->
                        <button type="button" id="addToCartBtn" class="btn btn-danger mb-3">Add To Cart</button>
                        <div class="row">

                            @foreach ($products as $product)

                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product->product_name }}</h5>
                                            <p class="card-text">{{ $product->product_description }}</p>
                                            <p class="card-text">Price: {{ $product->product_price }}</p>
                                            <p class="card-text">Stock Quantity: {{ $product->stock ? $product->stock->stockQuantity : 'N/A' }}</p>
                                            <div class="overflow-auto" style="max-height: 200px;">
                                                @if ($product->product_image)
                                                    <div class="d-flex flex-row">
                                                        @foreach (explode(',', $product->product_image) as $image)
                                                            <img src="{{ Storage::url('images/' . trim($image)) }}" alt="Product Image" class="img-fluid mr-2" style="max-width: 100px;">
                                                        @endforeach
                                                    </div>
                                                @else
                                                    No Image
                                                @endif
                                            </div>

                                            <!-- Input fields for order quantity -->
                                            <input type="hidden" name="products[{{$product->id_product}}][id]" value="{{ $product->id_product }}">
                                            <div class="form-group">
                                                <label for="orderQuantity{{$product->id_product}}">Order Quantity:</label>
                                                <input type="number" name="products[{{$product->id_product}}][orderQuantity]" class="form-control orderQuantity" value="0" min="0" data-stock="{{ $product->stock ? $product->stock->stockQuantity : 0 }}">
                                                <span class="text-danger stockError" style="display:none;">Stock Quantity Exceeded</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript code to validate order quantity against available stock quantity
    document.addEventListener('DOMContentLoaded', function () {
        const addToCartBtn = document.getElementById('addToCartBtn');

        addToCartBtn.addEventListener('click', function (event) {
            const orderQuantityInputs = document.querySelectorAll('.orderQuantity');
            let errorOccurred = false;

            orderQuantityInputs.forEach(function (input) {
                const orderQuantity = parseInt(input.value);
                const maxStock = parseInt(input.getAttribute('data-stock'));

                if (orderQuantity > maxStock) {
                    input.nextElementSibling.style.display = 'inline'; // Show error message
                    errorOccurred = true;
                } else {
                    input.nextElementSibling.style.display = 'none'; // Hide error message
                }
            });

            if (errorOccurred) {
                event.preventDefault(); // Prevent default action (form submission) if error occurred
            } else {
                document.getElementById('orderForm').submit(); // Submit the form if no error
            }
        });
    });
</script>

@endsection
