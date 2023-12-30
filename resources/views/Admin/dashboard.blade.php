<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('tailwind')
</head>

<body class="bg-gray-100 h-screen">

    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <div class="bg-gray-800 flex flex-col justify-between text-white p-4">
            <h1 class="text-2xl font-semibold mb-4">Dashboard</h1>

            <ul class="">
                <li class="mb-2 flex items-center gap-4"><a href="#" class="text-gray-300 hover:text-white font-bold">Logout</a> <span
                        class="material-symbols-outlined">
                        logout
                    </span></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <h2 class="text-2xl font-semibold mb-4">Admin Dashboard</h2>

            <!-- Add User Button -->
            <div class="mb-4">
                <a href="/dashboardadmin/inputuser" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Add User</a>
            </div>

            <!-- User Table -->
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">No</th>
                        <th class="py-2 px-4 border-b">NIM/NIP</th>
                        <th class="py-2 px-4 border-b">Password</th>
                        <th class="py-2 px-4 border-b">Role</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Replace the following with dynamic data from your backend -->
                    <tr class="text-center">
                        <td class="py-2 px-4 border-b">1</td>
                        <td class="py-2 px-4 border-b">1202213054</td>
                        <td class="py-2 px-4 border-b">1202213054</td>
                        <td class="py-2 px-4 border-b">Mahasiswa</td>
                        <td class="py-2 px-4 border-b">
                            <a href="#" class="text-blue-500 hover:underline">Edit</a>
                            <span class="mx-2">|</span>
                            <a href="#" class="text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                    <!-- End of dynamic data -->

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
