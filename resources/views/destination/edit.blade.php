<x-app-layout>
  <h1 class="text-white text-3xl font-medium text-center my-5">Edit {{ $destination->name }}</h1>
  <div class="container mx-auto w-2/3 bg-slate-700 p-5 rounded-md">
    <form action="{{ route('destination.update', $destination->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="max-w-36">
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-2 pl-1 py-2 w-full" type="name" name="name" :value="old('name', $destination->name)" required autofocus autocomplete="off" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
      </div>
      <div class="max-w-36">
        <x-input-label for="order" :value="__('order')" />
        <input type="number" name="order" id="order" class="block mt-2 pl-1 py-2" value="{{ old('order', $destination->order) }}">
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
      </div>
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
        >{{ old('description', $destination->description) }}</textarea>
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
      </div>
      <x-input-label for="photos" :value="__('Photos')" class=" mt-5" />     
      <div class="max-w-36 bg-gray-900 bg-clip-padding
      border border-solid border-gray-300
      rounded">
          <input class="form-control
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
            m-0 focus:outline-none" type="file" id="formFileMultiple" name="photos[]" id="photos" multiple>
            <x-input-error :messages="$errors->get('photos')" class="mt-2" />
      </div>
      {!! Form::hidden("packageID", $destination->package_id) !!}
      <div class="text-center mt-5">
        <button type="submit" class="button">Save</button>
      </div>
    </form>
    <div class="flex flex-row flex-wrap">
    @if ($destination->photo)
      @foreach ($destination->photo as $photo)
      <div class="rounded-xl shadow-lg relative flex flex-col justify-between items-center h-44 overflow-hidden w-36 mx-4">
          <img src="{{ asset('storage/'. $photo->image) }}" alt="" class="object-cover">
          <form action="{{ route('photo.destroy', $photo->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="absolute inset-0 text-red-800 font-bold text-xl ">Delete</button>
          </form>
        </div>
        
      @endforeach
    @endif
    </div>  
  </div>
</x-app-layout>