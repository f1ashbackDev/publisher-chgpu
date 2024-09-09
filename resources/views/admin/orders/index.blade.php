@extends('layouts.admin')
@section('content')
    <div class="card shadow mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Заказы</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Номер заказа</th>
                        <th>Цена</th>
                        <th>Действие</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Номер заказа</th>
                        <th>Цена</th>
                        <th>Действие</th>
                    </tr>
                    </tfoot>
                    <tbody>
{{--                    @foreach($services as $item)--}}
{{--                        <tr>--}}
{{--                            <td>{{ $item->name }}</td>--}}
{{--                            <td>{{ $item->price }}</td>--}}
{{--                            <td>--}}
{{--                                <a href="{{ route('admin.categories.edit', $item) }}">Обновить</a>--}}
{{--                                <a href="{{ route('admin.categories.destroy', $item) }}">Удалить</a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
