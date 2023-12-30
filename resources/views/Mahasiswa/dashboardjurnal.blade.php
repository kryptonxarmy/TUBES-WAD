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
$jurns = [['id' => 1, 'judul_jurnal' => 'No. 18333/SPI3-A/BHS/2022', 'tgl_publish' => '27/05/2024', 'publisher' => 'Erlangga', 'indeks_pub' => 'SINTA I'], ['id' => 2, 'judul_jurnal' => 'No. 18333/SPI3-A/BHS/2022', 'tgl_publish' => '27/05/2024', 'publisher' => 'Universitas Indonesia Press', 'indeks_pub' => 'SINTA II'], ['id' => 3, 'judul_jurnal' => 'No. 18333/SPI3-A/BHS/2022', 'tgl_publish' => '27/05/2024', 'publisher' => 'LPPM UNAIR', 'indeks_pub' => 'SINTA IV'], ['id' => 4, 'judul_jurnal' => 'No. 18333/SPI3-A/BHS/2022', 'tgl_publish' => '27/05/2024', 'publisher' => 'Indonesian Institute of Sciences', 'indeks_pub' => 'SINTA I'], ['id' => 5, 'judul_jurnal' => 'No. 18333/SPI3-A/BHS/2022', 'tgl_publish' => '27/05/2024', 'publisher' => 'jurnal siteknik', 'indeks_pub' => 'SINTA I']];
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
            <a href="/dashboardmahasiswa/eprt"
                class="w-full flex hover:cursor-pointer items-center ps-8 gap-2 bg-white text-[#001247] py-3 rounded-r-xl">
                <span class="material-symbols-outlined">
                    insert_chart
                </span>
                <h1 class="font-bold text-lg">EPrT</h1>
            </a>
            <a href="/dashboardmahasiswa/jurnal"
                class="w-full flex hover:cursor-pointer items-center ps-8 gap-2 bg-[#001247] text-white py-3 rounded-r-xl">
                <span class="material-symbols-outlined">
                    calendar_month
                </span>
                <h1 class="font-bold text-lg">Jurnal</h1>
            </a>

        </div>
        {{-- {/* ------- SIDEBAR --------- */} --}}

        {{-- {/* CENTER */} --}}
        <div class="w-full mr-10 pt-[7em] flex flex-col gap-4">
            {{-- {/* ATAS */} --}}
            <div class="flex justify-between bg-white p-3 rounded-xl">
                <div class="flex gap-2 items-center">
                    <h1 class="font-bold text-xl">Table Jurnal</h1>
                </div>
                <div class="flex gap-2 items-center">
                    <a href="/dashboardmahasiswa/jurnal/inputjurnal">
                        <button class="btn btn-sm bg-green-400">Tambah Jurnal</button>
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
                            <th>Judul Jurnal</th>
                            <th>Tanggal Publish</th>
                            <th>Publisher</th>
                            <th>Indeks Publikasi<br>Jurnal</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jurnals as $jurnal)
                            <tr class="text-center">
                                <th>{{ $loop->iteration }}</th>
                                <td class="max-w-xs">{{ $jurnal['judul_jurnal'] }}</td>
                                <td>{{ $jurnal['tgl_publish'] }}</td>
                                <td>{{ $jurnal['publisher'] }}</td>
                                <td>{{ $jurnal['indeks_pub'] }}</td>
                                <td class="flex justify-center">
                                    <a href="{{ route('jurnal.edit', $jurnal->id) }}" class="mx-2 text-xl">
                                        {{-- UPDATE BUTTON --}}
                                        <span class="material-symbols-outlined text-[#624DE3]">
                                            edit_square
                                        </span>
                                    </a>
                                    <form action="{{ route('jurnal.deletejurnal', $jurnal->id) }}" method="post">
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
