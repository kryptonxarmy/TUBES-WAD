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
$rows = [
    [
        'id' => 1,
        'nama_berkas' => 'TAK',
        'keperluan' => 'Input TAK',
        'date' => '12/09/23',
        'keterangan' => 'berkas diinput berdasarkan...',
        'status' => 'Delivered',
    ],
    [
        'id' => 2,
        'nama_berkas' => 'EPrT',
        'keperluan' => 'Input EPrT',
        'date' => '12/09/23',
        'keterangan' => 'berkas diinput berdasarkan...',
        'status' => 'Delivered',
    ],
    [
        'id' => 3,
        'nama_berkas' => 'Bimbingan',
        'keperluan' => 'Bimbingan',
        'date' => '12/09/23',
        'keterangan' => 'berkas diinput berdasarkan...',
        'status' => 'Delivered',
    ],
    [
        'id' => 4,
        'nama_berkas' => 'Jurnal',
        'keperluan' => 'Upload Jurnal',
        'date' => '12/09/23',
        'keterangan' => 'berkas diinput berdasarkan...',
        'status' => 'Delivered',
    ],
    [
        'id' => 5,
        'nama_berkas' => 'Sertifikat Lomba',
        'keperluan' => 'Upload Sertifikat',
        'date' => '12/09/23',
        'keterangan' => 'berkas diinput berdasarkan...',
        'status' => 'Delivered',
    ],
    [
        'id' => 6,
        'nama_berkas' => 'Target Sidang',
        'keperluan' => 'Input TAK',
        'date' => '12/09/23',
        'keterangan' => 'berkas diinput berdasarkan...',
        'status' => 'Delivered',
    ],
];
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
                    <h1 class="font-bold">Sort by</h1>
                    <details class="dropdown">
                        <summary class="m-1 btn btn-sm">Default</summary>
                        <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52">
                            <li>
                                <a>Item 1</a>
                            </li>
                            <li>
                                <a>Item 2</a>
                            </li>
                        </ul>
                    </details>
                </div>
                <div class="flex gap-2 items-center">
                    <input type="text" placeholder="Type here"
                        class="input input-sm input-bordered w-full max-w-xs" />
                    <button class="btn btn-sm bg-green-400">Cetak Laporan</button>
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
                            <th>Nama</th>
                            <th>Keperluan</th>
                            <th>Date</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                            <tr class="text-center">
                                <th>{{ $row['id'] }}</th>
                                <td>{{ $row['nama_berkas'] }}</td>
                                <td>{{ $row['keperluan'] }}</td>
                                <td>{{ $row['date'] }}</td>
                                <td>{{ $row['keterangan'] }}</td>
                                <td>
                                    <div class="bg-[#EBF9F1] text-[#1F9254] px-3 py-1 rounded-xl">{{ $row['status'] }}
                                    </div>
                                </td>
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
