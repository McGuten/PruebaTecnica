<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <link rel="icon" href="{{{ asset('img/favicon.png') }}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.bootcss.com/chosen/1.7.0/chosen.min.css" />
    <script src="https://cdn.bootcss.com/chosen/1.7.0/chosen.jquery.min.js"></script>
    <title>Shopception</title>
    <script type="text/javascript">
      jQuery(document).ready(function(){
        $("#chosen").chosen();
      });
    </script>
  <style type="text/css" media="screen">
      body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }
  main {
    flex: 1 0 auto;
  }
  </style>
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <a class="navbar-brand" href="/pruebaTecnica">Prueba Tecnica</a>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/pruebaTecnica">Provincias <span class="sr-only">(current)</span></a>
        </li>
        <li>
          <a class="nav-link" href="/pruebaTecnica/28">Ciudades <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>

@yield('container')
</body>

</html>
