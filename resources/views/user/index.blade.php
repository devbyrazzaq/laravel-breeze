<x-app-layout>
    <x-container>
        <div class="grid grid-cols-4 gap-5 mt-5">
            <x-following :users="$users"></x-following>
            @foreach ($users as $user)
               
                
            @endforeach
        </div>
        <div class="mt-5">
            {{ $users->links() }}

        </div>
    </x-container>
</x-app-layout>