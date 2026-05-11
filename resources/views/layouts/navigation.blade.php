<nav class="w-64 bg-white shadow-xl border-r border-indigo-100 min-h-screen fixed left-0 top-0 flex flex-col">

    <!-- BRAND -->
    <div class="p-6 border-b border-indigo-100">
        <h1 class="text-2xl font-bold text-indigo-700">🎓 StudentMS</h1>
        <p class="text-sm text-gray-500 mt-1">Admin Dashboard</p>
    </div>

    <!-- NAV LINKS -->
    <div class="flex-1 p-4 space-y-2">

        <a href="{{ route('dashboard') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl
           {{ request()->routeIs('dashboard') ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:bg-indigo-50' }}">
            🏠 Dashboard
        </a>

        <a href="{{ route('students.index') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl
           {{ request()->routeIs('students.*') ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:bg-indigo-50' }}">
            👨‍🎓 Students
        </a>

        <a href="{{ route('courses.index') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl
           {{ request()->routeIs('courses.*') ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:bg-indigo-50' }}">
            📚 Courses
        </a>

        <a href="{{ route('teachers.index') }}"
           class="flex items-center gap-3 px-4 py-3 rounded-xl
           {{ request()->routeIs('teachers.*') ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:bg-indigo-50' }}">
            👩‍🏫 Teachers
        </a>

    </div>

    <!-- USER DROPDOWN (FIXED POSITION - BOTTOM SIDEBAR) -->
    <div class="p-4 border-t border-indigo-100">

        <div x-data="{ open: false }" class="relative">

            <!-- TRIGGER -->
            <button @click="open = !open"
                    class="w-full flex items-center justify-between px-4 py-3 bg-indigo-50 rounded-xl hover:bg-indigo-100 transition">

                <div class="text-left">
                    <p class="text-xs text-gray-500">Logged in as</p>
                    <p class="font-semibold text-indigo-700">
                        {{ Auth::user()->name }}
                    </p>
                </div>

                <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                </svg>

            </button>

            <!-- DROPDOWN -->
            <div x-show="open"
                 @click.away="open = false"
                 class="absolute bottom-14 left-0 w-full bg-white border rounded-xl shadow-lg overflow-hidden">

                <a href="{{ route('profile.edit') }}"
                   class="block px-4 py-2 hover:bg-gray-100">
                    Profile
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="w-full text-left px-4 py-2 hover:bg-gray-100 text-red-600">
                        Logout
                    </button>
                </form>

            </div>

        </div>

    </div>

</nav>