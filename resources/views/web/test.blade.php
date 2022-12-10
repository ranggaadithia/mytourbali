@extends('layouts.index')

@section('container')

<button class="button" id="button">Show</button>

<div class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="modal">
  <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
  <div class="fixed inset-0 z-10 overflow-y-auto">
    <div class="flex min-h-full items-center justify-center p-0 text-center sm:items-center sm:p-0">
      <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 w-full sm:max-w-lg flex flex-col md:flex-row">
        <div class="w-full md:w-1/2">
          <img src="img/cliff.jpg" alt="" class="relative w-full h-full object-cover">
          <button class="absolute top-2 right-4 text-4xl text-white md:text-black" id="close">&times;</button>
        </div>
        <div class="w-full md:w-1/2 p-4 md:py-12 md:px-4">
          <h2 class="text-xl font-subtitle font-semibold mb-1 md:text-2xl md:mb-3">Padang-padang Beach</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo aliquid error, quae unde reprehenderit quos harum quidem dolor voluptatibus assumenda totam libero.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="js/script.js"></script>


@endsection