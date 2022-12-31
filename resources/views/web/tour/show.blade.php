@extends('layouts.index')

@section('container')

  @include('components.navbar')

  <div class="w-full h-screen relative flex items-center justify-center after:content-[''] after:block after:w-full after:h-screen after:absolute after:top-0 after:bg-gradient-to-b after:from-black/30">
    <div class="absolute pb-12 z-10">
      <h1 class="text-white font-title text-5xl">Kintamani Tour</h1>
      <div class="line-pattern mx-auto mt-2"></div>
    </div>
    <img src="/img/kintamani.jpg" alt="" class="w-full h-screen object-cover">
  </div>


  <section class="tour" id="tour">
    <div class="container mx-auto mt-20 px-4 lg:px-20">
      <h1 class="text-center text-3xl font-title">Tour Destination</h1>
      @for ($i = 0; $i < 8; $i++)
      <div class="flex flex-col md:flex-row justify-evenly lg:items-center">
        <div class="w-full md:w-1/2 md:pr-5 lg:pr-20">
          <h3 class="mt-5 text-2xl font-subtitle font-bold lg:text-2xl">Topati Village</h3>
          <div class="w-full md:hidden md:w-1/2 md:p-3 lg:p-6 my-3">
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide rounded-md"><img src="/img/kintamani-cover.jpg" alt="" class="object-cover w-[350px] h-[350px]"></div>
                <div class="swiper-slide rounded-md"><img src="/img/gwk.jpg" alt="" class="object-cover w-[350px] h-[350px]"></div>
                <div class="swiper-slide  rounded-md"><img src="/img/pura.jpg" alt=""  class="object-cover w-[350px] h-[350px]"></div>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-6 mb:mb-5 font-poppins text-gray-600 lg:text-base leading-relaxed">Center of homemade Balinese Batik with various colors and shapes. Here the visitors will exhibited the Batik making and hand waring process. Finally you can buy some to bring home. Batik is one of the most beautiful wearable art and the approach the other side of Balinese rich culture.</p>
        </div>
        <div class="hidden md:w-1/2 md:flex md:items-center md:p-3 lg:p-6 my-5" id="swiper">
          <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide rounded-md"><img src="/img/kintamani-cover.jpg" alt="" class="object-cover w-[350px] h-[350px]"></div>
              <div class="swiper-slide rounded-md "><img src="/img/gwk.jpg" alt="" class="object-cover w-[350px] h-[350px]"></div>
              <div class="swiper-slide  rounded-md "><img src="/img/pura.jpg" alt=""  class="object-cover w-[350px] h-[350px]"></div>
            </div>
          </div>
        </div>
      </div>
      @endfor
    </div>
    <div class="flex justify-center mt-20">
      <div class="w-full md:w-2/3 rounded-lg overflow-hidden shadow-md">
        <div class="w-full text-center p-4 bg-emerald-500">
          <h2 class="text-white font-subtitle text-xl font-semibold"> Prepare your journey to Kintamani</h2>
        </div>
        <div class="p-8">
          Prepare your trip to Nusa Penida Island with the price of our package that we have arranged in such a way that guests can enjoy the Nusa Penida Island tour safely and comfortably, the things that must be prepared are fit condition, bringing more clothes worn if wet when the tour can change clothes, bring sunblock cream because the weather in Nusa Penida is quite hot, bring a hat and sunglasses if necessary, bring a camera to capture beautiful photo moments there, wake up early because you cross by using a fast boat so you don’t miss the fast boat and always communicate with the guide accompanying tours before carrying out activities because of the location of cliffs that might be dangerous for you if you are not careful.
          <h3 class="mt-4 mb-2 text-2xl font-subtitle font-semibold uppercase">Itinary</h3>
          <ul class="list-disc pl-4">
            <li>In the morning our representative will pick you up at your hotel and transfer to the harbour</li>
            <li>Boat is leaving to Nusa Penida at 08.30am</li>
            <li>The journey to Nusa Penida will take around 40 minutes</li>
            <li>Arriving at Nusa Penida, our representative will waiting you with sign board of your name</li>
            <li>Arriving at Nusa Penida, our representative will waiting you with sign board of your name</li>
            <li>In the afternoon at 16.00, you will be dropped to Nusa Penida Harbour to proceed your journey back to Bali</li>
          </ul>
          <h3 class="mt-4 mb-2 text-2xl font-subtitle font-semibold uppercase">Inclusions</h3>
          <ul class="list-disc pl-4">
            <li>Car</li>
            <li>Professional english speaking driver</li>
            <li>Parking fees</li>
            <li>Donation</li>
            <li>Launch at Grand Puncak Sari Restaurant</li>
          </ul>
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
  

  <script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js'

    const swiper = new Swiper('.swiper', {
      // Optional parameters
      effect: "cards",
      grabCursor: true,
    });
  </script>
  <script>
        const swiper = document.querySelectorAll("#swiper")

        for(i = 0; i < swiper.length; i++)
        {
          if(i % 2 == 0) {
            swiper[i].classList.add('order-last')
          } else {
            swiper[i].classList.add('order-first')
          }

        }
  </script>
@endsection
