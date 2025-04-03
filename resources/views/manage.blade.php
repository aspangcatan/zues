<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeus Event Management - Admin Blog Management</title>
    <link rel="icon" href="{{ asset('img/Zeus808Logo.png') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-900 text-white">

<!-- Admin Panel Header -->
<div class="w-full bg-gray-800 p-6 flex justify-between items-center">
    <h1 class="text-3xl font-semibold">Admin Blog Management</h1>
    <form action="{{ route('logout') }}" method="POST" class="ml-4">
        @csrf
        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-500 transition">
            Logout
        </button>
    </form>
</div>

<!-- Admin Blog Management Layout -->
<div class="flex container mx-auto p-6 space-x-6">
    <!-- Left Sidebar for Create/Edit Blog -->
    <div class="w-1/4 bg-gray-800 p-6 rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-300 mb-4" id="modalTitle">Create/Edit Blog</h2>
        <form id="blogForm">
            @csrf
            <div class="mb-4">
                <label for="blogTitle" class="block text-gray-600">Title</label>
                <input type="text" id="blogTitle" name="title" class="w-full px-4 py-2 rounded bg-gray-700 text-white">
            </div>
            <div class="mb-4">
                <label for="blogDescription" class="block text-gray-600">Description</label>
                <textarea id="blogDescription" name="description" class="w-full px-4 py-2 rounded bg-gray-700 text-white"></textarea>
            </div>
            <div class="mb-4">
                <label for="blogType" class="block text-gray-600">Type</label>
                <select id="blogType" name="type" class="w-full px-4 py-2 rounded bg-gray-700 text-white">
                    <option value="1">Planning</option>
                    <option value="2">Moments</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="blogLink" class="block text-gray-600">Link</label>
                <input type="url" id="blogLink" name="link" class="w-full px-4 py-2 rounded bg-gray-700 text-white">
            </div>
            <button type="submit" class="w-full bg-yellow-500 text-gray-900 py-2 rounded font-bold hover:bg-yellow-400 transition">Save Blog</button>
        </form>
    </div>

    <!-- Right Section for Blog Management Table -->
    <div class="flex-1 bg-gray-800 p-6 rounded-lg">
        <table class="w-full table-auto text-left">
            <thead>
            <tr class="text-gray-400">
                <th class="px-6 py-3">Title</th>
                <th class="px-6 py-3">Type</th>
                <th class="px-6 py-3">Actions</th>
            </tr>
            </thead>
            <tbody id="blogTableBody">
            <!-- Table rows will be populated dynamically -->
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    let editingBlogId = null;
    $(document).ready(function () {

        // Load the list of blogs when the page loads

        // Open the sidebar for creating a new blog
        $("#createBlogButton").click(function () {
            editingBlogId = null;
            $("#modalTitle").text("Create Blog");
            $("#blogForm")[0].reset();
        });


        // Submit the blog form (Create or Edit)
        $("#blogForm").submit(function (event) {
            event.preventDefault();
            const title = $("#blogTitle").val();
            const description = $("#blogDescription").val();
            const type = $("#blogType").val();
            const link = $("#blogLink").val();

            let url = '{{ route('admin.blogs.store') }}';
            let method = 'POST';
            let body = JSON.stringify({ title, description, type, link });

            if (editingBlogId) {
                url = '{{ route('admin.blogs.update', '') }}/' + editingBlogId;
                method = 'PUT';
                body = JSON.stringify({ title, description, type, link });
            }

            fetch(url, {
                method: method,
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: body,
            })
                .then(response => response.json())
                .then(data => {
                    loadBlogs();
                })
                .catch(error => {
                    console.error("Error saving blog:", error);
                });
        });

        loadBlogs(); // Load blogs initially
    });

    function loadBlogs() {
        fetchBlogs("");
    }

    // Open the sidebar for editing an existing blog
    function editBlog(blogId) {
        editingBlogId = blogId;
        fetch('{{ route('admin.blogs.show', '') }}/' + blogId)
            .then(response => response.json())
            .then(blog => {
                $("#modalTitle").text("Edit Blog");
                $("#blogTitle").val(blog.title);
                $("#blogDescription").val(blog.description);
                $("#blogType").val(blog.type);
                $("#blogLink").val(blog.link);
            });
    }

    function fetchBlogs(search = "") {
        // Simulate loading with a placeholder
        const loader = `<tr><td colspan="3" class="text-center text-gray-500 p-4">Loading...</td></tr>`;
        $("#blogTableBody").html(loader);

        fetch('{{ route('admin.blogs.index') }}?q_=' + search)
            .then(response => response.json())
            .then(blogs => {
                console.log(blogs);
                let rows = '';
                blogs.forEach(blog => {
                    rows += `
                            <tr>
                                <td class="px-6 py-3 text-gray-300">${blog.title}</td>
                                <td class="px-6 py-3 text-gray-300">${blog.type === 1 ? 'Planning' : 'Moments'}</td>
                                <td class="px-6 py-3">
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded-md" onclick="editBlog(${blog.id})">Edit</button>
                                    <button class="bg-red-600 text-white px-4 py-2 rounded-md ml-2" onclick="confirmDelete(${blog.id})">Delete</button>
                                </td>
                            </tr>
                        `;
                });
                if (rows === '') {
                    rows = `<tr><td colspan="3" class="text-center text-gray-500 p-4">No blogs found</td></tr>`;
                }
                $("#blogTableBody").html(rows);
            })
            .catch(error => {
                console.error("Error fetching blogs:", error);
                $("#blogTableBody").html(`<tr><td colspan="3" class="text-center text-red-500 p-4">Error loading blogs. Please try again.</td></tr>`);
            });
    }

    function confirmDelete(blogId) {
        const confirmation = confirm("Are you sure you want to delete this blog?");
        if (confirmation) {
            fetch('http://127.0.0.1:8000/admin/blogs/' + blogId, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': 'rlEaCAQ7zZsP7DCEYPctwCXRbzHPlZBLp0VqfvC2',
                }
            })
                .then(response => {
                    if (response.status === 204) {
                        loadBlogs(); // Reload the list after deletion
                    } else {
                        return response.json(); // Parse JSON if not 204
                    }
                })
                .then(data => {
                    // Optionally handle any additional data if returned
                })
                .catch(error => {
                    console.error("Error deleting blog:", error);
                });
        }
    }

</script>

</body>
</html>

