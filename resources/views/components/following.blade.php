

            @foreach ($users as $user)
                <x-card>
                    <div class="flex items-center">
                        <div class="flex-shirnk-0 mr-3">
                            <img class="w-10 h10 rounded-full" src="{{ $user->gravatar() }}" alt="{{ $user->name }}" srcset="">
                        </div>
                        <div class="">
                            <div class="font-semibold"><a href="{{ route('profile.info', $user->username) }}">{{ $user->name }}</a></div>
                            <div class="text-sm text-gray-600">
                                @if ($user->pivot)
                                    {{ $user->pivot->created_at->diffForHumans() }}
                                @endif
                                
                                @if (request()->routeIs('user.index'))
                                    
                                <div class="mt-2">

                                    @if (Auth::user()->isNot($user))
                                        <form action="{{ route('following.store', $user) }}" method="post">
                                            @csrf
                                            <x-primary-button>
                                            {{-- @if (Auth::user()->follows()->where('following_user_id', $user->id)->first()) --}}
                                                @if (Auth::user()->hasFollow($user))
                                                    Unfollow
                                                @else
                                                    Follow
                                                @endif
                                            </x-primary-button>
                                        </form>
                                    @else
                                        <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white capitalize tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Edit Profile</a>
                                    @endif
                                </div>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </x-card>
            @endforeach
