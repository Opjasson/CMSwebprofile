@extends('layouts.dashboards.dashboard-layout')

@section('title', 'Sambutan')


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
                <h1 class="text-4xl font-semiboldbold">Ubah Sambutan</h1>
                @include('dashboard.konten.sambutan.form')
            </main>
        </div>

    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.5.1/tinymce.min.js"
        integrity="sha512-8+JNyduy8cg+AUuQiuxKD2W7277rkqjlmEE/Po60jKpCXzc+EYwyVB8o3CnlTGf98+ElVPaOBWyme/8jJqseMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        tinymce.init({
            selector: "textarea.isi",
            height: 300
        })
    </script>
@endsection
