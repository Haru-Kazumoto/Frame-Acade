<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Courses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg mt-5">
                <div class="p-6">
                    {{-- <x-search-input></x-search-input> --}}
                    @foreach($courses as $course)
                        <div class="mt-5">
                            <div class="border border-gray-500 p-5 rounded-lg">
                                <div class="flex flex-col gap-3 items-center sm:flex-row">
                                    <img src={{ $course->logo }} alt="" class="m-1 mx-7 object-cover w-[100px] sm:w-[70px]" 
                                    {{-- width="70px" --}}
                                    />
                                    <div class="flex-1">
                                        <div class="text-[30px] font-extrabold mb-10 flex flex-row"> {{ $course->name }}</p></div>
                                        <div class="text-sm mt-[-20px]">
                                            {{ $course->description }}
                                        </div>
                                        <div class="text-sm mt-2 text-gray-400">Type: {{ $course->type }}</div>
                                    </div>
                                    <a
                                        href="{{ url("/course/".$course->id) }}"
                                        class="inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                        Start Learn!
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
