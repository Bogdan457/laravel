


@extends("layouts.app")

@section('title-block')
     Страница редактирования
@endsection

@section('content')
     <h1>Страница редактирования</h1>
        <form action="{{ route('allstories.show', $stories->id) }}" method="POST">
          @csrf
          <input type="hidden" name="_method" value="PATCH">
          <div class="form-group">
            <label for="title">Введите название</label>
            <input value="{{ $stories->title }}" type="text" name="title" placeholder="Введите название" id="title" class="form-control">
          </div>

          <div class="form-group">
            <label for="description">Введите описание</label>
            <textarea name="description" id="description" class="form-control" placeholder="Описание">{{ $stories->description }}</textarea>
          </div>
          <button type="submit" class="btn btn-success">Обновит</button>
        </form>
@endsection
