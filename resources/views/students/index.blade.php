<x-app-layout>

    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">

    <div>
        <h2 class="text-3xl font-bold text-indigo-800">
            Students Management
        </h2>
        <p class="text-gray-500">
            Manage all enrolled students
        </p>
    </div>

    <button onclick="toggleStudentModal()"
        class="mt-4 md:mt-0 px-5 py-2 bg-indigo-600 text-white rounded-xl shadow hover:bg-indigo-700 transition">
        + Add Student
    </button>

</div>

    <div class="bg-white rounded-xl shadow p-4">
        <table class="w-full text-sm">
            <div class="p-6 border-b border-indigo-100">
            <h3 class="text-xl font-bold text-indigo-700">
                Student List
            </h3>
        </div>
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
                        <td class="p-4">{{ $student->id }}</td>
                        <td class="p-4">{{ $student->first_name }} {{ $student->last_name }}</td>
                        <td class="p-4">{{ $student->course }}</td>
                        <td class="p-4">{{ $student->year_level }}</td>
                        <td class="p-4">{{ $student->status }}</td>
                        <td class="p-4 text-right space-x-2">

                                <a href="{{ route('students.edit', $student->id) }}"
                                   class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200">
                                    Edit
                                </a>

                                <form action="{{ route('students.destroy', $student->id) }}"
                                      method="POST"
                                      class="inline-block"
                                      onsubmit="return confirm('Delete this student?')">

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
                        <td colspan="6" class="p-4 text-center text-gray-500">
                            No students found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

     <!-- MODAL -->
    @include('students.modals.create')

     <!-- SCRIPT -->
    <script>
        function toggleStudentModal() {
            const modal = document.getElementById('studentModal');
            modal.classList.toggle('hidden');
            modal.classList.toggle('flex');
        }
    </script>

</x-app-layout>
