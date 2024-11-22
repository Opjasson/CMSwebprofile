@extends('layouts.dashboards.dashboard-layout')

@section('title', 'Profile')


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
            <main class="bg-slate-300 md:px-8 px-3 py-4 lg:w-full md:w-full w-[28rem]">
                <h1 class="text-4xl font-semiboldbold mb-5">Ubah data profile</h1>
                <div class="w-full p-4">
                    <form action="{{ $action }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3 flex gap-7">
                            <label for="nama"
                                class="block w-80 mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <div class=" text-right">:</div>
                            <div class="flex flex-col w-full gap-3">
                                <input type="text" id="nama" name="name" value="{{ $data->name }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                @error('name')
                                    <div class="text-red-600 -mt-3 md:text-base text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 flex  gap-7">
                            <label for="Alamat"
                                class="block w-80 mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                            <div class=" text-right">:</div>
                            <div class="flex flex-col w-full gap-3">
                                <textarea id="Alamat" rows="4" name="alamat"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $data->alamat }}</textarea>
                                @error('alamat')
                                    <div class="text-red-600 -mt-3 md:text-base text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 flex  gap-7">
                            <label for="Kota"
                                class="block w-80 mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota</label>
                            <div class=" text-right">:</div>
                            <div class="flex flex-col w-full gap-3">
                                <input type="text" id="Kota" name="kota"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{ $data->kota }}" />
                                    @error('kota')
                                        <div class="text-red-600 border -mt-3 md:text-base text-sm">{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>
                        <div class="mb-3 flex  gap-7">
                            <label for="Telepon"
                                class="block w-80 mb-2 text-sm font-medium text-gray-900 dark:text-white">Telepon</label>
                            <div class=" text-right">:</div>
                            <div class="flex flex-col w-full gap-3">
                                <input type="text" id="Telepon" value="{{ $data->telepon }}" name="telepon"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@flowbite.com" />
                                    @error('telepon')
                                        <div class="text-red-600 -mt-3 md:text-base text-sm">{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>

                        <div class="mb-3 flex  gap-7">
                            <label for="Email"
                                class="block w-80 mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <div class=" text-right">:</div>
                            <div class="flex flex-col w-full gap-3">
                                <input type="email" id="Email" name="email" value="{{ $data->email }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@flowbite.com" />
                                    @error('email')
                                        <div class="text-red-600 -mt-3 md:text-base text-sm">{{ $message }}</div>
                                    @enderror
                            </div>

                        </div>

                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

                        <a class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-3 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800"
                            href="/">KEMBALI</a>
                    </form>
                </div>

            </main>
        </div>

    </div>
@endsection
