<x-app-layout>

    <!-- HEADER -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">

        <div>
            <h2 class="text-3xl font-bold text-indigo-800">
                Students Management
            </h2>
            <p class="text-gray-500">
                Manage all enrolled students
            </p>
        </div>

        <!-- OPEN MODAL BUTTON -->
        <button onclick="toggleStudentModal()"
            class="mt-4 md:mt-0 px-5 py-2 bg-indigo-600 text-white rounded-xl shadow hover:bg-indigo-700 transition">
            + Add Student
        </button>

    </div>

    <!-- TABLE -->
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

                        <td class="p-3">
                            {{ $student->first_name }} {{ $student->last_name }}
                        </td>

                        <td class="p-3">{{ $student->course }}</td>

                        <td class="p-3">{{ $student->year_level }}</td>

                        <td class="p-3">{{ $student->status }}</td>

                        <td class="p-3 text-right">
                            <a href="#" class="text-blue-500 hover:underline">
                                Edit
                            </a>
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

    <!-- ================= MODAL ================= -->
    <div id="studentModal"
         class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">

        <!-- BACKDROP -->
        <div onclick="toggleStudentModal()" class="absolute inset-0"></div>

        <!-- MODAL BOX -->
        <div class="bg-white w-full max-w-2xl rounded-2xl shadow-xl p-6 relative z-10">

            <!-- CLOSE -->
            <button onclick="toggleStudentModal()"
                    class="absolute top-3 right-3 text-gray-500 hover:text-red-500 text-xl">
                ✖
            </button>

            <h2 class="text-2xl font-bold text-indigo-700 mb-5">
                Add New Student
            </h2>

            <!-- FORM -->
            <form action="{{ route('students.store') }}" method="POST" class="space-y-4">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <input type="text" name="first_name" placeholder="First Name"
                           class="p-3 border rounded-xl w-full">

                    <input type="text" name="last_name" placeholder="Last Name"
                           class="p-3 border rounded-xl w-full">

                    <input type="email" name="email" placeholder="Email"
                           class="p-3 border rounded-xl w-full">

                    <input type="text" name="phone_number" placeholder="Phone"
                           class="p-3 border rounded-xl w-full">

                    <input type="text" name="course" placeholder="Course"
                           class="p-3 border rounded-xl w-full">

                    <input type="text" name="year_level" placeholder="Year Level"
                           class="p-3 border rounded-xl w-full">

                </div>

                <textarea name="address" placeholder="Address"
                          class="p-3 border rounded-xl w-full"></textarea>

                <select name="status"
                        class="p-3 border rounded-xl w-full">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>

                <button type="submit"
                        class="w-full bg-indigo-600 text-white py-3 rounded-xl hover:bg-indigo-700 transition">
                    Save Student
                </button>

            </form>

        </div>
    </div>

    <!-- SCRIPT -->
    <script>
        function toggleStudentModal() {
            const modal = document.getElementById('studentModal');
            modal.classList.toggle('hidden');
            modal.classList.toggle('flex');
        }
    </script>

</x-app-layout>