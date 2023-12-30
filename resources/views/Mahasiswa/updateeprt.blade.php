<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data Mahasiswa</title>
    @include('tailwind')
</head>

<body>
    <div class="bg-[#E7ECEF] h-[200vh] flex-col flex gap-6" data-theme="light">
        @include('components.navbar')
        <div class="mt-[7em] px-[7em]">
            <a href="/dashboardkaprodi">
                <span class="material-symbols-outlined ml-[8em] hover:cursor-pointer">
                    arrow_back
                </span>
            </a>
            <form action="/dashboardmahasiswa/eprt/update/{{ $eprt->id }}" method="post" enctype="multipart/form-data"
                class="w-full flex flex-col items-center">
                @csrf
                @method('PUT')
                <h1 class="text-2xl font-bold mb-4">Update EPrT</h1>
                <div class="mb-4 w-[60%]">
                    <label for="nama_mahasiswa" class="block text-sm font-bold text-black">Nomor Sertifikat</label>
                    <input type="text" id="nama_mahasiswa" name="No_Sertifikat" value="{{ $eprt->No_Sertifikat }}"
                        class="input input-bordered w-full" required />
                </div>
                <div class="mb-4 w-[60%]">
                    <label for="nim" class="block text-sm font-bold text-black">Nilai</label>
                    <input type="text" id="nim" name="Nilai" value="{{ $eprt->Nilai }}"
                        class="input input-bordered w-full" required />
                </div>
                <div class="mb-4 w-[60%]">
                    <label for="kelas" class="block text-sm font-bold text-black">Tanggal Berakhir</label>
                    <input type="date" id="kelas" name="Tanggal_Berakhir" value="{{ $eprt->Tanggal_Berakhir }}"
                        class="input input-bordered w-full" required />
                </div>
                <div class="w-[40%] mt-4">
                    <button type="submit" class="btn btn-primary w-full">Submit</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
