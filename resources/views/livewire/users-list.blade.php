    <div class="w-1/3 my-10">
        <div class="mx-auto mb-4">
            <h2 class="mt-8 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Users List</h2>
        </div>
        <form wire:submit="search" class="max-w-lg mx-auto">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input wire:model.live="query" type="search" id="default-search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search User(s)..." />
                <button type="submit"
                    class="absolute end-2.5 bottom-2.5 text-white bg-blue-700 hover:bg-blue-800 box-border border border-transparent focus:ring-4 focus:ring-blue-300 shadow-xs font-medium leading-5 rounded text-xs px-3 py-1.5 focus:outline-none">Search</button>
            </div>
        </form>

        <ul role="list" class="divide-y divide-white/5">
            @foreach ($users as $user)
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <img src="{{ $user->avatar ?? asset('img/default-profile.jpg') }}" alt=""
                            class="size-12 flex-none rounded-full bg-gray-800 outline -outline-offset-1 outline-white/10" />
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm/6 font-semibold text-gray-900">{{ $user->name }}</p>
                            <p class="mt-1 truncate text-xs/5 text-gray-500">{{ $user->email }}</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end self-center">
                        <p class="mt-1 text-xs/5 text-gray-400">Join {{ $user->created_at->diffForHumans() }}</time>
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>
        {{ $users->links() }}
    </div>
