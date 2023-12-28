<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('tailwind')
</head>

<body>
    <div class="bg-[#E7ECEF] h-[200vh] flex-col flex gap-6" data-theme="light">
        @include('components.navbar')
        <div class="mt-[7em] bg-red-400">
            <form action="{{ route('kaprodi.data') }}" class="" method="POST" enctype="multipart/form-data">
                <div class="w-full mx-auto">
                    @csrf
                    <h1 class="text-2xl font-bold mb-4">Input Data Mahasiswa</h1>
                    <div class="mb-4 w-full">
                        <label for="nama_mahasiswa" class="block text-sm font-medium text-gray-600">Nama
                            Mahasiswa</label>
                        <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="Type here"
                            class="input input-bordered w-full max-w-xs" required />
                    </div>
                    <div class="mb-4 w-full">
                        <label for="nim" class="block text-sm font-medium text-gray-600">NIM</label>
                        <input type="text" id="nim" name="nim" placeholder="Type here"
                            class="input input-bordered w-full max-w-xs" required />
                    </div>
                    <div class="mb-4 w-full">
                        <label for="kelas" class="block text-sm font-medium text-gray-600">Kelas</label>
                        <input type="text" id="kelas" name="kelas" placeholder="Type here"
                            class="input input-bordered w-full max-w-xs" required />
                    </div>
                    <div class="mb-4 w-full">
                        <label for="angkatan" class="block text-sm font-medium text-gray-600">Angkatan</label>
                        <input type="text" id="angkatan" name="angkatan" placeholder="Type here"
                            class="input input-bordered w-full max-w-xs" required />
                    </div>
                    <button type="submit" class="btn btn-primary w-full max-w-xs">Submit</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
