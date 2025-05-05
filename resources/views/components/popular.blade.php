<div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Popular Courses</h2>
        <div class="space-y-4">
            @foreach($aktivitas as $item)
                <div class="bg-gray-100 rounded-md px-4 py-3 flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-600 font-semibold">{{ $item['status'] }}</p>
                        <p class="text-base font-medium text-gray-800">{{ $item['judul'] }}</p>
                    </div>
                    <a href="{{ $item['link'] }}" class="text-blue-600 hover:underline text-sm font-medium">Enroll</a>
                </div>
            @endforeach
        </div>
    </div>
