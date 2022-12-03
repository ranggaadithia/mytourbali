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
    <div class="py-20 bg-gray-200 container px-10 md:px-2 lg:px-20">
      <h1 class="text-3xl font-subtitle text-center mb-5">Services</h1>

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
  </section>

@endsection