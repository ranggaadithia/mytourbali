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
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body class="font-poppins">
  @yield('container')

  <a
    href="{{ config('app.whatsapp') }}"
    class="inline-block p-3 bg-[#25d366] text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-[#128c7e]hover:shadow-lg  focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5 fixed z-50"
    id="WhatsApp"
  ><i class="icofont-brand-whatsapp icofont-2x"></i></a>

  @vite('resources/js/index.min.js')
  <script src="/js/script.js"></script>
</body>
</html>