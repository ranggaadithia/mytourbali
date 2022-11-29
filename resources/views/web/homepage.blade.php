@extends('layouts.index')

@section('container')
  {{-- jumbotron --}}

    <div class="bg-[url('../../public/img/cliff.jpg')] min-w-screen h-screen bg-cover bg-no-repeat bg-fixed bg-center relative flex items-center justify-center flex-col after:content-[''] after:block after:w-full after:h-screen after:absolute after:top-0 after:bg-gradient-to-b after:from-black/30 after:to-black/10">
      <div class="container mx-auto z-10 text-center">
        <h1 class="text-5xl text-white leading-relaxed font-title mb-5">Enjoy your Holiday in Bali Island</h1>

        <div class="absolute bottom-0 right-0 left-0 text-center py-10">
          <div class="chevron"></div>
          <div class="chevron"></div>
          <div class="chevron"></div>
          <span class="text-xl text-white font-subtitle">Start your Journey Now!</span>
        </div>
      </div>
    </div>



@endsection