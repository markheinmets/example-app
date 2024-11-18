<x-layout>
    <x-slot:title>Add Author</x-slot:title>
    <x-slot:description></x-slot:description>
                    <form action="{{route('authors.store')}}" method="POST">
                @csrf
                <div class="max-w-sm p-2 flex flex-col gap-2">
                    <div>
                    <label for="first_name" class="block text-xs font-medium text-gray-700"> First name </label>

                    <input
                        type="text"
                        id="first_name"
                        placeholder="John"
                        name="first_name"
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                    />
                    @error('first_name')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                    <label for="last_name" class="block text-xs font-medium text-gray-700"> Last name </label>

                    <input
                        type="text"
                        id="last_name"
                        placeholder="Constatine"
                        name="last_name"
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                    />
                    @error('last_name')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <button class="bg-slate-800 px-3 py-2 text-sm text-white rounded-md hover:bg-slate-700" type="submit">Submit</button>
                </div>
            </form>
</x-layout>
