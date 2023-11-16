<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  {{-- favicon --}}
  <link rel="icon" type="image/x-icon" href="/favicon.ico">

  {{-- search console google --}}
  <meta name="google-site-verification" content="2i3lsorc6dzkXgMecou7VghzDgUdWPZt7pYv8WV_GL4" />
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-QP8LRLDLPE"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-QP8LRLDLPE');
  </script>

  {{-- SEO --}}
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {!! SEO::generate() !!}
  
  {{-- app css --}}
  @vite('resources/css/app.css')
  
  {{-- icofont --}}
  <link rel="stylesheet" href="/icofont/icofont.min.css">
  
  {{-- swiper --}}
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

  <script src="/js/script.js"></script>
</body>
</html>