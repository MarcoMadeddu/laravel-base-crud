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

   <form action="{{route('NbaTeam.store')}}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
            <input type="text" class="form-control"
                name="name" placeholder="Team Name">
        </div>

        <div class="form-group">
            <input type="text" class="form-control"
                name="city" placeholder="Team City">
        </div>

        <div class="form-group">
            <input type="text" class="form-control"
                name="titles" placeholder="Team Titles">
        </div>

        <div class="form-group">
            <input type="text" class="form-control"
                name="description" placeholder="Team Description">
        </div>

        <input class="btn btn-primary" type="submit" value="Create">
   </form>
@endsection