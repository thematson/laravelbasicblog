
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
  </head>

  <body>

    @include ('layouts.nav')

    <div class="container">
      <div class="row">
        @yield ('content')

        <div class="col-sm-3 offset-sm-1 blog-sidebar">
          @include('layouts.about')
          @include('layouts.archives')
          @include('layouts.elsewhere')


        </div><!-- /.blog-sidebar -->

      </div>

    </div>

    @include ('layouts.footer')
  </body>
</html>
