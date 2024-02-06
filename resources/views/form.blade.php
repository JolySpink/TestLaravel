@extends('layouts.Navbar1')
@section('NavBar1')
<form method="POST" action="{{route('upload')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="formFile" class="form-label">Загрузите файлы</label>
        <input class="form-control" type="file" id="image" name="image"
               multiple>
    </div>
    <button type="submit" class="btn btn-secondary"
    > Загрузить
    </button>
</form>

@endsection
