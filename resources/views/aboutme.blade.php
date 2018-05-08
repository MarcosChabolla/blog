<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <title>Alpha Blog - Bootstrap Theme</title>

</head>
<body>
<div class="links">
<div class="header">
  <div class="content">
    <div class="title m-b-md">
        <a href="{{ url('/') }}">Development Hill</a>
    </div>

    <div class="links">
        <a href="{{ url('/resume') }}">Resume</a>
        <a href="{{ url('/aboutme') }}">About Me</a>
        <a href="https://github.com/MarcosChabolla">GitHub</a>
    </div>
  </div>
</div>
</div>

<div class="container">
  <div class="row row-centered">
  <div class="col-sm-7 mx-auto">
        <div class="card">
          <h1>
              Welcome to My Blog!
          </h1>
          <p>My name is Marcos, I'm currently living in Irvine, California. I'm looking for work doing PHP/LAMP/Web Development. This is my blog where I'm going to be posting anything related to programming or computer science. I'm a big fan of art, painting, tattoos, sculptures, and music. Follow my instagram for a closer look at the eventful moments of my life @chabillions
            

          </p>
        </div>
    </div> 
</div>

</body>
</html>