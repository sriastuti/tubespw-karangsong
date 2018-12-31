<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <title>Tiket - CRUD</title>
    <style>
        .martop-sm {margin-top: 15px;}
        .martop-lg {margin-top: 70px;}
    </style>
</head>
<body>
    <center><h3><b>Selamat Datang Admin</b></h3></center>

<nav class="navbar navbar-default" style="background-color: black">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
  </div>
</nav>
    <div class="container martop-lg">
        <div class="panel panel-default">
            <div class="panel-body">@yield('content')</div>
        </div>
    </div>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>