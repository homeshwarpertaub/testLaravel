@extends('layout.apps')

@section('body')

    <br>
    <div class="col-md-4">
        <a href="/todo" class="btn btn-info">Back</a>
        <h1>{{substr(Route::currentRouteName(),5)}} item for todo list</h1>
        <form class="form-horizontal" action="/todo/@yield('editId')" method="post">
            {{csrf_field()}}
            @section('editMethod')
            @show
            <fieldset>
                <legend></legend>
                <div class="form-group">
                    <div class="col-md-4">
                        <input type="text" name="title" class="form-control" value="@yield('editTitle')"
                               placeholder="Title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Email"
                               value="@yield('editBody')" name="body">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
        @include('todo.partials.errors')
    </div>
    </div>
@endsection