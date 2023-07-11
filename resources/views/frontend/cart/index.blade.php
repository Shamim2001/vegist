@extends('frontend.layouts.master')

@section('title', 'Vegist eCommerce')

@section('content')

    <!-- breadcrumb start -->
    <x-frontend.breadcrumb title="Cart" />
    <!-- breadcrumb end -->
    @php $total = null  @endphp
    <!-- cart start -->
    <section class="cart-page section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-xs-12 col-sm-12 col-md-12 col-lg-8">
                    <div class="cart-area">
                        <div class="cart-details">
                            <div class="cart-item">
                                <span class="cart-head">My cart:</span>
                                <span class="c-items">{{ count($carts) }} items</span>
                            </div>
                            @forelse ($carts as $cart)
                                @if (Cookie::get('shopping_cart'))
                                    @php
                                        $total += $cart->item_quantity * $cart->item_price;
                                    @endphp
                                @endif
                                <div class="cart-all-pro">
                                    <div class="cart-pro">
                                        <div class="cart-pro-image">
                                            <a href="{{ route('front.shop.single', $cart->item_slug) }}"><img width="100"
                                                    src="{{ $cart->item_image }}" class="img-fluid" alt="image"
                                                    style="width: 200px;"></a>
                                        </div>
                                        <div class="pro-details">
                                            <h4><a
                                                    href="{{ route('front.shop.single', $cart->item_slug) }}">{{ $cart->item_name }}</a>
                                            </h4>
                                            <span class="cart-pro-price">${{ number_format($cart->item_price, 2) }}
                                                USD</span>
                                        </div>
                                    </div>
                                    <div class="qty-item">
                                        <div class="center">
                                            <div class="plus-minus">
                                                <span>
                                                    <a href="javascript:void(0)" data-id="{{ $cart->item_id }}"
                                                        class="minus-btn text-black">-</a>
                                                    <input type="text" class="quantity" name="name"
                                                        value="{{ $cart->item_quantity }}">
                                                    <a href="javascript:void(0)" data-id="{{ $cart->item_id }}"
                                                        class="plus-btn text-black">+</a>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="all-pro-price">
                                        <span
                                            class="item-total">${{ number_format($cart->item_quantity * $cart->item_price, 2) }}
                                            USD</span>
                                        <span class="ms-3">
                                            <a href="javascript:void(0)" class="text-danger"><i
                                                    class="fa fa-remove"></i></a>
                                        </span>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center text-danger">No Item Found!</div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="cart-total">
                        <div class="cart-price">
                            <span>Subtotal</span>
                            <span class="total">${{ $total ? number_format($total, 2) : 0 }} USD</span>
                        </div>
                        <div class="cart-price">
                            <span>Discount</span>
                            <span class="discount">$0.00 USD</span>
                        </div>
                        <div class="shop-total">
                            <span>Total</span>
                            <span class="total-amount">${{ $total ? number_format($total, 2) : 0 }} USD</span>
                        </div>
                        <a href="javascript:void(0)" class="check-link btn btn-style1">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cart end -->

@endsection

@push('js')
    <script>
        $(document).on('click', '.minus-btn', function(e) {
            e.preventDefault();
            var el = $(this).closest('.cart-area');
            var product_id = $(this).data('id');

            updateCart('minus', el, product_id);
        })


        $(document).on('click', '.plus-btn', function(e) {
            e.preventDefault();
            var el = $(this).closest('.cart-area');
            var product_id = $(this).data('id');
            updateCart('plus', el, product_id);
        })

        // Update cart
        function updateCart(method, el, product_id) {
            // Item Details
            var quantity = el.find('.quantity').val();
            var price = parseFloat(el.find('.cart-pro-price').html().replace(/[^0-9.-]+/g, ""));

            var itemTotal = quantity * price;

            var itemTotalString = '$' + itemTotal.toLocaleString('en-US', {
                style: 'decimal',
                minimumFractionDigits: 2
            });


            // Main Total
            var total = $('span.total').text();
            var oldTotalValue = parseFloat(total.replace(/[^0-9.-]+/g, ""));
            // Discount
            var discount = parseFloat($('.discount').text().replace(/[^0-9.-]+/g, ""));

            // Sum
            if (method == 'minus') {
                var sum = oldTotalValue - price;
            }
            if (method == 'plus') {
                var sum = oldTotalValue + price;
            }

            var sumWithDiscount = sum - discount;

            // format the sum as a currency amount string
            var sumString = '$' + sum.toLocaleString('en-US', {
                style: 'decimal',
                minimumFractionDigits: 2
            }) + " USD";

            var sumWithDiscountString = '$' + sumWithDiscount.toLocaleString('en-US', {
                style: 'decimal',
                minimumFractionDigits: 2
            }) + " USD";


            // update Data
            el.find('span.item-total').html(itemTotalString);
            $('span.total').html(sumString);
            $('span.total-amount').html(sumWithDiscountString);


            // Ajag
            $.ajax({
                url: '{{ route('front.cart.store') }}',
                method: "POST",
                data: {
                    'quantity': quantity,
                    'product_id': product_id,
                },
                success: function(response) {
                    console.log(response);
                    toast(response.message);
                    cartload();
                },
            });
        }
    </script>
@endpush
