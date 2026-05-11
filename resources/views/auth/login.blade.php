
<x-guest-layout>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-indigo-100">

    <!-- LOGIN CARD -->
    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-[0_10px_30px_rgba(167,139,250,0.35)]">

        <!-- ICON + TITLE -->
        <div class="text-center mb-6">
            <div class="text-5xl mb-2">🎓</div>
            <h2 class="text-2xl font-bold text-indigo-800">Welcome Back</h2>
            <p class="text-gray-500 text-sm">Login to your Account</p>
        </div>

        <!-- SESSION STATUS -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- FORM -->
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            <!-- EMAIL -->
            <div>
                <x-input-label for="email" value="Email" />

                <x-text-input id="email"
                    class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- PASSWORD -->
            <div>
                <x-input-label for="password" value="Password" />

                <x-text-input id="password"
                    class="block mt-1 w-full rounded-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500"
                    type="password"
                    name="password"
                    required />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- REMEMBER + FORGOT PASSWORD -->
            <div class="flex items-center justify-between">

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input id="remember_me"
                        type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                        name="remember">

                    <label for="remember_me" class="ml-2 text-sm text-gray-600">
                        Remember me
                    </label>
                </div>

                <!-- Forgot Password -->
                @if (Route::has('password.request'))
                    <a class="text-sm text-indigo-600 hover:underline"
                        href="{{ route('password.request') }}">
                        Forgot password?
                    </a>
                @endif

            </div>

            <!-- LOGIN BUTTON -->
            <button type="submit"
                class="w-full mt-2 px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                Log in
            </button>

            <!-- REGISTER LINK -->
            @if (Route::has('register'))
                <div class="text-center mt-4 text-sm text-gray-600">
                    Don’t have an account yet?
                    <a href="{{ route('register') }}" class="text-indigo-600 hover:underline font-medium">
                        Register
                    </a>
                </div>
            @endif

        </form>

    </div>

</div>

</x-guest-layout>
