<x-app-layout>

    <x-profile :user="$user"/>

    <x-statistic :user="$user"/>

    <x-container>
        <div class="mt-5">
            <div class="grid grid-cols-3 gap-5">
                <x-following :users="$follows"/>
            </div>
        </div>
    </x-container>
</x-app-layout>