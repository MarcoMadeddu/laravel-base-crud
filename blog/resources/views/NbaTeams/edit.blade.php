@extends('layouts.main')
@section('main-content')
   <h1 class="mb-4">Edit</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

   <form action="{{route('teams.update' , $team->id)}}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
        <label for="name">Name</label>
            <input type="text" class="form-control"
                name="name" placeholder="Team Name" value="{{ $team->name }}">
        </div>

        <div class="form-group">
        <label for="city">Città:</label>
            <input type="text" class="form-control"
                name="city" placeholder="Team City" value="{{ $team->city }}">
        </div>

        <div class="form-group">
        <label for="titles">Titoli:</label>
            <input type="text" class="form-control"
                name="titles" placeholder="Team Titles" value="{{ $team->titles }}">
        </div>

        <div class="form-group">
        <label for="description">Descrizione:</label>
            <input type="text" class="form-control"
                name="description" placeholder="Team Description" value="{{ $team->description }}">
        </div>

        <input class="btn btn-primary" type="submit" value="Update">
   </form>
@endsection