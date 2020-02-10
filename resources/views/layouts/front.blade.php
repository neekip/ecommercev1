<!doctype html>
<html lang="en">
<head>
    <base href="{{ url('/') }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bundlebooks</title>
    <link rel="stylesheet" href="{{ url('public/css/front/app.css') }}">
    {{--<link rel="stylesheet" href="{{ url('public/css/front/typehead.css') }}">--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-typeahead/2.11.0/jquery.typeahead.css" integrity="sha256-N5LjnCD3sm17vjUaBNSBY/NCdnsUZpSrLurmlYiQgRI=" crossorigin="anonymous" />--}}
    <link rel="stylesheet" href="{{ url('public/css/front/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{url('public/css/front/custom.css')}}">
</head>
<body>
<div class="container-fluid">
    <header class="row">
        <!-- Top Nav -->
        <div class="col-12 bg-dark py-2 d-md-block d-none">
            <div class="row">
                <div class="col-auto mr-auto">
                    <ul class="top-nav">
                        <li>
                            <a href="tel:+123-456-7890"><i class="fa fa-phone-square mr-2"></i>+977 4332567</a>
                        </li>
                        <li>
                            <a href="mailto:mail@ecom.com"><i class="fa fa-envelope mr-2"></i>mail@ecom.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <ul class="top-nav">
                        @guest()
                        <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                        @else
                        <li>
                            <a href="{{ route('user.index') }}">{{ auth('web')->user()->name }}</a>
                        </li>
                        <li>
                            {{ Form::open(['method' => 'post', 'route' => 'logout', 'id' => 'logout-form', 'class' => 'd-none']) }}
                            {{ Form::close() }}
                            <a href="#" id="logout-link">Logout</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
        <!-- Top Nav -->

        <!-- Header -->
        <div class="col-12 bg-white pt-4">
            <div class="row">
                <div class="col-lg-auto">
                    <div class="site-logo text-center text-lg-left">
                        <a href="{{ url('/') }}">Bundle Books</a>
                    </div>
                </div>
                <div class="col-lg-5 mx-auto mt-4 mt-lg-0">
                    {{ Form::open(['method' => 'get','route' => 'front.search']) }}
                        <div class="form-group">
                            <div class="input-group">
                                <input name="term" type="search" class="form-control border-dark" id="search" placeholder="Search..." autocomplete="off" required>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-dark" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
                <div class="col-lg-auto text-center text-lg-left header-item-holder">
                    <a href="#"  class="header-item">
                        <i class="fas fa-heart mr-2"></i><span id="header-favorite">0</span>
                    </a>
                    @php
                        $items = 0;
                        $total = 0;

                        if(request()->hasCookie('cart'))  {
                            $cart = request()->cookie('cart');
                            $cart = json_decode($cart, true);

                            foreach($cart as $item)  {
                                $items += $item['qty'];
                                $total += $item['amount'];
                            }

                        }
                    @endphp
                    <a href="{{ route('front.cart') }}" class="header-item">
                        <i class="fas fa-shopping-bag mr-2"></i><span id="header-qty" class="mr-3">{{ $items }}</span>
                        <i class="fas fa-money-bill-wave mr-2"></i><span id="header-price">Rs. {{ number_format($total ) }}</span>
                    </a>
                </div>
            </div>

            @include('front.includes.nav ')

        </div>
        <!-- Header -->

    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="row">
        <div class="col-12 bg-dark text-white pb-3 pt-5">
            <div class="row">
                <div class="col-lg-2 col-sm-4 text-center text-sm-left mb-sm-0 mb-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-logo">
                                <a href="{{ url('/') }}">Bundle Books</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <address>
                                Kathmandu, Nepal

                            </address>
                        </div>
                        <div class="col-12">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-8 text-center text-sm-left mb-sm-0 mb-3">
                    <div class="row">
                        <div class="col-12 text-uppercase">
                            <h4>Who are we?</h4>
                        </div>
                        <div class="col-12 text-justify">
                            <p>Bundle Books is the ultimate Nepali online shopping website for books that offers a solution for all needs of the customers. It has a wide and assorted range of books including a lot of genres.Bundle Books makes your reading experience a lot better.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-3 col-5 ml-lg-auto ml-sm-0 ml-auto mb-sm-0 mb-3">
                    <div class="row">
                        <div class="col-12 text-uppercase">
                            <h4>Quick Links</h4>
                        </div>
                        <div class="col-12">
                            <ul class="footer-nav">
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-sm-2 col-4 mr-auto mb-sm-0 mb-3">
                    <div class="row">
                        <div class="col-12 text-uppercase text-underline">
                            <h4>Help</h4>
                        </div>
                        <div class="col-12">
                            <ul class="footer-nav">
                                <li>
                                    <a href="#">FAQs</a>
                                </li>
                                <li>
                                    <a href="#">Shipping</a>
                                </li>
                                <li>
                                    <a href="#">Returns</a>
                                </li>
                                <li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 text-center text-sm-left">
                    <div class="row">
                        <div class="col-12 text-uppercase">
                            <h4>Newsletter</h4>
                        </div>
                        <div class="col-12">
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter your email..." required>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-outline-light text-uppercase">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->
</div>

@include('front.includes.messages')
<script type="text/javascript" src="{{ url('public/js/front/app.js') }}"></script>
<script type="text/javascript" src="{{ url('public/js/front/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/js/front/typehead.js')}}"></script>
{{--<script type="module" src="{{ url('public/js/front/khalti.js') }}"></script>--}}
<script src="https://khalti.com/static/khalti-checkout.js"></script>
<script type="text/javascript">
    var route = "{{ url('autocomplete') }}";
    $('#search').typeahead({
        source:  function (term, process) {
            return $.get(route, { term: term }, function (data) {
                return process(data);
            });
        }
    });
</script>

<script>
    var config = {
        // replace the publicKey with yours
        "publicKey": "test_public_key_398ffb34203843f6a75a3d51a75a3489",
        "productIdentity": "1234567890",
        "productName": "Dragon",
        "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
        "eventHandler": {
            onSuccess (payload) {
                // hit merchant api for initiating verfication
                $.ajax({
                    url: "{{url('/payments/verification')}}",
                    type: 'GET',

                    data: {
                        amount: payload.amount,
                        trans_token: payload.token
                    },
                    success: function (res) {
                        console.log("transaction success");
                    },

                    error: function (error) {
                        console.log("transaction failed");
                    }
                })
                console.log(payload);
            },
            onError (error) {
                console.log(error);
            },
            onClose () {
                console.log('widget is closing');
            }
        }
    };

    var checkout = new KhaltiCheckout(config);
    var btn = document.getElementById("payment-button");
    btn.onclick = function () {
        checkout.show({amount: 1000});
    }

</script>

<script type="text/javascript" src="{{ url('public/js/front/custom.js') }}"></script>


</body>
</html>
