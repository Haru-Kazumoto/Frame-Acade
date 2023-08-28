<x-app-layout>
    <x-slot name="header" class="fixed">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your certification') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg mt-5  mx-auto px-6 py-4 text-gray-800">
                <div class="px-[1rem] border-b-2 border-black flex-col p-[1rem] flex gap-[0.5rem]  items-center ss:flex-row ss:gap-[2rem]">
                    <img src="/image/code.svg" alt="code" class="w-[50px] h-[30px]">
                    <h1 class="font-extrabold text-[20px]">Backend certification</h1>
                </div>
                <div class="px-[1rem] border-b-2 flex-col border-black p-[1rem] flex gap-[0.5rem]  items-center ss:flex-row ss:gap-[2rem]">
                    <div class="w-[50px] h-[30px] text-black text-[25px] font-extrabold">0/3</div>
                    <h1 class="font-extrabold text-[20px]">Learn minimum 3 course of Backend framework.</h1>
                </div>
                <div class="px-[1rem] p-[1rem] flex flex-col justify-between  ss:flex-row">
                    <div class="flex flex-col items-center gap-[0.5rem] ss:flex-row ss:gap-[2rem]">
                        <img src="/image/card_membership.svg" alt="code" class="w-[50px] h-[30px]">
                        <h1 class="font-extrabold text-[20px]">Get your certificate!</h1>
                    </div>
                    <a href="/reward" class="bg-[#F6B21B] py-[5px]  w-[10rem] h-[2rem] text-center max-ss:mx-auto px-[10px] rounded-lg disabled:opacity-50 max-ss:my-[1rem]">Download
                    </a>
                </div>
            </div>

            <div class="bg-white shadow-sm sm:rounded-lg mt-5  mx-auto px-6 py-4 text-gray-800">
                <div class="px-[1rem] border-b-2 border-black flex-col p-[1rem] flex gap-[0.5rem]  items-center ss:flex-row ss:gap-[2rem]">
                    <img src="/image/code.svg" alt="code" class="w-[50px] h-[30px]">
                    <h1 class="font-extrabold text-[20px]">Frontend certification</h1>
                </div>
                <div class="px-[1rem] border-b-2 flex-col border-black p-[1rem] flex gap-[0.5rem]  items-center ss:flex-row ss:gap-[2rem]">
                    <div class="w-[50px] h-[30px] text-black text-[25px] font-extrabold">0/3</div>
                    <h1 class="font-extrabold text-[20px]">Learn minimum 3 course of Backend framework.</h1>
                </div>
                <div class="px-[1rem] p-[1rem] flex flex-col justify-between  ss:flex-row">
                    <div class="flex flex-col items-center gap-[0.5rem] ss:flex-row ss:gap-[2rem]">
                        <img src="/image/card_membership.svg" alt="code" class="w-[50px] h-[30px]">
                        <h1 class="font-extrabold text-[20px]">Get your certificate!</h1>
                    </div>
                    <a href="/reward" class="bg-[#F6B21B] py-[5px]  w-[10rem] h-[2rem] text-center max-ss:mx-auto px-[10px] rounded-lg disabled:opacity-50 max-ss:my-[1rem]">Download
                    </a>
                </div>
            </div>

        </div>
</x-app-layout>
