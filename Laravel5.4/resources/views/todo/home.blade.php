@extends('layout.apps')

@section('body')
    <br>
    @include('todo.partials.message')
    <div class="col-md-4">
        <h1 class="align-center">todo lists</h1>
        <a href="todo/create" class="btn btn-info">Add new</a>
        <ul class="list-group">
            @foreach($todos as $todo)
                <li class="list-group-item">
                    {{$todo->body}}
                    <a href="{{'/todo/'.$todo->id}}">{{$todo->title}}</a>
                    <!--use ucfirst inside to capitalize first alphabet-->
                    <span class="pull-right">{{$todo->created_at->diffForHumans()}}</span>
                    <!--display timestamp
    use carbon laravel to display diffforhumans time format
    -->
                </li>
            @endforeach
        </ul>

        <ul class="list-group">
            @foreach($todos as $todo)
                <li class="list-group-item">
                    {{$todo->body}}
                    <a href="{{'/todo/'.$todo->id.'/edit'}}"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i>
                        Edit</a>
                    <!--use ucfirst inside to capitalize first alphabet-->
                    <form class="form-horizontal form-group pull-right" action="{{'/todo/'.$todo->id}}" method="post">
                        <!--form method has to be post whichever method field laravel you are using-->
                        {{csrf_field()}}
                        {{method_field('DELETE')}}

                        <button type="submit" class="btn"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                        </button>
                    </form>

                </li>
            @endforeach
        </ul>
    </div>
@endsection