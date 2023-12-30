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
            <a href="/dashboardmahasiswa/jurnal">
                <span class="material-symbols-outlined ml-[8em] hover:cursor-pointer">
                    arrow_back
                </span>
            </a>
            <form action="{{ route('jurnal.store') }}" class="w-full flex flex-col items-center" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="text-2xl font-bold mb-4">Input Jurnal</h1>
                <div class="mb-4 w-[60%]">
                    <label for="No_Sertifikat" class="block text-sm font-bold text-black">Judul Jurnal</label>
                    <input type="text" id="No_Sertifikat" name="judul_jurnal" placeholder="Type here"
                        class="input input-bordered w-full" required />
                </div>
                <div class="mb-4 w-[60%]">
                    <label for="nilai" class="block text-sm font-bold text-black ">Tanggal Publish</label>
                    <input type="date" id="nilai" name="tgl_publish" placeholder="Type here"
                        class="input input-bordered w-full " required />
                </div>
                <div class="mb-4 w-[60%]">
                    <label for="publisher" class="block text-sm font-bold text-black ">Publisher</label>
                    <input type="text" id="publisher" name="publisher" placeholder="Type here"
                        class="input input-bordered w-full " required />
                </div>
                <div class="mb-4 w-[60%]">
                    <label for="indeks_pub" class="block text-sm font-bold text-black ">Indeks Publikasi Jurnal</label>
                    <input type="text" id="indeks_pub" name="indeks_pub" placeholder="Type here"
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
