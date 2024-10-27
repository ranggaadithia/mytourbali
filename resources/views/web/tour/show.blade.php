@extends('layouts.index')

@section('container')

  @include('components.navbar')

  {{-- <div class="w-full h-screen relative flex items-center justify-center after:content-[''] after:block after:w-full after:h-screen after:absolute after:top-0 after:bg-gradient-to-b after:from-black/30">
    <div class="absolute pb-12 z-10">
      <h1 class="text-white font-title text-5xl">{{ $package->name }}</h1>
      <div class="line-pattern mx-auto mt-2"></div>
    </div>
    <img src="{{ asset('storage/'.$package->image) }}" alt="" class="w-full h-screen object-cover">
  </div> --}}


  <section class="tour" id="tour">
    <div class="container mx-auto mt-32 px-4 lg:px-20">
      <h1 class="text-center text-3xl font-title">{{ $package->name }} Itenerary</h1>
      @foreach ($destinations as $destination)
      <section id="{{ $destination->name }}">
        <div class="flex flex-col md:flex-row justify-evenly lg:items-center">
          <div class="w-full md:w-1/2 md:pr-5 lg:pr-20">
            <h3 class="mt-5 text-2xl font-subtitle font-bold lg:text-2xl">{{ $destination->name }}</h3>
            <div class="w-full md:hidden md:w-1/2 md:p-3 lg:p-6 my-3 overflow-hidden">
              <div class="swiper swiperDes w-72 h-72">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  @foreach ($destination->photo as $photo)
                  <div class="swiper-slide rounded-md"><img src="{{ asset('storage/'.$photo->image) }}" alt="{{ $photo->name }}" class="object-cover w-[350px] h-[350px]" loading="lazy"></div>
                  @endforeach
                </div>
              </div>
            </div>
            <p class="mt-3 mb-6 mb:mb-5 font-poppins text-gray-600 lg:text-base leading-relaxed">{{ $destination->description }}</p>
          </div>
          <div class="hidden md:w-1/2 md:flex md:items-center md:p-3 lg:p-6 my-5" id="card">
            <div class="swiper swiperDes w-80 h-80">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach ($destination->photo as $photo)
                <div class="swiper-slide rounded-md"><img src="{{ asset('storage/'.$photo->image) }}" alt="{{ $photo->name }}" class="object-cover w-[350px] h-[350px]" loading="lazy"></div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
      @endforeach
    </div>
    <div class="flex justify-center mt-20">
      <div class="w-full md:w-2/3 rounded-lg overflow-hidden shadow-md">
        <div class="w-full text-center p-4 bg-emerald-500">
          <h2 class="text-white font-subtitle text-xl font-semibold"> Prepare your journey to {{ $package->name }}</h2>
        </div>
        <div class="p-8" id="description">
          {!! $package->description !!}
          <div class="w-full text-center mt-7">
            <a href="{{ config('app.whatsapp') }}" class="button">Start your journey now!</a>
          </div>
        </div>
        <div class="line-pattern mx-auto"></div>
      </div>
    </div>
    <div class="w-full mt-10 text-center p-10 border-t-2 border-t-emerald-500">
      <h4 class="font-subtitle text-2xl font-semibold">Need More Information?</h4>
      <a href="{{ config('app.whatsapp') }}" class="button mt-3"><i class="icofont-brand-whatsapp"></i> Contact Us</a>
    </div>
  </section>

  <section id="booking">
    <div class="w-full shadow-inner py-3 px-10 bg-white fixed bottom-0 flex items-center">
      <a href="{{ config('app.whatsapp') }}?text=Hello,%20I'm%20interested%20in%20the%20{{ urlencode($package->name) }}%20tour%20package%20I%20found%20on%20your%20website.%20Could%20I%20get%20more%20details?" 
         class="text-center block py-3 w-full bg-[#25d366] text-white font-semibold text-base leading-tight uppercase rounded-lg shadow-md hover:bg-[#128c7e] hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out">
        <i class="icofont-brand-whatsapp icofont"></i> Booking on WhatsApp
      </a>
    </div>
  </section>
  

  @include('components.footer')
  
@endsection
