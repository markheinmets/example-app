<x-layout>
    <x-slot:title>Add Title</x-slot:title>
    <x-slot:description></x-slot:description>
            <form action="{{route('books.store')}}" method="POST">
                @csrf
                <div class="max-w-sm p-2 flex flex-col gap-2">
                    <div>
                    <label for="title" class="block text-xs font-medium text-gray-700"> Title </label>

                    <input
                        type="text"
                        id="title"
                        placeholder="John"
                        name="title"
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                    />
                    @error('title')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                    <label for="release_date" class="block text-xs font-medium text-gray-700"> Release date </label>

                    <input
                        type="text"
                        id="release_date"
                        placeholder="0000"
                        name="release_date"
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                    />
                    @error('release_date')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                    <label for="language" class="block text-xs font-medium text-gray-700"> Language </label>

                    <input
                        type="text"
                        id="language"
                        placeholder="est"
                        name="language"
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                    />
                    @error('language')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                    <label for="summary" class="block text-xs font-medium text-gray-700"> Summary </label>

                    <input
                        type="text"
                        id="summary"
                        placeholder="John"
                        name="summary"
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                    />
                    @error('summary')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                    <label for="price" class="block text-xs font-medium text-gray-700"> Price </label>

                    <input
                        type="text"
                        id="price"
                        placeholder="00"
                        name="price"
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                    />
                    @error('price')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                    <label for="stock_saldo" class="block text-xs font-medium text-gray-700"> Stock </label>

                    <input
                        type="text"
                        id="stock_saldo"
                        placeholder="00"
                        name="stock_saldo"
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                    />
                    @error('stock_saldo')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                    <label for="pages" class="block text-xs font-medium text-gray-700"> Pages </label>

                    <input
                        type="text"
                        id="pages"
                        placeholder="00"
                        name="pages"
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                    />
                    @error('pages')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                    <label for="type" class="block text-xs font-medium text-gray-700"> Condition </label>

                    <select name="type" class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm">
                        <option value="" disabled selected>Select a type</option>
                        <option value="new">New</option>
                        <option value="used">Used</option>
                        <option value="eBook">eBook</option>
                    </select>
                    @error('type')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <button class="bg-slate-800 px-3 py-2 text-sm text-white rounded-md hover:bg-slate-700" type="submit">Submit</button>
                </div>
            </form>
</x-layout>
