@extends('layouts.back')

@section('content')
    <div class="content">
        <div class="container-fluid bg-white">
            <div class="row">
                <div class="col">
                    <h1>Orders</h1>
                </div>
                <div class="col-md-12">
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>User</th>
                            <th>Details</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>
                                    <ul>
                                        @foreach($order->order_details as $detail)
                                            <li>
                                                {{ $detail->product->name }} Rs. {{ number_format($detail->price) }} x {{ $detail->qty }} = Rs. {{ number_format($detail->total) }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>Rs. {{ number_format($order->total) }}</td>
                                <td>{{ $order->status }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->updated_at }}</td>
                                <td>
                                    {{ Form::open(['method' => 'delete', 'route' => ['orders.destroy', $order->id]]) }}
                                    <button class="btn btn-danger btn-sm delete" type="submit">Delete</button>
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
