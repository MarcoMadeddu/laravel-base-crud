
@extends('layouts.main')
@section('main-content')
    <section class="teams">
        <h1 class="text-primary">Teams List</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Nome</th>
                    <th>Città</th>
                    <th>Titoli</th>
                    <th>Descrizione</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->city }}</td>
                        <td>{{ $team->titles }}</td>
                        <td>{{ $team->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection