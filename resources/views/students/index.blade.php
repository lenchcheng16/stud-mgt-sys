<x-app-layout>

    <div class="mb-6">
        <h2 class="text-3xl font-bold text-indigo-800">
            Students Management
        </h2>
        <p class="text-gray-500">
            Manage all enrolled students
        </p>
    </div>

    <!-- CREATE BUTTON -->
        <a href="{{ route('students.modals.create') }}"
           class="mt-4 md:mt-0 px-5 py-2 bg-indigo-600 text-white rounded-xl shadow hover:bg-indigo-700 transition">
            + Add Student
        </a>

    <div class="bg-white rounded-xl shadow p-4">
        <table class="w-full text-sm">
            <thead>
                <tr class="text-left bg-indigo-50">
                    <th class="p-3">ID</th>
                    <th class="p-3">Name</th>
                    <th class="p-3">Course</th>
                    <th class="p-3">Year</th>
                    <th class="p-3">Status</th>
                    <th class="p-3 text-right">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($students as $student)
                    <tr class="border-t">
                        <td class="p-3">{{ $student->id }}</td>
                        <td class="p-3">{{ $student->first_name }} {{ $student->last_name }}</td>
                        <td class="p-3">{{ $student->course }}</td>
                        <td class="p-3">{{ $student->year_level }}</td>
                        <td class="p-3">{{ $student->status }}</td>
                        <td class="p-3 text-right">
                            <a href="#" class="text-blue-500">Edit</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="p-4 text-center text-gray-500">
                            No students found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</x-app-layout>