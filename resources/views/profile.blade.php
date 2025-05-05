@extends('layouts.app')

@section('title', 'Profile - Learnify')

@section('content')
<div class="bg-gradient-to-r from-purple-600 to-indigo-700 text-white px-4 py-16 max-w-6xl mx-auto px-4 space-y-6 mt-6 mb-24 rounded-xl">
    <div class="max-w-3xl mx-auto bg-white/10 backdrop-blur-md rounded-2xl shadow-xl p-8 flex flex-col md:flex-row items-center space-y-8 md:space-y-0 md:space-x-8">

        <div class="relative w-36 h-36 rounded-full overflow-hidden bg-gray-200 flex items-center justify-center shadow-md">
            <svg class="w-20 h-20 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.5"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a8.25 8.25 0 0115 0"/>
            </svg>
        </div>

        <div class="flex-1 text-center md:text-left">
            <h1 class="text-3xl font-bold">{{ $username }}</h1>
            <div class="mt-4 text-gray-300 text-sm space-y-2 md:space-y-0 md:flex md:items-center md:space-x-6">

                <div class="flex items-center justify-center md:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 8c-1.104 0-2-.896-2-2s.896-2 2-2 2 .896 2 2-.896 2-2 2zM6 20h12v-1.5c0-2.485-5.03-3.75-6-3.75s-6 1.265-6 3.75V20z"/>
                    </svg>
                    <span>Bergabung sejak 2025</span>
                </div>

                <div class="flex items-center justify-center md:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M5 13l4 4L19 7"/>
                    </svg>
                    <span class="text-green-300">Online</span>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
