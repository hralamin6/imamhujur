<div class="flex flex-col  md:flex-row md:space-x-6" >
    {{--    @if(auth()->id()==1)--}}
    <div class="px-4 py-4 mx-auto border shadow-md bg-white w-full mb-3">
        <div class="border-t border-b divide-y ">
            @foreach ($conversations as $conversation)
                @if(auth()->id() !=$selectedConversation->receiver_id)
                    <div class="flex my-1 items-center px-2 {{ $conversation->id === $selectedConversation->id ? 'py-2 bg-blue-300 ' : '' }}">
                        <a wire:click.prevent="viewMessage({{ $conversation->id }})">
                            <img class="rounded-full w-10 h-10" src="https://www.gravatar.com/avatar/{{md5($conversation->receiver->email)}}?d=mp"/>
                        </a>
                        <div class="pl-2">
                            <div class="font-semibold">
                                <a class="hover:underline" wire:click.prevent="viewMessage({{ $conversation->id }})">{{ $conversation->receiver->name }}</a>
                            </div>
                            <div class="text-xs text-gray-500">{{ \Illuminate\Support\Str::limit(@$conversation->messages->last()->body, 25) }}</div>
                        </div>
                                    @if($selectedConversation->messages->last()->user_id!=auth()->id())
                        <span class="mx-auto text-red-700">{{$conversation->messages()->whereStatus(0)->count()}}</span>
                        @endif
                        <div class="text-gray-600 ml-auto">
                            <div class="text-sm">{{ $conversation->messages->last()?->created_at->format('d/m/Y') }}</div>
                            @if(Cache::has('is_online' . $conversation->receiver->id))
                                <div class="text-xs text-blue-500">Online</div>
                            @else
                                <span class="fa fa-circle chat-offline"></span>
                                <span class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($conversation->receiver->last_seen)->diffForHumans() }}</span>
                            @endif
                        </div>
                    </div>
                @else
                    <div class="flex my-1 items-center px-2 {{ $conversation->id === $selectedConversation->id ? 'py-2 bg-blue-300 ' : '' }}">
                        <a wire:click.prevent="viewMessage({{ $conversation->id }})">
                            <img class="rounded-full w-10 h-10" src="https://www.gravatar.com/avatar/{{md5($conversation->sender->email)}}?d=mp"/>
                        </a>
                        <a href="">
                            <div class="pl-2">
                                <div class="font-semibold">
                                    <a class="hover:underline" wire:click.prevent="viewMessage({{ $conversation->id }})">{{ $conversation->sender->name }}</a>
                                </div>
                                <div class="text-xs text-gray-500">{{ \Illuminate\Support\Str::limit(@$conversation->messages->last()->body, 25) }}</div>
                            </div>
                                        @if($selectedConversation->messages->last()->user_id!=auth()->id())
                            <span class="mx-auto text-red-700">{{$conversation->messages()->whereStatus(0)->count()}}</span>
                            @endif
                            <div class="text-gray-600 ml-auto">
                                <div class="text-sm">{{ $conversation->messages->last()?->created_at->format('d/m/Y') }}</div>
                                @if(Cache::has('is_online' . $conversation->sender->id))
                                    <div class="text-xs text-blue-500">Online</div>
                                @else
                                    <span class="fa fa-circle chat-offline"></span>
                                    <span class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($conversation->sender->last_seen)->diffForHumans() }}</span>
                                @endif
                            </div>

                        </a>
                    </div>
                @endif

            @endforeach
        </div>
    </div>
    {{--    @endif--}}
    <div class="w-full max-h-xl flex flex-col border shadow-md bg-white">
        <div class="flex items-center justify-between border-b p-2" >
            <!-- user info -->
            @if(auth()->id() !=$selectedConversation->receiver_id)

            <div class="flex items-center">
                <img class="rounded-full w-10 h-10"
                     src="https://www.gravatar.com/avatar/{{md5($selectedConversation->receiver->email)}}?d=mp" />
                <div class="pl-2">
                    <div class="font-semibold">
                        <a class="hover:underline" href="#">{{ $selectedConversation->receiver->name }}</a>
                    </div>
                    @if(Cache::has('is_online' . $conversation->receiver->id))
                        <div class="text-xs text-blue-500">Online</div>
                    @else
                        <span class="fa fa-circle chat-offline"></span>
                        <span class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($conversation->receiver->last_seen)->diffForHumans() }}</span>
                    @endif
                </div>
            </div>

            @else
                <div class="flex items-center">
                    <img class="rounded-full w-10 h-10"
                         src="https://www.gravatar.com/avatar/{{md5($selectedConversation->sender->email)}}?d=mp" />
                    <div class="pl-2">
                        <div class="font-semibold">
                            <a class="hover:underline" href="#">{{ $selectedConversation->sender->name }}</a>
                        </div>
                        @if(Cache::has('is_online' . $conversation->sender->id))
                            <div class="text-xs text-blue-500">Online</div>
                        @else
                            <span class="fa fa-circle chat-offline"></span>
                            <span class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($conversation->sender->last_seen)->diffForHumans() }}</span>
                        @endif
                    </div>
                </div>
                @endif

            {{--            <div>--}}
            {{--                <a class="inline-flex hover:bg-indigo-50 rounded-full p-2" href="#">--}}
            {{--                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
            {{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
            {{--                              d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />--}}
            {{--                    </svg>--}}
            {{--                </a>--}}

            {{--                <button class="inline-flex hover:bg-indigo-50 rounded-full p-2" type="button">--}}
            {{--                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
            {{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
            {{--                    </svg>--}}
            {{--                </button>--}}
            {{--            </div>--}}
        </div>

        <div class="flex-1 px-4 py-4 overflow-y-auto" id="messagess" wire:poll.5555>
            <!-- chat message -->

            @foreach ($selectedConversation->messages as $message)
                <div class="flex items-center {{ $message->user_id != auth()->id() ? '' : 'flex-row-reverse' }} mb-2 gap-4">
                    {{--                    <div class="flex-none flex flex-col items-center space-y-1">--}}
                    {{--                        <img class="rounded-full w-10 h-10" src="https://www.gravatar.com/avatar/{{md5($message->user->email)}}?d=mp" />--}}
                    {{--                    </div>--}}
                    <div class="">

                        <div class="{{ $message->user_id != auth()->id() ? 'bg-indigo-100 text-gray-800' : 'bg-indigo-500 text-white' }} py-1 px-3 rounded-lg mb-2 relative">
                            <div>{{ $message->body }}</div>
                            <div class="absolute {{ $message->user_id != auth()->id() ? 'left-0 -translate-x-1/2 bg-indigo-100' : 'right-0 translate-x-1/2 bg-indigo-500' }}  top-1/2 transform rotate-45 w-2 h-2"></div>
                        </div>
                        <img class="max-h-36 w-96" src="{{$message->getFirstMediaUrl('message')}}" />

                    </div>
                    <a wire:click.prevent="deleteMessage({{$message}})" class="text-red-700 cursor-pointer p-1">X</a>
                    <span class="block {{ $message->user_id != auth()->id() ? ' ml-auto' : ' mr-auto' }} text-xs">{{ $message->created_at->format('d-m-y h:i a') }}</span>
                </div>
            @endforeach
            @if($selectedConversation->messages->last()->user_id==auth()->id())
                <div class="float-right">
                    @if($selectedConversation->messages->last()->status==0)
                        <div class="mr-auto text-xs text-gray-400">sent</div>
                    @else
                        <div class="ml-auto">
                            @if(auth()->id() !=$selectedConversation->receiver_id)

                                <img class="rounded-full w-4 h-4" src="https://www.gravatar.com/avatar/{{md5($selectedConversation->receiver->email)}}?d=mp" />

                            @else
                                <img class="rounded-full w-4 h-4" src="https://www.gravatar.com/avatar/{{md5($selectedConversation->sender->email)}}?d=mp" />
                            @endif
                        </div>
                    @endif
                </div>

            @endif
        </div>

        <form action="" wire:submit.prevent="addMessage">
            <div class="flex items-center border-t p-2">
                <label class="block mt-3">
                    <div class="list-inline flex justify-between"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                        <label class="cursor-pointer flex justify-content-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                            </svg>
                            <input type="file" class="hidden" wire:model.lazy="image">
                        </label>
                        <div class="col-md-4 list-inline-item" x-show="isUploading">
                            <progress max="100" x-bind:value="progress"></progress>
                        </div>
                    </div>
                </label>
                @error('image')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                <div class="w-full mx-2 @error('body') is-invalid @enderror">
                    <input hidden type="file" id="file">
                    <input wire:model.lazy="body" class="w-full rounded-full border border-gray-200" type="text" value="" placeholder="Aa" autofocus />
                </div>
                    <div>
                    <button class="inline-flex hover:bg-indigo-50 rounded-full p-2" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </button>
                </div>
            </div>
            <span class="px-12">@error('body')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror</span>
        </form>

    </div>

    <!-- component -->


    <script>
        const el = document.getElementById('messagess')
        el.scrollTop = el.scrollHeight
    </script>




</div>

