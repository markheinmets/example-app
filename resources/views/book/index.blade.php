<x-layout>
    <x-slot:title>Books</x-slot:title>
    <x-slot:description></x-slot:description>
    <x-slot:actions>
        <a href="{{route('books.create')}}" class="bg-slate-800 text-white px-2 py-1 text-sm hover:bg-slate-700">Create</a>
    </x-slot:actions>
    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                <thead class="text-left">
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Title</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Authors</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Release date</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Created at</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Type</th>
                </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                 @foreach ( $books as $book)
                <tr>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$book->title}}</td>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        @foreach ($book->authors as $author)
                        {{$author->full_name}}{{ !$loop->last ? ',' : '' }}
                        @endforeach
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{$book->release_date}}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{$book->created_at}}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{$book->type}}</td>
                    <td>
                        <div class="grid lg:grid-cols-2">
                            <a href="{{route('books.edit', $book)}}" class="font-medium">
                                Edit
                            </a>
                            <form action="{{route('books.destroy', $book)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="text-red-500 hover:underline">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{$books->links()}}
</x-layout>