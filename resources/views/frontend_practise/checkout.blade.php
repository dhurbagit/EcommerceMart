@extends('frontend.layout.main')

@section('content')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Checkout<span>Shop</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="checkout">
                <div class="container">
                    <div class="checkout-discount">
                        <form action="#">
                            <input type="text" class="form-control" required id="checkout-discount-input">
                            <label for="checkout-discount-input" class="text-truncate">Have a coupon? <span>Click here to
                                    enter your code</span></label>
                        </form>
                    </div><!-- End .checkout-discount -->
                    <form action="{{ route('place.order') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>First Name *</label>
                                        <input type="text" class="form-control" required name="first_name">
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>Last Name *</label>
                                        <input type="text" class="form-control" required name="last_name">
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <label>Company Name (Optional)</label>
                                <input type="text" class="form-control" name="company_name">

                                <label>Country *</label>
                                <input type="text" class="form-control" required name="country">

                                <label>Street address *</label>
                                <input type="text" class="form-control" name="street_address_1"
                                    placeholder="House number and Street name" required>
                                <input type="text" class="form-control" name="street_address_2"
                                    placeholder="Appartments, suite, unit etc ..." required>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Town / City *</label>
                                        <input type="text" class="form-control" required name="town_city">
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>State / County *</label>
                                        <input type="text" class="form-control" required name="state_country">
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Postcode / ZIP *</label>
                                        <input type="text" class="form-control" required name="postalcode_zip">
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>Phone *</label>
                                        <input type="tel" class="form-control" required name="phone">
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <label>Email address *</label>
                                <input type="email" class="form-control" required name="email">


                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="get_different_address"
                                        id="checkout-diff-address">
                                    <label class="custom-control-label" for="checkout-diff-address">Ship to a different
                                        address?</label>
                                </div><!-- End .custom-checkbox -->

                                <label>Order notes (optional)</label>
                                <textarea class="form-control" cols="30" rows="4" name="order_note"
                                    placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                            </div><!-- End .col-lg-9 -->
                            <aside class="col-lg-3">
                                <div class="summary">
                                    <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                                    <table class="table table-summary">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                           
                                            @foreach ($cartItems as $cart)
                                                <tr>

                                                    <td><a href="#">{{$cart->product->product_name}}s</a></td>
                                                    <td>{{$cart->product->price}}</td>
                                                </tr>
                                            @endforeach



                                            <tr class="summary-subtotal">
                                                <td>Subtotal:</td>
                                                <td>{{ $total }}</td>
                                            </tr><!-- End .summary-subtotal -->
                                            <tr>
                                                <td>Shipping:</td>
                                                <td>
                                                   {{request()->shipping}}
                                                   <input type="hidden" name="shipping" value="{{request()->shipping}}">
                                                </td>
                                            </tr>
                                            <tr class="summary-total">
                                                <td>Total:</td>
                                                <td>{{ $total }}</td>
                                            </tr><!-- End .summary-total -->
                                        </tbody>
                                    </table><!-- End .table table-summary -->

                                    <div class="accordion-summary" id="accordion-payment">
                                        <div class="card">
                                            <div class="card-header" id="heading-1">
                                                <h2 class="card-title">
                                                    <input role="button" data-toggle="collapse" href="#collapse-1"
                                                        name="payment_type" value="Direct bank transfer"
                                                        aria-expanded="true" aria-controls="collapse-1" type="radio"
                                                        id="exampleRadios1"> Direct bank transfer

                                                </h2>
                                            </div><!-- End .card-header -->
                                            <div id="collapse-1" class="collapse show" aria-labelledby="heading-1"
                                                data-parent="#accordion-payment">
                                                <div class="card-body">
                                                    Make your payment directly into our bank account. Please use your Order
                                                    ID as the payment reference. Your order will not be shipped until the
                                                    funds have cleared in our account.
                                                </div><!-- End .card-body -->
                                            </div><!-- End .collapse -->
                                        </div><!-- End .card -->

                                        <div class="card">
                                            <div class="card-header" id="heading-2">
                                                <h2 class="card-title">
                                                    <input role="button" data-toggle="collapse" href="#collapse-2"
                                                        name="payment_type" value="Check payments" aria-expanded="false"
                                                        aria-controls="collapse-2" type="radio" id="exampleRadios1">
                                                    Check payments

                                                </h2>
                                            </div><!-- End .card-header -->
                                            <div id="collapse-2" class="collapse" aria-labelledby="heading-2"
                                                data-parent="#accordion-payment">
                                                <div class="card-body">
                                                    Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                                                    volutpat mattis eros. Nullam malesuada erat ut turpis.
                                                </div><!-- End .card-body -->
                                            </div><!-- End .collapse -->
                                        </div><!-- End .card -->

                                        <div class="card">
                                            <div class="card-header" id="heading-3">
                                                <h2 class="card-title">

                                                    <input role="button" data-toggle="collapse" href="#collapse-3"
                                                        name="payment_type" value="Cash on delivery"
                                                        aria-expanded="false" aria-controls="collapse-3" type="radio"
                                                        id="exampleRadios1">Cash on delivery
                                                </h2>
                                            </div><!-- End .card-header -->
                                            <div id="collapse-3" class="collapse" aria-labelledby="heading-3"
                                                data-parent="#accordion-payment">
                                                <div class="card-body">Quisque volutpat mattis eros. Lorem ipsum dolor sit
                                                    amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis
                                                    eros.
                                                </div><!-- End .card-body -->
                                            </div><!-- End .collapse -->
                                        </div><!-- End .card -->

                                        <div class="card">
                                            <div class="card-header" id="heading-4">
                                                <h2 class="card-title">

                                                    <input role="button" data-toggle="collapse" href="#collapse-4"
                                                        name="payment_type" value="PayPal" aria-expanded="false"
                                                        aria-controls="collapse-4" type="radio"
                                                        id="exampleRadios1">PayPal
                                                </h2>
                                            </div><!-- End .card-header -->
                                            <div id="collapse-4" class="collapse" aria-labelledby="heading-4"
                                                data-parent="#accordion-payment">
                                                <div class="card-body">
                                                    Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non,
                                                    semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis
                                                    fermentum.
                                                </div><!-- End .card-body -->
                                            </div><!-- End .collapse -->
                                        </div><!-- End .card -->

                                        <div class="card">
                                            <div class="card-header" id="heading-5">
                                                <h2 class="card-title">
                                                    <input role="button" data-toggle="collapse" href="#collapse-5"
                                                        name="payment_type" value="Credit Card" aria-expanded="false"
                                                        aria-controls="collapse-5" type="radio"
                                                        id="exampleRadios1">Credit Card


                                                </h2>
                                            </div><!-- End .card-header -->
                                            <div id="collapse-5" class="collapse" aria-labelledby="heading-5"
                                                data-parent="#accordion-payment">
                                                <div class="card-body"> Donec nec justo eget felis facilisis
                                                    fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                    Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit ame.
                                                </div><!-- End .card-body -->
                                            </div><!-- End .collapse -->
                                        </div><!-- End .card -->
                                    </div><!-- End .accordion -->

                                    <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                        <span class="btn-text">Place Order</span>
                                        <span class="btn-hover-text">Proceed to Checkout</span>
                                    </button>
                                </div><!-- End .summary -->
                            </aside><!-- End .col-lg-3 -->
                        </div><!-- End .row -->
                    </form>
                </div><!-- End .container -->
            </div><!-- End .checkout -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            var isChecked = true; // Your condition to determine if the checkbox should be checked or not

            // Set the value attribute of the checkbox based on the condition
            $('#checkout-diff-address').val(isChecked ? 'Ship to a different addressx' : 'empty');
        });
    </script>
@endpush
