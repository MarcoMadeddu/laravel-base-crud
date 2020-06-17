@extends('layouts.main')
@section('main-content')
<section class="teams">
        <h1 class="text-primary">{{$teams->name}}</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Città</th>
                    <th>Titoli</th>
                    <th>Descrizione</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $teams->id }}</td>
                        <td>{{ $teams->name }}</td>
                        <td>{{ $teams->city }}</td>
                        <td>{{ $teams->titles }}</td>
                        <td>{{ $teams->description }}</td>
                    </tr>
            </tbody>
        </table>
    </section>
@endsection