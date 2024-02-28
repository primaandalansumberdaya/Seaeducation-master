@extends('layouts.front')

@section('title', ' Home')

@section('content')

    <!-- Why working in cruise ship -->
    <section id="why-cruise-ship" class="relative flex items-center justify-between">

        <div class="relative h-[60vh] w-full">
            <img class="object-cover w-full h-[600px]" src="/assets/images/RCCL.jpg" alt="">
        </div>

        <div
            class="absolute top-0 left-0 justify-between mx-auto h-[600px] w-full items-center bg-primary-blue bg-opacity-80">

            <div class="items-center max-w-6xl mx-auto lg:px-0 md:px-20">
                <div class="items-center max-w-6xl px-6 py-2 pt-8 pb-8 mx-auto lg:px-0 md:px-20">

                    <div class="flex flex-wrap justify-between lg:-mx-4">

                        <!-- Card -->
                        <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                            <div class="overflow-hidden rounded-xl">
                                <div class="flex flex-col p-4">
                                    <div class="flex mb-4">
                                        <div className="flex flex-col">
                                            <p
                                                class="font-bold text-center text-white lg:text-heading-2 text-heading-4 lg:text-left font-label">
                                                Kenapa kerja dikapal pesiar atau hotel Internasional?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                            <div class="overflow-hidden bg-white border border-gray-200 rounded-xl">
                                <div class="flex flex-col p-4">
                                    <div class="flex items-center mb-2">
                                        <div
                                            class="items-center p-4 mr-3 overflow-hidden text-center rounded-md bg-blue-10">
                                            <img src="/assets/svgs/dollar.svg" class="items-center w-10 h-10"
                                                alt="dollar">
                                        </div>
                                        <div className="flex flex-col">
                                            <p class="mb-1 font-bold text-gray-100 text-heading-3 font-label">
                                                Bergaji Dollar
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <p class="text-gray-50">
                                            Dapatkan gaji dollar / euro dengan standar internasional + bonus
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                            <div class="overflow-hidden bg-white border border-gray-200 rounded-xl">
                                <div class="flex flex-col p-4">
                                    <div class="flex items-center mb-2">
                                        <div
                                            class="items-center p-4 mr-3 overflow-hidden text-center rounded-md bg-blue-10">
                                            <img src="/assets/svgs/accomodation.svg" class="items-center w-10 h-10"
                                                alt="accomodation">
                                        </div>
                                        <div className=" flex flex-col">
                                            <p class="mb-1 font-bold text-gray-100 text-heading-3 font-label">
                                                Free Akomodasi
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <p class="text-gray-50">
                                            Tidak perlu lagi ongkos pulang dan pergi serta bayar biaya tinggal
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                            <div class="overflow-hidden bg-white border border-gray-200 rounded-xl">
                                <div class="flex flex-col p-4">
                                    <div class="flex items-center mb-2">
                                        <div
                                            class="items-center p-3 mr-3 overflow-hidden text-center rounded-md bg-blue-10">
                                            <img src="/assets/svgs/travel.svg" class="items-center w-10 h-10 "
                                                alt="travel-world">
                                        </div>
                                        <div className="flex flex-col">
                                            <p class="mb-1 font-bold text-gray-100 text-heading-3 font-label">
                                                Travel The World
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <p class="text-gray-50">
                                            Kesempatan berkeliling dan menjelajah berbagai kota dan negara di dunia
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                            <div class="overflow-hidden bg-white border border-gray-200 rounded-xl">
                                <div class="flex flex-col p-4">
                                    <div class="flex items-center mb-2">
                                        <div
                                            class="items-center p-3 mr-3 overflow-hidden text-center rounded-md bg-blue-10">
                                            <img src="/assets/svgs/study.svg" class="items-center w-10 h-10 "
                                                alt="study">
                                        </div>
                                        <div className="flex flex-col">
                                            <p class="mb-1 font-bold text-gray-100 text-heading-4 font-label">
                                                Minimum Pendidikan
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <p class="text-gray-50">
                                            Minimum SMA/SMK dapat bekerja dikapal pesiar
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                            <div class="overflow-hidden bg-white border border-gray-200 rounded-xl">
                                <div class="flex flex-col p-4">
                                    <div class="flex items-center mb-2">
                                        <div
                                            class="items-center p-3 mr-3 overflow-hidden text-center rounded-md bg-blue-10">
                                            <img src="/assets/svgs/career.svg" class="items-center w-10 h-10"
                                                alt="career">
                                        </div>
                                        <div className="flex flex-col">
                                            <p class="mb-1 font-bold text-gray-100 text-heading-3 font-label">
                                                Peluang Karir Luas
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <p class="text-gray-50">
                                            Peluang karir Internasional meningkatkan bisa anda dapatkan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- End why working in cruise ship -->

    <!-- About Us-->
    <section id="about-us" class="relative flex items-center justify-between pt-8 pb-8 bg-blue-10">
        <div class="items-center max-w-6xl px-6 py-2 mx-auto lg:px-0 md:px-20">
            <div class="flex flex-wrap items-center justify-between mx-auto">

                <!-- right column -->
                <div class="self-center w-full px-4 lg:w-1/2">
                    <div class="relative mt-10 ml-2">
                        <img src="/assets/images/banner2.png" class="max-w-full mx-auto" width="500px" alt="hero-banner"
                            srcset="">
                    </div>
                </div>

                <!-- left column -->
                <div class="self-center w-full px-4 text-center lg:w-1/2 lg:text-left">

                    <h2 class="mb-5 font-bold text-primary-blue text-heading-2 ">
                        Apa itu Sea Education?
                    </h2>
                    <h3 class="mb-7 text-slate-700 lg:text-heading-3 text-heading-4">
                        Sea Eduation merupakan training center yang menyediakan program pelatihan berbasis
                        industri yang berfokus pada penempatan karir profesional di bidang Hotel Internasional dan Kapal
                        Pesiar
                    </h3>

                    <div
                        class="items-center justify-center w-full pt-8 pb-4 lg:justify-start lg:space-x-8 md:space-x-2 lg:w-5/12">
                        <a href="#"
                            class="w-full px-8 py-3 text-base font-semibold text-white rounded-full sm:w-auto bg-primary-blue hover:shadow-lg hover:bg-primary-darkblue">
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us-->

    <!-- why choose sea education-->
    <section id="why-sea-education" class="relative flex items-center justify-between pt-8 pb-8 bg-primary-blue">
        <div class="items-center max-w-6xl px-6 py-2 mx-auto lg:px-0 md:px-20">
            <h2 class="font-medium text-center text-secondary-yellow text-heading-3 lg:text-left">Why
                Choose
                Us?</h2>
            <h1 class="mb-3 font-bold text-center text-white text-heading-2 lg:text-left">
                Kenapa harus Sea Education?
            </h1>

            <div class="flex flex-wrap justify-between lg:-mx-4">
                <!-- Card -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-xl">
                        <div class="flex flex-col p-4">
                            <div class="flex items-center mb-2">
                                <div class="items-center p-3 mr-3 overflow-hidden text-center rounded-md bg-blue-10">
                                    <img src="/assets/svgs/mentor.svg" class="items-center w-10 h-10" alt="mentor" />
                                </div>
                                <div className="flex flex-col">
                                    <p class="mb-1 font-bold text-gray-100 text-heading-3 font-label">
                                        Mentor Berkualitas
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50">
                                    Mentor kami adalah profesional dan expert yang memiliki pengalaman
                                    Internasional dibidang hopitality
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-xl">
                        <div class="flex flex-col p-4">
                            <div class="flex items-center mb-2">
                                <div class="items-center p-3 mr-3 overflow-hidden text-center rounded-md bg-blue-10">
                                    <img src="/assets/svgs/consultancy.svg" class="items-center w-10 h-10"
                                        alt="consultancy" />
                                </div>
                                <div className="flex flex-col">
                                    <p class="mb-1 font-bold text-gray-100 text-heading-4 font-label">
                                        Free Konsultansi Karir
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50">
                                    Konsultasikan impian karir anda dengan kami untuk dapat mewujudkan impian masa depan
                                    anda
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-xl">
                        <div class="flex flex-col p-4">
                            <div class="flex items-center mb-2">
                                <div class="items-center p-3 mr-3 overflow-hidden text-center rounded-md bg-blue-10">
                                    <img src="/assets/svgs/certificate.svg" class="items-center w-10 h-10"
                                        alt="certificate" />
                                </div>
                                <div className="flex flex-col">
                                    <p class="mb-1 font-bold text-gray-100 text-heading-3 font-label">
                                        Sertifikat
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50">
                                    Ikuti dan selesaikan pelatihan di Sea Education dan dapatkan sertifikat setara
                                    diploma 1
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-xl">
                        <div class="flex flex-col p-4">
                            <div class="flex items-center mb-2">
                                <div class="items-center p-3 mr-3 overflow-hidden text-center rounded-md bg-blue-10">
                                    <img src="/assets/svgs/training.svg" class="items-center w-10 h-10" alt="career" />
                                </div>
                                <div className="flex flex-col">
                                    <p class="mb-1 font-bold text-gray-100 text-heading-3 font-label">
                                        On The Job Training
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50">
                                    Kami memberikan On The Job Internasional di tempat-tempat terbaik untuk membantu
                                    membangun karir
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-xl">
                        <div class="flex flex-col p-4">
                            <div class="flex items-center mb-2">
                                <div class="items-center p-3 mr-3 overflow-hidden text-center rounded-md bg-blue-10">
                                    <img src="/assets/svgs/lowest.svg" class="items-center w-10 h-10" alt="affordable" />
                                </div>
                                <div className="flex flex-col">
                                    <p class="mb-1 font-bold text-gray-100 text-heading-3 font-label">
                                        Biaya Terjangkau
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50">
                                    Biaya pelatihan yang terjangkau dan memberikan kemudahan untuk menggapai tujuan ada
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-xl">
                        <div class="flex flex-col p-4">
                            <div class="flex items-center mb-2">
                                <div class="items-center p-3 mr-3 overflow-hidden text-center rounded-md bg-blue-10">
                                    <img src="/assets/svgs/support.svg" class="items-center w-10 h-10" alt="support" />
                                </div>
                                <div className="flex flex-col">
                                    <p class="mb-1 font-bold text-gray-100 text-heading-3 font-label">
                                        Get Hired
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50">
                                    Kami menempatkan anda ke hotel dan kapal pesiar akan terus mendampingi anda hingga
                                    anda
                                    diterima
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

            </div>
        </div>
    </section>
    <!-- end why choose sea education -->

    <!-- Bootcamp section-->
    <section id="why-cruise-ship" class="relative flex items-center justify-between pt-8 pb-8 bg-blue-10">
        <div class="items-center max-w-6xl px-6 py-2 mx-auto lg:px-0 md:px-20">
            <div class="lg:text-left">
                <h2 class="font-medium text-center text-primary-blue text-heading-3">Training Program</h2>
                <h1 class="font-bold text-center text-heading-2 text-slate-700">
                    Program Pelatihan
                </h1>

                <div class="flex items-center justify-between gap-4 text-left group">
                    <span class="text-heading-4"></span>

                    <div class="flex justify-between gap-4 group">
                        <span
                            class="flex items-center justify-center w-8 h-8 border rounded-full cursor-pointer border-primary-blue text-primary-blue hover:bg-primary-blue hover:text-white scroll-left">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>
                        </span>
                        <span
                            class="flex items-center justify-center w-8 h-8 border rounded-full cursor-pointer border-primary-blue text-primary-blue hover:bg-primary-blue hover:text-white scroll-right">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap justify-between mx-auto lg:-mx-4">
                <!-- Card -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-xl">
                        <a href="detail.html">
                            <div class="m-4 overflow-hidden rounded-xl">
                                <img alt="Placeholder" class="block w-full h-auto" src="/assets/images/program1.jpg" />
                            </div>
                        </a>

                        <div class="px-4 mb-4 leading-tight">
                            <div class="flex">
                                <span
                                    class="block px-2 my-2 font-semibold text-blue-100 text-heading-6 bg-blue-30 rounded-xl">
                                    PENDAFTARAN DIBUKA
                                </span>
                            </div>
                            <h1 class="mb-2 text-heading-3">
                                <a class="font-bold text-black" href="#">
                                    Regular Program
                                </a>
                            </h1>

                            <div class="flex flex-row mb-2">
                                <p class="flex mr-6 text-xs text-gray-50">
                                    <svg fill="none" height="14" viewBox="0 0 12 14" width="12"
                                        xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                        <path
                                            d="M6 0C9.31371 0 12 2.68629 12 6C12 8.86724 10.065 11.5058 6.26844 13.9218C6.10465 14.0261 5.89535 14.0261 5.73156 13.9218C1.93495 11.5058 0 8.86724 0 6C0 2.68629 2.68629 0 6 0ZM6 4C4.89543 4 4 4.89543 4 6C4 7.10457 4.89543 8 6 8C7.10457 8 8 7.10457 8 6C8 4.89543 7.10457 4 6 4Z"
                                            fill="#9E9E9E"></path>
                                    </svg>
                                    Online
                                </p>
                                <p class="flex text-xs text-gray-50">
                                    <svg fill="none" height="14" viewBox="0 0 12 14" width="12"
                                        xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                        <path
                                            d="M6.49579 6C7.32421 6 7.99579 6.67157 7.99579 7.5L7.995 8.24837C8.09788 10.0849 6.68334 11.0008 4.06019 11.0008C1.44552 11.0008 0 10.0969 0 8.27457V7.5C0 6.67157 0.671573 6 1.5 6H6.49579ZM10.4964 6C11.3248 6 11.9964 6.67157 11.9964 7.5L11.9956 8.02657C12.0861 9.67404 10.8362 10.5 8.55159 10.5C8.24147 10.5 7.94993 10.4849 7.67766 10.4547C8.21436 9.95904 8.50147 9.28646 8.50049 8.43657L8.49422 8.2204L8.49579 7.5C8.49579 6.90243 8.23371 6.36607 7.81823 5.99959L10.4964 6ZM4 0C5.38094 0 6.50041 1.11947 6.50041 2.5004C6.50041 3.88134 5.38094 5.00081 4 5.00081C2.61906 5.00081 1.49959 3.88134 1.49959 2.5004C1.49959 1.11947 2.61906 0 4 0ZM9 1C10.1046 1 11 1.89543 11 3C11 4.10457 10.1046 5 9 5C7.89543 5 7 4.10457 7 3C7 1.89543 7.89543 1 9 1Z"
                                            fill="#9E9E9E"></path>
                                    </svg>
                                    Batch 11
                                </p>
                            </div>

                            <div class="flex">
                                <p
                                    class="items-center px-2 my-2 mb-5 font-semibold text-blue-100 text-heading-6 bg-blue-30 rounded-xl">
                                    Deadline Pendaftaran : 4 Desember 2022
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-xl">
                        <a href="details.html">
                            <div class="m-4 overflow-hidden rounded-xl">
                                <img alt="Placeholder" class="block w-full h-auto" src="/assets/images/program1.jpg" />
                            </div>
                        </a>

                        <div class="px-4 mb-4 leading-tight">
                            <div class="flex">
                                <span
                                    class="block px-2 my-2 font-semibold text-gray-100 text-heading-6 bg-gray-30 rounded-xl">
                                    PENDAFTARAN DITUTUP
                                </span>
                            </div>
                            <h1 class="mb-2 text-heading-3">
                                <a class="font-bold text-black" href="#">
                                    Executive Program
                                </a>
                            </h1>

                            <div class="flex flex-row mb-2">
                                <p class="flex mr-6 text-xs text-gray-50">
                                    <svg fill="none" height="14" viewBox="0 0 12 14" width="12"
                                        xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                        <path
                                            d="M6 0C9.31371 0 12 2.68629 12 6C12 8.86724 10.065 11.5058 6.26844 13.9218C6.10465 14.0261 5.89535 14.0261 5.73156 13.9218C1.93495 11.5058 0 8.86724 0 6C0 2.68629 2.68629 0 6 0ZM6 4C4.89543 4 4 4.89543 4 6C4 7.10457 4.89543 8 6 8C7.10457 8 8 7.10457 8 6C8 4.89543 7.10457 4 6 4Z"
                                            fill="#9E9E9E"></path>
                                    </svg>
                                    Fulltime
                                </p>
                                <p class="flex text-xs text-gray-50">
                                    <svg fill="none" height="14" viewBox="0 0 12 14" width="12"
                                        xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                        <path
                                            d="M6.49579 6C7.32421 6 7.99579 6.67157 7.99579 7.5L7.995 8.24837C8.09788 10.0849 6.68334 11.0008 4.06019 11.0008C1.44552 11.0008 0 10.0969 0 8.27457V7.5C0 6.67157 0.671573 6 1.5 6H6.49579ZM10.4964 6C11.3248 6 11.9964 6.67157 11.9964 7.5L11.9956 8.02657C12.0861 9.67404 10.8362 10.5 8.55159 10.5C8.24147 10.5 7.94993 10.4849 7.67766 10.4547C8.21436 9.95904 8.50147 9.28646 8.50049 8.43657L8.49422 8.2204L8.49579 7.5C8.49579 6.90243 8.23371 6.36607 7.81823 5.99959L10.4964 6ZM4 0C5.38094 0 6.50041 1.11947 6.50041 2.5004C6.50041 3.88134 5.38094 5.00081 4 5.00081C2.61906 5.00081 1.49959 3.88134 1.49959 2.5004C1.49959 1.11947 2.61906 0 4 0ZM9 1C10.1046 1 11 1.89543 11 3C11 4.10457 10.1046 5 9 5C7.89543 5 7 4.10457 7 3C7 1.89543 7.89543 1 9 1Z"
                                            fill="#9E9E9E"></path>
                                    </svg>
                                    Batch 9
                                </p>
                            </div>

                            <div class="flex">
                                <p
                                    class="items-center px-2 my-2 mb-5 font-semibold text-gray-100 text-heading-6 bg-gray-30 rounded-xl">
                                    Deadline Pendaftaran : -
                                </p>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-xl">
                        <a href="details.html">
                            <div class="m-4 overflow-hidden rounded-xl">
                                <img alt="Placeholder" class="block w-full h-auto" src="/assets/images/program1.jpg" />
                            </div>
                        </a>

                        <div class="px-4 mb-4 leading-tight">
                            <div class="flex">
                                <span
                                    class="block px-2 my-2 font-semibold text-blue-100 text-heading-6 bg-blue-30 rounded-xl">
                                    PENDAFTARAN DIBUKA
                                </span>
                            </div>
                            <h1 class="mb-2 text-heading-3">
                                <a class="font-bold text-black" href="#">
                                    Regular Program
                                </a>
                            </h1>

                            <div class="flex flex-row mb-2">
                                <p class="flex mr-6 text-xs text-gray-50">
                                    <svg fill="none" height="14" viewBox="0 0 12 14" width="12"
                                        xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                        <path
                                            d="M6 0C9.31371 0 12 2.68629 12 6C12 8.86724 10.065 11.5058 6.26844 13.9218C6.10465 14.0261 5.89535 14.0261 5.73156 13.9218C1.93495 11.5058 0 8.86724 0 6C0 2.68629 2.68629 0 6 0ZM6 4C4.89543 4 4 4.89543 4 6C4 7.10457 4.89543 8 6 8C7.10457 8 8 7.10457 8 6C8 4.89543 7.10457 4 6 4Z"
                                            fill="#9E9E9E"></path>
                                    </svg>
                                    Online
                                </p>
                                <p class="flex text-xs text-gray-50">
                                    <svg fill="none" height="14" viewBox="0 0 12 14" width="12"
                                        xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                        <path
                                            d="M6.49579 6C7.32421 6 7.99579 6.67157 7.99579 7.5L7.995 8.24837C8.09788 10.0849 6.68334 11.0008 4.06019 11.0008C1.44552 11.0008 0 10.0969 0 8.27457V7.5C0 6.67157 0.671573 6 1.5 6H6.49579ZM10.4964 6C11.3248 6 11.9964 6.67157 11.9964 7.5L11.9956 8.02657C12.0861 9.67404 10.8362 10.5 8.55159 10.5C8.24147 10.5 7.94993 10.4849 7.67766 10.4547C8.21436 9.95904 8.50147 9.28646 8.50049 8.43657L8.49422 8.2204L8.49579 7.5C8.49579 6.90243 8.23371 6.36607 7.81823 5.99959L10.4964 6ZM4 0C5.38094 0 6.50041 1.11947 6.50041 2.5004C6.50041 3.88134 5.38094 5.00081 4 5.00081C2.61906 5.00081 1.49959 3.88134 1.49959 2.5004C1.49959 1.11947 2.61906 0 4 0ZM9 1C10.1046 1 11 1.89543 11 3C11 4.10457 10.1046 5 9 5C7.89543 5 7 4.10457 7 3C7 1.89543 7.89543 1 9 1Z"
                                            fill="#9E9E9E"></path>
                                    </svg>
                                    Batch 11
                                </p>
                            </div>

                            <div class="flex">
                                <p
                                    class="items-center px-2 my-2 mb-5 font-semibold text-blue-100 text-heading-6 bg-blue-30 rounded-xl">
                                    Deadline Pendaftaran : 4 Desember 2022
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </section>
    <!-- End bootcamp section -->

    <!-- partner-->
    <section id="why-cruise-ship" class="relative flex items-center justify-between pt-8 pb-8 bg-primary-blue">
        <div class="items-center max-w-6xl px-6 py-2 mx-auto lg:px-0 md:px-20">
            <div class="flex flex-wrap items-center justify-between mx-auto">
                <!-- left column -->
                <div class="self-center w-full lg:w-1/2">
                    <p class="mb-3 font-bold text-center text-white lg:text-heading-2 text-heading-3 lg:text-left lg:pr-4">
                        Bekerjasama
                        dengan perusahaan
                        terbaik di
                        Indonesia dan dunia
                    </p>
                    <p class="pb-6 mt-6 text-lg text-center text-white lg:pr-8 lg:text-left md:pb-0">Tidak hanya
                        belajar, kami juga berkolaborasi dengan hiring partner terpercaya untuk membantu kamu membangun
                        karir di
                        perusahaan
                        impian.</p>

                    <div class="grid grid-cols-12 mt-0 md:grid-flow-row md:mt-16">
                        <div class="w-1 h-12 rounded-lg bg-secondary-yellow"></div>
                        <div class="col-span-11 -ml-3 md:col-span-5 md:-ml-5">
                            <p class="font-bold text-heading-2 text-secondary-yellow">50+</p>
                            <p class="mt-2 font-semibold text-white text-heading-3">Perusahaan Rekanan</p>
                            <p class="pr-8 mt-2 text-white text-heading-4 pb-9">Kamu berkesempatan <br
                                    class="hidden md:grid">
                                bekerja di
                                perusahaan terbaik di Dunia</p>
                        </div>
                        <div class="w-1 h-12 rounded-full bg-secondary-yellow"></div>
                        <div class="col-span-11 -ml-3 md:col-span-5 md:-ml-5">
                            <p class="font-bold text-heading-2 text-secondary-yellow">360+</p>
                            <p class="mt-2 font-semibold text-white text-heading-3">Lulusan Terbaik</p>
                            <p class="pr-8 mt-2 text-white text-heading-4">Dengan kemampuan
                                yang mumpuni dan sudah bekerja di berbagai negara</p>
                        </div>
                    </div>
                </div>

                <!-- right column -->
                <div class="self-center w-full mt-4 lg:w-1/2 lg:mt-0 lg:pl-6">
                    <div class="grid justify-center grid-flow-row grid-cols-2 gap-4 mx-auto lg:grid-cols-2 lg:-mx-4">

                        <!-- Card -->
                        <div class="w-full my-1 bg-white rounded-md lg:my-4 lg:px-4">
                            <img src="/assets/logo/Job Wanted.svg" class="items-center" alt="logo-partner"
                                layout="fill" />
                        </div>
                        <!-- End Card -->


                        <!-- Card -->
                        <div class="w-full my-1 bg-white rounded-md lg:my-4 lg:px-4">
                            <img src="/assets/logo/genting-resort.svg" class="items-center" alt="logo-partner"
                                layout="fill" />
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="w-full my-1 bg-white rounded-md lg:my-4 lg:px-4">
                            <img src="/assets/logo/Speedy.svg" class="items-center" alt="logo-partner" layout="fill" />
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="w-full my-1 bg-white rounded-md lg:my-4 lg:px-4">
                            <img src="/assets/logo/Milenium.svg" class="items-center" alt="logo-partner"
                                layout="fill" />
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="w-full my-1 bg-white rounded-md lg:my-4 lg:px-4">
                            <img src="/assets/logo/Blue-mountain.svg" class="items-center" alt="logo-partner"
                                layout="fill" />
                        </div>
                        <!-- End Card -->


                        <!-- Card -->
                        <div class="w-full my-1 bg-white rounded-md lg:my-4 lg:px-4">
                            <img src="/assets/logo/dpbiz.svg" class="items-center" alt="logo-partner" layout="fill" />
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="w-full my-1 bg-white rounded-md lg:my-4 lg:px-4">
                            <img src="/assets/logo/grsm.svg" class="items-center" alt="logo-partner" layout="fill" />
                        </div>
                        <!-- End Card -->


                        <!-- Card -->
                        <div class="w-full my-1 bg-white rounded-md lg:my-4 lg:px-4">
                            <img src="/assets/logo/rhmc.svg" class="items-center" alt="logo-partner" layout="fill" />
                        </div>
                        <!-- End Card -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End partner-->

    <!-- Alumni Work Logo -->
    <section id="why-cruise-ship" class="items-center w-full h-full px-6 py-2 pt-8 bg-blue-10 lg:px-16 md:px-20">
        <div class="mx-auto max-w-7xl">
            <p class="items-center mt-4 font-bold text-center text-slate-700 lg:text-heading-4 text-heading-4">
                The following brands are where our alumni mostly work at
            </p>
            <h1 class="items-center mb-5 font-bold text-center text-slate-700 lg:text-heading-2 text-heading-3">
                300+ lulusan bekerja di perusahaan ini
            </h1>

            <div class="grid items-center justify-between grid-flow-row grid-cols-3 gap-4 mx-auto lg:grid-cols-5 lg:-mx-4">
                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4 ">
                    <img src="/assets/logo/royal-caribbean.svg" class="items-center lg" alt="Profile" layout="fill" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4 before:">
                    <img src="/assets/logo/celebrity-cruise.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/carnival-cruise.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/msc-cruise.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/aida-cruise.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/costa.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/cunard-cruise.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/p-o-cruise.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/princess-cruise.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/crystal-cruise.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/dream-crusie.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/star-cruise.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/virgin-voyages.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/viking-cruise.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/genting-resort.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/grand-lexis.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/all-sedayu.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/kempinski-jakarta.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/holiday-inn.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/le-meridien-jkt.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/jambuluwuk.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/ritz-carlton.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/grand-city-hall.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/sheraton-hotel.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/shangri-la.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/trans-luxury.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/double-tree.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/hilton-kl.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="/assets/logo/Qasr Al Sarab.svg" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <p class="font-bold text-center lg:text-heading-2 text-heading-4 text-slate-700">100+</p>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </section>
    <!-- end Alumni Work Logo -->

    <!-- Student Activity-->
    <section id="student-activity"
        class="items-center w-full h-full px-6 py-2 pt-16 pb-16 bg-primary-blue lg:px-16 md:px-20">
        <div class="max-w-6xl mx-auto">
            <h1 class="mt-4 mb-3 font-bold text-center text-white lg:text-heading-2 text-heading-3">
                Activity Gallery
            </h1>

            <div class="flex flex-wrap items-center justify-center mx-auto lg:-mx-4">
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
                    <div
                        class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                        <div class="h-96 w-72">
                            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="/assets/images/class.jpeg" alt="" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="text-3xl font-bold text-white font-dmserif">Class Training</h1>
                            <p
                                class="mb-3 text-lg italic text-white transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                                Siswa belajar dikelas selama 3 bulan dan akan mempelajari basic perhotelan sesuai
                                jurusan yang dipilih, bahasa inggris dan pegembangan soft skill
                            </p>
                            <button
                                class="rounded-full bg-primary-blue py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">See
                                More</button>
                        </div>
                    </div>

                    <div
                        class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                        <div class="h-96 w-72">
                            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="/assets/images/hotel-training2.jpg" alt="" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="text-3xl font-bold text-white font-dmserif">Practice</h1>
                            <p
                                class="mb-3 text-lg italic text-white transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                                Selama pelatihan siswa Sea Education tidak hanya belajar secara teori tetapi juga akan
                                diberikan pelatihan dalam bentuk praktik langsung
                            </p>
                            <button
                                class="rounded-full bg-primary-blue py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">See
                                More</button>
                        </div>
                    </div>

                    <div
                        class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                        <div class="h-96 w-72">
                            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="/assets/images/internship-genting.jpg" alt="" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="text-3xl font-bold text-white font-dmserif">On The Job Training</h1>
                            <p
                                class="mb-3 text-lg italic text-white transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                                On The Job Training merupakan bagian dari program Sea Education, siswa akan training
                                selama 6 bulan di hotel berbintang 4-5 di Indonesia / Luar Negri
                            </p>
                            <button
                                class="rounded-full bg-primary-blue py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">See
                                More</button>
                        </div>
                    </div>

                    <div
                        class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                        <div class="h-96 w-72">
                            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="/assets/images/safety-training.jpg" alt="" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="text-3xl font-bold text-white font-dmserif">Safety Training</h1>
                            <p
                                class="mb-3 text-lg italic text-white transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                                Siswa Sea Education mengikuti pelatihan dan sertifikasi dokumen pelaut sebagai syarat
                                untuk bekerja dikapal pesiar
                            </p>
                            <button
                                class="rounded-full bg-primary-blue py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">See
                                More</button>
                        </div>
                    </div>

                    <div
                        class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                        <div class="h-96 w-72">
                            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="/assets/images/deployment.jpg" alt="" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="text-3xl font-bold text-white font-dmserif">Explore The World</h1>
                            <p
                                class="mb-3 text-lg italic text-white transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                                Siswa Sea Education berangkat menuju kapal pesiar setelah mengikuti pelatihan dan
                                mengikuti interview dengan user
                            </p>
                            <button
                                class="rounded-full bg-primary-blue py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">See
                                More</button>
                        </div>
                    </div>

                    <div
                        class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                        <div class="h-96 w-72">
                            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="/assets/images/partnership-genting.jpg" alt="" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="text-3xl font-bold text-white font-dmserif">Parnership With Resort Genting
                            </h1>
                            <p
                                class="mb-3 text-lg italic text-white transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                                Bekerja sama dengan Hotel dan Agency terpercaya untuk membangun peluang bagi siswa Sea
                                Education
                            </p>
                            <button
                                class="rounded-full bg-primary-blue py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">See
                                More</button>
                        </div>
                    </div>

                    <div
                        class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                        <div class="h-96 w-72">
                            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="/assets/images/internship-grandlexis2.jpg" alt="" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="text-3xl font-bold text-white font-dmserif">Parnership With Grand Lexis Port
                                Dickson
                            </h1>
                            <p
                                class="mb-3 text-lg italic text-white transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                                Bekerja sama dengan Hotel dan Agency terpercaya untuk membangun peluang bagi siswa Sea
                                Education
                            </p>
                            <button
                                class="rounded-full bg-primary-blue py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">See
                                More</button>
                        </div>
                    </div>

                    <div
                        class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                        <div class="h-96 w-72">
                            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="/assets/images/partnership-w-millenium.jpg" alt="" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="text-3xl font-bold text-white font-dmserif">Partnership With PT Millenium</h1>
                            <p
                                class="mb-3 text-lg italic text-white transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                                Bekerja sama dengan Hotel dan Agency terpercaya untuk membangun peluang bagi siswa Sea
                                Education
                            </p>
                            <button
                                class="rounded-full bg-primary-blue py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">See
                                More</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- end Student Activity -->

    <!-- Testimonial-->
    <section id="testimonials" class="items-center w-full h-full px-6 py-2 pt-6 pb-16 bg-blue-10 lg:px-16 md:px-20">
        <div class="max-w-6xl mx-auto">
            <Span class="font-medium text-secondary-yellow text-heading-3">Testimoni</Span>

            <div class="inset-0 flex justify-between gap-4 my-auto flex-end">
                <h1 class="mb-5 font-bold text-slate-700 text-heading-3 sm:text-heading-3">
                    Pengalaman alumnus kami yang sudah bekerja
                </h1>
                <div class="flex gap-4 group">
                    <span
                        class="flex items-center justify-center w-8 h-8 border rounded-full cursor-pointer border-primary-blue text-primary-blue hover:bg-primary-blue hover:text-white scroll-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                        </svg>
                    </span>
                    <span
                        class="flex items-center justify-center w-8 h-8 border rounded-full cursor-pointer border-primary-blue text-primary-blue hover:bg-primary-blue hover:text-white scroll-right">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </span>
                </div>
            </div>

            <div class="flex flex-wrap justify-between mx-auto lg:-mx-4">
                <!-- Card -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                    <div class="overflow-hidden border border-gray-200 shadow-sm rounded-xl">
                        <div class="flex flex-col p-4 bg-white">
                            <div class="flex mb-4">
                                <div class="relative w-16 h-16 mr-3 overflow-hidden rounded-full">
                                    <img src="/public/images/ester.png" alt="Profile" layout="fill" objectFit="cover"
                                        objectPosition="center" />
                                </div>
                                <div className="flex flex-col">
                                    <p class="mb-1 font-bold text-gray-100 text-heading-4 font-label">
                                        Ester Fitcia
                                    </p>
                                    <p class="font-bold text-heading-6 text-gray-50">
                                        Medan, Sumatra Utara
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50">
                                    berkat Sea Education sekarang saya bisa bekerja dan berkeliling dunia,
                                    meskipun sempat tersendat covid-19. namun Sea Education tetap membantu saya
                                    untuk dapat bekerja di hotel rekanan mereka. sehingga saya tetap dapat menabung
                                    mempersiapkan
                                    keberangkatan
                                </p>
                            </div>

                            <div class="flex">
                                <p class="block mt-2 mb-2 font-bold text-heading-4 text-primary-blue">
                                    Waitress
                                    <span class="font-normal text-black">at</span>
                                </p>
                            </div>
                            <img class="block w-full h-full" src="/assets/logo/dream-crusie.svg" alt="logo-work">
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                    <div class="overflow-hidden border border-gray-200 shadow-sm rounded-xl ">
                        <div class="flex flex-col p-4 bg-white">
                            <div class="flex mb-4">
                                <div class="relative w-16 h-16 mr-3 overflow-hidden rounded-full">
                                    <img src="/public/images/bayu.jpeg" class="object-cover w-full" alt="Profile"
                                        layout="fill" objectFit="cover" objectPosition="center" />
                                </div>
                                <div className="flex flex-col">
                                    <p class="mb-1 font-bold text-gray-100 text-heading-4 font-label">
                                        Bayu Prasetya
                                    </p>
                                    <p class="font-bold text-heading-6 text-gray-50">
                                        Jakarta Selatan, Jakarta
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50">
                                    Pengalaman saya bersama Sea Education sangat berkesan, saya selalu didampingi dari
                                    training,
                                    persiapan interview hingga keberangkatan. saya bersyukur dapat bekerja keliling
                                    dunia.
                                    saya harap makin banyak yang kenal Sea Education karena Keren banget
                                </p>
                            </div>

                            <div class="flex">
                                <p class="block mt-2 mb-2 font-bold text-heading-4 text-primary-blue">
                                    Room Attendant
                                    <span class="font-normal text-black">at</span>
                                </p>
                            </div>
                            <img class="block w-full h-full" src="/assets/logo/royal-caribbean.svg" alt="logo-work">
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                    <div class="overflow-hidden border border-gray-200 shadow-sm rounded-xl">
                        <div class="flex flex-col p-4 bg-white">
                            <div class="flex mb-4">
                                <div class="relative w-16 h-16 mr-3 overflow-hidden rounded-full">
                                    <img src="/public/images/muhajir.jpeg" alt="Profile" layout="fill"
                                        objectFit="cover" objectPosition="center" />
                                </div>
                                <div className="flex flex-col">
                                    <p class="mb-1 font-bold text-gray-100 text-heading-4 font-label">
                                        Muhajir
                                    </p>
                                    <p class="font-bold text-heading-6 text-gray-50">
                                        Banda Aceh, Aceh
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50">
                                    Saya memiliki jiwa berpetualang sejak kecil, saya ingin mengenal dunia lebih luas
                                    lagi,
                                    dan saya tertarik ketika tidak sengaja melihat posting dari Sea Education.
                                    saya merasa inilah jalan saya berkeliling dunia, banyak perjuangan hingga akhirnya
                                    impian saya
                                    tercapai
                                </p>
                            </div>

                            <div class="flex">
                                <p class="block mt-2 mb-2 font-bold text-heading-4 text-primary-blue">
                                    Utility Cleaner
                                    <span class="font-normal text-black">at</span>
                                </p>
                            </div>
                            <img class="items-center block" src="/assets/logo/celebrity-cruise.svg" alt="logo-work">
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                    <div class="overflow-hidden border border-gray-200 shadow-sm rounded-xl">
                        <div class="flex flex-col p-4 bg-white">
                            <div class="flex mb-4">
                                <div class="relative w-16 h-16 mr-3 overflow-hidden rounded-full">
                                    <img src="/public/images/sugianto.jpg" alt="Profile" layout="fill"
                                        objectFit="cover" class="items-center" />
                                </div>
                                <div className="flex flex-col">
                                    <p class="mb-1 font-bold text-gray-100 text-heading-4 font-label">
                                        Sugianto
                                    </p>
                                    <p class="font-bold text-heading-6 text-gray-50">
                                        Malang, Jawa Timur
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50">
                                    Bermula ketika saya baru lulus sekolah dan melamar ke 20 lebih hotel & restaurant,
                                    hingga akhirnya bertemu Sea Education. sempat ragu tapi akhirnya saya mendaftar.
                                    senang rasanya ketika saya bisa bekerja berkeliling dunia. bersyukur banget join Sea
                                    Education
                                </p>
                            </div>

                            <div class="flex">
                                <p class="block mt-2 mb-2 font-bold text-heading-4 text-primary-blue">
                                    Assistant Cook
                                    <span class="font-normal text-black">at</span>
                                </p>
                            </div>
                            <img class="block w-full h-full" src="/assets/logo/aida-cruise.svg" alt="logo-work">
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </section>
    <!-- End testimonial -->

    <!-- Frequently Asked Question -->
    <section id="frequently-asking-question"
        class="items-center w-full h-full px-6 py-2 pt-16 pb-16 bg-primary-blue lg:px-16 md:px-20">
        <div class="mx-auto max-w-8xl">
            <h1 class="mb-3 font-bold text-center text-white text-heading-2">
                Pertanyaan Yang Sering Ditanyakan
            </h1>

            <div class="flex flex-wrap justify-between mx-auto lg:-mx-4">
                <!-- accordion -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4">
                    <div class="bg-white border-2 rounded-xl">
                        <div class="flex items-center justify-between accordion-header">
                            <!-- FAQ -->
                            <span class="font-semibold text-slate-700 text-heading-4">
                                Apa syarat untuk mendaftar program pelatihan dari Sea Education?
                            </span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>

                        <!-- Content -->
                        <div class="accordion-body">
                            <div class="p-4 border-t">
                                <p>
                                    - Lulusan SMA / SMK atau Sederajat <br>
                                    - Memiliki surat keterangan sehat, tidak memiliki penyakit menular dan tidak buta
                                    warna <br>

                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end accordion -->

                <!-- accordion -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4">
                    <div class="bg-white border-2 rounded-xl">
                        <div class="flex items-center justify-between accordion-header">
                            <!-- FAQ -->
                            <span class="font-semibold text-slate-700 text-heading-4">
                                Bagaimana tahapan program pelatihan ini?
                            </span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>

                        <!-- Content -->
                        <div class="accordion-body">
                            <div class="p-4 border-t">
                                <p>
                                    Pendaftaran > Tes dan Interview secara online > Proses Pelatihan > Magang (On The
                                    Job Training) >
                                    Tes Interview Kerja > Pembuatan Dokumen(Untuk yang ingin bekerja ke kapal pesiar
                                    atau luar negeri) >
                                    Bekerja
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end accordion -->

                <!-- accordion -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4">
                    <div class="bg-white border-2 rounded-xl">
                        <div class="flex items-center justify-between accordion-header">
                            <!-- FAQ -->
                            <span class="font-semibold text-slate-700 text-heading-4">
                                Apakah harus memiliki pendidikan / basic perhotelan?
                            </span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>

                        <!-- Content -->
                        <div class="accordion-body">
                            <div class="p-4 border-t">
                                <p>
                                    Para Instruktur kami merupakan expert di bidangnya dan memiliki pengalaman
                                    bekerja di kapal pesiar dan hotel luar negeri dan modul yang sudah disusun
                                    berdasarkan kebutuhan industri ditambah dengan pengalaman dengan instruktur
                                    tersebut, Anda dapat mempelajari dari dasar bagaimana bekerja di dunia Hospitality.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end accordion -->

                <!-- accordion -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4">
                    <div class="bg-white border-2 rounded-xl">
                        <div class="flex items-center justify-between accordion-header">
                            <!-- FAQ -->
                            <span class="font-semibold text-slate-700 text-heading-4">
                                Apakah harus mampu berbahasa inggris secara expert?
                            </span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>

                        <!-- Content -->
                        <div class="accordion-body">
                            <div class="p-4 border-t">
                                <p>
                                    Anda cukup memiliki kemampuan dasar bahasa inggris. Selama masa pendidikan Anda akan
                                    mempelajari bahasa inggris secara praktik
                                    baik itu menulis ataupun berbicara. Instruktur kami ada untuk membantu Anda hingga
                                    mahir dalam berbahasa ingris.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end accordion -->

                <!-- accordion -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4">
                    <div class="bg-white border-2 rounded-xl">
                        <div class="flex items-center justify-between accordion-header">
                            <!-- FAQ -->
                            <span class="font-semibold text-slate-700 text-heading-4">
                                Apakah tersedia komunitas untuk berkonsultasi?
                            </span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>

                        <!-- Content -->
                        <div class="accordion-body">
                            <div class="p-4 border-t">
                                <p>
                                    Kami percaya bahwa komunitas dapat memberikan impact yang baik kepada karir kita,
                                    oleh karena itu kami telah menyediakan
                                    private group sebagai komunitas belajar yang mendukung dalam mencapai sebuah karir
                                    impian kita bersama pengajar yang
                                    berpengalaman.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end accordion -->

                <!-- accordion -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4">
                    <div class="bg-white border-2 rounded-xl">
                        <div class="flex items-center justify-between accordion-header">
                            <!-- FAQ -->
                            <span class="font-semibold text-slate-700 text-heading-4">
                                Bagaimana proses penyaluran kerja di Sea Education?
                            </span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>

                        <!-- Content -->
                        <div class="accordion-body">
                            <div class="p-4 border-t">
                                <p>
                                    Setelah Anda selesai proses magang / On The Job Training, Anda akan diarahkan untuk
                                    pembuatan CV dan persiapan interview. Kemudian CV tersebut akan disalurkan oleh
                                    Sea Education ke perusahaan rekanan kami. Jika CV kamu terpilih, kami akan
                                    menjadwalkan tes maupun interview dengan perusahaan tersebut. Jangan khawatir jika
                                    kamu belum terpanggil interview
                                    karena Sea Education akan selalu membantu kamu untuk disalurkan kerja ke perusahaan
                                    yang
                                    lain.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end accordion -->

                <!-- accordion -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4">
                    <div class="bg-white border-2 rounded-xl">
                        <div class="flex items-center justify-between accordion-header">
                            <!-- FAQ -->
                            <span class="font-semibold text-slate-700 text-heading-4">
                                Apakah saya dapat mengulang kelas jika saya masih belum mampu?
                            </span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>

                        <!-- Content -->
                        <div class="accordion-body">
                            <div class="p-4 border-t">
                                <p>
                                    Setelah Anda selesai proses magang / On The Job Training, Anda akan diarahkan untuk
                                    pembuatan CV dan persiapan interview. kamu juga dapat ikut kelas dan berkonsultasi
                                    dengan instruktur dan staff kami.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end accordion -->

                <!-- accordion -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4">
                    <div class="bg-white border-2 rounded-xl">
                        <div class="flex items-center justify-between accordion-header">
                            <!-- FAQ -->
                            <span class="font-semibold text-slate-700 text-heading-4">
                                Privilege lain apalagi yang bisa saya dapatkan?
                            </span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>

                        <!-- Content -->
                        <div class="accordion-body">
                            <div class="p-4 border-t">
                                <p>
                                    Anda mendapatkan privilege untuk magang di Hotel berbintang 4 di Indonesia atau
                                    atau beberapa hotel tersebut berasal dari luar Indonesia sehingga dapat
                                    membantu Anda untuk membangun personal branding & reputasi. Anda dapat berkonsultasi
                                    tentang karir dengan kami jika Anda keluar atau berpindah dari pekerjaan
                                    sebelumnya.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end accordion -->

            </div>

        </div>
    </section>
    <!-- EndFrequently Asked Question -->


    <script lang="ts" setup>
        import {
            Swiper,
            SwiperSlide
        } from 'swiper/vue';

        // Import Swiper styles
        import 'swiper/css';

        const images = [{
                id: 1,
                imageUrl: '/assets/images/bg-1.jpg'
            },
            {
                id: 2,
                imageUrl: '/assets/images/bg-1.jpg'
            },
            {
                id: 3,
                imageUrl: '/assets/images/bg-1.jpg'
            },
            // Add more items as needed
        ];
    </script>
@endsection
