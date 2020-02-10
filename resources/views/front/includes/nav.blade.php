<!-- Nav -->
<div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-white col-12">
        <button class="navbar-toggler d-lg-none border-0" type="button" data-toggle="collapse" data-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/')  }}">Home</a>
                </li>
                <li class="dropdown open">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">All Categories </a>
                    <ul class="dropdown-menu">
                        {{--<li class="dropdown-plus-title">--}}
                            {{--Dropdown--}}
                            {{--<b class="pull-right glyphicon glyphicon-chevron-up"></b>--}}
                        {{--</li>--}}
                        @php($categories = App\Category::all())
                        @foreach($categories as $category)
                        <li><a href="{{ route('front.category',$category->slug) }}" class="form-dropdown">{{ $category->name }}</a></li>

                        @endforeach
                    </ul>
                </li>
                {{--@php($categories = App\Category::all())--}}
                {{--@foreach($categories as $category)--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="{{ route('front.category',$category->slug) }}">{{ $category->name }}</a>--}}
                {{--</li>--}}

                {{--@endforeach--}}

            </ul>
        </div>
    </nav>
</div>
<!-- Nav -->
