@extends('layouts.index')

@section('container')
@include('components.navbar-dark')
<div class="container mx-auto mt-24 md:mt-32  px-4 md:px-10">
  <h1 class="title">Avaliable Cars</h1>
  <div class="flex justify-left flex-wrap">
    <h3 class="text-center text-xl font-subtitle font-semibold w-full my-2 underline">Regular Cars</h3>
    <div class="rounded-lg shadow-lg bg-white max-w-sm mb-3">
      <img class="rounded-t-lg" src="img/car/apv.jpg" alt=""/>
      <div class="p-6">
        <h5 class="text-gray-900 text-xl font-medium mb-2">APV</h5>
        <p class="text-gray-700 text-base mb-4">
          <b>Capacity : </b> 7 people
        </p>
      </div>
    </div>
    <div class="rounded-lg shadow-lg bg-white max-w-sm mb-3 md:mx-3">
      <img class="rounded-t-lg" src="img/car/avanza.png" alt=""/>
      <div class="p-6">
        <h5 class="text-gray-900 text-xl font-medium mb-2">Avanza</h5>
        <p class="text-gray-700 text-base mb-4">
          <b>Capacity : </b> 7 people
        </p>
      </div>
    </div>
    <div class="rounded-lg shadow-lg bg-white max-w-sm mb-3">
      <img class="rounded-t-lg" src="img/car/innova.png" alt=""/>
      <div class="p-6">
        <h5 class="text-gray-900 text-xl font-medium mb-2">Innova</h5>
        <p class="text-gray-700 text-base mb-4">
          <b>Capacity : </b> 7 people
        </p>
      </div>
    </div>
    <h3 class="text-center text-xl font-subtitle font-semibold w-full my-5 underline">Big Vans</h3>
    <div class="rounded-lg shadow-lg bg-white max-w-sm mb-3">
      <img class="rounded-t-lg" src="img/car/elf-short.png" alt=""/>
      <div class="p-6">
        <h5 class="text-gray-900 text-xl font-medium mb-2">Elf Short</h5>
        <p class="text-gray-700 text-base mb-4">
          <b>Capacity : </b> 10-14 people
        </p>
      </div>
    </div>
    <div class="rounded-lg shadow-lg bg-white max-w-sm mb-3 md:mx-3">
      <img class="rounded-t-lg" src="img/car/elf-long.png" alt=""/>
      <div class="p-6">
        <h5 class="text-gray-900 text-xl font-medium mb-2">Elf Long</h5>
        <p class="text-gray-700 text-base mb-4">
          <b>Capacity : </b> 16-19 people
        </p>
      </div>
    </div>
    <div class="rounded-lg shadow-lg bg-white max-w-sm mb-3">
      <img class="rounded-t-lg" src="img/car/hiace.png" alt=""/>
      <div class="p-6">
        <h5 class="text-gray-900 text-xl font-medium mb-2">Hiace</h5>
        <p class="text-gray-700 text-base mb-4">
          <b>Capacity : </b> 10-16 people
        </p>
      </div>
    </div>
    <h3 class="text-center text-xl font-subtitle font-semibold w-full my-5 underline">Luxury Cars</h3>
    <div class="rounded-lg shadow-lg bg-white max-w-sm mb-3">
      <img class="rounded-t-lg" src="img/car/alphard.jpeg" alt=""/>
      <div class="p-6">
        <h5 class="text-gray-900 text-xl font-medium mb-2">Alphard</h5>
        <p class="text-gray-700 text-base mb-4">
          <b>Capacity : </b> 5 people
        </p>
      </div>
    </div>
    <div class="rounded-lg shadow-lg bg-white max-w-sm mb-3 md:mx-3">
      <img class="rounded-t-lg" src="img/car/artic-white.jpg" alt=""/>
      <div class="p-6">
        <h5 class="text-gray-900 text-xl font-medium mb-2">Hyundai H1</h5>
        <p class="text-gray-700 text-base mb-4">
          <b>Capacity : </b> 9 people
        </p>
      </div>
    </div>
  </div>
</div>
<div class="mt-10"></div>
@include('components.footer')
@endsection