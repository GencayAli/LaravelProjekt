<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wrapper- /Child-Laravel</title>
</head>
<body>
    <nav>
        <a href="/start">Start</a> |
        <a href="/register">Registierung</a> |
        <a href="/login">Login</a> |
        <a href="/logout">Logout</a>
    </nav>
    
    
    <h1>Laravel</h1>
    <div class="container">
        @yield('content')
    </div>
   
</body>
</html>