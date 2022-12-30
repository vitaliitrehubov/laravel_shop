@extends('layouts.master')

@section('title', 'Edit Product')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-3">Edit Product</h1>
        <div class="row">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <form action="{{ route('products.update', $product->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <fieldset>
                        <fieldset class="mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" name="title" id="title" value="{{ $product->title }}"
                                class="form-control @error('title') is-invalid @enderror" required />
                            @error('title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </fieldset>

                        <fieldset class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input type="text" id="price" name="price" value="{{ $product->price }}"
                                class="form-control @error('price') is-invalid @enderror" required />
                            @error('price')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </fieldset>

                        <fieldset class="mb-3">
                            <label for="stock" class="form-label">Stock:</label>
                            <input type="number" min="0" id="stock" name="stock" value="{{ $product->stock }}"
                                class="form-control @error('stock') is-invalid @enderror" required />
                            @error('stock')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </fieldset>

                        <fieldset class="mb-3">
                            <label for="status" class="form-label">Status:</label>
                            <select id="status" name="status" class="form-select">
                                <option value="available" {{ $product->status === 'available' ? 'selected' : '' }}">
                                    Available</option>
                                <option value="unavailable" {{ $product->status === 'unavailable' ? 'selected' : '' }}>
                                    Unavailable
                                </option>
                            </select>
                            @error('stock')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </fieldset>

                        <fieldset class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea name="description" id="description" rows="10" required
                                class="form-control @error('description') is-invalid @enderror">{{ $product->description }}</textarea>
                            @error('description')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </fieldset>

                        <fieldset class="d-grid">
                            <button type="submit" class="btn btn-outline-primary">Update</button>
                        </fieldset>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
