<div class="border-b py-16">
    <x-container>
        <div class="flex">
            <div class="flex-shrink-0 mr-3">
                <img class="rounded-full w-16 h-16 border-2 border-blue-500 p-1" src="{{ $user->gravatar() }}" alt="{{ $user->name }}">
            </div>
            <div class="">
                <h1 class="font-semibold mb-3">{{ $user->name }}</h1>
                <div class="text-sm text-gray-500">
                    Joined {{ $user->created_at->diffForHumans() }}
                </div>
            </div>
        </div>
    </x-container>
</div>