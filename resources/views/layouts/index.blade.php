<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PBS9RMDF');</script>
  <!-- End Google Tag Manager -->
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

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16747585783"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16747585783');
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

  @if (!Route::is('package.show'))
    <a
       href="{{ config('app.whatsapp') }}?text=I'm%20interested%20in%20the%20services%20offered%20on%20your%20website.%20Could%20I%20get%20more%20details?"
        class="inline-block p-3 bg-[#25d366] text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-[#128c7e] hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5 fixed z-50"
        id="WhatsApp"
    >
        <i class="icofont-brand-whatsapp icofont-2x"></i>
    </a>
  @endif


  <script src="/js/script.js"></script>
</body>
</html>