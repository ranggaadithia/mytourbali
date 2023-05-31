<x-app-layout>
  <div class="container mx-auto md:px-20 px-4">
    @if (session('status'))    
    <div class="alert mt-10 bg-emerald-100 rounded-lg py-5 px-6 mb-3 text-base text-emerald-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
      {{ session('status') }}
      <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-emerald-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-emerald-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close">X</button>
    </div>
    @endif
    <div class="flex flex-row justify-between my-10">
      <h1 class="text-white text-xl md:text-3xl font-semibold">{{ $package->name }} <span class="inline-block py-1.5 px-2.5 leading-none text-center whitespace-nowrap align-baseline bg-emerald-600 text-white rounded">{{ $package->category->name }}</span></h1>
      
      <a href="{{ route('destination.create', $package->id) }}" class="button">Add Destination</a>
      
    </div>
    <div class="flex flex-col">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden">
            <table class="min-w-full">
              <thead class="border-b">
                <tr>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                    #
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                    Name
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left hidden md:block">
                    Description
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($destinations as $destination)
                <tr class="border-b">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">{{ $loop->iteration }}</td>
                  <td class="text-sm text-white font-light px-6 py-4 whitespace-nowrap">
                    {{ $destination->name }}
                  </td>
                  <td class="text-sm text-white font-light px-6 py-4 hidden md:block">
                    {{ $destination->description }}
                  </td>
                  <td class="text-sm text-white font-light px-6 py-4">
                    <a href="{{ route('destination.edit', $destination->id) }}" class="button">Edit</a>
                    <form action="{{ route('destination.destroy', $destination->id) }}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="inline-block px-6 py-4 bg-red-600 text-white font-medium leading-tight  rounded-lg shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" onclick="return confirm('Are you sure?')">Delete</button> 
                    </form>
                  </td>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>