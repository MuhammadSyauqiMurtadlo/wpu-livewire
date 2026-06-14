<div class="w-1/2 m-auto my-10">
    <h1 class="text-2xl font-semibold">{{ $title }}</h1>
    <p class="text-gray-500">Total Users: {{ $users->count() }}</p>
    <button wire:click="createUser" type="button"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-2 cursor-pointer">
        Create
    </button>

    <hr class="border-1 my-5">
    <h2 class="text-2xl font-semibold mb-2">Users List</h2>
    <ul class="list-disc">
        @foreach ($users as $user)
            <li class="rounded">
                <h2 class="text-lg font-semibold">{{ $user->name }}</h2>
                <p class="text-gray-500">{{ $user->email }}</p>
            </li>
        @endforeach
    </ul>
</div>
