@extends('layouts.app')

@section('title', 'Courses - Learnify')

@section('content')
<div class="max-w-6xl mx-auto px-4 space-y-6 mt-6 bg-gradient-to-r from-purple-600 to-indigo-700 rounded-xl py-20 text-white">
    <div class="max-w-6xl w-full text-center px-4">
        <h1 class="text-3xl md:text-4xl font-bold mb-4">Our Courses</h1>
        <p class="text-md md:text-lg max-w-2xl mx-auto mb-6">
            Improve your digital skills with industry-based courses from Learnify.
        </p>
    </div>
</div>

<div class="w-full flex justify-center bg-gray-100 py-20">
    <div class="max-w-6xl w-full px-4 md:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($courses as $course)
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                    <img src="{{ asset('images/' . $course['gambar']) }}" alt="{{ $course['judul'] }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-lg font-semibold mb-2">{{ $course['judul'] }}</h2>
                        <p class="text-sm text-gray-700 mb-4">{{ $course['deskripsi'] }}</p>
                        <div class="flex justify-between text-sm text-gray-600 mt-auto">
                            <span>{{ $course['modul'] }} Moduls</span>
                            <span>{{ number_format($course['siswa']) }} Students</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
