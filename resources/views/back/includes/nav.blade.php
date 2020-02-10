{{--<div class="row">--}}
    {{--<nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12 mb-3">--}}
        {{--<a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name')}}</a>--}}
        {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
            {{--<span class="navbar-toggler-icon"></span>--}}
        {{--</button>--}}

        {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
            {{--<ul class="navbar-nav mr-auto">--}}
                {{--@if(auth('admin')->user()->type == 'admin')--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="{{ route('admins.index') }}">Admins</a>--}}
                {{--</li>--}}
                {{--@endif--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="{{ route('categories.index') }}">Categories</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="{{ route('products.index') }}">Products</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="{{ route('users.index') }}">Users</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="{{ route('reviews.index') }}">Reviews</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="{{ route('orders.index') }}">Orders</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
            {{--<ul class="navbar-nav">--}}
                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--{{auth('admin')->user()->name}}--}}
                    {{--</a>--}}
                    {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                        {{--<a class="dropdown-item" href="{{route('admin.profile.edit')}}">Edit Profile</a>--}}
                        {{--<a class="dropdown-item" href="{{route('admin.password.edit')}}">Change Password</a>--}}
                        {{--<div class="dropdown-divider"></div>--}}
                        {{--{{Form::open(['method' => 'post','route' => 'admin.logout']) }}--}}
                        {{--<button class="btn btn-link dropdown-item" type="submit">Logout</button>--}}
                        {{--{{ Form::close() }}--}}
                    {{--</div>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</nav>--}}
{{--</div>--}}

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{auth('admin')->user()->name}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('admin.profile.edit')}}">Edit Profile</a>
                                <a class="dropdown-item" href="{{route('admin.password.edit')}}">Change Password</a>
                                <div class="dropdown-divider"></div>
                                {{Form::open(['method' => 'post','route' => 'admin.logout']) }}
                                <button class="btn btn-link dropdown-item" type="submit">Logout</button>
                                {{ Form::close() }}
                            </div>
                        </li>
                    </ul>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">

                        </li>
                        <

                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </ul>
</nav>
<!-- /.navbar -->
