@extends('layouts.back')

@section('content')
    <div class="content">
        <div class="container-fluid bg-white">
            <div class="row">
                <div class="col">
                    <h1>Users</h1>
                </div>
                <div class="col-md-12">
                    @if(!$users->isEmpty())
                        <table id="table" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile No.</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ date('Y M d (l)',strtotime($user->created_at)) }}</td>
                                    <td>{{ date('Y M d (l)',strtotime($user->updated_at))}}</td>
                                    <td>
                                        {{ Form::open(['method' => 'delete', 'route' => ['users.destroy', $user->id]]) }}
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                        <button class="btn btn-danger btn-sm delete" type="submit">Delete</button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h5 class="text-center">No User added</h5>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
