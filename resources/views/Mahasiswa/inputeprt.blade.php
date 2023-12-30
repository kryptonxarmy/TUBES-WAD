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
            <form action="{{ route('eprt.store') }}" class="w-full flex flex-col items-center" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="text-2xl font-bold mb-4">Input EPrT</h1>
                <div class="mb-4 w-[60%]">
                    <label for="No_Sertifikat" class="block text-sm font-bold text-black">No. Sertifikat</label>
                    <input type="text" id="No_Sertifikat" name="No_Sertifikat" placeholder="Type here"
                        class="input input-bordered w-full" required />
                </div>
                <div class="mb-4 w-[60%]">
                    <label for="nilai" class="block text-sm font-bold text-black ">Nilai EPrT</label>
                    <input type="text" id="nilai" name="Nilai" placeholder="Type here"
                        class="input input-bordered w-full " required />
                </div>
                <div class="mb-4 w-[60%]">
                    <label for="Tanggal_Berakhir" class="block text-sm font-bold text-black ">Tanggal Berakhir</label>
                    <input type="date" id="Tanggal_Berakhir" name="Tanggal_Berakhir" placeholder="Type here"
                        class="input input-bordered w-full " required />
                </div>
                <div class="w-[40%] mt-4">
                    <button type="submit" class="btn btn-primary w-full">Submit</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
