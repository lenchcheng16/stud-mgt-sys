<x-app-layout>

    <!-- HEADER -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">

        <div>
            <h2 class="text-3xl font-bold text-indigo-800">
                Courses Management
            </h2>
            <p class="text-gray-500 mt-1">
                Manage all available courses
            </p>
        </div>

        <button onclick="toggleCourseModal()"
            class="mt-4 md:mt-0 px-5 py-2 bg-indigo-600 text-white rounded-xl shadow hover:bg-indigo-700 transition">
            + Add Course
        </button>

    </div>

    <!-- TABLE -->
    <div class="bg-white rounded-2xl shadow-md border border-indigo-100 overflow-hidden">

        <div class="p-6 border-b border-indigo-100">
            <h3 class="text-xl font-bold text-indigo-700">
                Course List
            </h3>
        </div>

        <div class="overflow-x-auto">

            <table class="min-w-full text-sm">

                <thead class="bg-indigo-50 text-gray-700">
                    <tr>
                        <th class="text-left p-4">ID</th>
                        <th class="text-left p-4">Code</th>
                        <th class="text-left p-4">Course Name</th>
                        <th class="text-left p-4">Department</th>
                        <th class="text-left p-4">Duration</th>
                        <th class="text-left p-4">Status</th>
                        <th class="text-right p-4">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($courses as $course)
                        <tr class="border-t hover:bg-indigo-50">

                            <td class="p-4">{{ $course->id }}</td>

                            <td class="p-4 font-semibold text-indigo-700">
                                {{ $course->course_code }}
                            </td>

                            <td class="p-4 font-medium text-gray-800">
                                {{ $course->course_name }}
                            </td>

                            <td class="p-4 text-gray-600">
                                {{ $course->department }}
                            </td>

                            <td class="p-4 text-gray-600">
                                {{ $course->duration_years }} Years
                            </td>

                            <td class="p-4">
                                <span class="px-3 py-1 rounded-full text-xs
                                    {{ $course->status == 'Active'
                                        ? 'bg-green-100 text-green-700'
                                        : 'bg-yellow-100 text-yellow-700' }}">
                                    {{ $course->status }}
                                </span>
                            </td>

                            <td class="p-4 text-right space-x-2">

                                <a href="{{ route('courses.edit', $course->id) }}"
                                   class="px-3 py-1 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200">
                                    Edit
                                </a>

                                <form action="{{ route('courses.destroy', $course->id) }}"
                                      method="POST"
                                      class="inline-block"
                                      onsubmit="return confirm('Delete this course?')">

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
                            <td colspan="7" class="p-6 text-center text-gray-500">
                                No courses found.
                            </td>
                        </tr>
                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

    <!-- MODAL -->
    @include('courses.modals.create')

    <!-- SCRIPT -->
    <script>
        function toggleCourseModal() {
            const modal = document.getElementById('courseModal');
            modal.classList.toggle('hidden');
            modal.classList.toggle('flex');
        }
    </script>

</x-app-layout>