<form wire:submit.prevent="create" class="flex items-start space-x-2">
    Create Your Chat Room:
    <div class="flex flex-col">
        <input type="text" placeholder="chat room name"
               wire:model.defer="name"
               class="rounded-md p-2 shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        @if ($errors->has('name'))
            <span class="text-red-500 text-sm">
                {{ $errors->first('name') }}
            </span>
        @endif
    </div>
    <button type="submit"
            class="inline-flex items-center p-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900">
        Create
    </button>
</form>
