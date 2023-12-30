<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('tailwind')
</head>

<body class="px-8">
    <div class="mt-8">
        <div class="flex gap-4">
            <a href="/dashboardadmin">
                <span class="material-symbols-outlined">
                    arrow_back
                </span>
            </a>
            <h3 class="text-xl font-semibold mb-4">Add New User</h3>
        </div>
        <form action="{{ route('admin.store') }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="nim_nip" class="block text-gray-600 text-sm font-medium">NIM/NIP</label>
                <input type="text" name="userID" id="nim_nip" class="mt-1 p-2 w-full border rounded">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-600 text-sm font-medium">Password</label>
                <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded">
            </div>

            <div class="mb-4">
                <label for="role" class="block text-gray-600 text-sm font-medium">Role</label>
                <select name="role" id="role" class="mt-1 p-2 w-full border rounded">
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="dosen">Dosen</option>
                    <!-- Add more roles as needed -->
                </select>
            </div>

            <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Add
                User</button>
        </form>
    </div>

</body>

</html>
