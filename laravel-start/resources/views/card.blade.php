<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cards mit Komponenten </title>
</head>
<body>
    <h1>Komponenten klassisch</h1>
    <div class="card">
        <div class="card-header">
            <h2>Gerüst</h2>
        </div>
        <div class="card-bady">
            <h5 class="card-title">{{$title}}</h5>
            <p class="card-text">{{$slot}}</p>
        </div>
        <div class="card-footer">
            <p>{{ $footer }}</p>
        </div>

    </div>
</body>
</html>