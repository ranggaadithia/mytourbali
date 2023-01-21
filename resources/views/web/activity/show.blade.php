@extends('layouts.index')

@section('container')

  @include('components.navbar')
  

  <div class="w-full h-screen relative flex items-center justify-center after:content-[''] after:block after:w-full after:h-screen after:absolute after:top-0 after:bg-gradient-to-b after:from-black/30">
    <div class="absolute pb-12 z-10">
      <h1 class="text-white text-center font-title text-5xl">{{ $package->name }}</h1>
      <div class="line-pattern mx-auto mt-4"></div>
    </div>
    <img src="{{ asset('storage/'.$package->image) }}" alt="" class="w-full h-screen object-cover">
  </div>


  <section class="tour" id="tour">
    <div class="container mx-auto mt-20 px-4 lg:px-20">
      <h1 class="text-center text-3xl font-title">{{ $destination->name }}</h1>
      <div class="flex flex-col md:flex-row justify-evenly lg:items-center">
        <div class="w-full">
          <div class="w-full md:p-3 lg:p-6 my-6">
            <div class="swiper mySwiper w-full">
              <div class="swiper-wrapper">
                @foreach ($destination->photo as $photo)
                <div class="swiper-slide w-[300px] h-[300px]">
                  <img src="{{ asset('storage/'.$photo->image) }}" class="block object-cover w-80 h-80 object-center" />
                </div>
                @endforeach
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <p class="mt-3 mb-6 mb:mb-5 font-poppins text-gray-600 lg:text-base leading-relaxed">{{ $destination->description }}</p>
        </div>
      </div>
    </div>
    <div class="flex justify-center mt-20">
      <div class="w-full md:w-2/3 rounded-lg overflow-hidden shadow-md">
        <div class="w-full text-center p-4 bg-emerald-500">
          <h2 class="text-white font-subtitle text-xl font-semibold"> Prepare your journey to {{ Str::of($destination->name) }}</h2>
        </div>
        <div class="p-8" id="description">
          {!! $package->description !!}
          <div class="w-full text-center mt-7">
            <a href="" class="button">Start your journey now!</a>
          </div>
        </div>
        <div class="line-pattern mx-auto"></div>
      </div>
    </div>
    <div class="w-full mt-10 text-center p-10 border-t-2 border-t-emerald-500">
      <h4 class="font-subtitle text-2xl font-semibold">Need More Information?</h4>
      <a href="" class="button mt-3"><i class="icofont-brand-whatsapp"></i> Contact Us</a>
    </div>
  </section>

  @include('components.footer')
  
  <script>
    var mySwiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
@endsection
