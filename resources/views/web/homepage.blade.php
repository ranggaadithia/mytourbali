@extends('layouts.index')

@section('container')
  
  {{-- jumbotron --}}
    <div class="bg-[url('../../public/img/cliff.jpg')] min-w-screen h-screen bg-cover bg-no-repeat bg-fixed bg-center relative flex items-center justify-center flex-col after:content-[''] after:block after:w-full after:h-screen after:absolute after:top-0 after:bg-gradient-to-b after:from-black/30 -z-10">
      <div class="container mx-auto z-10 text-center">
        <h1 class="text-5xl text-white leading-relaxed font-title mb-1">Enjoy your Holiday in Bali Island</h1>
        <div class="line-pattern"></div>
      </div>
    </div>


  {{-- about --}}
  <section class="about" id="about">
    <div class="container mx-auto px-4 lg:px-20 py-20">
      <h1  class="text-center font-title text-3xl mb-3 mb:text-6xl">My Tour Bali</h1>
      <div class="line-pattern"></div>
      <div class="flex justify-evenly lg:items-center">
        <div class="w-full md:w-1/2 md:pr-5 lg:pr-20">
          <h3 class="mt-5 text-2xl font-subtitle font-bold lg:text-3xl">Forget Busy Work,<br/> and Enjoy your Holiday</h3>
          <p class="mt-3 mb-6 mb:mb-5 font-poppins text-gray-600 lg:text-base leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem consequatur autem nam. Nesciunt dolores, nihil sunt voluptatum nemo non repudiandae, eum facere, blanditiis quidem voluptates iure laboriosam autem ducimus? Illo, cum fugit. Iusto explicabo veritatis officiis voluptatem soluta perferendis ducimus nesciunt, aliquid vero consectetur quae!</p>
          <a href="" class="button">Contact Us</a>
        </div>
        <div class="hidden md:w-1/2 md:flex md:items-center md:p-3 lg:p-6">
          <figure>
            <img src="img/pantai.jpg" alt="" class="rounded-xl shadow-lg">
            <figcaption class="text-sm text-gray-500">*klingking beach</figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section>


  {{-- services --}}
  <section class="services" id="services">
    <div class="py-20 w-full bg-gray-200 px-10 md:px-2 lg:px-20">
      <div class="container mx-auto">
        <h1 class="title">Services</h1>
        <div class="flex flex-col gap-6 md:flex-row justify-center">
          <a href="">
            <div class="w-full flex flex-col items-center hover:scale-105 transition duration-200 hover:ease-in-out">
              <div class="bg-slate-50 p-7 rounded-lg shadow-xl flex flex-col items-center">
                <div class="w-28 h-28 bg-emerald-400 rounded-full text-white flex items-center justify-center">
                  <i class="icofont-airplane icofont-5x"></i>
                </div>
                <h3 class="my-3 text-xl font-subtitle font-semibold">Airport Transport Service</h3>
                <p class="text-gray-700">Provide Airport Transport Service to attractive and beautiful tourist attractions for tourists...</p>
              </div>
            </div>
          </a>
          <a href="">
            <div class="w-full flex flex-col items-center hover:scale-105 transition duration-200 hover:ease-in-out">
              <div class="bg-slate-50 p-7 rounded-lg shadow-xl flex flex-col items-center">
                <div class="w-28 h-28 bg-emerald-400 rounded-full text-white flex items-center justify-center">
                  <i class="icofont-car icofont-5x"></i>
                </div>
                <h3 class="my-3 text-xl font-subtitle font-semibold">Car Charter Service</h3>
                <p class="text-gray-700">Provide Transportation services to attractive and beautiful tourist attractions for tourists...</p>
              </div>
            </div>
          </a>
          <a href="">
            <div class="w-full flex flex-col items-center hover:scale-105 transition duration-200 hover:ease-in-out">
              <div class="bg-slate-50 p-7 rounded-lg shadow-xl flex flex-col items-center">
                <div class="w-28 h-28 bg-emerald-400 rounded-full text-white flex items-center justify-center">
                  <i class="icofont-island-alt icofont-5x"></i>
                </div>
                <h3 class="my-3 text-xl font-subtitle font-semibold">Guest Activities</h3>
                <p class="text-gray-700">Provide tourist attractions that provide interesting activities such as cycling rafting etc.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  {{-- destinations --}}
  <section class="destinations" id="destinations">
    <div class="py-20 px-4 md:px-10">
      <h1 class="title">Top Destinations</h1>
      <div class="flex flex-row gap-y-4 items-center justify-between flex-wrap">
        @for ($i = 0; $i < 10; $i++)
        <a href="" class="basis-1/2 md:basis-1/3 lg:basis-1/5 px-2 md:px-4">
          <div class="w-full md:h-64 h-56 rounded-xl shadow-lg relative overflow-hidden after:content-[''] after:block after:absolute after:inset-x-0 after:bottom-0 after:h-16 after:bg-gradient-to-t after:backdrop-blur-xl group">
            <img src="img/pura.jpg" alt="" class="w-full h-full object-cover group-hover:scale-110 transition duration-300 ease-in-out">
            <h4 class="text-white absolute bottom-6 inset-x-1 z-20 text-center font-subtitle text-xl">Beratan Temple</h4>
          </div>
        </a>
        @endfor
      </div>
    </div>
  </section>


  {{-- tour packages --}}
  <section class="tour-packages" id="tour-packages">
    <div class="py-20 w-full bg-gray-200">
      <div class="container lg:px-20 md:px-4 px-10 mx-auto">
        <h1 class="title">Tour Packages</h1>
        <div class="flex flex-col md:flex-row gap-y-6 items-center justify-center md:justify-between flex-wrap">
        @for ($i = 0; $i < 6; $i++)  
          <div class="md:basis-1/2 lg:basis-1/3 md:px-6 w-full">
            <div class="rounded-xl shadow-lg relative flex flex-col justify-between items-center h-[26rem] overflow-hidden after:content-[''] after:block after:absolute after:inset-0 after:bg-gradient-to-b after:from-black/30 group cursor-pointer">
              <img src="img/gwk.jpg" alt="" class="absolute w-full h-full object-cover group-hover:scale-110 transition duration-300 ease-in-out">
              <h4 class="text-white mt-10 z-20 text-center font-subtitle text-xl group-hover:mt-12 transition-all duration-300 ease-in-out">Garuda Wisnu Kencana (GWK)</h4>
              <a href="" class="button z-20 lg:opacity-0 mb-12 lg:group-hover:opacity-100 transition duration-300 ease-in-out">Read More</a>
            </div>
          </div>
          @endfor
        </div>
      </div>
    </div>
  </section>

  {{-- gallery --}}

  <section class="gallery" id="gallery">
    <div class="py-20 container mx auto px-4">
      <h1 class="font-subtitle text-center text-2xl font-semibold mb-5">Gallery</h1>
      <div class="flex flex-row gap-y-4 items-center justify-between flex-wrap">
        @for ($i = 0; $i < 10; $i++)
        <button class="basis-1/2 md:basis-1/3 lg:basis-1/5 px-2 md:px-4" id="showModal">
          <div class="w-full md:h-48 h-40 rounded-xl shadow-lg relative overflow-hidden group bg-black">
            <img src="img/cliff.jpg" alt="" class="w-full h-full object-cover group-hover:scale-110 transition duration-300 ease-in-out">
          </div>
        </button>
        @endfor
      </div>
    </div>
  </section>

  {{-- modal gallery section --}}

  <div class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="modal">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto">
      <div class="flex min-h-full items-center justify-center p-0 text-center sm:items-center sm:p-0">
        <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 w-full sm:max-w-lg flex flex-col md:flex-row">
          <div class="w-full md:w-1/2">
            <img src="img/cliff.jpg" alt="" class="relative w-full h-full object-cover">
            <button class="absolute top-2 right-4 text-4xl text-white md:text-black" id="close">&times;</button>
          </div>
          <div class="w-full md:w-1/2 p-4 md:py-12 md:px-4">
            <h2 class="text-xl font-subtitle font-semibold mb-1 md:text-2xl md:mb-3">Padang-padang Beach</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo aliquid error, quae unde reprehenderit quos harum quidem dolor voluptatibus assumenda totam libero.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
