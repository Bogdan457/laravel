


@extends("layouts.app")

@section('title-block')
     Все записи
@endsection

@section('content')
     <h1>Все записи</h1>
      <a href="{{ url('allstories/create') }}"><button class="btn btn-warning">Создать запись</button></a>

        <table class="table table-hover table-striped">
                       <thead>
                           <th>ID</th>
                           <th>title</th>
                           <th>created_at</th>
                           <th>user_id</th>
                       </thead>
                       <tbody>
                          @foreach($stories as $el)
                           <tr>

                               <td>{{ $el->id }}</td>
                               <td><a href="{{ route('allstories.show', $el->id) }}">{{ $el->title }}</a></td>
                               <td>{{ $el->created_at }}</td>
                               <td>{{ $el->user->name }}</td>
                           </tr>
                          @endforeach

                       </tbody>
                   </table>
@endsection
