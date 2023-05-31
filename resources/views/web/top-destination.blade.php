@extends('layouts.index')

@section('container')
@include('components.navbar-dark')
    
<div class="container mx-auto md:px-10 px-5 mt-32">
  <h1 class="text-center font-subtitle font-semibold text-4xl">THE TOP 10 Full Day Tours</h1>
  <div class="py-20 w-full">
      <div class="flex flex-col md:flex-row gap-y-6 items-center justify-center md:justify-start flex-wrap">
      @foreach ($packages->shuffle()->take(10) as $package)
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

<div class="mt-10"></div>
@include('components.footer')
@endsection