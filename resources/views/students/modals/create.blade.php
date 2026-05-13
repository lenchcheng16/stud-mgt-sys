<div id="studentModal"
     class="hidden fixed inset-0 bg-black bg-opacity-50 items-center justify-center z-50">

    <div class="bg-white w-full max-w-lg rounded-2xl shadow-xl p-6">

        <!-- HEADER -->
        <div class="flex justify-between items-center border-b pb-3 mb-4">
            <h2 class="text-xl font-bold text-indigo-700">Add Student</h2>

            <button onclick="toggleStudentModal()"
                class="text-gray-500 hover:text-red-500 text-xl">
                ✕
            </button>
        </div>

        <!-- FORM -->
        <form action="{{ route('students.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="text-sm text-gray-600">First Name</label>
                <input type="text" name="first_name"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    placeholder="Enter first name" required>
            </div>

            <div>
                <label class="text-sm text-gray-600">Last Name</label>
                <input type="text" name="last_name"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    placeholder="Enter last name" required>
            </div>

            <div>
                <label class="text-sm text-gray-600">Email</label>
                <input type="email" name="email"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    placeholder="Enter email">
            </div>

            <div>
                <label class="text-sm text-gray-600">Phone Number</label>
                <input type="text" name="phone_number"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    placeholder="Enter phone number">
            </div>

            <div>
                <label class="text-sm text-gray-600">Course</label>
                <input type="text" name="course"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    placeholder="Enter course" required>
            </div>

            <div>
                <label class="text-sm text-gray-600">Year Level</label>
                <input type="text" name="year_level"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    placeholder="e.g. 1st Year" required>
            </div>

            <div>
                <label class="text-sm text-gray-600">Address</label>
                <textarea name="address"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    rows="3" placeholder="Enter address"></textarea>
            </div>

            <div>
                <label class="text-sm text-gray-600">Status</label>
                <select name="status"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>

            <!-- BUTTONS -->
            <div class="flex justify-end gap-2 pt-3">
                <button type="button"
                        onclick="toggleStudentModal()"
                        class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">
                    Cancel
                </button>

                <button type="submit"
                        class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                    Save Student
                </button>
            </div>

        </form>
    </div>
</div>
