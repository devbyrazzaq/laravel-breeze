

        <div class="grid grid-cols-3 gap-5">
            @foreach ($users as $user)
                <x-card>
                    <div class="flex items-center">
                        <div class="flex-shirnk-0 mr-3">
                            <img class="w-10 h10 rounded-full" src="{{ $user->gravatar() }}" alt="{{ $user->name }}" srcset="">
                        </div>
                        <div class="">
                            <div class="font-semibold">{{ $user->name }}</div>
                            <div class="text-sm text-gray-600">{{ $user->pivot->created_at->diffForHumans() }}</div>
                        </div>
                    </div>
                </x-card>
            @endforeach
        </div>
