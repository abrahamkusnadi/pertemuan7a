@extends('layout.master')

@section('title', 'Create New Book')

@section('content')
<h2>Add New Book</h2>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Title</label>
        <input type="text" name="title" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Price</label>
        <input type="text" name="price" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Categories <br> </label>
        @foreach ($categories as $c)
        <input  type="checkbox"
                name="categories[]"
                value="{{ $c->id }}">
        {{ $c->name }} <br>
        @endforeach
    </div>

    <button class="btn btn-primary">Submit</button>
</form>
@endsection