<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Boolean</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>


    <header>
        <nav class="navbar">
            <div class="nav-brand">
                <h4>TEAM</h4>
            </div>

            <div class="nav-link">
                <a href="{{ route('home')}}">Home</a>

                <a class="ml-4 mr-4"href="{{ route('teams.index')}}">View all Teams</a>
                <a href="{{ route('teams.create')}}">Add a new team</a>
            </div>
        </nav>
    </header>