<x-app-layout>
<h1 class="text-white text-3xl font-medium text-center my-5">Add Package</h1>
  <div class="container mx-auto w-2/3 bg-slate-700 p-5 rounded-md">
    <form action="/package" method="post" enctype="multipart/form-data">
      @csrf
      <div class="max-w-36">
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-2 pl-1 py-2 w-full" type="name" name="name" :value="old('name')" required autofocus autocomplete="off" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
      </div>
      <div class="max-w-36 mt-3">
        <x-input-label for="category_id" :value="__('Category')" />
        <div class="flex">
          @foreach ($categories as $category)
          <div class="form-check form-check-inline mr-3">
            <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="category_id" id="category_id_{{ $category->id }}" value="{{ $category->id }}">
            <label class="form-check-label inline-block text-white" for="category_id1">{{ $category->name }}</label>
          </div>
          @endforeach
        </div>
        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
      </div>
      <div class="max-w-36 mt-3">
        <div class="w-1/5 ">
          <img class="img-preview-cover object-cover">
        </div>
        <x-input-label for="image_cover" :value="__('Image Cover (250 x 416)')" />
        <input type="file" name="image_cover" id="image_cover" onchange="imagePreviewCover();">
        <x-input-error :messages="$errors->get('image_cover')" class="mt-2" />
      </div>
      
      <div class="max-w-36 mt-3">
        <div class="w-1/3">
          <img class="img-preview object-cover">
        </div>
        <x-input-label for="image" :value="__('Image (1080 x 2100)')" />
        <input type="file" name="image" id="image" onchange="imagePreview();">
        <x-input-error :messages="$errors->get('image')" class="mt-2" />
      </div>
      <x-input-label for="Description" :value="__('Description')" class="mt-3" />
      <div class="max-w-36 bg-white trix-content rounded">
        <input id="x" type="hidden" name="description" value="{{ old('description') }}">
        <trix-editor input="x"></trix-editor>
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
      </div>
      <div class="max-w-36 mt-3 text-center">
        <button type="submit" class="button">Next</button>
      </div>
    </form>

  </div>
</x-app-layout>