

@extends("layouts.app")

@section('title-block')
     {{ $stories->title }}
@endsection

@section('content')
<h1>{{ $stories->title }}</h1>
   <div class="alert alert-info">
      <p>{{ $stories->description }}</p>
      <p><small>{{ $stories->created_at }}</small></p>
      <p>{{ $stories->user->name }}</p>
      <a href="{{ route('allstories.edit', $stories->id) }}"><button class="btn btn-primary">Редактировать</button></a>
      <form action="{{ route('allstories.destroy', $stories->id ) }}" method="POST">
    @csrf
    @method('DELETE')
      <button class="btn btn-danger">Удалить</button>
</form>
   </div>

@endsection
