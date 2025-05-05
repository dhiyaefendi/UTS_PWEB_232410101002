@extends('layouts.guest')

@section('title', 'Login - Learnify')

@section('content')
<div class="flex items-center justify-center bg-gray-100 p-10">
    <div class="bg-white w-full max-w-md rounded-2xl shadow-md p-8">
        <div class="flex flex-col items-center mb-6">
            <img src="{{ asset('images/learnify-logo.png') }}" alt="Logo" class="w-auto h-[120px] mb-2">
            <h2 class="text-2xl font-semibold text-gray-800 text-center">Masuk ke Learnify</h2>
            <p class="text-sm text-gray-500 text-center">Let's learn with Learnify</p>
        </div>

        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username <span class="text-red-500">*</span></label>
                <input type="text" id="username" name="username" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password <span class="text-red-500">*</span></label>
                <input type="password" id="password" name="password" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-blue-500 focus:border-blue-500">
            </div>

            <button type="submit" id="submitBtn" disabled
                class="w-full bg-gray-200 text-gray-400 py-2 rounded-xl font-semibold transition duration-150 cursor-not-allowed">
                Masuk
            </button>
        </form>
    </div>
</div>
<script>
    const username = document.getElementById('username');
    const password = document.getElementById('password');
    const submitBtn = document.getElementById('submitBtn');

    function checkInput() {
        if (username.value.trim() !== '' && password.value.trim() !== '') {
            submitBtn.disabled = false;
            submitBtn.classList.remove('bg-gray-200', 'text-gray-400', 'cursor-not-allowed');
            submitBtn.classList.add('bg-[#704FE6]', 'text-white', 'hover:bg-[#432f87]', 'cursor-pointer');
        } else {
            submitBtn.disabled = true;
            submitBtn.classList.add('bg-gray-200', 'text-gray-400', 'cursor-not-allowed');
            submitBtn.classList.remove('bg-[#704FE6]', 'text-white', 'hover:bg-[#432f87]', 'cursor-pointer');
        }
    }

    username.addEventListener('input', checkInput);
    password.addEventListener('input', checkInput);
</script>
@endsection
