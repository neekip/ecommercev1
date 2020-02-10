@extends('layouts.back')

@section('content')
    <div class="row">
        <div class="col-12 bg-white">
            <div class="row">
                <div class="col">
                    <h1>Products</h1>
                </div>
                <div class="col-auto">
                    <a class="btn btn-primary mt-2" href="{{ route('products.create') }}">Add Product</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if(!$products->isEmpty())
                        <table class="table table-striped table-hover table-bordered table-sm">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Author</th>
                                <th>Product Code</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Image</th>
                                <th>Featured</th>
                                {{--<th>Created At</th>--}}
                                {{--<th>Updated At</th>--}}
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->author }}</td>
                                        <td>{{ $product->product_code }}</td>
                                        <td>{{ $product->category->name  }}</td>
                                        <td>Rs. {{ number_format($product->price) }}</td>
                                        <td>
                                            @if(!empty($product->discount))
                                                Rs.{{number_format($product->discount)}}
                                            @endif
                                        </td>
                                        <td>
                                            @if(!empty($product->image))

            <img src="{{url('public/images/'.$product->image)}}" class="img-fluid small">
                                            @endif                               </td>
                                        <td>{{ $product->featured }}</td>
                                        {{--<td>{{ $product->created_at }}</td>--}}
                                        {{--<td>{{ $product->updated_at }}</td>--}}
                                        <td>
                                            {{ Form::open(['method' => 'delete', 'route' =>['products.destroy', $product->product_code]]) }}
                                            <a href="{{ route('products.edit', $product->product_code) }}" class="btn btn-sm"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-sm delete" type="submit"><i class="fas fa-trash"></i></button>
                    {{ Form::close() }}                                          </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                            <h4 class="text-center">No Product added.</h4>

                    @endif

                </div>
                <div class="col-12">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
