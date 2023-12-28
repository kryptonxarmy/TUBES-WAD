<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data Mahasiswa</title>
    @include('tailwind')
</head>

<body>
    <div class="bg-[#E7ECEF] h-[200vh] flex-col flex gap-6" data-theme="light">
        @include('components.navbar')
        <div class="mt-[7em] px-[7em]">
            <a href="/dashboardkaprodi">
                <span class="material-symbols-outlined ml-[8em] hover:cursor-pointer">
                    arrow_back
                </span>
            </a>
            <form action="{{ route('kaprodi.edit', $student->id) }}" method="POST" enctype="multipart/form-data" class="w-full flex flex-col items-center">
                @csrf
                @method('PUT')
                <h1 class="text-2xl font-bold mb-4">Update Data Mahasiswa</h1>
                <div class="mb-4 w-[60%]">
                    <label for="nama_mahasiswa" class="block text-sm font-bold text-black">Nama Mahasiswa</label>
                    <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" value="{{ $student->Nama_Mahasiswa }}" class="input input-bordered w-full" required />
                </div>
                <div class="mb-4 w-[60%]">
                    <label for="nim" class="block text-sm font-bold text-black">NIM</label>
                    <input type="text" id="nim" name="nim" value="{{ $student->NIM }}" class="input input-bordered w-full" required />
                </div>
                <div class="mb-4 w-[60%]">
                    <label for="kelas" class="block text-sm font-bold text-black">Kelas</label>
                    <input type="text" id="kelas" name="kelas" value="{{ $student->Kelas }}" class="input input-bordered w-full" required />
                </div>
                <div class="mb-4 w-[60%]">
                    <label for="angkatan" class="block text-sm font-bold text-black">Angkatan</label>
                    <input type="text" id="angkatan" name="angkatan" value="{{ $student->Angkatan }}" class="input input-bordered w-full" required />
                </div>
                <div class="w-[40%] mt-4">
                    <button type="submit" class="btn btn-primary w-full">Submit</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
