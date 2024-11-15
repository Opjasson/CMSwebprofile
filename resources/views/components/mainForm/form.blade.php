<form class="flex flex-col gap-4 pb-12" action="" method="post">
    <div class="flex justify-between text-center">
        <label for="">Judul</label>
        <div>:</div>
        <input name="judul" placeholder="Masukan judul" required class="w-3/4 py-[0.30rem] px-2 rounded-lg"
            type="text">
    </div>

    <div class="flex justify-between text-center">
        <label class="h-fit pr-[25px]" for="">Isi</label>
        <div>:</div>
        <textarea placeholder="Masukan isi content" class="w-3/4 py-[0.30rem] px-2 rounded-lg" name="isi" id="isi"
            cols="30" rows="10"></textarea>
    </div>

    <div class="flex justify-between text-center">
        <label for="">Gambar</label>
        <div>:</div>
        <div class="w-3/4 py-[0.30rem] px-2 rounded-lg  text-left">
            <img class=" block w-72" src="" alt="profile">
            <input class="border w-full p-2" name="img" type="file">
        </div>
    </div>

    <div class="w-[13rem] flex gap-3">
        <button class="bg-green-600 py-1 rounded-md w-full text-white hover:bg-green-700 text-center"
            type="submit">SIMPAN</button>
        <a class="bg-slate-400 py-1 px-4 rounded-md  text-white hover:bg-slate-500 text-center"
            href="/">KEMBALI</a>
    </div>
</form>
