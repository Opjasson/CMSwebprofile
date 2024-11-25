<form class="flex flex-col gap-4 pb-14 pt-3" action="" method="post">
    <div class="lg:flex block lg:justify-between lg:text-center text-left border-b-2 pb-3">
        <label for="">Judul</label>
        <div class="lg:block hidden">:</div>
        <input name="judul" placeholder="Masukan judul" required class="lg:w-3/4 w-full py-[0.30rem] px-2 rounded-lg"
            type="text">
    </div>

    <div class="lg:flex block lg:justify-between lg:text-center text-left border-b-2 pb-3 h-56 ">
        <label class="h-fit pr-[25px]" for="">Isi</label>
        <div class="lg:block hidden">:</div>
        @include('components.mainForm._wysiwyg')
    </div>

    <div class="lg:flex block lg:justify-between lg:text-center text-left border-b-2 pb-3">
        <label for="">Gambar</label>
        <div class="lg:block hidden">:</div>
        <div class="w-3/4 py-[0.30rem] px-2 rounded-lg  text-left">
            <img class=" block w-72" src="" alt="profile">
            <input class="border border-slate-600 w-full rounded-lg" name="img" type="file">
        </div>
    </div>

    <div class="w-[13rem] flex gap-3">
        <button class="bg-green-600 py-1 rounded-md w-full text-white hover:bg-green-700 text-center"
            type="submit">SIMPAN</button>
        <a class="bg-slate-400 py-1 px-4 rounded-md  text-white hover:bg-slate-500 text-center"
            href="/">KEMBALI</a>
    </div>
</form>
