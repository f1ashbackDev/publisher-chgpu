@extends('.layouts.admin')
@section('container')
    <p>{{ $categories }}</p>
    <form method="post" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="">
        <input type="text" name="description" id="">
        <input type="number" name="price">
        <input type="text" name="type" id="">
        <input type="text" name="sizes">
        <input type="text" name="print_type">
        <input type="text" name="stitching" id="">
        <input type="text" name="laminating" id="">
        <input type="number" name="category_id">
        <input type="file" name="image[]" id="photoFile" multiple>
        <input type="submit" value="Создать">
    </form>
@endsection
