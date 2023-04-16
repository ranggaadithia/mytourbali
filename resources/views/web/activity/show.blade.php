@extends('layouts.index')

@section('container')

  @include('components.navbar-dark')
  



  <section class="tour" id="tour">
    <div class="container mx-auto mt-20 px-4 lg:px-20">
      <h1 class="text-center text-3xl font-title">{{ $destination->name }}</h1>
      <div class="flex flex-col md:flex-row justify-evenly lg:items-center">
        <div class="w-full">
          <div class="w-full md:p-3 lg:p-6 my-6">
            <div class="swiper mySwiper w-full md:w-[80%]">
              <div class="swiper-wrapper">
                @foreach ($destination->photo as $photo)
                <div class="swiper-slide w-[300px] h-[300px]">
                  <img src="{{ asset('storage/'.$photo->image) }}" alt="{{ $photo->name }}" class="block object-cover w-80 h-80 object-center" loading="lazy" />
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
    <div class="text-center">
      <a href="{{ config('app.whatsapp') }}" class="button text-center">Start your journey now!</a>
    </div>
    <div class="w-full mt-10 text-center p-10 border-t-2 border-t-emerald-500">
      <h4 class="font-subtitle text-2xl font-semibold">Need More Information?</h4>
      <a href="{{ config('app.whatsapp') }}" class="button mt-3"><i class="icofont-brand-whatsapp"></i> Contact Us</a>
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
