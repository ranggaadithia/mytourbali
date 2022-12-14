<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Tour Bali</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="icofont/icofont.min.css">
  <link rel="stylesheet" href="assets/slick/slick.css">
  <link rel="stylesheet" href="assets/slick/slick-theme.css">
</head>
<body class="font-poppins">
  @yield('container')

  @vite('resources/js/index.min.js')
  <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js" integrity="sha256-mBCu5+bVfYzOqpYyK4jm30ZxAZRomuErKEFJFIyrwvM=" crossorigin="anonymous"></script>
  <script src="assets/slick/slick.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>