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
    ['id' => 1, 'no_sertif' => 'No. 18333/SPI3-A/BHS/2022', 'nilai' => '350', 'tgl_berakhir' => '27/05/2024', 'judul_ta' => '2021'],
    ['id' => 2, 'no_sertif' => 'No. 18333/SPI3-A/BHS/2022', 'nilai' => '397', 'tgl_berakhir' => '27/05/2024', 'judul_ta' => '2021'],
    ['id' => 3, 'no_sertif' => 'No. 18333/SPI3-A/BHS/2022', 'nilai' => '450', 'tgl_berakhir' => '27/05/2024', 'judul_ta' => '2021'],
    ['id' => 4, 'no_sertif' => 'No. 18333/SPI3-A/BHS/2022', 'nilai' => '400', 'tgl_berakhir' => '27/05/2024', 'judul_ta' => '2021'],
    ['id' => 5, 'no_sertif' => 'No. 18333/SPI3-A/BHS/2022', 'nilai' => '320', 'tgl_berakhir' => '27/05/2024', 'judul_ta' => '2021']];
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
                <h1 class="font-bold text-lg">EPrT</h1>
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
                    <h1 class="font-bold text-xl">Table EPrT</h1>
                </div>
                <div class="flex gap-2 items-center">
                    <a href="/dashboardmahasiswa/inputeprt">
                        <button class="btn btn-sm bg-green-400">Tambah EPrT</button>
                    </a>
                </div>
            </div>
            {{-- {/* ATAS */} --}}

            {{-- {/* TABLE */} --}}
            <div class="overflow-x-auto bg-white border-2 border-gray-400 rounded-xl" data-theme="light">
                <table class="table table-zebra">
                    {{-- head --}}
                    {{-- (count($students) > 0) --}}
                    <thead>
                        <tr class="text-center text-black font-extrabold">
                            <th>No</th>
                            <th>No. Sertifikat</th>
                            <th>Nilai</th>
                            <th>Tanggal Berakhir</th>
                            <th>Judul TA</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $student)
                            <tr class="text-center">
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $student['no_sertif'] }}</td>
                                <td>{{ $student['nilai'] }}</td>
                                <td>{{ $student['tgl_berakhir'] }}</td>
                                <td>{{ $student['judul_ta'] }}</td>
                                <td class="flex justify-center">
                                    <a href="{{ route('eprt.edit', $eprt->id) }}" class="mx-2 text-xl">
                                        {{-- UPDATE BUTTON --}}
                                        <span class="material-symbols-outlined text-[#624DE3]">
                                            edit_square
                                        </span>
                                    </a>
                                    <form action="{{ route('eprt.deleteEprt', $eprt->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="mx-2 text-xl">
                                            <span class="material-symbols-outlined text-[#A30D11]">
                                                delete
                                            </span>
                                        </button>
                                    </form>
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
