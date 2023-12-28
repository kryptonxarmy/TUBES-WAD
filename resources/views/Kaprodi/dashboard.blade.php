<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('tailwind')
</head>

<?php
$rows = [['id' => 1, 'nama' => 'Ilham Satria', 'nim' => '1201234567', 'kelas' => 'SI-43-08', 'angkatan' => '2021'], ['id' => 2, 'nama' => 'Ahmad Syahid Danu Wardana', 'nim' => '1201234568', 'kelas' => 'SI-44-03', 'angkatan' => '2021'], ['id' => 3, 'nama' => 'Rakha Putra Pebri Yandra', 'nim' => '1201234569', 'kelas' => 'SI-45-07', 'angkatan' => '2021'], ['id' => 4, 'nama' => 'Alice Wonderland', 'nim' => '1201234570', 'kelas' => 'SI-45-03', 'angkatan' => '2021'], ['id' => 5, 'nama' => 'Bob Builder', 'nim' => '1201234571', 'kelas' => 'SI-46-INT', 'angkatan' => '2021']];
?>

<body>
    <div class="bg-[#E7ECEF] h-[200vh] flex gap-6" data-theme="light">
        @include('components.navbar')
        {{-- {/* SIDEBAR */} --}}
        <div class="w-[23vw] relative z-10 flex flex-col gap-3 border-black py-[7em] h-screen">
            <a href="/Dashboard/Kaprodi/main"
                class="w-full flex hover:cursor-pointer items-center ps-8 gap-2 bg-[#fff] text-[#001247] py-3 rounded-r-xl">
                <span class="material-symbols-outlined">
                    home
                </span>
                <h1 class="font-bold text-lg">Dashboard</h1>
            </a>
            <a href="/Dashboard/Kaprodi/laporanSidang"
                class="w-full flex hover:cursor-pointer items-center ps-8 gap-2 bg-[#001247] text-white py-3 rounded-r-xl">
                <span class="material-symbols-outlined">
                    insert_chart
                </span>
                <h1 class="font-bold text-lg">Laporan</h1>
            </a>
            <a href="/Dashboard/Kaprodi/setSidang"
                class="w-full flex hover:cursor-pointer items-center ps-8 gap-2 bg-[#fff] text-[#001247] py-3 rounded-r-xl">
                <span class="material-symbols-outlined">
                    calendar_month
                </span>
                <h1 class="font-bold text-lg">Set Jadwal Sidang</h1>
            </a>
            <a href="/Dashboard/Kaprodi/laporanSidang"
                class="w-full flex hover:cursor-pointer items-center ps-8 gap-2 bg-[#fff] text-[#001247] py-3 rounded-r-xl">
                <span class="material-symbols-outlined">
                    description
                </span>
                <h1 class="font-bold text-lg">Laporan Jadwal Sidang</h1>
            </a>
        </div>
        {{-- {/* ------- SIDEBAR --------- */} --}}

        {{-- {/* CENTER */} --}}
        <div class="w-full mr-10 pt-[7em] flex flex-col gap-4">
            {{-- {/* ATAS */} --}}
            <div class="flex justify-between bg-white p-3 rounded-xl">
                <div class="flex gap-2 items-center">

                </div>
                <div class="flex gap-2 items-center">
                    <button class="btn btn-sm bg-green-400">Tambah Mahasiswa</button>
                </div>
            </div>
            {{-- {/* ATAS */} --}}

            {{-- {/* TABLE */} --}}
            <div class="overflow-x-auto bg-white rounded-xl" data-theme="light">
                <table class="table table-zebra">
                    {{-- head --}}
                    <thead>
                        <tr class="text-center text-black font-extrabold">
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>NIM</th>
                            <th>Kelas</th>
                            <th>Angkatan</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                            <tr class="text-center">
                                <th>{{ $row['id'] }}</th>
                                <td>{{ $row['nama'] }}</td>
                                <td>{{ $row['nim'] }}</td>
                                <td>{{ $row['kelas'] }}</td>
                                <td>{{ $row['angkatan'] }}</td>
                                <td>
                                    <button className=" mx-2 hover:cursor-pointer text-xl">
                                        <span class="material-symbols-outlined text-[#1F9254]">
                                            add_box
                                        </span>
                                    </button>
                                    <button className=" mx-2 text-xl">
                                        <span class="material-symbols-outlined text-[#624DE3]">
                                            edit_square
                                        </span>
                                    </button>
                                    <button className="mx-2 text-xl">
                                        <span class="material-symbols-outlined text-[#A30D11]">
                                            delete
                                        </span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- {/* TABLE */} --}}
        </div>
        {{-- {/* CENTER */} --}}


    </div>
</body>

</html>
