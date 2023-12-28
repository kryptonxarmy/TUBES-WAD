<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.24/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.tailwindcss.com"></script>

<body>
    <div class="h-screen w-screen flex bg-[#111827]">
        <div class="h-full w-[80%]">
            <div class="absolute w-[80%] mt-20">
                <h1 class="font-black relative text-white text-5xl z-20 w-[60%] mt-12 ml-12">Sistem Managemen
                    Monitoring Mahasiswa Cumlaude</h1>
                <p class="relative text-white z-20 w-[60%] mt-5 ml-12">
                    Selamat Datang di Website Monitoring Mahasiswa Cumlaude Sistem Informasi, dengan website ini, anda
                    dapat memantau perkembangan progres untuk mempersiapkan kelulusan anda dengan predikat cumlaude
                </p>
            </div>
            <div class="w-[72.7%] h-full bg-black absolute opacity-50"></div>
            <img src="/img/TULT.png" alt="telu" class="w-full h-full object-cover" />
        </div>
        <div class="h-full w-[30%] bg-white flex flex-col justify-center items-center">
            <img src="https://s1sisteminformasi.id/wp-content/uploads/2023/09/Logo-Sistem-Informasi-167.png"
                alt="logo sisfo" />
            <div class="w-full px-8">
                <h1 class="font-extrabold text-lg text-[#274C77] mb-3 text-start mt-7 underline">Login</h1>
            </div>
            <div class="w-full px-8">
                <form class="w-full">
                    <div class="mb-3">
                        <label for="email" class="block mb-2 text-sm font-medium">
                            NIM/NIP
                        </label>
                        <input type="string" id="number"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-xl "
                            placeholder="120xxxxxx" />
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium ">
                            Password
                        </label>
                        <input type="password" id="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-xl "
                            required />
                    </div>
                    <div class="w-[80%] mx-auto gap-4 flex flex-col">
                        <a type="submit" href="/dashboardKaprodi"
                            class="bg-[#4680FF] text-center text-white py-2 rounded-xl">
                            Log in
                        </a>
                        <div class="flex flex-col">
                            <hr
                                class="h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100" />
                            <p class="text-black font-bold text-center">Kontak Keluhan</p>
                        </div>
                        <a type="submit" href="/dashboardKaprodi"
                            class="bg-[#28A745] flex gap-2 items-center px-4 justify-center text-center text-white py-2 rounded-xl">
                            {{-- <FaWhatsapp class="text-center text-xl" /> --}}
                            Helpdesk Prodi
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
