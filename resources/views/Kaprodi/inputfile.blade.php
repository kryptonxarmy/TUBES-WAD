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
        <div class="mt-[7em] px-[7em ]">
            <a href="/dashboardkaprodi">
                <span class="material-symbols-outlined ml-[8em] hover:cursor-pointer">
                    arrow_back
                </span>
            </a>
            <form action="{{ route('kaprodi.data') }}" class="w-full flex flex-col items-center" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="text-2xl font-bold mb-4">Input Data Mahasiswa</h1>
                <div class="mb-4 w-[60%]">
                    <label for="nama_mahasiswa" class="block text-sm font-bold text-black">Nama
                        Mahasiswa</label>
                    <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="Type here"
                        class="input input-bordered w-full" required />
                </div>
                <div class="mb-4 w-[60%]">
                    <label for="nim" class="block text-sm font-bold text-black ">NIM</label>
                    <input type="text" id="nim" name="nim" placeholder="Type here"
                        class="input input-bordered w-full " required />
                </div>
                <div class="mb-4 w-[60%]">
                    <label for="kelas" class="block text-sm font-bold text-black ">Kelas</label>
                    <input type="text" id="kelas" name="kelas" placeholder="Type here"
                        class="input input-bordered w-full " required />
                </div>
                <div class="mb-4 w-[60%]">
                    <label for="angkatan" class="block text-sm font-bold text-black ">Angkatan</label>
                    <input type="text" id="angkatan" name="angkatan" placeholder="Type here"
                        class="input input-bordered w-full " required />
                </div>
                <div class="w-[40%] mt-4">
                    <button type="submit" class="btn btn-primary w-full">  Submit</button>
                </div>

            </form>
        </div>
    </div>

</body>

</html>
