


@extends("layouts.app")

@section('title-block')
     Админка
@endsection

@section('content')
@auth
     @if(Auth::user()->isAdmin())
     <h1>Админка</h1>

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
                               <td><a href="{{ url('stories-one', $el->id) }}">{{ $el->title }}</a></td>
                               <td>{{ $el->created_at }}</td>
                               <td>{{ $el->user->name }}</td>
                           </tr>
                          @endforeach

                       </tbody>
                   </table>
     @endif
@endauth



@endsection
