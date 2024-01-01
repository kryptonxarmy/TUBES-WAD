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
$rows = [['id' => 1, 'no_sertif' => 'No. 18333/SPI3-A/BHS/2022', 'nilai' => '350', 'tgl_berakhir' => '27/05/2024', 'judul_ta' => '2021'], ['id' => 2, 'no_sertif' => 'No. 18333/SPI3-A/BHS/2022', 'nilai' => '397', 'tgl_berakhir' => '27/05/2024', 'judul_ta' => '2021'], ['id' => 3, 'no_sertif' => 'No. 18333/SPI3-A/BHS/2022', 'nilai' => '450', 'tgl_berakhir' => '27/05/2024', 'judul_ta' => '2021'], ['id' => 4, 'no_sertif' => 'No. 18333/SPI3-A/BHS/2022', 'nilai' => '400', 'tgl_berakhir' => '27/05/2024', 'judul_ta' => '2021'], ['id' => 5, 'no_sertif' => 'No. 18333/SPI3-A/BHS/2022', 'nilai' => '320', 'tgl_berakhir' => '27/05/2024', 'judul_ta' => '2021']];
?>

<body>
    <div class="bg-[#E7ECEF] h-[200vh] flex gap-6" data-theme="light">
        @include('components.navbar')
        {{-- {/* SIDEBAR */} --}}
        <div class="w-[23vw] relative z-10 flex flex-col gap-3 border-black py-[7em] h-screen">
            <a href="/Dashboard/Kaprodi/main"
                class="w-full flex hover:cursor-pointer items-center ps-8 gap-2 bg-[#001247] text-[#fff] py-3 rounded-r-xl">
                <span class="material-symbols-outlined">
                    home
                </span>
                <h1 class="font-bold text-lg">Dashboard</h1>
            </a>
            <a href="/Dashboard/Kaprodi/laporanSidang"
                class="w-full flex hover:cursor-pointer items-center ps-8 gap-2 bg-[#fff] text-[#001247] py-3 rounded-r-xl">
                <span class="material-symbols-outlined">
                    insert_chart
                </span>
                <h1 class="font-bold text-lg">EPrT</h1>
            </a>
            <a href="/dashboardmahasiswa/jurnal"
                class="w-full flex hover:cursor-pointer items-center ps-8 gap-2 bg-[#fff] text-[#001247] py-3 rounded-r-xl">
                <span class="material-symbols-outlined">
                    calendar_month
                </span>
                <h1 class="font-bold text-lg">Jurnal</h1>
            </a>

        </div>
        {{-- {/* ------- SIDEBAR --------- */} --}}

        {{-- {/* CENTER */} --}}
        <div class="w-full mr-10 pt-[7em] flex flex-col gap-4 items-center">
            {{-- {/* ATAS */} --}}
            @auth
                <h1 class="font-bold text-center text-4xl ">Welcome {{ auth()->user()->fullname }} !</h1>
                <div
                    class="card shadow-xl h-[50vh] border-2 p-4 w-[70vw] mt-[3em] flex flex-col items-center justify-between">
                    <div class="flex flex-col items-center">
                        <img src="/img/data-dashboard.svg" class="w-[7em] mb-4" alt="">
                        <h1 class="font-semibold text-xl">NIM : {{ auth()->user()->userID }}</h1>
                        <h1 class="font-semibold text-xl">Kelas : {{ auth()->user()->kelas }}</h1>
                    </div>
                    <div class="">
                        <h1 class="font-bold text-xl text-center">Your are logged in as</h1>
                        <h1 class="font-bold text-[2em] text-center">{{ auth()->user()->role }}</h1>
                    </div>
                </div>
            @endauth
        </div>
        {{-- {/* CENTER */} --}}


    </div>
</body>

</html>
