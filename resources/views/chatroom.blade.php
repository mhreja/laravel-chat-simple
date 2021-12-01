<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chatroom') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="" id="messages_section"></div>
                <form action="{{route('message.send')}}" method="POST" id="messageForm">
                    <input type="text" id="receiver_id" name="receiver_id" placeholder="Receiver Id....">
                    <input type="text" id="message" name="message" placeholder="Type here....">
                    <button type="submit" class="inline-flex items-center px-4 py-3 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </div>

    
</x-app-layout>
