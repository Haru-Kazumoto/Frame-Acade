<x-app-layout>
    <x-slot name="header" class="fixed">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your certification') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg mt-5 w-[45rem] mx-auto px-6 py-4 text-gray-800">
                <div class="px-[1rem] border-b-2 border-black p-[1rem] flex gap-[2rem]  items-center">
                    <img src="/image/code.svg" alt="code" class="w-[50px] h-[30px]">
                    <h1 class="font-extrabold text-[20px]">Backend certification</h1>
                </div>
                <div class="px-[1rem] border-b-2 border-black p-[1rem] flex gap-[2rem]  items-center">
                    <img src="/image/code.svg" alt="code" class="w-[50px] h-[30px]">
                    <h1 class="font-extrabold text-[20px]">Learn minimum 3 course of Backend framework.</h1>
                </div>
                <div class="px-[1rem] p-[1rem] flex gap-[2rem]  items-center">
                    <img src="/image/card_membership.svg" alt="code" class="w-[50px] h-[30px]">
                    <h1 class="font-extrabold text-[20px]">Get your certificate!</h1>
                </div>
            </div>

            <div class="bg-white shadow-sm sm:rounded-lg mt-5 w-[45rem] mx-auto px-6 py-4">
                <div class="px-[1rem] border-b-2 border-black p-[1rem] flex gap-[2rem]  items-center">
                    <img src="/image/code.svg" alt="code" class="w-[50px] h-[30px]">
                    <h1 class="font-extrabold text-[20px]">Frontend certification</h1>
                </div>
                <div class="px-[1rem] border-b-2 border-black p-[1rem] flex gap-[2rem]  items-center">
                    <img src="/image/code.svg" alt="code" class="w-[50px] h-[30px]">
                    <h1 class="font-extrabold text-[20px]">Learn minimum 3 course of Frontend framework.</h1>
                </div>
                <div class="px-[1rem] p-[1rem] flex gap-[2rem]  items-center">
                    <img src="/image/card_membership.svg" alt="code" class="w-[50px] h-[30px]">
                    <h1 class="font-extrabold text-[20px]">Get your certificate!</h1>
                </div>
            </div>

        </div>
</x-app-layout>
