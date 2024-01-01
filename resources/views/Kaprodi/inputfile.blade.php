<!DOCTYPE html>
<html lang="en">

<?php
$angkatanTahun = [
    45 => '2021',
    46 => '2022',
    47 => '2023',
    48 => '2024',
    49 => '2025',
    50 => '2026',
    51 => '2027',
    52 => '2028',
    53 => '2029',
    54 => '2030',
    55 => '2031',
];
?>

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
            <form action="{{ route('kaprodi.data') }}" class="w-full flex flex-col items-center" method="POST"
                enctype="multipart/form-data">
                @csrf
                <h1 class="text-2xl font-bold mb-4">Input Data Mahasiswa</h1>
                <div class="mb-4 w-[60%]">
                    <label for="nama_mahasiswa" class="block text-sm font-bold text-black">Nama
                        Mahasiswa</label>
                    <input type="text" id="nama_mahasiswa" name="Nama_Mahasiswa" placeholder="Type here"
                        class="input input-bordered w-full" required />
                </div>
                <div class="mb-4 w-[60%]">
                    <label for="nim" class="block text-sm font-bold text-black ">NIM</label>
                    <input type="text" id="nim" name="NIM" placeholder="Type here"
                        class="input input-bordered w-full " required />
                </div>
                <div class="mb-4 w-[60%]">
                    @auth
                        <label for="kelas" class="block text-sm font-bold text-black ">Kelas</label>
                        <input type="text" id="kelas" name="Kelas" placeholder="Type here"
                            class="input input-bordered w-full" value="{{ auth()->user()->kelas }}" readonly  />
                    @endauth
                </div>
                <div class="mb-4 w-[60%]">
                    @auth
                        <label for="angkatan" class="block text-sm font-bold text-black ">Angkatan</label>
                        <input type="text" id="angkatan" name="Angkatan" value="<?php
                        $tahun = auth()->user()->kelas;
                        $result = substr($tahun, 3, 2);
                        $tahunAngkatan = $angkatanTahun[$result] ?? "Tahun tidak valid";
                        echo $tahunAngkatan;
                ?>" placeholder="Type here" class="input input-bordered w-full " readonly  />
                    @endauth
                </div>
                <div class="w-[40%] mt-4">
                    <button type="submit" class="btn btn-primary w-full">Submit</button>
                </div>

            </form>
        </div>
    </div>

</body>

</html>
