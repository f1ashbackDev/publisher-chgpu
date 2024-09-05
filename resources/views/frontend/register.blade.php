@extends('layouts.index')
@section('content')
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="col-login">
                <h2>Регистрация</h2>
                @if(count($errors) > 0)
                    <div class="errors" style="margin-top: 20px">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('user.register') }}" method="post">
                    @csrf
                    <div class="row-form">
                        <label>
                            Фамилия
                            <span class="required">*</span>
                        </label>
                        <input type="text" name="firstname"/>
                    </div>
                    <div class="row-form">
                        <label>
                            Имя
                            <span class="required">*</span>
                        </label>
                        <input type="text" name="name"/>
                    </div>
                    <div class="row-form">
                        <label>
                            Отчество
                            <span class="required">*</span>
                        </label>
                        <input type="text" name="lastname"/>
                    </div>
                    <div class="row-form">
                        <label>
                            Почта
                            <span class="required">*</span>
                        </label>
                        <input type="email" name="email"/>
                    </div>
                    <div class="row-form">
                        <label>
                            Пароль
                            <span class="required">*</span>
                        </label>
                        <input type="text" name="password">
                    </div>
                    <div class="row-form">
                        <label>
                            Повторите пароль
                            <span class="required">*</span>
                        </label>
                        <input type="text">
                    </div>
                    <div class="row-form">
                        <label>
                            Номер телефона
                            <span class="required">*</span>
                        </label>
                        <input type="text" name="number_phone"/>
                    </div>
                    <div class="row-form">
                        <label>Выберите отдел</label>
                        <select class="form-control" name="depart_id">
                            @foreach($departs as $depart)
                                <option value="{{ $depart->id }}">{{ $depart->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="submit" value="Зарегистрироваться" class="form-button">
                </form>
            </div>
            <div class="col-register-text">
                <h2>Авторизация</h2>
                <p>Товарищи! консультация с широким активом в значительной степени обуславливает создание системы обучения кадров, соответствует насущным потребностям. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач.</p>
                <a class="form-button text-decoration-none" href="{{ route('user.loginPage') }}">Вход</a>
            </div>
        </div>
    </div>
@endsection
