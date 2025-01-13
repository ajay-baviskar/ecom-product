@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('messages.edit_product') }}</h1>

    <form action="{{ route('products.update', $product['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">{{ __('messages.product_name') }}</label>
        <input type="text" id="name" name="name" value="{{ $product['name'] }}" required>

        <label for="price">{{ __('messages.product_price') }}</label>
        <input type="number" id="price" name="price" value="{{ $product['price'] }}" required>

        <label for="description">{{ __('messages.product_description') }}</label>
        <textarea id="description" name="description">{{ $product['description'] }}</textarea>

        <input type="submit" value="{{ __('messages.update_product') }}">
    </form>
</div>
@endsection
