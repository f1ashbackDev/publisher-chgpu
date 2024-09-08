@extends('layouts.index')
@section('content')
    <section class="container">
        <h3>Корзина</h3>
        <p>{{ $basket_price }}</p>
        @foreach($cart as $item)
            @foreach($item->product as $product)
                <div>
                    <img src="{{ asset('/storage/' . $item->images[0]->image) }}" class="w-25 h-25">
                    <p>название {{ $product->name }}</p>
                </div>
            @endforeach
        @endforeach
    </section>
@endsection
