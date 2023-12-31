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
            <a href="/dashboardmahasiswa/jurnal">
                <span class="material-symbols-outlined ml-[8em] hover:cursor-pointer">
                    arrow_back
                </span>
            </a>
            <form action="/dashboardmahasiswa/jurnal/update/{{ $jurnal->id }}" method="post" enctype="multipart/form-data"
                class="w-full flex flex-col items-center">
                @csrf
                @method('PUT')
                <h1 class="text-2xl font-bold mb-4">Update Jurnal</h1>
                <div class="mb-4 w-[60%]">
                    <label for="judul_jurnal" class="block text-sm font-bold text-black">Judul Jurnal</label>
                    <input type="text" id="nama_mahasiswa" name="judul_jurnal" value="{{ $jurnal->judul_jurnal }}"
                        class="input input-bordered w-full" required />
                </div>
                <div class="mb-4 w-[60%]">
                    <label for="tgl_publish" class="block text-sm font-bold text-black">Tanggal Publish</label>
                    <input type="date" id="tgl_publish" name="tgl_publish" value="{{ $jurnal->tgl_publish }}"
                        class="input input-bordered w-full" required />
                </div>
                <div class="mb-4 w-[60%]">
                    <label for="publisher" class="block text-sm font-bold text-black">Publisher</label>
                    <input type="text" id="publisher" name="publisher" value="{{ $jurnal->publisher }}"
                        class="input input-bordered w-full" required />
                </div>
                <div class="mb-4 w-[60%]">
                    <label for="indeks_pub" class="block text-sm font-bold text-black">Indeks Publikasi Jurnal</label>
                    <input type="text" id="indeks_pub" name="indeks_pub" value="{{ $jurnal->indeks_pub }}"
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
