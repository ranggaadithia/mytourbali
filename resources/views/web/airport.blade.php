@extends('layouts.index')

@section('container')
@include('components.navbar-dark')
    
<div class="container mx-auto md:px-10 px-0 mt-32">
  <h1 class="text-center font-subtitle font-semibold text-4xl">Airport Transport Service</h1>
  <div class="flex flex-col mt-10 ">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        <div class="overflow-x-auto">
          <table class="min-w-full rounded-md overflow-hidden text-center">
            <thead class="border-b bg-gray-50">
              <tr>
                <th scope="col" class="text-normal font-medium text-gray-900 px-6 py-4 text-center">
                  #
                </th>
                <th scope="col" class="text-normal font-medium text-gray-900 px-6 py-4 text-center">
                  From
                </th>
                <th scope="col" class="text-normal font-medium text-gray-900 px-6 py-4 text-center">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </th>
                <th scope="col" class="text-normal font-medium text-gray-900 px-6 py-4 text-center">
                  Destination
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b">
                <td colspan="4" class="py-4 text-xl font-subtitle font-bold">South & Midle North Bali Area</td>
              </tr>
              <tr class="border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">1</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Kuta/Legian
                </td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">2</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Seminyak
                </td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">3</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Kerobokan
                </td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">4</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Jimbaran
                </td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">5</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Ungasan
                </td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">6</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Uluwatu/Pecatu
                </td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">7</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Nusa Dua
                </td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">8</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Tanjung Benoa
                </td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">9</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Canggu
                </td>
              </tr>
              <tr class="border-b">
                <td colspan="4" class="py-4 text-xl font-subtitle font-bold">Ease & West Bali Area</td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">1</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Denpasar
                </td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">2</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Sanur
                </td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">3</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Ubud
                </td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">4</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Padang Bay
                </td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">5</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Klungkung
                </td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">6</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Candidasa
                </td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">7</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Amed
                </td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">8</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Tulamben
                </td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">9</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Gianyar/Tabanan
                </td>
              </tr>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-normal font-medium text-gray-900">10</td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Airport
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <i class="icofont-long-arrow-right icofont-2x"></i>
                </td>
                <td class="text-normal text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  Lovina 
                </td>
              </tr>
            </tbody>
          </table>
          <div class="flex justify-center mt-20">
            <div class="w-full md:w-2/3 rounded-lg overflow-hidden shadow-md">
              <div class="w-full text-center p-4 bg-emerald-500">
                <h2 class="text-white font-subtitle text-xl font-semibold">Airport Transport Service</h2>
              </div>
              <div class="p-8" id="description">
                Note :
                <ul class="list-disc list-inside">
                  <li>Please contact us for airport pickup/drop off, as depends on location that you stay.</li>
                </ul>
                <div class="w-full text-center mt-7">
                  <a href="{{ config('app.whatsapp') }}" class="button">Contact us</a>
                </div>
              </div>
              <div class="line-pattern mx-auto"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="mt-10"></div>
@include('components.footer')
@endsection
