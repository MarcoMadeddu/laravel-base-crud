@extends('layouts.main')
@section('main-content')
    <section class="teams">
        <h1 class="text-primary">Teams List</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td>{{ $team->name }}</td>
                        <td><a class="btn btn-success"href="{{ route ('teams.show' , $team->id) }}">SHOW</a></td>
                        <td>UPDATE</td>
                        <td>DELETE</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection