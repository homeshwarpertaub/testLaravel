@if(count($errors)>0)
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach
@endif
<!--can include this file anywhere you want-->