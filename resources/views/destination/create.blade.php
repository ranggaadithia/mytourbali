<x-app-layout>
  <h1 class="text-white text-3xl font-medium text-center my-5">Add Destination for {{ $package->name }}</h1>
  <div class="container mx-auto w-2/3 bg-slate-700 p-5 rounded-md">
    <form action="{{ route('destination.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="max-w-36">
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-2 pl-1 py-2 w-full" type="name" name="name" :value="old('name')" required autofocus autocomplete="off" />
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
        ></textarea>
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
      </div>
      <div class="max-w-36">
        <x-input-label for="photos" :value="__('Photos')" />          
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
      </div>
      <x-input-error :messages="$errors->get('photos')" class="mt-2" />
      {!! Form::hidden('packageID', $package->id) !!}
      <div class="text-center mt-5">
        <button type="submit" class="button">Save</button>
      </div>
    </form>
  </div>
</x-app-layout>