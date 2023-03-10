<x-app-layout>
    
    <x-profile :user="$user"/>
    
    <x-statistic :user="$user"/>

    <x-container>
        <div class="grid grid-cols-2 mt-5">
            <div class="space-y-6">
                <x-statuses :statuses="$statuses" />
            </div>
        </div>
    </x-container>
    
</x-app-layout>