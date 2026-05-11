<div id="courseModal"
     class="hidden fixed inset-0 bg-black bg-opacity-50 items-center justify-center z-50">

    <div class="bg-white w-full max-w-lg rounded-2xl shadow-xl p-6">

        <!-- HEADER -->
        <div class="flex justify-between items-center border-b pb-3 mb-4">
            <h2 class="text-xl font-bold text-indigo-700">Add Course</h2>

            <button onclick="toggleCourseModal()"
                class="text-gray-500 hover:text-red-500 text-xl">
                ✕
            </button>
        </div>

        <!-- FORM -->
        <form action="{{ route('courses.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="text-sm text-gray-600">Course Code</label>
                <input type="text" name="course_code"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    placeholder="e.g. BSIT" required>
            </div>

            <div>
                <label class="text-sm text-gray-600">Course Name</label>
                <input type="text" name="course_name"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    placeholder="Bachelor of Science in IT" required>
            </div>

            <div>
                <label class="text-sm text-gray-600">Department</label>
                <input type="text" name="department"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    placeholder="IT / Business">
            </div>

            <div>
                <label class="text-sm text-gray-600">Duration (Years)</label>
                <input type="number" name="duration_years"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    placeholder="4">
            </div>

            <div>
                <label class="text-sm text-gray-600">Status</label>
                <select name="status"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>

            <div>
                <label class="text-sm text-gray-600">Description</label>
                <textarea name="description"
                    class="w-full border rounded-lg p-2 focus:ring focus:ring-indigo-200"
                    rows="3"></textarea>
            </div>

            <!-- BUTTONS -->
            <div class="flex justify-end gap-2 pt-3">
                <button type="button"
                        onclick="toggleCourseModal()"
                        class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">
                    Cancel
                </button>

                <button type="submit"
                        class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                    Save Course
                </button>
            </div>

        </form>
    </div>
</div>
