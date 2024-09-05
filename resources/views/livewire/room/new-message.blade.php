<form wire:submit.prevent="newMessage"
      class="flex items-start space-x-3">
    <div class="flex flex-col w-full">
        <textarea class="rounded-md p-2 shadow-sm border-gray-300 w-full"
                  placeholder="Your Message" name="message"
                  wire:model="message"
                  rows="2" width="100%"></textarea>
        @if ($errors->has('message'))
            <span class="text-red-500 text-sm">
                {{ $errors->first('message') }}
            </span>
        @endif
    </div>
    <button class="bg-blue-500 text-white rounded p-2 px-4"
            type="submit">
        send
    </button>
</form>
