@extends('layouts.back')

@section('content')
    <div class="content">
        <div class="container-fluid bg-white">
            <div class="row">
                <div class="col">
                    <h1>Payments</h1>
                </div>
                <div class="col-md-12">
                    <table id="table" class="table table-striped table-bordered table-responsive-md" style="width:100%">
                        <thead>
                            <th>SN</th>
                            <th>User</th>
                            <th>Mobile No</th>
                            <th>Token</th>
                            <th>Amount</th>
                            <th>Fee Amount</th>
                        </thead>
                        <tbody>
                            @foreach($payments as $payment)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $payment->order->user->name }}</td>
                                    <td>{{ $payment->order->user->phone }}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
