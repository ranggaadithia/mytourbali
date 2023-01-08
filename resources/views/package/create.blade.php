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
        <x-input-label for="image_cover" :value="__('Image Cover (250 x 416)')" />
        <input type="file" name="image_cover" id="image_cover">
        <x-input-error :messages="$errors->get('image_cover')" class="mt-2" />
      </div>
      <div class="max-w-36 mt-3">
        <x-input-label for="image" :value="__('Image (1080 x 2100)')" />
        <input type="file" name="image" id="image">
        <x-input-error :messages="$errors->get('image')" class="mt-2" />
      </div>
      <x-input-label for="Description" :value="__('Description')" class="mt-3" />
      <div class="max-w-36 bg-white trix-content rounded">
        <input id="x" type="hidden" name="description">
        <trix-editor input="x"></trix-editor>
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
      </div>
      <div class="max-w-36 mt-3 text-center">
        <button type="submit" class="button">Next</button>
      </div>
    </form>

  </div>
</x-app-layout>