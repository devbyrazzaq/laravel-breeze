<x-app-layout>

    <x-profile :user="$user"/>

    <x-statistic :user="$user"/>

    <x-container>
        <div class="grid grid-cols-2 mt-5">
            <x-following :users="$follows"/>
        </div>
    </x-container>
</x-app-layout>