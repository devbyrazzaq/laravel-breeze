<x-app-layout>

    <x-container>
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-7">
                <div class="border p-5 rounded-xl">
                
                    <div class="space-y-6">
                         @foreach ($statuses as $status)
                             <div class="flex">
                                 <div class="flex-shirnk-0 mr-3">
                                     <img class="w-10 h10 rounded-full" src="https://i.pravatar.cc/150" alt="{{ $status->user->name }}" srcset="">
                                 </div>
                                 <div class="">
                                     <div class="font-semibold">{{ $status->user->name }}</div>
                                     <div class="leading-relaxed">
                                         {{ $status->body }}
                                     </div>
                                     <div class="text-sm text-gray-600">{{ $status->created_at->format("d F, Y") }}</div>
                                 </div>
                             </div>
                         @endforeach
                    </div>
                </div>
            </div>
            <div class="col-span-5">
                <div class="border p-5 rounded-xl">
                    <h1 class="font-semibold mb-5">Recently follows</h1>
                        <div class="space-y-6">
                            @foreach (Auth::user()->follows()->limit(5)->get() as $user)
                                <div class="flex items-center">
                                    <div class="flex-shirnk-0 mr-3">
                                        <img class="w-10 h10 rounded-full" src="https://i.pravatar.cc/150" alt="{{ $user->name }}" srcset="">
                                    </div>
                                    <div class="">
                                        <div class="font-semibold">{{ $user->name }}</div>
                                        <div class="text-sm text-gray-600">{{ $user->pivot->created_at->diffForHumans() }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </x-container>

</x-app-layout>