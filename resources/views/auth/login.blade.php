<x-auth-layout title="Login" section_title="Welcome Back" section_description="Login with your account">
    @if (session('success'))
        <div class="bg-green-50 border border-green-500 text-green-700 px-3 py-2 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('auth.authenticate') }}" method="POST" class="flex flex-col gap-4 mt-4">
        @csrf
        @method('POST')
            
        @error('email')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

        <div class="flex flex-col gap-2">
            <label for="email" class="font-semibold text-sm">Email</label>
            <input type="email" id="email" name="email"
                class="px-3 py-2 border border-zinc-300 bg-slate-50"
                placeholder="Your Email" value="{{ old('email') }}">
        </div>

        <div class="flex flex-col gap-2">
            <label for="password" class="font-semibold text-sm">Password</label>
            <input type="password" id="password" name="password"
                class="px-3 py-2 border border-zinc-300 bg-slate-50"
                placeholder="Your Password">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded text-center mt-4 hover:bg-blue-600">
            <span>Login</span>
        </button>

        <p class="text-zinc-600 text-sm text-center mt-2">
            Don't have an account?
            <a href="{{ route('auth.register') }}" class="text-blue-500 font-semibold underline">
                Register Now
            </a>
        </p>
    </form>
</x-auth-layout>


