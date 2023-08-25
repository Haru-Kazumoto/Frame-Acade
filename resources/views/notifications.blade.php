<x-app-layout>
    <x-slot name="header" class="fixed">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notifications (') }} {{ __($countNotif) }} {{ __(')') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($notification as $notif)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 flex flex-col relative">
                    <h2 class="font-bold text-lg flex justify-end">{{ $notif->notifDate }}</h2>
                    <div>
                        <h2 class="font-bold text-lg flex">Title : {{ $notif->title }}</h2>
                        <h2 class="font-bold text-lg flex mb-5">Message : {{ $notif->message }}</h2>
                    </div>
                    <div class="border-t-2 border-black">
                    </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
