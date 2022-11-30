@extends('layouts.index')

@section('container')
  
  {{-- jumbotron --}}
    <div class="bg-[url('../../public/img/cliff.jpg')] min-w-screen h-screen bg-cover bg-no-repeat bg-fixed bg-center relative flex items-center justify-center flex-col after:content-[''] after:block after:w-full after:h-screen after:absolute after:top-0 after:bg-gradient-to-b after:from-black/30 after:to-black/10 -z-20">
      <div class="container mx-auto z-10 text-center">
        <h1 class="text-5xl text-white leading-relaxed font-title mb-5">Enjoy your Holiday in Bali Island</h1>

        <div class="hidden md:block absolute bottom-0 right-0 left-0 text-center py-10">
          <div class="chevron"></div>
          <div class="chevron"></div>
          <div class="chevron"></div>
          <span class="text-xl text-white font-subtitle">Start your Journey Now!</span>
        </div>
      </div>
    </div>


  {{-- about --}}
  <section class="about" id="about">
    <div class="w-full h-screen container mx-auto px-4 bg-white rounded-t-3xl -mt-16 z-10">
      <h1  class="pt-20 text-center font-title text-3xl">My Tour Bali</h1>
      <h3 class="mt-8 text-2xl font-subtitle font-bold">Forget Busy Work, and Enjoy your Holiday</h3>
      <p class="mt-3 text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem consequatur autem nam. Nesciunt dolores, nihil sunt voluptatum nemo non repudiandae, eum facere, blanditiis quidem voluptates iure laboriosam autem ducimus? Illo, cum fugit. Iusto explicabo veritatis officiis voluptatem soluta perferendis ducimus nesciunt, aliquid vero consectetur quae!</p>
    </div>
  </section>

@endsection