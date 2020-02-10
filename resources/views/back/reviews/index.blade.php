@extends('layouts.back')

@section('content')
    <div class="content">
        <div class="container-fluid bg-white">
            <div class="row">
                <div class="col">
                    <h1>Reviews</h1>
                </div>
                <div class="col-md-12">
                    @if(!$reviews->isEmpty())
                        <table id="table" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>User</th>
                                <th>Product</th>
                                <th>Comment</th>
                                <th>Rating</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($reviews as $review)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $review->user->name }}</td>
                                    <td>{{ $review->product->name }}</td>
                                    <td>{{ $review->comment }}</td>
                                    <td>{{ $review->rating }}</td>
                                    <td>{{ date('Y M d (l)',strtotime($review->created_at)) }}</td>
                                    <td>{{ date('Y M d (l)',strtotime($review->updated_at))}}</td>
                                    <td>
                                        {{ Form::open(['method' => 'delete', 'route' => ['reviews.destroy', $review->id]]) }}
                                        <button class="btn btn-danger btn-sm delete" type="submit">Delete</button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h6 class="text-center"><em>No review added.</em></h6>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
