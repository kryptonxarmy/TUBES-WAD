<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('tailwind')
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center" data-theme="light">

    <div class="bg-white p-8 rounded shadow-md w-96">
        <h1 class="text-2xl font-semibold mb-4">User Feedback</h1>

        <form action="" method="post">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-600 text-sm font-medium">Email</label>
                <input type="email" name="email" id="email" class="mt-1 p-2 w-full border rounded">
            </div>

            <div class="mb-4">
                <label for="nama" class="block text-gray-600 text-sm font-medium">Nama</label>
                <input type="text" name="nama" id="nama" class="mt-1 p-2 w-full border rounded">
            </div>
            <div class="mb-4">
                <label for="nama" class="block text-gray-600 text-sm font-medium">Deskripsi</label>
                <textarea class="textarea textarea-bordered" placeholder="Bio"></textarea>
            </div>
            <button type="submit" href="/dashboardadmin" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Submit</button>
        </form>
    </div>

</body>
</html>
