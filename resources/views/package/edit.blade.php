<x-app-layout>  
  <h1 class="text-white text-3xl font-medium text-center my-5">Edit {{ $package->name }}</h1>
    <div class="container mx-auto w-2/3 bg-slate-700 p-5 rounded-md">
      <form action="{{ route('package.update', $package->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="max-w-36">
          <x-input-label for="name" :value="__('Name')" />
          <x-text-input id="name" class="block mt-2 pl-1 py-2 w-full" type="name" name="name" :value="old('name', $package->name)" required autofocus autocomplete="off" />
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="max-w-36 mt-3">
          @if ($package->image)
              <img src="{{ asset('storage/'. $package->image_cover) }}" class="w-1/3 image-preview">
          @else
            <img class="img-preview object-cover">
          @endif
          <x-input-label for="image_cover" :value="__('Image Cover (250 x 416)')" />
          <input type="file" name="image_cover" id="image_cover" onchange="imagePreviewCover()">
          <x-input-error :messages="$errors->get('image_cover')" class="mt-2" />
        </div>
        <div class="max-w-36 mt-3">
          @if ($package->image)
              <img src="{{ asset('storage/'. $package->image) }}" class="w-1/3 image-preview-cover">
          @else
            <img class="img-preview object-cover">
          @endif
          <x-input-label for="image" :value="__('Image (1080 x 2100)')" />
          <input type="file" name="image" id="image" onchange="imagePreview()">
          <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>
        <x-input-label for="Description" :value="__('Description')" class="mt-3" />
        <div class="max-w-36 bg-white trix-content rounded">
          <input id="x" type="hidden" name="description" value="{{ old('description', $package->description) }}">
          <trix-editor input="x"></trix-editor>
          <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
        <div class="max-w-36 mt-3 text-center">
          <button type="submit" class="button">Next</button>
        </div>
      </form>
  
    </div>
  </x-app-layout>