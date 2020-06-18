@extends('layouts.main')
@section('main-content')
    @if(session('deleted'))
        <div class="alert alert-success">
           Team: {{ session('deleted') }} deleted success
        </div>
    @endif
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
                        <td><a class="btn btn-primary"href="{{ route ('teams.edit' , $team->id) }}">UPDATE</a></td>
                        <td>
                            <form action="{{ route('teams.destroy' , $team->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input class="btn btn-danger"type="submit" value="DELETE">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection