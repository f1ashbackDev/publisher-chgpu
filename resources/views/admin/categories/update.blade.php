@extends('.layouts.admin')
@section('container')
    <p>{{ $category }}</p>
    <form action="{{ route('admin.categories.update', $category) }}" enctype="multipart/form-data" method="post">
        @csrf
        <input type="text" placeholder="{{ $category->name }}" name="name" value="{{ $category->name }}">
        <input type="file" name="image">
        <input type="submit" value="Изменить">
    </form>
@endsection
