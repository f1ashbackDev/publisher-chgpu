@extends('layouts.admin')
@section('content')
    <a class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#createProduct">
        <span class="text">Создать товар</span>
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
            <h6 class="m-0 font-weight-bold text-primary">Товары</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Цена</th>
                        <th>Тип бумаги</th>
                        <th>Размеры</th>
                        <th>Тип печати</th>
                        <th>Брошюровка</th>
                        <th>Ламинация</th>
                        <th>Категория</th>
                        <th>Действие</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Цена</th>
                        <th>Тип бумаги</th>
                        <th>Размеры</th>
                        <th>Тип печати</th>
                        <th>Брошюровка</th>
                        <th>Ламинация</th>
                        <th>Категория</th>
                        <th>Действие</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($products as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->sizes }}</td>
                            <td>{{ $item->print_type }}</td>
                            <td>{{ $item->stitching }}</td>
                            <td>{{ $item->laminating }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>
                                <a>Просмотреть</a>
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
    <div class="modal fade" id="createProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <form method="post" enctype="multipart/form-data" action="{{ route('admin.products.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Название</label>
                            <input type="text" class="form-control" id="inputName" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Описание</label>
                            <input type="text" class="form-control" id="inputName" name="description">
                        </div>
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Цена</label>
                            <input type="text" class="form-control" id="inputName" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Тип бумаги</label>
                            <input type="text" class="form-control" id="inputName" name="type">
                        </div>
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Размеры бумаги</label>
                            <input type="text" class="form-control" id="inputName" name="sizes">
                        </div>
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Тип печати</label>
                            <input type="text" class="form-control" id="inputName" name="print_type">
                        </div>
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Брошюровка</label>
                            <input type="text" class="form-control" id="inputName" name="stitching">
                        </div>
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Ламинация</label>
                            <input type="text" class="form-control" id="inputName" name="laminating">
                        </div>
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Категория</label>
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Фотографии</label>
                            <input class="form-control" type="file" id="formFileMultiple" name="image[]" multiple>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Отмена</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
