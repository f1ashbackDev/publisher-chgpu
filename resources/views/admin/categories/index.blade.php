@extends('layouts.admin')
@section('content')
    <a class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#createCategories">
        <span class="text">Создать категорию</span>
    </a>

    {{--  Notify  --}}
    @if(count($errors) > 0)
        <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
            @foreach($errors->all() as $error)
                <strong>{{ $error }}</strong>
            @endforeach

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Категории</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Название</th>
                        <th>Действие</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Название</th>
                        <th>Действие</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($categories as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>
                                <a href="{{ route('admin.categories.edit', $item) }}">Обновить</a>
                                <a href="{{ route('admin.categories.destroy', $item) }}">Удалить</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

{{--    create modal --}}
    <div class="modal fade" id="createCategories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Создание нового каталога</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('admin.categories.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Название</label>
                            <input type="text" class="form-control" id="inputName" name="name">
                            <button type="submit" class="btn btn-primary mt-3">Создать</button>
                            <button class="btn btn-secondary mt-3" type="button" data-dismiss="modal">Отмена</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
