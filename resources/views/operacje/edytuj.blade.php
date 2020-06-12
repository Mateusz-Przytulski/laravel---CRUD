@extends('szablon')

@section('title')
     {{ $title }}
@endsection

@section('glowne_dane')
<div class="container">
    <form action=" {{ action ('dane@edytujUzytkownika')}} " method="POST" role="form">
        <input type="hidden" name="_token" value=" {{ csrf_token()}} ">
        <input type="hidden" name="id" value=" {{ $user->id }} ">
        <div class="form-group">
            <label for="name"> nazwisko i imie </label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="email"> email </label>
            <input type="text" class="form-control" name="email" value="{{$user->email}}">
        </div>
        <input type="submit" value="dodaj" class="btn btn-primary">
    </form>
</div>
@endsection

