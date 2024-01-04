<x-app-layout>
 <h1 class="text-black text-3xl font-medium text-center my-5">Add Video</h1>
   <div class="container mx-auto w-2/3 bg-white p-5 rounded-md">
     <form action="{{ route('videos.store') }}" method="post" enctype="multipart/form-data">
       @csrf
       <div class="max-w-36">
         <x-input-label for="url" :value="__('URL')" />
         <x-text-input id="url" class="block mt-2 pl-1 py-2 w-full" type="text" name="url" :value="old('url')" required autofocus autocomplete="off" />
         <x-input-error :messages="$errors->get('url')" class="mt-2" />
       </div>
       <div class="max-w-36 mt-3">
         <div class="w-1/5 ">
           <img class="img-preview-cover object-cover">
         </div>
         <x-input-label for="thumbnail" :value="__('Thumbnail (250 x 416)')" />
         <input type="file" name="thumbnail" id="image_cover" onchange="imagePreviewCover();">
         <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
       </div>
       <div class="max-w-36 mt-3 text-center">
         <button type="submit" class="button">Submit</button>
       </div>
     </form>
 
   </div>
 </x-app-layout>