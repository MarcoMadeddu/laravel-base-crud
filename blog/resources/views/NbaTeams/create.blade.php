@extends('layouts.main')
@section('main-content')
   <h1 class="mb-4">Create a new Team</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

   <form action="{{route('teams.store')}}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
            <input type="text" class="form-control"
                name="name" placeholder="Team Name" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control"
                name="city" placeholder="Team City" value="{{ old('city') }}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control"
                name="titles" placeholder="Team Titles" value="{{ old('titles') }}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control"
                name="description" placeholder="Team Description" value="{{ old('description') }}">
        </div>

        <input class="btn btn-primary" type="submit" value="Create">
   </form>
@endsection