<x-guest-layout>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-indigo-100">

    <!-- REGISTER CARD -->
    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-[0_10px_30px_rgba(167,139,250,0.35)]">

        <!-- ICON + TITLE -->
        <div class="text-center mb-6">
            <div class="text-5xl mb-2">📝</div>
            <h2 class="text-2xl font-bold text-indigo-800">Create Account</h2>
            <p class="text-gray-500 text-sm">Sign up to get started</p>
        </div>

        <!-- FORM -->
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <!-- NAME -->
            <div>
                <x-input-label for="name" value="Name" />

                <x-text-input id="name"
                    class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"
                    type="text"
                    name="name"
                    :value="old('name')"
                    required
                    autofocus
                    autocomplete="name" />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- EMAIL -->
            <div>
                <x-input-label for="email" value="Email" />

                <x-text-input id="email"
                    class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autocomplete="username" />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- PASSWORD -->
            <div>
                <x-input-label for="password" value="Password" />

                <x-text-input id="password"
                    class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- CONFIRM PASSWORD -->
            <div>
                <x-input-label for="password_confirmation" value="Confirm Password" />

                <x-text-input id="password_confirmation"
                    class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- REGISTER BUTTON -->
            <button type="submit"
                class="w-full mt-2 px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                Register
            </button>

            <!-- LOGIN LINK -->
            <div class="text-center mt-4 text-sm text-gray-600">
                Already have an account?
                <a href="{{ route('login') }}" class="text-indigo-600 hover:underline font-medium">
                    Login
                </a>
            </div>

        </form>

    </div>

</div>

</x-guest-layout>
