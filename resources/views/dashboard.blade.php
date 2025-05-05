@extends('layouts.app')

@section('title', 'Dashboard - Learnify')

@section('content')
<div class="max-w-6xl mx-auto px-4 space-y-6 mt-6 mb-24">

    <div class="bg-gradient-to-r from-purple-600 to-indigo-700 rounded-xl py-16 px-10 text-white shadow-lg">
        <h1 class="text-3xl md:text-4xl font-bold">Hello, {{$username}}! 👋</h1>
        <p class="mt-2 text-lg opacity-90">Ready to learn something amazing today?</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-3xl font-bold">{{ $overview['in_progress'] }}</p>
                    <p class="text-sm font-medium mt-1">Course in Progress</p>
                </div>
                <div class="bg-blue-700/20 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-br from-emerald-500 to-emerald-600 text-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-3xl font-bold">{{ $overview['completed'] }}</p>
                    <p class="text-sm font-medium mt-1">Course Completed</p>
                </div>
                <div class="bg-emerald-700/20 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-br from-amber-500 to-amber-600 text-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-3xl font-bold">{{ $overview['certificates'] }}</p>
                    <p class="text-sm font-medium mt-1">Certificates Earned</p>
                </div>
                <div class="bg-amber-600/20 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 5C2 3.89543 2.89543 3 4 3H16C17.1046 3 18 3.89543 18 5V8.14584C17.7001 7.87745 17.3641 7.64868 17 7.46776V5C17 4.44772 16.5523 4 16 4H4C3.44772 4 3 4.44772 3 5V13C3 13.5523 3.44772 14 4 14H11.2578C11.3336 14.1133 11.4145 14.223 11.5 14.3287V15H4C2.89543 15 2 14.1046 2 13V5Z" fill="white"/>
                        <path d="M18.5 11.5C18.5 12.4538 18.1185 13.3184 17.4998 13.9497L17.5 18C17.5 18.412 17.0296 18.6472 16.7 18.4L15.3 17.35C15.1222 17.2167 14.8778 17.2167 14.7 17.35L13.3 18.4C12.9704 18.6472 12.5 18.412 12.5 18V13.9495C11.8814 13.3182 11.5 12.4537 11.5 11.5C11.5 9.567 13.067 8 15 8C16.933 8 18.5 9.567 18.5 11.5ZM15 15C14.4629 15 13.9549 14.8794 13.5 14.6632V16.75L14.7428 16.0043C14.9011 15.9093 15.0989 15.9093 15.2572 16.0043L16.5 16.75V14.6632C16.0454 14.8792 15.5368 15 15 15ZM15 14C16.3807 14 17.5 12.8807 17.5 11.5C17.5 10.1193 16.3807 9 15 9C13.6193 9 12.5 10.1193 12.5 11.5C12.5 12.8807 13.6193 14 15 14Z" fill="white"/>
                        <path d="M5 6.5C5 6.22386 5.22386 6 5.5 6H14.5C14.7761 6 15 6.22386 15 6.5C15 6.77614 14.7761 7 14.5 7H5.5C5.22386 7 5 6.77614 5 6.5Z" fill="white"/>
                        <path d="M5.5 11C5.22386 11 5 11.2239 5 11.5C5 11.7761 5.22386 12 5.5 12H9.5C9.77614 12 10 11.7761 10 11.5C10 11.2239 9.77614 11 9.5 11H5.5Z" fill="white"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-br from-purple-800 to-purple-900 text-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-3xl font-bold">{{ $overview['favorites'] }}</p>
                    <p class="text-sm font-medium mt-1">Favorites</p>
                </div>
                <div class="bg-purple-900/20 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <x-popular :aktivitas="$aktivitas" />

</div>

@endsection
