@extends('layouts.index')
@section('content')
    <main class="m-3">
        <div class="container text-center">
            <div class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/banner-maslenicza.webp" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
            <h2 class="text-center m-3">Каталог услуг</h2>
            <div class="row mb-4">
                @foreach($products as $product)
                    <div class="col">
                        <div class="card text-start">
{{--                            Костыль --}}
                            @foreach($product->images as $image)
                                <img src="{{ asset('/storage/' . $image->image) }}" class="card-img-top" alt="{{ $product->name }}" width="250px" height="250px">
                            @endforeach
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">Цена: {{ $product->price }} рублей</p>
                                <a href="#" class="btn btn-red">Купить</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="" class="text-dark text-decoration-none">Просмотреть все товары</a>
        </div>
    </main>
@endsection
