<x-guest-layout>

    <div class="min-h-screen min-w-[35rem] flex flex-col items-center justify-center rounded-r-[35px] px-[2rem] max-lg:hidden gap-[3rem]"
        style="background-color: #697899;">
        <h1 class="text-white text-5xl">Let's Start Learn With</h1>
        <a href="/" class="w-[25rem]">
            <img src="{{ url('/Logo.png') }}" alt="logo" />
        </a>
    </div>

    <div class="flex flex-col justify-center mx-auto px-[2rem]">
        <div class="mb-24 mx-auto">
            <h1 class="text-5xl font-extrabold" style="color:#445069;">Sign In to </h1>
            <h1 class="text-5xl font-extrabold" style="color:#445069;">Frame<span style="color:#F6B21B;">Acade</span>
            </h1>
        </div>
        <div class="w-full mx-auto">

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex items-center  mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('register') }}">
                            {{ __('Register FrameAcade account?') }}
                        </a>
                    @endif

                    <x-primary-button class="ml-3">
                        {{ __('Login') }}
                    </x-primary-button>
                </div>
            </form>

        </div>
    </div>

</x-guest-layout>
