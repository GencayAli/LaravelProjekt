<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master- /Child-Templates</title>
</head>
<body>
    <h1>Dies kommt aus dem Master-Template</h1>
    <div class="container">
        @yield('content')
    </div>
   @section('sidebar')
   <h2>Die zentralle Sidebar aus dem Master</h2>
   @show
</body>
</html>




