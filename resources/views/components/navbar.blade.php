<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-20 items-center">
            <div class="flex items-center space-x-3">
                <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}">
                    <img src="{{ asset('images/learnify-logo.png') }}" alt="Logo" class="h-[170px] w-auto">
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-6">
                <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}" class="text-gray-700 hover:text-[#704FE6] text-sm font-medium">Dashboard</a>
                <a href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}" class="text-gray-700 hover:text-[#704FE6] text-sm font-medium">Pengelolaan</a>
                <a href="{{ route('profile', ['username' => request()->query('username')]) }}" class="text-gray-700 hover:text-[#704FE6] text-sm font-medium">Profile</a>
            </div>

            <div class="md:hidden flex items-center">
                <button id="menu-toggle" class="text-gray-600 hover:text-[#2d3e50] focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="md:hidden hidden flex flex-col bg-gray-100 rounded-lg shadow-md mt-3 py-3 px-4 space-y-3 transition-all duration-300 ease-in-out">
            <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}" class="block text-gray-700 hover:text-[#704FE6] text-base font-medium">Dashboard</a>
            <a href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}" class="block text-gray-700 hover:text-[#704FE6] text-base font-medium">Pengelolaan</a>
            <a href="{{ route('profile', ['username' => request()->query('username')]) }}" class="block text-gray-700 hover:text-[#704FE6] text-base font-medium">Profile</a>
        </div>
    </div>
</nav>

<script>
    const toggleBtn = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
