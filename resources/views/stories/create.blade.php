


@extends("layouts.app")

@section('title-block')
     Добавить новую запись
@endsection

@section('content')
     <h1>Добавить новую запись</h1>

     @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>

     @endif

        <form action="{{ route('allstories.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="title">Введите название</label>
            <input value="{{ request()->input('title', old('title')) }}" type="text" name="title" placeholder="Введите название" id="title" class="form-control">
          </div>

          <div class="form-group">
            <label for="description">Введите описание</label>
            <textarea name="description" id="description" class="form-control" placeholder="Описание">{{ request()->input('description', old('description')) }}</textarea>
          </div>
          <div class="form-group">
            <label for="user_id">user_id</label>
            <input value="{{ request()->input('user_id', old('user_id')) }}" type="text" name="user_id" placeholder="Введите название" id="user_id" class="form-control">
          </div>
          <button type="submit" class="btn btn-success">Добавить новую запись</button>
        </form>
@endsection
