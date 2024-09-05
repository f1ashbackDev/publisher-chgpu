@extends('.layouts.admin')
@section('container')
    @if(count($errors) > 0)
        <div class="errors" style="margin-top: 20px">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.categories.store') }}" enctype="multipart/form-data" method="post">
        @csrf
        <input type="text" name="name">
        <input type="file" name="image">
        <input type="submit">
    </form>
@endsection
