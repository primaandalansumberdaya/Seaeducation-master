@extends('layouts.dashboard')

@section('title', ' Profile')

@section('content')

    <section class="bg-blue-5 flex justify-center py-8">
        <!-- profile biodata -->
        <section class="flex flex-col">

            <div class="bg-white p-12 rounded-lg shadow-md text-center w-64">

                <img src="../../assets/images/banner2.png" alt="Profile-Image"
                    class="w-28 h-28 rounded-full mx-auto mb-4 border-2 border-slate-300" />

                <h2 class="text-xl font-semibold mb-2">John Doe</h2>

                <p class="text-gray-600">Frontend Developer</p>
                <!-- Informasi profile lainnya -->
            </div>

            <div
                class="bg-primary-shineblue hover:bg-primary-blue rounded-lg py-3 px-8 mt-5 w-64 items-center text-center shadow-md">
                <a to="#" class="text-base text-white font-bold">
                    Edit Profile
                </a>
            </div>

            <div class="bg-white rounded-lg py-3 px-8 mt-5 w-64 shadow-md">

                <div>
                    <div class="p-4 h-full">
                        <!-- Email -->
                        <div class="flex pb-6 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                                class="text-lg pr-4">
                                <path
                                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                            </svg>
                            <p class="text-sm">devin23@gmail.com</p>
                        </div>

                        <!-- Phone Number -->
                        <div class="flex pb-6 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"
                                class="text-lg pr-4">
                                <path
                                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                            </svg>
                            <p class="text-sm">0898-7566-4532</p>
                        </div>

                        <!-- Location -->
                        <div class="flex pb-6 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"
                                class="text-lg pr-4">
                                <path
                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                            </svg>
                            <p class="text-sm">Banten, Tangerang Selatan</p>
                        </div>

                        <!-- Gender -->
                        <div class="flex pb-6 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                class="text-lg pr-4">
                                <path
                                    d="M289.8 46.8c3.7-9 12.5-14.8 22.2-14.8H424c13.3 0 24 10.7 24 24V168c0 9.7-5.8 18.5-14.8 22.2s-19.3 1.7-26.2-5.2l-33.4-33.4L321 204.2c19.5 28.4 31 62.7 31 99.8c0 97.2-78.8 176-176 176S0 401.2 0 304s78.8-176 176-176c37 0 71.4 11.4 99.8 31l52.6-52.6L295 73c-6.9-6.9-8.9-17.2-5.2-26.2zM400 80l0 0h0v0zM176 416a112 112 0 1 0 0-224 112 112 0 1 0 0 224z" />
                            </svg>
                            <p class="text-sm">Pria</p>
                        </div>

                        <!-- LinkedIn -->
                        <div class="flex pb-6 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"
                                class="text-lg pr-4">
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
            <div class="flex p-4 justify-between w-full">

                <a href="#"
                    class="text-base font-medium border-b-4 hover:borde-primary-shineblue focus:border-primary-shineblue px-8">About
                </a>

                <a href="#"
                    class="text-base font-medium border-b-4 hover:borde-primary-shineblue focus:border-primary-shineblue px-8">My
                    Document
                </a>

                <button class="bg-secondary-yellow hover:bg-secondary-orange px-6 py-2 rounded-lg text-white ml-72">
                    Lihat CV
                </button>
            </div>

            {{-- education --}}
            <section class="flex flex-col p-4">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="p-4">
                        <div class="py-2 flex justify-between border-b-2 border-gray-20">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-lg font-bold">Riwayat Pendidikan</h5>

                            <button class="flex items-center p-1 px-2 text-orange border-transparent font-bold">
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
                            <h5 class="mb-0 text-base text-heading-4 font-medium">Pendidikan 1</h5>
                            <p class="flex items-center px-2 text-base font-medium">19 Februari 2023
                                -
                                Until Now
                            </p>
                        </div>

                        <div class="flex justify-between">
                            <p class="flex items-center text-base">Degree
                            </p>
                            <p class="flex items-center text-base px-2">Jurusan
                            </p>
                        </div>

                    </div>
                </div>
            </section>

            {{-- experience --}}
            <section class="flex flex-col p-4">
                <div class="bg-white shadow-md rounded-lg">

                    <div class="p-4">

                        <div class="py-2 flex justify-between border-b-2 border-gray-20">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-lg font-bold">Pengalaman Kerja</h5>

                            <button class="flex items-center p-1 px-2 text-orange border-transparent font-bold">
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
                            <h5 class="mb-0 text-base text-heading-4 font-medium">Pengalaman 1</h5>
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

                <div class="bg-white shadow-md rounded-lg">

                    <div class="p-4">

                        <div class="py-2 flex justify-between border-b-2 border-gray-20">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-lg font-bold">Pengalaman Organisasi / lainnya</h5>

                            <button class="flex items-center p-1 px-2 text-orange border-transparent font-bold">
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
                            <h5 class="mb-0 text-base text-heading-4 font-medium">Organisasi 1</h5>
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

                <div class="bg-white shadow-md rounded-lg">

                    <div class="p-4">

                        <div class="py-2 flex justify-between border-b-2 border-gray-20">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-lg font-bold">Skill</h5>

                            <button class="flex items-center p-1 px-2 text-orange border-transparent font-bold">
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
                            <h5 class="mb-0 text-base text-heading-4 font-medium">Skill 1</h5>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Bahasa -->
            <section class="flex flex-col p-4">

                <div class="bg-white shadow-md rounded-lg">

                    <div class="p-4">

                        <div class="py-2 flex justify-between border-b-2 border-gray-20">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-lg font-bold">Bahasa</h5>

                            <button class="flex items-center p-1 px-2 text-orange border-transparent font-bold">
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
                            <h5 class="mb-0 text-base text-heading-4 font-medium">Bahasa 1</h5>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Prestasi -->
            <section class="flex flex-col p-4">

                <div class="bg-white shadow-md rounded-lg">

                    <div class="p-4">

                        <div class="py-2 flex justify-between border-b-2 border-gray-20">
                            <!-- Updated class here -->
                            <h5 class="mb-0 text-lg font-bold">Prestasi</h5>

                            <button class="flex items-center p-1 px-2 text-orange border-transparent font-bold">
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
                            <h5 class="mb-0 text-base text-heading-4 font-medium">Prestasi 1</h5>
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
