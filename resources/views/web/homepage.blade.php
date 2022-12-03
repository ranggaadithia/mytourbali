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
    <div class="container mx-auto px-4 md:px-20">
      <h1  class="pt-20 text-center font-title text-3xl mb-3 mb:text-5xl">My Tour Bali</h1>
      <div class="line-pattern"></div>
      <div class="flex justify-evenly md:items-center">
        <div class="w-full md:w-1/2 md:pr-20">
          <h3 class="mt-5 text-2xl font-subtitle font-bold md:text-3xl">Forget Busy Work,<br/> and Enjoy your Holiday</h3>
          <p class="mt-3 mb-6 mb:mb-5 font-poppins text-gray-600 md:text-base leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem consequatur autem nam. Nesciunt dolores, nihil sunt voluptatum nemo non repudiandae, eum facere, blanditiis quidem voluptates iure laboriosam autem ducimus? Illo, cum fugit. Iusto explicabo veritatis officiis voluptatem soluta perferendis ducimus nesciunt, aliquid vero consectetur quae!</p>
          <a href="" class="button">Contact Us</a>
        </div>
        <div class="hidden md:w-1/2 md:block md:p-6">
          <img src="img/pantai.jpg" alt="" class="rounded-xl shadow-lg">
        </div>
      </div>
    </div>
  </section>

@endsection