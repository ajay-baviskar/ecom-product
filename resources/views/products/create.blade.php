@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('messages.create_product') }}</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">{{ __('messages.product_name') }}</label>
        <input type="text" id="name" name="name" placeholder="{{ __('messages.enter_name') }}" required>

        <label for="price">{{ __('messages.product_price') }}</label>
        <input type="number" id="price" name="price" placeholder="{{ __('messages.enter_price') }}" required>

        <label for="description">{{ __('messages.product_description') }}</label>
        <textarea id="description" name="description" placeholder="{{ __('messages.enter_description') }}"></textarea>

        <input type="submit" value="{{ __('messages.submit') }}">
    </form>
</div>
@endsection
