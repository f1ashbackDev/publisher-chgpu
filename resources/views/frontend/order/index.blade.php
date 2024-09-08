@extends('layouts.index')
@section('content')
    <section class="container mt-3">
        <h3>Оформление заказа</h3>
        <div class="d-flex flex-row">
            <div class="w-50 me-3 mt-3">
                @if(\Illuminate\Support\Facades\Auth::user())
                    <form>
                        <div class="row-form">
                            <label>Фамилия</label>
                            <input class="form-control" name="surname" value="{{ \Illuminate\Support\Facades\Auth::user()->first_name }}">
                        </div>
                        <div class="row-form">
                            <label>Имя</label>
                            <input class="form-control" name="name" value="{{ \Illuminate\Support\Facades\Auth::user()->name }}">
                        </div>
                        <div class="row-form">
                            <label>Отчество</label>
                            <input class="form-control" name="last_name" value="{{ \Illuminate\Support\Facades\Auth::user()->last_name }}">
                        </div>
                        <div class="row-form">
                            <label>Номер телефона</label>
                            <input class="form-control" name="phone" value="{{ \Illuminate\Support\Facades\Auth::user()->number_phone }}">
                        </div>
                        <div class="row-form">
                            <label>Почта</label>
                            <input class="form-control" name="email" value="{{ \Illuminate\Support\Facades\Auth::user()->email }}">
                        </div>
                        <div class="row-form">
                            <label>Комментарий к заказу</label>
                            <input class="form-control" name="surname">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Вложить материал</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <input type="submit" value="Оформить заказ" class="btn btn-danger">
                    </form>
                @endif
            </div>
            <div>
                <h4>Товар\Услуга</h4>
                @foreach($cart as $item)
                    @foreach($item->product as $product)
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('/storage/' . $item->images[0]->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <a href="{{ route('home') }}" class="btn btn-primary">Просмотреть</a>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
@endsection
