<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-100 flex">

        <!-- SIDEBAR -->
        <aside class="w-64 bg-white shadow-xl border-r border-indigo-100 hidden md:flex flex-col">

            <div class="p-6 border-b border-indigo-100">
                <h1 class="text-2xl font-bold text-indigo-700 flex items-center gap-2">
                    🎓 StudentMS
                </h1>
                <p class="text-sm text-gray-500 mt-1">Admin Dashboard</p>
            </div>

            <nav class="flex-1 p-4 space-y-2">

                <a href="{{ route('dashboard') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition">
                    🏠 <span class="font-medium">Dashboard</span>
                </a>

                <a href="{{ route('students.index') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-indigo-50 hover:text-indigo-700">
                    👨‍🎓 <span class="font-medium">Students</span>
                </a>

                <a href="{{ route('courses.index') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-indigo-50 hover:text-indigo-700">
                    📚 <span class="font-medium">Courses</span>
                </a>

                <!-- ACTIVE TEACHERS -->
                <a href="{{ route('teachers.index') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl
                   {{ request()->routeIs('teachers.*') ? 'bg-indigo-600 text-white shadow-md' : 'text-gray-700 hover:bg-indigo-50 hover:text-indigo-700' }}">
                    👩‍🏫 <span class="font-medium">Teachers</span>
                </a>

                <a href="#"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 transition">
                    ⚙️ <span class="font-medium">Settings</span>
                </a>
            </nav>

            <div class="p-4 border-t border-indigo-100">
                <div class="bg-indigo-50 rounded-xl p-4">
                    <p class="text-sm text-gray-500">Logged in as</p>
                    <h3 class="font-semibold text-indigo-700">
                        {{ Auth::user()->name }}
                    </h3>
                </div>
            </div>
        </aside>

        <!-- MAIN -->
        <main class="flex-1 p-6 md:p-10 overflow-y-auto">

            <!-- HEADER -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-indigo-800">
                        Teachers Management
                    </h2>
                    <p class="text-gray-500 mt-1">
                        Manage all teachers
                    </p>
                </div>

                <button onclick="toggleTeacherModal()"
                    class="mt-4 md:mt-0 px-5 py-2 bg-indigo-600 text-white rounded-xl shadow hover:bg-indigo-700 transition">
                    + Add Teacher
                </button>
            </div>

            <!-- TABLE CARD -->
            <div class="bg-white rounded-2xl shadow-md border border-indigo-100 overflow-hidden">

                <div class="p-6 border-b border-indigo-100">
                    <h3 class="text-xl font-bold text-indigo-700">
                        Teacher List
                    </h3>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">

                        <thead class="bg-indigo-50 text-gray-700">
                            <tr>
                                <th class="text-left p-4">ID</th>
                                <th class="text-left p-4">Employee ID</th>
                                <th class="text-left p-4">Name</th>
                                <th class="text-left p-4">Email</th>
                                <th class="text-left p-4">Department</th>
                                <th class="text-left p-4">Specialization</th>
                                <th class="text-left p-4">Status</th>
                                <th class="text-right p-4">Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($teachers as $teacher)
                                <tr class="border-t hover:bg-indigo-50 transition">

                                    <td class="p-4">{{ $teacher->id }}</td>

                                    <td class="p-4 font-semibold text-indigo-700">
                                        {{ $teacher->employee_id }}
                                    </td>

                                    <td class="p-4 text-gray-800 font-medium">
                                        {{ $teacher->first_name }} {{ $teacher->last_name }}
                                    </td>

                                    <td class="p-4 text-gray-600">
                                        {{ $teacher->email }}
                                    </td>

                                    <td class="p-4 text-gray-600">
                                        {{ $teacher->department }}
                                    </td>

                                    <td class="p-4 text-gray-600">
                                        {{ $teacher->specialization }}
                                    </td>

                                    <td class="p-4">
                                        <span class="px-3 py-1 rounded-full text-xs
                                            {{ $teacher->status == 'active'
                                                ? 'bg-green-100 text-green-700'
                                                : 'bg-yellow-100 text-yellow-700' }}">
                                            {{ ucfirst($teacher->status) }}
                                        </span>
                                    </td>

                                    <td class="p-4 text-right space-x-2">

                                        <a href="{{ route('teachers.edit', $teacher->id) }}"
                                           class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200">
                                            Edit
                                        </a>

                                        <form action="{{ route('teachers.destroy', $teacher->id) }}"
                                              method="POST"
                                              class="inline-block"
                                              onsubmit="return confirm('Delete this teacher?')">

                                            @csrf
                                            @method('DELETE')

                                            <button class="px-3 py-1 bg-red-100 text-red-700 rounded-lg hover:bg-red-200">
                                                Delete
                                            </button>
                                        </form>

                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="p-6 text-center text-gray-500">
                                        No teachers found.
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>

            </div>

        </main>
    </div>

    <script>
        function toggleTeacherModal() {
            const modal = document.getElementById('teacherModal');
            modal.classList.toggle('hidden');
            modal.classList.toggle('flex');
        }
    </script>
</x-app-layout>

@include('teachers.modals.create')
