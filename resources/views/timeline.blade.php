<x-app-layout>

    <x-container>
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-7">
                @foreach ($statuses as $status)
                    <div class="">
                        <div class="">
                            <img src="https://i.pravatar.cc/150" alt="{{ $status->user->name }}" srcset="">
                        </div>
                        <div class="">
                            <div class="">{{ $status->user->name }}</div>
                            <div class="">
                                {{ $status->body }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-span-5">
                Friend
            </div>
        </div>
    </x-container>

</x-app-layout>