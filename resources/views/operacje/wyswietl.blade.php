@extends('szablon')

@section('title')
     {{ $title }}
@endsection

@section('glowne_dane')
<div class="container">
    <div class="card">
        <div class="card-header">
            {{ $users->name }}
        </div>
        <div class="card-body">
            <p class="card-title">Nazwisko i imię: {{ $users->name }}</p>
            <p class="card-text">Email: {{ $users->email }}</p>
            <p class="card-text">Data rejestracji: {{ $users->created_at }}</p>
        </div>
    </div>
</div>
@endsection

