@extends('.layouts.admin')
@section('container')
    <p>{{ $depart }}</p>
    <form action="{{ route('admin.departs.update', $depart) }}" method="post">
        @csrf
        <input type="text" placeholder="{{ $depart->name }}" name="name" value="{{ $depart->name }}">
        <input type="number" placeholder="{{ $depart->total_count }}" name="total_count" value="{{ $depart->total_count }}">
        <input type="submit" value="Изменить">
    </form>
@endsection
