@extends('layouts.index')
@section('content')
    <section class="container  mt-3">
        <form action="" method="post">
            @csrf
            <div class="row-form">
                <label>Тип бумаги</label>
                <input class="form-control" name="surname">
            </div>
            <div class="row-form">
                <label>Размер бумаги</label>
                <input class="form-control" name="name">
            </div>
            <div class="row-form">
                <label>Тип печати</label>
                <input class="form-control" name="name">
            </div>
            <div class="row-form">
                <label>Вид документа</label>
                <input class="form-control" name="name">
            </div>
            <div class="row-form">
                <label>Количество</label>
                <input class="form-control" name="last_name">
            </div>
            <input type="submit" value="Рассчитать" class="btn btn-danger">
        </form>
    </section>
@endsection
