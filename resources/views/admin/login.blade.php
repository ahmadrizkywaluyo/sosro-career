<x-guest-layout>
<form method="POST" action="{{ route('admin.login.submit') }}">
    @csrf

    <!-- Logo Perusahaan -->
    <div class="flex justify-center">
        <img src="{{ asset('assets/images/SGS Logo-Color.png') }}" 
            alt="Logo Sinar Sosro Gunung Slamat" 
            class="w-50 h-50 object-contain mb-4">
            {{-- class="w-44 h-45 object-contain mb-4"> --}}
    </div>

    <div class="mb-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" name="email" type="email" required autofocus class="block mt-1 w-full" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div class="mb-4">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input id="password" name="password" type="password" required class="block mt-1 w-full" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <div class="flex items-center justify-between">
        <label class="inline-flex items-center">
            <input type="checkbox" name="remember" class="rounded border-gray-300">
            <span class="ml-2 text-sm text-gray-600">Remember</span>
        </label>

        <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:underline">
            Forgot password?
        </a>
    </div>

    <div class="mt-6">
        <button type="submit" class="w-full px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md font-semibold">
            Login Admin
        </button>
    </div>
</form>

</x-guest-layout>
