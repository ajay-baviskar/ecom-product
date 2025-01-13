@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('messages.product_list') }}</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">{{ __('messages.create_product') }}</a>

    @if (count($products) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ __('messages.product_name') }}</th>
                <th>{{ __('messages.product_price') }}</th>
                <th>{{ __('messages.product_description') }}</th>
                <th>{{ __('messages.actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $index => $product)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $product['name'] ?? 'N/A' }}</td>
                <td>₹{{ $product['price'] ?? 'N/A' }}</td>
                <td>{{ $product['description'] ?? __('messages.no_description') }}</td>
                <td>
                    <a href="{{ route('products.edit', $product['id'] ?? 0) }}" class="btn btn-warning">
                        {{ __('messages.edit_product') }}
                    </a>
                    <form action="{{ route('products.destroy', $product['id'] ?? 0) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">{{ __('messages.delete_product') }}</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>{{ __('messages.no_products_found') }}</p>
    @endif
</div>
@endsection
