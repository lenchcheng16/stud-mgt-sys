<div id="teacherModal"
     class="hidden fixed inset-0 bg-black bg-opacity-50 items-center justify-center z-50">

    <div class="bg-white w-full max-w-lg rounded-2xl shadow-xl p-6">

        <!-- HEADER -->
        <div class="flex justify-between items-center border-b pb-3 mb-4">
            <h2 class="text-xl font-bold text-indigo-700">Add Teacher</h2>

            <button onclick="toggleTeacherModal()"
                class="text-gray-500 hover:text-red-500 text-xl">
                ✕
            </button>
        </div>

        <!-- FORM -->
        <form action="{{ route('teachers.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="text-sm text-gray-600">Employee ID</label>
                <input type="text" name="employee_id"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    placeholder="e.g. EMP-001" required>
            </div>

            <div>
                <label class="text-sm text-gray-600">First Name</label>
                <input type="text" name="first_name"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    placeholder="First name" required>
            </div>

            <div>
                <label class="text-sm text-gray-600">Last Name</label>
                <input type="text" name="last_name"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    placeholder="Last name" required>
            </div>

            <div>
                <label class="text-sm text-gray-600">Email</label>
                <input type="email" name="email"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    placeholder="Email address" required>
            </div>

            <div>
                <label class="text-sm text-gray-600">Department</label>
                <input type="text" name="department"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    placeholder="e.g. IT / Science">
            </div>

            <div>
                <label class="text-sm text-gray-600">Specialization</label>
                <input type="text" name="specialization"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    placeholder="e.g. Programming / Math">
            </div>

            <div>
                <label class="text-sm text-gray-600">Status</label>
                <select name="status"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>

            <!-- BUTTONS -->
            <div class="flex justify-end gap-2 pt-3">
                <button type="button"
                        onclick="toggleTeacherModal()"
                        class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">
                    Cancel
                </button>

                <button type="submit"
                        class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                    Save Teacher
                </button>
            </div>

        </form>
    </div>
</div>
