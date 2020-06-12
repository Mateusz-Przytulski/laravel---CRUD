 @extends('szablon')

@section('title')
     {{ $title }}
@endsection

@section('glowne_dane')

<div class="container">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nazwisko i imię</th>
                <th scope="col">Data rejestracji</th>
                <th scope="col">Edytuj</th>
                <th scope="col">Usuń</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <th scope="row"> <a href="{{ URL::to('operacje/' . $user->id )}}"> {{ $user->name }} </a></th>
                <td>{{ $user->created_at }}</td>
                <td> <a href=" {{URL::to('operacje/edytuj/' . $user->id)}} " >Edytuj</a> </td>
                <td> <a href=" {{URL::to('operacje/usun/' . $user->id)}} " >Usuń</a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
