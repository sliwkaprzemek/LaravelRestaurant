<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="flex m-2 p-2">
                <a href="{{route('admin.menus.index')}}" class="px-4 py-2 bg-gray-500 hover:bg-gray-700 rounded-lg text-white">Powrót</a>
            </div>

            <div class="m-2 p-2 bg-slate-100">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{route('admin.menus.store')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700"> Nazwa </label>
                        <div class="mt-1">
                          <input type="text" id="name" name="name" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                          @error('name')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      <div class="sm:col-span-6">
                        <label for="image" class="block text-sm font-medium text-gray-700"> Obraz </label>
                        <div class="mt-1">
                          <input type="file" id="image" name="image" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                          @error('image')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      <div class="sm:col-span-6">
                        <label for="price" class="block text-sm font-medium text-gray-700"> Cena </label>
                        <div class="mt-1">
                          <input type="number" min="0.00" max="10000.00" id="price" name="price" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                          @error('price')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      <div class="sm:col-span-6 pt-5">
                        <label for="description" class="block text-sm font-medium text-gray-700">Opis</label>
                        <div class="mt-1">
                          <textarea id="description" rows="3" name="description" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                          @error('description')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                          <label for="categories" class="block text-sm font-medium text-gray-700">Kategorie</label>
                          <div class="mt-1">
                            <select id="categories" name="categories[]" class="form-multiselect block w-full mt-1 rounded-md"multiple>
                              @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach
                            </select>
                          </div>
                      </div>
                      <div class="mt-6 p-2">
                      <button type="submit" class="px-4 py-2 bg-gray-500 hover:bg-gray-700 rounded-lg text-white">Zapisz</button>
                      </div>
                    </form>
                  </div>
                  
            </div>

        </div>
    </div>
</x-admin-layout>
