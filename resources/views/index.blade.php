@extends('_master')

@section('content')
    <div class="container mt-4">
        <div class="row">
            @foreach($categories as $category)
                <div class="col-4 mb-4">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">{{ $category->title or '' }}</h4>
                            <p class="card-text">{{ $category->description or '' }}</p>
                            <a href="#" class="card-link btn btn-warning">Edit</a>
                            <a href="{{ route('web.category-details.get', [$category->id]) }}" class="card-link btn btn-primary">View tasks</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Created at: {{ $category->created_at }}</small>
                            <br>
                            <small class="text-muted">Updated at: {{ $category->created_at }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection