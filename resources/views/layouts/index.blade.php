<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ isset($title) ? "$title | My Tour Bali" : "My Tour Bali" }}</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="/icofont/icofont.min.css">
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
  />
</head>
<body class="font-poppins">
  
  @yield('container')

  @vite('resources/js/index.min.js')
  

  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="/js/script.js"></script>
</body>
</html>