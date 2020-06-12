@extends('szablon')

@section('title')
     {{ $title }}
@endsection

@section('glowne_dane')
<div class="container">
    <form action=" {{ action ('dane@dodaj')}} " method="POST" role="form">
        <input type="hidden" name="_token" value=" {{ csrf_token()}} ">
        <div class="form-group">
            <label for="name"> nazwisko i imie </label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="email"> email </label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="password"> hasło </label>
            <input type="password" class="form-control" name="password">
        </div>
        <input type="submit" value="dodaj" class="btn btn-primary">
    </form>
</div>
@endsection

