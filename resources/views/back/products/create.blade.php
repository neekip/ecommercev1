@extends('layouts.back')

@section('content')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector:'textarea',
            plugins:'link code',
            member:false
        });

    </script>
    <div class="row">
        <div class="col-12 bg-white">
            <div class="row">
                <div class="col-6 mx-auto">
                    <h1>Add Product</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mx-auto">
                    {{ Form::open(['method'=>'post','route'=>'products.store','files' => true]) }}
                        <div class="form-group">
                           {{ Form::label('name','Name') }}
                            {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('author','Author') }}
                            {{ Form::text('author', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('product_code','Product Code') }}
                            {{ Form::text('product_code', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('description','Description') }}
                            {{ Form::textarea('description', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('price','Price') }}
                            {{ Form::text('price', null, ['class' => 'form-control', 'required']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('discount','Discount') }}
                            {{ Form::text('discount', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('image','Image') }}
                            {{ Form::file('image',['class' => 'form-control-file form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('category_id','Category') }}
                            {{ Form::select('category_id', $categories, null, ['class' => 'form-control','required']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('featured','Featured') }}
                            {{ Form::select('featured', ['no' => 'No','yes' => 'Yes'], null, ['class' => 'form-control','required']) }}
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                 {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
