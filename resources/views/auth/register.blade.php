<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
            </a>
        </x-slot>

        <!-- Showing OAuth Provider Name -->
        @if (session()->has('provider') && session()->has('provider_id'))
            <span class="block font-medium bg-indigo-100 text-indigo-600 rounded p-1 mb-3 text-center">
                Register with {{ucfirst(decrypt(session('provider')))}}
            </span>
        @endif

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')"/>

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $name ?? '')"
                         required autofocus/>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                         :value="old('email', $email ?? '')" required/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')"/>

                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="new-password"/>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')"/>

                <x-input id="password_confirmation" class="block mt-1 w-full"
                         type="password"
                         name="password_confirmation" required/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>

            <!-- Showing OAuth Provider Registration Buttons -->
            @if (!session()->has('provider') || !session()->has('provider_id'))
                <div class="flex flex-col space-y-5 mt-5 mb-2">
                    <div class="flex items-center justify-center space-x-2">
                        <span class="h-px bg-gray-400 w-14"></span>
                        <span class="font-normal text-gray-500">or register with</span>
                        <span class="h-px bg-gray-400 w-14"></span>
                    </div>
                    <div class="flex justify-center flex-wrap gap-3">
                        <x-socialbutton href="{{ route('oauth.redirect', 'facebook') }}" social="facebook"/>
                        <x-socialbutton href="{{ route('oauth.redirect', 'twitter') }}" social="twitter"/>
                        <x-socialbutton href="{{ route('oauth.redirect', 'linkedin') }}" social="linkedin"/>
                        <x-socialbutton href="{{ route('oauth.redirect', 'google') }}" social="google"/>
                        <x-socialbutton href="{{ route('oauth.redirect', 'github') }}" social="github"/>
                        <x-socialbutton href="{{ route('oauth.redirect', 'gitlab') }}" social="gitlab"/>
                        <x-socialbutton href="{{ route('oauth.redirect', 'bitbucket') }}" social="bitbucket"/>
                    </div>
                </div>
            @endif
        </form>
    </x-auth-card>
</x-guest-layout>
