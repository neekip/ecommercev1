@extends('layouts.back')

@section('content')
    <div class="row">
        <div class="col-12 bg-white">
            <div class="row">
                <div class="col">
                    <h1>Categories</h1>
                </div>
                <div class="col-auto">
                    <a class="btn btn-primary mt-2" href="{{ route('categories.create') }}">Add Category</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if(!$categories->isEmpty())
                        <table class="table table-striped table-hover table-sm">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>{{ $category->created_at }}</td>
                                        <td>{{ $category->updated_at }}</td>
                                        <td>
                                            {{ Form::open(['method' => 'delete', 'route' =>['categories.destroy', $category->slug]]) }}
                                            <a href="{{ route('categories.edit', $category->slug) }}" class="btn btn-sm"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-sm delete" type="submit"><i class="fas fa-trash"></i></button>
                    {{ Form::close() }}                                          </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                            <h4 class="text-center">No Category added.</h4>

                    @endif

                </div>
                <div class="col-12">
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
