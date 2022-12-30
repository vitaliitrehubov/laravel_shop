@extends('layouts.master')

@section('content')
  <div class="container py-5">
    <h1 class="text-center mb-3">Shopping</h1>
    @unless($products->count() === 0)
      @foreach($products as $product)
        <article class="border p-3 mb-3">
          <h4>{{ $product->title }}</h4>
          <p class="lead">{{ $product->description }}</p>
          <div class="d-flex gap-2">
            <a href="{{ route('products.show', $product->id) }}" class="btn btn-link">Show</a>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </div>
        </article>
      @endforeach
    @else
     <h2>No products available</h2>
     @endunless
  </div>
@endsection