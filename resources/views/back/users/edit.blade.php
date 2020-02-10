@extends('layouts.back')

@section('content')
    <div class="row">
        <div class="col-12 bg-white">
            <div class="row">
                <div class="col-6 mx-auto">
                    <h1>Edit Users</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mx-auto">
                    {{ Form::model($user, ['method' => 'patch', 'route' => ['users.update', $user->id]]) }}
                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email', null, ['class' => 'form-control', 'readonly']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('phone', 'Mobile Number') }}
                        {{ Form::number('phone', null, ['class' => 'form-control', 'required']) }}
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-fill">Save</button>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
