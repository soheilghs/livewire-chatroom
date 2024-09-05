@if ($messages->count())
    <div class="divide-y space-y-2 overflow-y-scroll"
         style="max-height: 500px">
        @foreach($messages as $message)
            <div class="pt-2">
                <div>
                    <span class="font-bold border-r border-gray-200 pr-2 mr-1">
                        {{ $message->user->name }}
                    </span>
                    <span class="text-gray-400">
                        {{ \Carbon\Carbon::parse($message->created_at)->ago() }}
                    </span>
                </div>

                <p>
                    {{ $message->body }}
                </p>
            </div>
        @endforeach
    </div>
@else
    <div class="text-gray-400">
        Waiting For First Message
    </div>
@endif
