<form class="flex flex-col gap-4 pb-14 pt-3" action="{{ route('dashboard.konten.action') }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    {{-- @method('post') --}}
    <div class="mb-3 flex gap-7">
        <label for="judul" class="block w-80 mb-2 text-sm font-medium text-gray-900 dark:text-white"
            for="">Judul</label>
        <div class="text-right">:</div>
        <div class="flex flex-col w-full gap-3">
            <input type="text" id="judul" name="judul"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="@if ($isi != null || !empty($isi)) {{ $isi->judul }}
                @else
                    {{ old('judul') }} @endif" />
            @error('judul')
                <div class="text-red-600 -mt-3 md:text-base text-sm">{{ $message }}</div>
            @enderror
        </div>
    </div>


    <div class="mb-3 flex gap-7">
        <label for="isi" class="block w-80 mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi</label>
        <div class="text-right">:</div>
        <div class="flex flex-col w-full gap-3">
            <textarea name="isi" id="isi" class="isi">
@if ($isi != null || !empty($isi))
{{ $isi->isi }}
@else
@endif

{{ old('isi') }}
</textarea>
            @error('isi')
                <div class="text-red-600 -mt-3 md:text-base text-sm">{{ $message }}</div>
            @enderror
        </div>
    </div>



    <div class="mb-3 flex gap-7">
        <label for="judul" class="block w-80 mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar</label>
        <div class="text-right">:</div>
        <div class="flex flex-col w-full gap-3">
            <img class=" block w-72"
                src="@if ($isi != null || !empty($isi)) ../{{ $isi->gambar }}
            @else @endif"
                alt="profile">
            <input class="border border-slate-600 w-full rounded-lg" name="gambar" type="file">
            @error('gambar')
                <div class="text-red-600 -mt-3 md:text-base text-sm">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="w-[13rem] flex gap-3">
        <button class="bg-green-600 py-1 rounded-md w-full text-white hover:bg-green-700 text-center"
            type="submit">SIMPAN</button>
        <a class="bg-slate-400 py-1 px-4 rounded-md  text-white hover:bg-slate-500 text-center"
            href="/">KEMBALI</a>
    </div>
</form>
