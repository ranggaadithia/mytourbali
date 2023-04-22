@extends('layouts.index')

@section('container')
@include('components.navbar-dark')

<div class="container mx-auto md:px-10 px-4 mt-32">
  <h1 class="text-center font-subtitle font-semibold text-4xl">Guest Activities</h1>
  <div class="line-pattern mx-auto mt-2"></div>
  <div class="flex flex-col md:flex-row gap-y-6 items-center justify-center md:justify-start flex-wrap">
    @foreach ($activities as $activity)
      <div class="md:basis-1/2 lg:basis-1/3 md:px-6 w-full">
        <div class="rounded-xl shadow-lg relative flex flex-col justify-between items-center h-[26rem] overflow-hidden after:content-[''] after:block after:absolute after:inset-0 after:bg-gradient-to-b after:from-black/30 group cursor-pointer">
          <img src="{{ asset('storage/'.$activity->image_cover) }}" alt="" class="absolute w-full h-full object-cover group-hover:scale-110 transition duration-300 ease-in-out">
          <h4 class="text-white mt-10 z-20 text-center font-subtitle text-2xl group-hover:mt-12 transition-all duration-300 ease-in-out">{{ $activity->name }}</h4>
          <a href="/activity/{{ $activity->slug }}" class="button z-20 lg:opacity-0 mb-12 lg:group-hover:opacity-100 transition duration-300 ease-in-out">Read More</a>
        </div>
      </div>
    @endforeach
    </div>
</div>

<div class="mt-32"></div>
@include('components.footer')
@endsection