<x-layout>
    <x-slot:title>Clients</x-slot:title>
    <x-slot:description></x-slot:description>
    <x-slot:actions>
        <a href="{{route('clients.create')}}" class="bg-slate-800 text-white px-2 py-1 text-sm hover:bg-slate-700">Create</a>
    </x-slot:actions>
    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                <thead class="text-left">
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">First name</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Last name</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Created at</th>
                </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                 @foreach ( $clients as $client)
                <tr>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$client->first_name}}</td>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{$client->last_name}}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{$client->created_at}}</td>
                    <td>
                        <div class="grid grid-cols-2">
                            <a href="{{route('clients.edit', $client)}}" class="font-medium">
                                Edit
                            </a>
                            <form action="{{route('clients.destroy', $client)}}" method="POST">
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
            {{$clients->links()}}
</x-layout>