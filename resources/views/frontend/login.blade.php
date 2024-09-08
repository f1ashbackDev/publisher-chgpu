@extends('layouts.index')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-login">
                    <h2>Вход</h2>
                    <form action="{{ route('user.login') }}" method="post">
                        @csrf
                        <div class="row-form">
                            <label>
                                Email
                                <span class="required">*</span>
                            </label>
                            <input type="text" name="email"/>
                        </div>
                        <div class="row-form">
                            <label>
                                Пароль
                                <span class="required">*</span>
                            </label>
                            <input type="text" name="password">
                        </div>
                        <input type="submit" value="Войти" class="form-button">
                        <div class="form-footer">
                            <a>Забыли пароль?</a>
                        </div>
                    </form>
                </div>
                <div class="col-register-text">
                    <h2>Регистрация</h2>
                    <p>Товарищи! консультация с широким активом в значительной степени обуславливает создание системы обучения кадров, соответствует насущным потребностям. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач.</p>
                    <a class="login-links" href="{{ route('user.registerPage') }}">Регистрация</a>
                </div>
            </div>
        </div>
@endsection
