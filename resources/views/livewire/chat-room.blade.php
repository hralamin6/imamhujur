<div
    class="mt-4 bg-white rounded-lg shadow-md p-6"
    x-data="{{ json_encode(["messageBody" => ""]) }}"
    x-init="
            Echo.join('demo')
                .listen('MessageSentEvent', (e) => {
                    @this.call('render')
                })
            ">

    <div class="flex flex-row flex-wrap border-b">
        <div class="text-gray-600 w-full mb-4">Members:</div>

        @forelse($here as $authData)
            <div class="px-2 py-1 text-white bg-blue-700 rounded mr-4 mb-4">
                {{ $authData['name'] }}
            </div>
        @empty
            <div class="py-4 text-gray-600">
                It's quiet in here...
            </div>
        @endforelse
    </div>
    @foreach($messages as $message)
            <div class="my-8">
                <div class="flex flex-row justify-between border-b border-gray-200">
                    <span class="text-gray-600">{{@$message->user->name}}</span>
                    <span class="text-gray-500 text-xs">{{@$message->created_at}}</span>
                </div>
                <div class="my-4 text-gray-800">{{@$message->body}}</div>
            </div>
    @endforeach
    <div
        class="flex flex-row justify-between"
    >
        <input class="mr-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            type="text" wire:model="body">
{{--        <input--}}
{{--            @keydown.enter="--}}
{{--                @this.call('sendMessage', messageBody)--}}
{{--                messageBody = ''--}}
{{--            "--}}
{{--            x-model="messageBody"--}}
{{--            class="mr-4 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"--}}
{{--            type="text"--}}
{{--            placeholder="Hello World!">--}}

        <button
            @click="
                @this.call('sendMessage', messageBody)
                messageBody = ''
            "
            class="btn btn-primary self-stretch"
        >
            Send
        </button>
    </div>
    @error('messageBody') <div class="error mt-2">{{ $message }}</div> @enderror
</div>
