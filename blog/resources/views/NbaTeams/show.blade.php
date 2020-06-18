@extends('layouts.main')
@section('main-content')
<section class="teams">
        <h1 class="text-primary">Nome squadra: {{$team->name}}</h1>

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
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->city }}</td>
                        <td>{{ $team->titles }}</td>
                        <td>{{ $team->description }}</td>
                    </tr>
            </tbody>
        </table>
    </section>
@endsection