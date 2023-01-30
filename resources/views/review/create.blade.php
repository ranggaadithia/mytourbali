<x-app-layout>
  <h1 class="text-white text-3xl font-medium text-center my-5">Add Reviews</h1>
    <div class="container mx-auto w-2/3 bg-slate-700 p-5 rounded-md">
      <form action="/review" method="post" enctype="multipart/form-data">
        @csrf
        <div class="max-w-36">
          <x-input-label for="name" :value="__('Name')" />
          <x-text-input id="name" class="block mt-2 pl-1 py-2 w-full" type="name" name="name" :value="old('name')" required autofocus autocomplete="off" />
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="max-w-36">
          <x-input-label for="name" :value="__('Stars')" />
          <input type="number" min="1" max="5" name="stars" id="stars">
        </div>
        <div class="max-w-36 mt-3">
          <div class="w-1/3">
            <img class="img-preview object-cover">
          </div>
          <x-input-label for="image" :value="__('Image')" />
          <input type="file" name="image" id="image" onchange="imagePreview();">
          <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>
        <div class="max-w-36 mt-5 trix-content rounded">
          <div class="max-w-36 mt-5">
            <x-input-label for="description" :value="__('Description')" />
            <textarea
              class="
                form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-50
                bg-gray-900 bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-50 focus:bg-gray-900 focus:border-blue-600 focus:outline-none
              "
              id="description"
              name="description"
              rows="3"
            ></textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
          </div>
        </div>
        <div class="max-w-36 mt-3 text-center">
          <button type="submit" class="button">Next</button>
        </div>
      </form>
    </div>
  </x-app-layout>