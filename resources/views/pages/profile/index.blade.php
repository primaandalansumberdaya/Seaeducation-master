@extends('layouts.user2')

@section('title', ' Profile')

@section('content')

    <section class="flex justify-center py-8 bg-blue-5">
        <!-- profile biodata -->
        <section class="flex flex-col">

            <div class="w-64 p-12 text-center bg-white rounded-lg shadow-md">

                <img src="../../assets/images/banner2.png" alt="Profile-Image"
                    class="mx-auto mb-4 border-2 rounded-full w-28 h-28 border-slate-300" />

                <h2 class="mb-2 text-xl font-semibold">John Doe</h2>

                <p class="text-gray-600">Frontend Developer</p>
                <!-- Informasi profile lainnya -->
            </div>

            <div
                class="items-center w-64 px-8 py-3 mt-5 text-center rounded-lg shadow-md bg-primary-shineblue hover:bg-primary-blue">
                <a to="#" class="text-base font-bold text-white">
                    Edit Profile
                </a>
            </div>

            <div class="w-64 px-8 py-3 mt-5 bg-white rounded-lg shadow-md">

                <div>
                    <div class="h-full p-4">
                        <!-- Email -->
                        <div class="flex items-center pb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                                class="pr-4 text-lg">
                                <path
                                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                            </svg>
                            <p class="text-sm">devin23@gmail.com</p>
                        </div>

                        <!-- Phone Number -->
                        <div class="flex items-center pb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                                class="pr-4 text-lg">
                                <path
                                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                            </svg>
                            <p class="text-sm">0898-7566-4532</p>
                        </div>

                        <!-- Location -->
                        <div class="flex items-center pb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"
                                class="pr-4 text-lg">
                                <path
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                            </svg>
                            <p class="text-sm">Banten, Tangerang Selatan</p>
                        </div>

                        <!-- Gender -->
                        <div class="flex items-center pb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                class="pr-4 text-lg">
                                <path
                                    d="M289.8 46.8c3.7-9 12.5-14.8 22.2-14.8H424c13.3 0 24 10.7 24 24V168c0 9.7-5.8 18.5-14.8 22.2s-19.3 1.7-26.2-5.2l-33.4-33.4L321 204.2c19.5 28.4 31 62.7 31 99.8c0 97.2-78.8 176-176 176S0 401.2 0 304s78.8-176 176-176c37 0 71.4 11.4 99.8 31l52.6-52.6L295 73c-6.9-6.9-8.9-17.2-5.2-26.2zM400 80l0 0h0v0zM176 416a112 112 0 1 0 0-224 112 112 0 1 0 0 224z" />
                            </svg>
                            <p class="text-sm">Pria</p>
                        </div>

                        <!-- LinkedIn -->
                        <div class="flex items-center pb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                class="pr-4 text-lg">
                                <path
                                    d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                            </svg>
                            <p class="text-sm">linkedin.com/johndoe</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- Profile detail --}}
        <section class="flex-col w-auto min-h-screen ">

            {{-- top --}}
            <div class="flex justify-between w-full p-4">

                <a href="#"
                    class="px-8 text-base font-medium border-b-4 hover:borde-primary-shineblue focus:border-primary-shineblue">About
                </a>

                <a href="#"
                    class="px-8 text-base font-medium border-b-4 hover:borde-primary-shineblue focus:border-primary-shineblue">My
                    Document
                </a>

                <button class="px-6 py-2 text-white rounded-lg bg-secondary-yellow hover:bg-secondary-orange ml-72">
                    Lihat CV
                </button>
            </div>

            {{-- education --}}
            <section class="flex flex-col p-4">
                <div class="bg-white rounded-lg shadow-md">
                    <div class="p-4">
                        <div class="flex justify-between py-2 border-b-2 border-gray-20">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-lg font-bold">Riwayat Pendidikan</h5>

                            <button class="flex items-center p-1 px-2 font-bold border-transparent text-orange">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                    class="text-secondary-yellow">
                                    <path
                                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                </svg>
                                <p class="my-0 ml-2 font-medium text-secondary-yellow">
                                    <b>Tambah</b>
                                </p>
                            </button>
                        </div>

                    </div>

                    <div class="p-4 py-2">

                        <div class="flex justify-between">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-base font-medium text-heading-4">Pendidikan 1</h5>
                            <p class="flex items-center px-2 text-base font-medium">19 Februari 2023
                                -
                                Until Now
                            </p>
                        </div>

                        <div class="flex justify-between">
                            <p class="flex items-center text-base">Degree
                            </p>
                            <p class="flex items-center px-2 text-base">Jurusan
                            </p>
                        </div>

                    </div>
                </div>
            </section>

            {{-- experience --}}
            <section class="flex flex-col p-4">
                <div class="bg-white rounded-lg shadow-md">

                    <div class="p-4">

                        <div class="flex justify-between py-2 border-b-2 border-gray-20">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-lg font-bold">Pengalaman Kerja</h5>

                            <button class="flex items-center p-1 px-2 font-bold border-transparent text-orange">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                    class="text-secondary-yellow">
                                    <path
                                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                </svg>
                                <p class="my-0 ml-2 font-medium text-secondary-yellow">
                                    <b>Tambah</b>
                                </p>
                            </button>
                        </div>

                    </div>

                    <div class="p-4 py-2">

                        <div class="flex justify-between">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-base font-medium text-heading-4">Pengalaman 1</h5>
                            <p class="flex items-center px-2 text-base font-medium">19 Februari 2023
                                -
                                Until Now
                            </p>
                        </div>

                        <div class="flex justify-between">
                            <p class="flex items-center text-base">Posisi
                            </p>
                        </div>

                    </div>

                </div>
            </section>

            <!-- Organisasi -->
            <section class="flex flex-col p-4">

                <div class="bg-white rounded-lg shadow-md">

                    <div class="p-4">

                        <div class="flex justify-between py-2 border-b-2 border-gray-20">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-lg font-bold">Pengalaman Organisasi / lainnya</h5>

                            <button class="flex items-center p-1 px-2 font-bold border-transparent text-orange">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                    class="text-secondary-yellow">
                                    <path
                                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                </svg>
                                <p class="my-0 ml-2 font-medium text-secondary-yellow">
                                    <b>Tambah</b>
                                </p>
                            </button>
                        </div>

                    </div>

                    <div class="p-4 py-2">

                        <div class="flex justify-between">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-base font-medium text-heading-4">Organisasi 1</h5>
                            <p class="flex items-center px-2 text-base font-medium">
                                19 Februari 2023
                            </p>
                        </div>

                        <div class="flex justify-between">
                            <p class="flex items-center text-base">Posisi
                            </p>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Kemampuan -->
            <section class="flex flex-col p-4">

                <div class="bg-white rounded-lg shadow-md">

                    <div class="p-4">

                        <div class="flex justify-between py-2 border-b-2 border-gray-20">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-lg font-bold">Skill</h5>

                            <button class="flex items-center p-1 px-2 font-bold border-transparent text-orange">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                    class="text-secondary-yellow">
                                    <path
                                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                </svg>
                                <p class="my-0 ml-2 font-medium text-secondary-yellow">
                                    <b>Tambah</b>
                                </p>
                            </button>
                        </div>

                    </div>

                    <div class="p-4 py-2">

                        <div class="flex justify-between">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-base font-medium text-heading-4">Skill 1</h5>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Bahasa -->
            <section class="flex flex-col p-4">

                <div class="bg-white rounded-lg shadow-md">

                    <div class="p-4">

                        <div class="flex justify-between py-2 border-b-2 border-gray-20">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-lg font-bold">Bahasa</h5>

                            <button class="flex items-center p-1 px-2 font-bold border-transparent text-orange">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                    class="text-secondary-yellow">
                                    <path
                                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                </svg>
                                <p class="my-0 ml-2 font-medium text-secondary-yellow">
                                    <b>Tambah</b>
                                </p>
                            </button>
                        </div>

                    </div>

                    <div class="p-4 py-2">

                        <div class="flex justify-between">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-base font-medium text-heading-4">Bahasa 1</h5>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Prestasi -->
            <section class="flex flex-col p-4">

                <div class="bg-white rounded-lg shadow-md">

                    <div class="p-4">

                        <div class="flex justify-between py-2 border-b-2 border-gray-20">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-lg font-bold">Prestasi</h5>

                            <button class="flex items-center p-1 px-2 font-bold border-transparent text-orange">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                    class="text-secondary-yellow">
                                    <path
                                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                </svg>
                                <p class="my-0 ml-2 font-medium text-secondary-yellow">
                                    <b>Tambah</b>
                                </p>
                            </button>
                        </div>

                    </div>

                    <div class="p-4 py-2">

                        <div class="flex justify-between">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-base font-medium text-heading-4">Prestasi 1</h5>
                            <p class="flex items-center px-2 text-base font-medium">
                                19 Februari 2023
                            </p>
                        </div>

                        <div class="flex justify-between">
                            <p class="flex items-center text-base">Posisi
                            </p>
                        </div>

                    </div>
                </div>
            </section>

        </section>

    </section>

@endsection
