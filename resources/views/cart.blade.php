@extends('layouts.default')
@section('title', 'Ecom - Cart')
@section('content')

<main class="container">
    <section>
        <h2 class="my-4">Your Cart</h2>

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if($cartItems->isEmpty())
            <p class="text-center">Your cart is empty.</p>
        @else
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItems as $item)
                            <tr>
                                <td>
                                    <img src="{{ $item->product->image }}" alt="{{ $item->product->title }}"
                                        style="height: 50px; width: 50px;">
                                    {{ $item->product->title }}
                                </td>
                                <td>&#8377; {{ $item->product->price }}</td>
                                <td>
                                    <form method="POST" action="{{ route('cart.update', $item->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <input type="number" name="quantity" value="{{ $item->quantity }}" min="1"
                                            class="form-control" style="width: 80px;">
                                        <button type="submit" class="btn btn-primary btn-sm mt-2">Update</button>
                                    </form>
                                </td>
                                <td>&#8377; {{ $item->product->price * $item->quantity }}</td>
                                <td>
                                    <form method="POST" action="{{ route('cart.remove', $item->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        <div class="mt-4">
            <a href="{{ route('products') }}" class="btn btn-secondary">Continue Shopping</a>
            <!-- You can add a checkout button here if needed -->
        </div>
    </section>
</main>

@endsection