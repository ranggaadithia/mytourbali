@extends('layouts.index')

@section('container')

  <livewire-navbar />
  
  {{-- jumbotron --}}
    <div class="bg-[url('../../public/img/cliff.jpg')] min-w-screen h-screen bg-cover bg-no-repeat bg-fixed bg-center relative flex items-center justify-center flex-col after:content-[''] after:block after:w-full after:h-screen after:absolute after:top-0 after:bg-gradient-to-b after:from-black/30 -z-10">
      <div class="container mx-auto z-50 text-center">
        <h1 class="text-5xl text-white leading-relaxed font-title mb-1">Enjoy your Holiday in Bali with <br> MyTourBali</h1>
        <div class="line-pattern mx-auto"></div>
      </div>
    </div>


  {{-- about --}}
  {{-- <section class="about" id="about">
    <div class="container mx-auto px-4 lg:px-20 py-20">
      <h1  class="text-center font-title text-3xl mb-3 mb:text-6xl">My Tour Bali</h1>
      <div class="line-pattern mx-auto"></div>
      <div class="flex justify-evenly lg:items-center">
        <div class="w-full md:w-1/2 md:pr-5 lg:pr-20">
          <h3 class="mt-5 text-2xl font-subtitle font-bold lg:text-3xl">Forget Busy Work,<br/> and Enjoy your Holiday</h3>
          <p class="mt-3 mb-6 mb:mb-5 font-poppins text-gray-600 lg:text-base leading-relaxed">
            Welcome to My Tour Bali, your premier travel and tourism agency located in the beautiful island of Bali. We offer a wide range of services, including airport transfers, tour packages, and car rentals. Our tour packages are designed to showcase the best of what Bali has to offer, from its stunning beaches and vibrant culture to its rich history and natural beauty. Our team of professional and friendly drivers will ensure that you have a safe and comfortable journey while exploring Bali. We invite you to browse our website and learn more about the services we offer. If you have any questions or would like to book a tour, please don't hesitate to contact us.
          </p>
          <a href="{{ config('app.whatsapp') }}" class="button">Contact Us</a>
        </div>
        <div class="hidden md:w-1/2 md:flex md:items-center md:p-3 lg:p-6">
          <figure>
            <img src="img/pantai.jpg" alt="" class="rounded-xl shadow-lg" loading="lazy">
            <figcaption class="text-sm text-gray-500">*klingking beach</figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section> --}}


  {{-- services --}}
  {{-- <section class="services" id="services">
    <div class="py-20 w-full bg-gray-200 px-10 md:px-2 lg:px-20">
      <div class="container mx-auto">
        <h1 class="title">Services</h1>
        <div class="flex flex-col gap-6 md:flex-row justify-center">
          <a href="/airport">
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
          <a href="/cars">
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
          <a href="/activities">
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
  </section> --}}

  {{-- destinations --}}
  <section class="destinations" id="destinations">
    <div class="py-20 px-4 md:px-10 overflow-hidden">
      <h1 class="title">Top Destinations</h1>
      <div class="swiper-container w-full mx-auto">
        <div class="swiper-wrapper">
        @foreach ($destinations->shuffle()->take(10) as $destination)
        <div class="swiper-slide">
          <a href="/tour/{{ $destination->package->slug }}#{{ $destination->name }}" class="basis-1/2 md:basis-1/3 lg:basis-1/5 px-2 md:px-4">
            <div class="w-full md:h-64 h-56 rounded-xl shadow-lg overflow-hidden relative group">
              <div class="h-16 w-full z-20 absolute bottom-0 flex flex-col items-center justify-center bg-white px-2">
                <p class="text-sm font-light">{{ $destination->package->name }}</p>
                <h4 class="text-gray-700 text-center font-subtitle text-xl z-30">{{ $destination->name}}</h4>
              </div>
              <img src="{{ asset('storage/'. $destination->photo[0]->image) }}" alt="{{ $destination->name }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-300 ease-in-out" loading="lazy">
            </div>
          </a>
        </div>
        @endforeach
        <div class="swiper-pagination"></div>
      </div>
      </div>
    </div>
  </section>

  {{-- tour packages --}}
  <section class="tour-packages" id="tour-packages">
    <div class="py-20 w-full bg-gray-200">
      <div class="container lg:px-20 md:px-4 px-10 mx-auto">
        <h1 class="title">Tour Packages</h1>
        <div class="flex flex-col md:flex-row gap-y-6 items-center justify-center md:justify-start flex-wrap">
        @foreach ($packages as $package)
          <div class="md:basis-1/2 lg:basis-1/3 md:px-6 w-full">
            <div class="rounded-xl shadow-lg relative flex flex-col justify-between items-center h-[26rem] overflow-hidden after:content-[''] after:block after:absolute after:inset-0 after:bg-gradient-to-b after:from-black/30 group cursor-pointer">
              <img src="{{ asset('storage/'.$package->image_cover) }}" alt="{{ $package->name }}" class="absolute w-full h-full object-cover group-hover:scale-110 transition duration-300 ease-in-out" loading="lazy">
              <h4 class="text-white mt-10 z-20 text-center font-subtitle text-2xl group-hover:mt-12 transition-all duration-300 ease-in-out">{{ $package->name }}</h4>
              <a href="/tour/{{ $package->slug }}" class="button z-20 lg:opacity-0 mb-12 lg:group-hover:opacity-100 transition duration-300 ease-in-out">Read More</a>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </section>

  {{-- gallery --}}
  <section class="gallery" id="gallery">
    <div class="container mx-auto">
      <div class="py-20 mx auto px-10 bg-dark-200">
        <h1 class="title">Gallery</h1>
        <h3 class="text-center text-xl font-medium">Photos</h3>
        <div class="flex flex-row gap-y-4 items-center justify-between flex-wrap">
          @foreach ($photos->shuffle()->take(10) as $photo)    
          <button class="basis-1/2 md:basis-1/3 lg:basis-1/5 px-2 md:px-4" id="showModal" onclick="return {{ $photo->id }}">
            <div class="w-full md:h-48 h-40 rounded-xl shadow-lg relative overflow-hidden group bg-black">
              <img src="{{ asset('storage/'.$photo->image) }}" alt="{{ $photo->destination->name }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-300 ease-in-out" loading="lazy">
            </div>
          </button>
          <div class="relative z-30 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="modal">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="fixed inset-0 z-30 overflow-y-auto">
              <div class="flex min-h-full items-center justify-center p-0 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 h-auto lg:h-96 w-5/6 flex flex-col md:flex-row">
                  <div class="w-full md:w-1/2">
                    <img src="{{ asset('storage/'.$photo->image) }}" alt="{{ $photo->destination->name }}" class="relative w-full h-full object-cover" loading="lazy">
                    <button class="absolute top-2 right-4 text-4xl text-white md:text-black" id="close">&times;</button>
                  </div>
                  {{-- <div class="w-full md:w-1/2 p-4 md:py-12 md:px-4">
                    <h2 class="text-xl font-subtitle font-semibold mb-1 md:text-2xl md:mb-3 text-gray-700">{{ $photo->destination->name }}</h2>
                    <p>{{ $photo->destination->description }}</p>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <h3 class="text-center text-xl font-medium mt-10">Videos</h3>
        <div class="flex flex-row gap-y-4 items-center justify-between flex-wrap">
          @foreach ($videos->shuffle()->take(10) as $video)    
          <button class="basis-1/2 md:basis-1/3 lg:basis-1/5 px-2 md:px-4" id="showModal" onclick="return {{ $video->id }}">
            <div class="w-full md:h-48 h-40 rounded-xl shadow-lg relative overflow-hidden group bg-black">
              <img src="{{ asset('storage/'.$video->thumbnail) }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-300 ease-in-out" loading="lazy">
            </div>
          </button>
          <div class="relative z-30 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="modal">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="fixed inset-0 z-30 overflow-y-auto">
              <div class="flex min-h-full items-center justify-center p-0 text-center sm:items-center sm:p-0">
                <div class="relative transform rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 h-auto lg:h-96 flex flex-col md:flex-row mt-32">
                  <div class="w-full pt-10">
                    <iframe width="315" height="560"
                      src="https://www.youtube.com/embed/{{ $video->url }}"
                      title="YouTube video player" frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                      gyroscope;
                      web-share"
                      allowfullscreen></iframe>
                    <button class="absolute top-0 right-3 text-4xl text-black z-50" id="close">&times;</button>
                  </div>
                  {{-- <div class="w-full md:w-1/2 p-4 md:py-12 md:px-4">
                    <h2 class="text-xl font-subtitle font-semibold mb-1 md:text-2xl md:mb-3 text-gray-700">{{ $video->destination->name }}</h2>
                    <p>{{ $photo->destination->description }}</p>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  {{-- modal gallery section --}}


  {{-- testimonial --}}
  <section class="testimonial" id="testimonial">
    <div class="py-20 bg-gray-200">
      <div class="container mx-auto px-4 overflow-hidden">
        <h1 class="title">Reviews</h1>
        <div class="flex swiper-container w-[80%] md:w-full mx-auto">
          <div class="swiper-wrapper">
            @foreach ($reviews as $review)
            <div class="swiper-slide">
              <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm scale-75 transition-transform duration-300 ease-in-out mx-auto" id="card">
                <div class="flex items-center">
                  <img src="{{ asset('storage/'. $review->image) }}" alt="" class="w-16 h-16 object-cover object-center rounded-full" loading="lazy">
                  <div class="flex flex-col ml-3">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">{{ $review->name }}</h5>
                    <ul class="flex">
                      @for ($i = 1; $i <= $review->stars; $i++)
                      <li>
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                          <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                        </svg>
                      </li>
                      @endfor
                      @if ($review->stars != 5)
                        @for ($i = 1; $i <= 5 - $review->stars; $i++)
                        <li>
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                          </svg>
                        </li> 
                        @endfor
                      @endif
                    </ul>
                  </div>
                </div>
                <p class="text-gray-700 text-base mb-4 mt-3 text-center" id="excerpt">
                  {{ $review->excerpt }}
                  <button id="excerptButton" class="text-emerald-400">Read more..</button>
                </p>
                <p class="text-gray-700 text-base mb-4 mt-3 hidden" id="description">
                  {{ $review->description }}
                  <button id="descButton" class="text-emerald-400">Collapse</button>
                </p>
              </div>
            </div>
            @endforeach
          </div>  
          <div class="swiper-pagination"></div>
        </div>
        <div class="text-center mt-5">
          <a href="https://www.tripadvisor.com/UserReviewEdit-g297697-d25288635-My_Tour_Bali-Kuta_Kuta_District_Bali.html" class="button" target="_blank">Give your Review!</a> 
        </div>
      </div>
    </div>
  </section>

  {{-- footer --}}

  @include('components.footer')
  

@endsection
