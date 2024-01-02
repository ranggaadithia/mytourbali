<x-app-layout>
 <h1 class="text-3xl font-medium text-center my-5">Upload Foto</h1>

 <form action="{{ route('photo.store') }}" method="POST" enctype="multipart/form-data" class="my-4 text-center py-4 bg-gray-400">
  @csrf
  <div class="w-1/2 mx-auto mb-4">
   <img class="img-preview-cover object-cover">
 </div>

 <div class="flex justify-center">
  <input type="file" name="photos[]" id="image_cover" onchange="imagePreviewCover();" multiple>
  <button type="submit" class="px-3 py-2 bg-emerald-700 text-white font-semibold rounded-lg">Simpan</button>
 </div>
 </form>

 <div class="flex flex-row flex-wrap">
 @foreach ($photos as $photo)
 <div class="rounded-xl shadow-lg relative flex flex-col justify-between items-center h-44 overflow-hidden w-36 mx-4">
  <img src="{{ asset('storage/'. $photo->image) }}" alt="" class="object-cover">
  <form action="{{ route('photo.destroy', $photo->id) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="absolute inset-0 text-red-800 font-bold text-xl ">Delete</button>
  </form>
</div>
 @endforeach
 </div>
 {{ $photos->links() }}
</x-app-layout>