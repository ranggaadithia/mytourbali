<nav class="bg-white/90 backdrop-blur-md fixed w-full z-50 top-0 shadow-lg">
  <div class="container mx-auto px-5 md:px-20 flex flex-wrap items-center justify-around mt-0 py-2" id="container">
    <div class="flex items-center">
      <a href="/" class="text-emerald-700 text-3xl tracking-tight font-title" id="title">
        My Tour Bali
      </a>
    </div>
    <form class="mt-5 md:mt-0 w-8/12">   
      <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
      <div class="relative">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
              </svg>
          </div>
          <input type="search" id="default-search" class="block w-full px-4 py-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 " placeholder="Search Destination, Package, Tour in Bali">
        </div>
      </form>
      <a class="button bg-emerald-600 w-32 text-center py-3 px-4 ml-2 font-subtitle font-semibold text-md hidden md:block" href="{{ config('app.whatsapp') }}">Book Now!</a>
    </div>
  <div class="container mx-auto px-5 md:px-20 flex flex-wrap items-center justify-evenly mt-0 py-2 relative border-t-2">
    <a href="" class="flex items-center"><i class="icofont-island-alt text-emerald-600 text-2xl"></i> <span class="ml-1">Activities</span></a>
    <a href="" class="flex items-center"><i class="icofont-airplane-alt text-emerald-600 text-2xl"></i> <span class="ml-1">Airport Transfer</span></a>
    <a href="" class="flex items-center"><i class="icofont-direction-sign text-emerald-600 text-2xl"></i> <span class="ml-1">Tours</span></a>
  </div>
</nav>

