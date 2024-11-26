<x-layout>
    <x-slot:title>Edit Client</x-slot:title>
    <x-slot:description></x-slot:description>
        <form action="{{route('clients.update', $client)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="max-w-sm p-2 flex flex-col gap-2">
                <div>
                    <label for="first_name" class="block text-xs font-medium text-gray-700"> First name </label>
                    <input
                        type="text"
                        id="first_name"
                        placeholder="John"
                        name="first_name"
                        value={{ $client->first_name }}
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
                        placeholder="Doe"
                        name="last_name"
                        value="{{ $client->last_name }}"
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                    />
                    @error('last_name')
                        <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block text-xs font-medium text-gray-700"> Email </label>
                    <input
                        type="text"
                        id="email"
                        placeholder="Email"
                        name="email"
                        value={{ $client->email }}
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                    />
                    @error('email')
                            <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="username" class="block text-xs font-medium text-gray-700"> Username </label>
                    <input
                        type="text"
                        id="username"
                        placeholder="John"
                        name="username"
                        value={{ $client->username }}
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                    />
                    @error('username')
                            <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block text-xs font-medium text-gray-700"> Password </label>
                    <input
                        type="text"
                        id="password"
                        placeholder="John"
                        name="password"
                        value={{ $client->password }}
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                    />
                    @error('password')
                            <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="address" class="block text-xs font-medium text-gray-700"> Address </label>
                    <input
                        type="text"
                        id="address"
                        placeholder="John"
                        name="address"
                        value={{ $client->address }}
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                    />
                    @error('address')
                            <span class="text-xs text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <button class="bg-slate-800 px-3 py-2 text-sm text-white rounded-md hover:bg-slate-700" type="submit">
                    Submit
                </button>
                </div>
        </form>
</x-layout>
