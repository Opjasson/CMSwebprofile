@extends('layouts.dashboards.dashboard-layout')

@section('title', 'file')

@section('content')
    <div class="w-full">
        <nav class="flex justify-between bg-blue-400 px-5 py-2 md:w-full w-[28rem] md:text-base text-sm">
            <div class="md:flex block gap-3">
                <img src="/" alt="LogoPT">
                <h1>ADMIN</h1>
            </div>

            <svg onclick="menu()"
                class="md:hidden hover:cursor-pointer hover:rotate-3 hover:text-white block w-[34px] h-[34px] mt-1 text-gray-800 dark:text-white"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
            </svg>


            <div class="md:flex hidden gap-1 max-h-max">
                <p class="mt-2">nama perusahaan anda</p>
                <p id="pc" class="hover:bg-blue-200 px-4 py-2 ">
                    <svg class="w-[23px] h-[23px] text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M5 3a2 2 0 0 0-2 2v5h18V5a2 2 0 0 0-2-2H5ZM3 14v-2h18v2a2 2 0 0 1-2 2h-6v3h2a1 1 0 1 1 0 2H9a1 1 0 1 1 0-2h2v-3H5a2 2 0 0 1-2-2Z"
                            clip-rule="evenodd" />
                    </svg>
                </p>

                <p id="user" onclick="user()" class="flex hover:bg-blue-200 md:px-3 md:py-2 ">
                    <svg id="user" class="w-[23px] h-[23px] text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path id="user" fill-rule="evenodd"
                            d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                            clip-rule="evenodd" />
                    </svg>

                    <svg id="user" class="w-[23px] h-[23px] -ml-2 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path id="user" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.8" d="m8 10 4 4 4-4" />
                    </svg>
                </p>
                <x-listUser />
            </div>
        </nav>
        <div class="lg:flex max-h-max lg:w-full md:w-[48rem] w-max">
            <x-sideNav.sideNormal />
            <main class="bg-slate-300 md:px-8 px-3 py-4 lg:w-full md:w-full w-[28rem] ">
                <h1 class="text-4xl font-semiboldbold mb-3">Menu Halaman</h1>
                <h2 class="mb-5">Step 2 : Isi detail menu</h2>
                <div>
                    <form class="h-screen" action="" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-5 flex gap-5 border-b-2 border-slate-500 pb-5">
                            <label for="judul" class="block w-48 text-md font-medium text-gray-900 dark:text-white">Judul
                                Halaman :</label>
                            <input type="text" name="judul" id="judul"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                        </div>

                        

                        <div class="mb-5 flex gap-5 border-b-2 border-slate-500 pb-5">
                            <label for="subMenu"
                                class="block w-48 mb-2 text-md font-medium text-gray-900 dark:text-white">Sub-Menu Dari :</label>
                            <select id="subMenu" name="up_halaman"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="0" selected>-</option>
                                <option value="1">Beranda</option>
                                <option value="2">Reels</option>
                                <option value="3">Profile</option>
                                <option value="4">Berita</option>
                                <option value="5">Data</option>
                                <option value="6">Staf</option>
                                <option value="7">Galeri Perusahaan</option>
                                <option value="8">Lowongan Pekerjaan</option>
                            </select>
                        </div>

                        <div class="mb-5 flex gap-5 border-b-2 border-slate-500 pb-5">
                            <label for="urutanHalaman"
                                class="block w-48 mb-2 text-md font-medium text-gray-900 dark:text-white">Urutan Halaman :</label>
                            <select id="urutanHalaman" name="urutan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="1" selected>1</option>
                                <option value="2">1</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        <a href="{{ route('dashboard.menu.tambah') }}"
                            class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-3 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800">Back</a>
                    </form>
                </div>
            </main>
        </div>

    </div>
@endsection
