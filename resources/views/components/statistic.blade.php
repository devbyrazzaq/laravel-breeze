<div class="border-b">
    <x-container>
        <div class="flex justify-between items-center">
            <div class="flex">
                <a href="{{ route('profile.info', $user->username) }}" class="px-10 py-3 text-center border-r border-l">
                    <div class="text-2xl font-semibold">{{ $user->statuses->count()  }}</div>
                    <div class="uppercase text-xs text-gray-600">Status</div>
                </a>
                <a href="{{ route('following.index', [$user->username, 'following']) }}" class="px-10 py-3 text-center border-r">
                    <div class="text-2xl font-semibold">{{ $user->follows->count()  }}</div>
                    <div class="uppercase text-xs text-gray-600">Following</div>
                </a>
                <a href="{{ route('following.index', [$user->username, 'follower']) }}" class="px-10 py-3 text-center border-r">
                    <div class="text-2xl font-semibold">{{ $user->followers->count() }}</div>
                    <div class="uppercase text-xs text-gray-600">Follower</div>
                </a>
            </div>

            <div class="">

                {{-- @if (Auth::id() !== $user->id) --}}
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
        </div>
    </x-container>  
</div>