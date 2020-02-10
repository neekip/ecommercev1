@extends('layouts.front')

@section('content')
    <!-- Main Content -->
    <div class="row">
        <div class="col-12 mt-3 text-center text-uppercase">
            <h2>Shopping Cart</h2>
        </div>
    </div>

    <main class="row">
        <div class="col-12 bg-white py-3 mb-3">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-10 mx-auto table-responsive">
                    @if(!empty($cart))
                    {{ Form::open(['method' => 'patch', 'route' => 'front.cart.update', 'class' => 'row']) }}
                        <div class="col-12">
                            <table class="table table-striped table-hover table-sm">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Amount</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--@php($item = App\Product::all())--}}
                                @php($total = 0)
                                @foreach($cart as $item)

                                    <tr>
                                    <td>
                                        @if(!empty($item['product']->image))
                                        <img src="{{ url('public/images/'.$item['product']->image) }}" class="img-fluid mr-3">
                                        @endif
                                        <strong>{{ $item['product']->name }}</strong>
                                    </td>
                                    <td>
                                        Rs. {{number_format($item['price'])}}
                                    </td>
                                    <td>
                                        <input type="number" min="1" value="{{ $item['qty'] }}" name="qty[{{ $item['code'] }}]">
                                    </td>
                                    <td>
                                        Rs. {{number_format($item['amount'])}}
                                    </td>
                                    <td>
                                        <a href="{{ route('front.cart.remove',$item['code']) }}" class="btn btn-link text-danger"><i class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                @php($total += $item['amount'])
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th colspan="3" class="text-right">Total</th>
                                    <th> Rs. {{number_format($total) }}</th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="col-12 text-right">
                            <button class="btn btn-outline-secondary mr-3" type="submit">Update</button>
                            <a class="btn btn-outline-success dropdown dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Checkout
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('front.checkout') }}">Cash on Delivery</a>
                                <a class="dropdown-item" id="payment-button">Pay with Khalti</a>
                            </div>
                        </div>

                            {{--<a href="{{ route('front.checkout') }}" id="checkout-payment" class="btn btn-outline-success ">Checkout</a>--}}

                        </div>
                    {{ Form::close() }}
                        {{--<div class="col-12 text-right mr-3 mt-3">--}}
                                {{--<button id="payment-button" class="btn btn-primary khalti-button">Pay with Khalti</button>--}}
                        {{--</div>--}}

                    @else
                        <h4 class="text-center"><em>Cart is empty.</em></h4>
                    @endif
                </div>
            </div>
        </div>

    </main>

    <!-- Main Content -->
@endsection
