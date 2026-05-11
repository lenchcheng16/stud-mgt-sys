<x-app-layout>

    <!-- HEADER -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">

        <div>
            <h2 class="text-3xl font-bold text-indigo-800">
                Dashboard
            </h2>
            <p class="text-gray-500 mt-1">
                Welcome back, {{ Auth::user()->name }} 👋
            </p>
        </div>

        <button class="mt-4 md:mt-0 px-5 py-2 bg-indigo-600 text-white rounded-xl shadow hover:bg-indigo-700 transition">
            + Add New
        </button>

    </div>

    <!-- STATS CARDS (RESTORED STYLE) -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">

        <div class="bg-white rounded-2xl shadow-md p-6 border border-indigo-100 hover:shadow-lg transition">
            <p class="text-gray-500 text-sm">Total Students</p>
            <h3 class="text-4xl font-bold text-indigo-700 mt-2">1,245</h3>
        </div>

        <div class="bg-white rounded-2xl shadow-md p-6 border border-indigo-100 hover:shadow-lg transition">
            <p class="text-gray-500 text-sm">Courses</p>
            <h3 class="text-4xl font-bold text-indigo-700 mt-2">32</h3>
        </div>

        <div class="bg-white rounded-2xl shadow-md p-6 border border-indigo-100 hover:shadow-lg transition">
            <p class="text-gray-500 text-sm">Teachers</p>
            <h3 class="text-4xl font-bold text-indigo-700 mt-2">58</h3>
        </div>

        <div class="bg-white rounded-2xl shadow-md p-6 border border-indigo-100 hover:shadow-lg transition">
            <p class="text-gray-500 text-sm">Active Users</p>
            <h3 class="text-4xl font-bold text-indigo-700 mt-2">842</h3>
        </div>

    </div>

    <!-- CONTENT GRID -->
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">

        <!-- RECENT STUDENTS -->
        <div class="xl:col-span-2 bg-white rounded-2xl shadow-md border border-indigo-100 p-6">

            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-bold text-indigo-700">Recent Students</h3>
                <a href="{{ route('students.index') }}" class="text-sm text-indigo-600 hover:underline">
                    View All
                </a>
            </div>

            <div class="space-y-4">

                <div class="flex items-center justify-between bg-indigo-50 p-4 rounded-xl">
                    <div>
                        <h4 class="font-semibold">Juan Dela Cruz</h4>
                        <p class="text-sm text-gray-500">BSIT - 2nd Year</p>
                    </div>
                    <span class="px-3 py-1 text-sm bg-green-100 text-green-700 rounded-full">
                        Active
                    </span>
                </div>

                <div class="flex items-center justify-between bg-indigo-50 p-4 rounded-xl">
                    <div>
                        <h4 class="font-semibold">Maria Santos</h4>
                        <p class="text-sm text-gray-500">BSCS - 1st Year</p>
                    </div>
                    <span class="px-3 py-1 text-sm bg-green-100 text-green-700 rounded-full">
                        Active
                    </span>
                </div>

                <div class="flex items-center justify-between bg-indigo-50 p-4 rounded-xl">
                    <div>
                        <h4 class="font-semibold">Kevin Ramos</h4>
                        <p class="text-sm text-gray-500">BSBA - 3rd Year</p>
                    </div>
                    <span class="px-3 py-1 text-sm bg-yellow-100 text-yellow-700 rounded-full">
                        Pending
                    </span>
                </div>

            </div>

        </div>

        <!-- QUICK ACTIONS -->
        <div class="bg-white rounded-2xl shadow-md border border-indigo-100 p-6">

            <h3 class="text-xl font-bold text-indigo-700 mb-4">
                Quick Actions
            </h3>

            <div class="space-y-3">

                <a href="{{ route('students.index') }}"
                   class="block w-full px-4 py-3 bg-indigo-600 text-white rounded-xl text-center hover:bg-indigo-700 transition">
                    Add Student
                </a>

                <a href="{{ route('courses.index') }}"
                   class="block w-full px-4 py-3 border border-indigo-200 text-indigo-700 rounded-xl text-center hover:bg-indigo-50 transition">
                    Add Course
                </a>

                <a href="{{ route('teachers.index') }}"
                   class="block w-full px-4 py-3 border border-indigo-200 text-indigo-700 rounded-xl text-center hover:bg-indigo-50 transition">
                    Add Teacher
                </a>

                <button class="w-full px-4 py-3 border border-indigo-200 text-indigo-700 rounded-xl hover:bg-indigo-50 transition">
                    System Settings
                </button>

            </div>

        </div>

    </div>

</x-app-layout>