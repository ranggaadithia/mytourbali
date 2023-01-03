<x-app-layout>

  <div class="container mx-auto px-10 flex flex-row justify-between text-white my-6 items-center">
    <h1 class="text-2xl md:text-3xl font-semibold">Package Tour</h1>
    <a href="" type="button" class="inline-block md:px-6 md:py-4 px-3 py-3 bg-blue-500 text-white font-medium leading-tight  rounded-lg shadow-md ">Add Package</a>
  </div>

  <div class="flex flex-col items-center">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 w-full">
      <div class="py-2 inline-block sm:px-6 lg:px-8 w-full">
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead class="border-b bg-gray-800 text-left">
              <tr>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                  #
                </th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                  Package Name
                </th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                  Destination
                </th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                  Action
                </th>
              </tr>
            </thead class="border-b">
            <tbody>
              @foreach ($packages as $package)
              <tr class="border-b bg-gray-800 boder-gray-900">
                <td class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                  {{ $loop->iteration }}
                </td>
                <td class="text-sm text-white font-medium px-6 py-4 whitespace-nowrap">
                  {{ $package->name }}
                </td>
                <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap w-9">
                  <ul>
                  @foreach ($package->destinations as $destination)
                      <li >{{ $destination->name }}</li>
                  @endforeach
                  </ul>
                </td>
                <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                  <a href="" class="button font-medium">Edit</a>
                  <button type="button" class="inline-block px-6 py-4 bg-red-600 text-white font-medium leading-tight  rounded-lg shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Delete</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</x-app-layout>