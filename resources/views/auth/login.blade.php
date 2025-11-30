<x-guest-layout>

    {{-- <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-8 mt-10 space-y-6"> --}}

        <!-- Logo Perusahaan -->
        <div class="flex justify-center">
            <img src="{{ asset('assets/images/SGS Logo-Color.png') }}" 
                alt="Logo Sinar Sosro Gunung Slamat" 
                class="w-50 h-50 object-contain">
                {{-- class="w-44 h-45 object-contain mb-4"> --}}

        </div>

        {{-- <h2 class="text-2xl font-bold text-center text-gray-800">
            Login
        </h2> --}}

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
                <x-input-label for="email" value="Email" />
                <x-text-input id="email" type="email" name="email"
                    class="block mt-1 w-full"
                    :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password (SUDAH ADA FITUR INTIP) -->
            <div>
                <x-input-label for="password" value="Password" />

                <div class="relative">
                    <input id="password"
                        type="password"
                        name="password"
                        class="block mt-1 w-full border-gray-300 rounded-md pr-10"
                        required />

                    <!-- Tombol Mata -->
                    <button type="button"
                        onclick="togglePassword()"
                        class="absolute inset-y-0 right-3 flex items-center text-gray-600">
                        
                        <!-- Mata Tertutup -->
                        <svg id="eyeClose" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 
                            6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 
                            3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                        </svg>
                        
                        <!-- Mata Terbuka -->
                        <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-6 hidden">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 
                            4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>

                    </button>
                </div>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember -->
            <div class="flex items-center justify-between">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember"
                        class="rounded border-gray-300 text-red-600 focus:ring-red-500">
                    <span class="ml-2 text-sm text-gray-600">Ingatkan saya</span>
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                        class="text-sm text-gray-600 hover:text-gray-900 hover:underline">
                        Lupa password?
                    </a>
                @endif
            </div>

            <!-- Button -->
            <button type="submit"
                class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-md font-semibold">
                Masuk
            </button>
        </form>

        <!-- Links -->
        <div class="flex flex-col items-center space-y-2 pt-2">

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="text-sm text-red-600 hover:text-red-700 hover:underline font-semibold">
                    Belum punya akun? Daftar di sini
                </a>
            @endif

            <a href="{{ route('admin.login') }}"
                class="text-sm text-blue-600 hover:text-blue-700 underline font-semibold">
                Login sebagai Admin
            </a>
        </div>

    {{-- </div> --}}

    <!-- Script Intip Password -->
    <script>
        function togglePassword() {
            const pass = document.getElementById('password');
            const eyeOpen = document.getElementById('eyeOpen');
            const eyeClose = document.getElementById('eyeClose');

            if (pass.type === "password") {
                pass.type = "text";
                eyeClose.classList.add("hidden");
                eyeOpen.classList.remove("hidden");
            } else {
                pass.type = "password";
                eyeOpen.classList.add("hidden");
                eyeClose.classList.remove("hidden");
            }
        }
    </script>

</x-guest-layout>
