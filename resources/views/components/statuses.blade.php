@foreach ($statuses as $status)
                            <x-card>
                                <div class="flex">
                                    <div class="flex-shirnk-0 mr-3">
                                        <img class="w-10 h10 rounded-full" src="{{ Auth::user()->gravatar() }}" alt="{{ $status->user->name }}" srcset="">
                                    </div>
                                    <div class="">
                                        <div class="font-semibold">{{ $status->user->name }}</div>
                                        <div class="leading-relaxed">
                                            {{ $status->body }}
                                        </div>
                                        <div class="text-sm text-gray-600">
                                            {{-- {{ $status->created_at->format("d F, Y") }} --}}
                                            {{ $status->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                            </x-card>
                             
                         @endforeach