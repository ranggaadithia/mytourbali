<x-app-layout>
 @if (session('status'))    
 <div class="alert mt-10 bg-emerald-100 rounded-lg py-5 px-6 mb-3 text-base text-emerald-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
   {{ session('status') }}
   <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-emerald-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-emerald-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close">X</button>
 </div>
 @endif
 <div class="container mx-auto px-10 flex flex-row justify-between text-black my-6 items-center">
   <h1 class="text-2xl md:text-3xl font-semibold">Reviews </h1>
   <a href="{{ route('videos.create') }}" type="button" class="inline-block md:px-6 md:py-4 px-3 py-3 bg-blue-500 text-white font-medium leading-tight  rounded-lg shadow-md ">Add Video</a>
 </div>

 <div class="flex flex-col items-center">
   <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 w-full">
     <div class="py-2 inline-block sm:px-6 lg:px-8 w-full">
       <div class="overflow-x-auto">
         <table class="w-full">
           <thead class="border-b text-black text-left">
             <tr>
               <th scope="col" class="text-sm font-medium text-black px-6 py-4">
                 #
               </th>
               <th scope="col" class="text-sm font-medium text-black px-6 py-4">
                 Thumbnail
               </th>
               <th scope="col" class="text-sm font-medium text-black px-6 py-4">
                 URL
               </th>
               <th scope="col" class="text-sm font-medium text-black px-6 py-4">
                 Action
               </th>
             </tr>
           </thead class="border-b">
           <tbody>
             @foreach ($videos as $video)
             <tr class="border-b bg-white boder-gray-900">
               <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                 {{ $loop->iteration }}
               </td>
               <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                 <img src="{{ asset('storage/'. $video->thumbnail) }}" alt="" width="100">
               </td>
               <td class="text-sm text-black font-medium px-6 py-4 whitespace-nowrap">
                 <a href="https://youtube.com/shorts/{{ $video->url }}" target="_blank">
                  https://youtube.com/shorts/{{ $video->url }}
                 </a>
               </td>
               <td class="text-sm text-black font-light px-6 py-4 whitespace-nowrap">
                 <form action="{{ route('videos.destroy', $video->id) }}" method="post">
                   @csrf
                   @method('delete')
                   <button type="submit" class="inline-block px-6 py-4 bg-red-600 text-black font-medium leading-tight  rounded-lg shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" onclick="return confirm('Are you sure?')">Delete</button> 
                 </form>
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