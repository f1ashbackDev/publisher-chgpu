@extends('.layouts.admin')
@section('container')
    <form action="{{ route('admin.store') }}" method="post">
        @csrf
        <input placeholder="Name" name="name"/>
        <input type="number" name="total_count">
        <input type="submit" value="Создать">
    </form>
@endsection
