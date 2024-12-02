<x-layout>
    <x-slot:title>Edit Title</x-slot:title>
    <x-slot:description></x-slot:description>
            <form action="{{route('books.update', $book)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="max-w-sm p-2 grid grid-cols-3 gap-2">
                    <div class="col-span-3">
                    <label for="title" class="block text-xs font-medium text-gray-700"> Title </label>

                    <input
                        type="text"
                        id="title"
                        value={{$book->title}}
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
                        value={{$book->release_date}}
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
                        value={{$book->language}}
                        name="language"
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                    />
                    @error('language')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-span-3">
                    <label for="summary" class="block text-xs font-medium text-gray-700"> Summary </label>

                    <input
                        type="text"
                        id="summary"
                        value={{$book->summary}}
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
                        value={{$book->price}}
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
                        value={{$book->stock_saldo}}
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
                        value={{$book->pages}}
                        name="pages"
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                    />
                    @error('pages')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-span-3">
                    <label for="type" class="block text-xs font-medium text-gray-700"> Condition </label>
                    <select class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" 
                        name="type"
                        id="type">
                    @foreach ($types as $key => $value)
                        <option value="{{ $key }}" {{ $book->type === $key ? 'selected' : '' }}>
                            {{ $value }}</option>
                    @endforeach
                </select>
                    @error('type')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <button class="bg-slate-800 px-3 py-2 text-sm text-white rounded-md hover:bg-slate-700" type="submit">Submit</button>
                </div>
            </form>
</x-layout>