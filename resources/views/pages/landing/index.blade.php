@extends('layouts.front')

@section('title', ' Home')

@section('content')

    <!-- Why working in cruise ship -->
    <section id="why-cruise-ship" class="relative flex items-center justify-between transition-all duration-500">

        <div class="relative lg:h-[50vh] w-full">
            <img class="object-cover w-full h-[600px]" src="/assets/images/RCCL.jpg" alt="">
        </div>

        <div
            class="absolute top-0 left-0 justify-between mx-auto h-[600px] w-full items-center bg-primary-blue bg-opacity-80">

            <div class="items-center max-w-6xl mx-auto lg:px-0 md:px-20">

                <div class="">

                    <div class="flex flex-wrap justify-between px-4 py-4 pt-0 pb-8 lg:pt-16">

                        <!-- Card -->
                        <div class="w-full my-1 lg:my-8 lg:py-8 md:w-1/2 lg:w-1/3">
                            <div class="items-center p-1 mr-3 overflow-hidden tracking-wide lg:p-4">
                                <h1
                                    class="w-full font-semibold text-center text-white lg:text-head text-heading-4 lg:text-left font-base">
                                    Kenapa kerja di kapal pesiar atau hotel Internasional?
                                </h1>
                            </div>

                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="w-full my-1 lg:my-4 md:w-1/2 lg:px-4 lg:w-1/3">
                            <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                                <div class="flex flex-col p-1 lg:p-6">
                                    <div class="flex items-center lg:mb-2">
                                        <div
                                            class="items-center p-1 mr-3 overflow-hidden text-center rounded-md lg:p-4 bg-blue-10">
                                            <img src="{{ asset('/assets/svgs/dollar.svg') }}" class="items-center"
                                                alt="dollar" width="30px">
                                        </div>
                                        <div className="flex flex-col">
                                            <p
                                                class="mb-1 font-bold text-primary-shineblue lg:text-heading-3 text-heading-4 font-label">
                                                Bergaji Dollar
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="text-gray-50 lg:text-heading-4 text-heading-5">
                                            Dapatkan gaji dollar / euro dengan standar internasional + bonus
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="w-full my-1 lg:my-4 md:w-1/2 lg:px-4 lg:w-1/3">
                            <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                                <div class="flex flex-col p-1 lg:p-6">
                                    <div class="flex items-center lg:mb-2">
                                        <div
                                            class="items-center p-1 mr-3 overflow-hidden text-center rounded-md lg:p-4 bg-blue-10">
                                            <img src="{{ asset('/assets/svgs/accomodation.svg') }}" class="items-center"
                                                alt="accomodation" width="30px">
                                        </div>
                                        <div className=" flex flex-col">
                                            <p
                                                class="mb-1 font-bold text-primary-shineblue lg:text-heading-3 text-heading-4 font-label">
                                                Free Akomodasi
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <p class="text-gray-50 lg:text-heading-4 text-heading-5 ">
                                            Tidak perlu lagi ongkos pulang dan pergi serta bayar biaya tinggal
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="w-full my-1 lg:my-4 md:w-1/2 lg:px-4 lg:w-1/3">
                            <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                                <div class="flex flex-col p-1 lg:p-6">
                                    <div class="flex items-center lg:mb-2">
                                        <div
                                            class="items-center p-1 mr-3 overflow-hidden text-center rounded-md lg:p-4 bg-blue-10">
                                            <img src="{{ asset('/assets/svgs/travel.svg') }}" class="items-center "
                                                alt="travel-world" width="30px">
                                        </div>
                                        <div className="flex flex-col">
                                            <p
                                                class="mb-1 font-bold text-primary-shineblue lg:text-heading-3 text-heading-4 font-label">
                                                Travel The World
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <p class="text-gray-50 lg:text-heading-4 text-heading-5">
                                            Kesempatan berkeliling dan menjelajah berbagai kota dan negara di dunia
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="w-full my-1 lg:my-4 md:w-1/2 lg:px-4 lg:w-1/3">
                            <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                                <div class="flex flex-col p-1 lg:p-6">
                                    <div class="flex items-center lg:mb-2">
                                        <div
                                            class="items-center p-1 mr-3 overflow-hidden text-center rounded-md lg:p-4 bg-blue-10">
                                            <img src="{{ asset('/assets/svgs/study.svg') }}" class="items-center"
                                                alt="study" width="30px">
                                        </div>
                                        <div className="flex flex-col">
                                            <p
                                                class="mb-1 font-bold text-primary-shineblue lg:text-heading-3 text-heading-4 font-label">
                                                Minimum Pendidikan
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <p class="text-gray-50 lg:text-heading-4 text-heading-5">
                                            Mulai dari lulusan SMA/SMK sederajat dapat bekerja dikapal pesiar
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="w-full my-1 lg:my-4 md:w-1/2 lg:px-4 lg:w-1/3">
                            <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                                <div class="flex flex-col p-1 lg:p-6">
                                    <div class="flex items-center lg:mb-2">
                                        <div
                                            class="items-center p-1 mr-3 overflow-hidden text-center rounded-md lg:p-4 bg-blue-10">
                                            <img src="{{ asset('/assets/svgs/career.svg') }}" class="items-center"
                                                alt="career" width="30px">
                                        </div>
                                        <div className="flex flex-col">
                                            <p
                                                class="mb-1 font-bold text-primary-shineblue lg:text-heading-3 text-heading-4 font-label">
                                                Peluang Karir Luas
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <p class="text-gray-50 lg:text-heading-4 text-heading-5">
                                            Peluang karir Internasional & peluang promosi karir di masa depan dapat anda
                                            raih
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

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
                        <img src="{{ asset('/assets/images/banner2.png') }}" class="max-w-full mx-auto" width="400px"
                            alt="hero-banner" srcset="">
                    </div>
                </div>

                <!-- left column -->
                <div class="self-center w-full px-4 text-center lg:w-1/2 lg:text-left ">

                    <h2 class="mb-3 font-bold lg:mb-4 text-primary-shineblue text-heading-3 lg:text-heading-2">
                        Apa itu Sea Education?
                    </h2>
                    <h3 class="pr-4 mb-7 text-slate-700 lg:text-heading-4 text-heading-5 ">
                        Sea Eduation merupakan training center yang menyediakan program pelatihan berbasis
                        industri yang berfokus pada penempatan karir profesional di bidang Hotel Internasional dan Kapal
                        Pesiar
                    </h3>

                    <div class="items-center justify-center w-full pt-4 pb-4 lg:pb-4 lg:justify-start">
                        <a href="{{ route('about-us') }}"
                            class="w-full p-2 font-semibold text-white rounded-lg text-heading-5 lg:text-heading-4 bg-primary-shineblue hover:bg-primary-darkblue">
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us-->

    <!-- why choose sea education-->
    <section id="why-sea-education" class="relative flex items-center justify-between pt-8 pb-8 bg-primary-shineblue">

        <div class="items-center max-w-6xl p-4 mx-auto lg:p-8">

            <h2 class="font-medium text-center text-secondary-yellow lg:text-heading-4 text-heading-5 lg:text-left">
                Why Choose Us?
            </h2>

            <h1 class="mb-2 font-bold text-center text-white lg:py-3 lg:text-heading-2 text-heading-4 lg:text-left">
                Kenapa harus Sea Education?
            </h1>

            <div class="flex flex-wrap justify-between lg:-mx-4">
                <!-- Card -->
                <div class="w-full my-2 lg:my-4 md:w-1/2 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                        <div class="flex flex-col p-6">

                            <div class="flex items-center mb-2">

                                <div class="items-center p-3 mr-3 overflow-hidden text-center rounded-md bg-blue-10">
                                    <img src="{{ asset('/assets/svgs/mentor.svg') }}" class="items-center" width="30px"
                                        alt="mentor" />
                                </div>

                                <div className="flex flex-col">
                                    <p
                                        class="mb-1 font-bold text-primary-shineblue lg:text-heading-3 text-heading-4 font-label">
                                        Mentor Berkualitas
                                    </p>
                                </div>

                            </div>

                            <div class="flex">
                                <p class="text-gray-50 lg:text-heading-4 text-heading-5">
                                    Mentor kami adalah profesional dan expert yang memiliki pengalaman
                                    Internasional dibidang hopitality dan kapal pesiar
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full my-2 lg:my-4 md:w-1/2 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                        <div class="flex flex-col p-6">
                            <div class="flex items-center mb-2">
                                <div class="items-center p-3 mr-3 overflow-hidden text-center rounded-md bg-blue-10">
                                    <img src="{{ asset('/assets/svgs/consultancy.svg') }}" class="items-center"
                                        width="30px" alt="consultancy" />
                                </div>
                                <div className="flex flex-col">
                                    <p
                                        class="mb-1 font-bold text-primary-shineblue lg:text-heading-3 text-heading-4 font-label">
                                        Konsultansi Karir
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50 lg:text-heading-4 text-heading-5">
                                    Konsultasikan impian karir dengan kami untuk dapat membantu mewujudkan impian masa depan
                                    anda
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full my-2 lg:my-4 md:w-1/2 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                        <div class="flex flex-col p-6">
                            <div class="flex items-center mb-2">
                                <div class="items-center p-3 mr-3 overflow-hidden text-center rounded-md bg-blue-10">
                                    <img src="{{ asset('/assets/svgs/certificate.svg') }}" class="items-center"
                                        width="30px" alt="certificate" />
                                </div>
                                <div className="flex flex-col">
                                    <p
                                        class="mb-1 font-bold text-primary-shineblue lg:text-heading-3 text-heading-4 font-label">
                                        Sertifikat
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50 lg:text-heading-4 text-heading-5">
                                    Ikut dan elesaikan pelatihan anda di Sea Education dan dapatkan sertifikat setara yang
                                    dapat digunakan untuk karir anda
                                    diploma
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full my-2 lg:my-4 md:w-1/2 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                        <div class="flex flex-col p-6">
                            <div class="flex items-center mb-2">
                                <div class="items-center p-3 mr-3 overflow-hidden text-center rounded-md bg-blue-10">
                                    <img src="{{ asset('/assets/svgs/training.svg') }}" class="items-center"
                                        width="30px" alt="career" />
                                </div>
                                <div className="flex flex-col">
                                    <p
                                        class="mb-1 font-bold text-primary-shineblue lg:text-heading-3 text-heading-4 font-label">
                                        On The Job Training
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50 lg:text-heading-4 text-heading-5">
                                    Kami memberikan On The Job Internasional di tempat-tempat terbaik untuk membantu
                                    membangun karir
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full my-2 lg:my-4 md:w-1/2 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                        <div class="flex flex-col p-6">
                            <div class="flex items-center mb-2">
                                <div class="items-center p-3 mr-3 overflow-hidden text-center rounded-md bg-blue-10">
                                    <img src="{{ asset('/assets/svgs/lowest.svg') }}" class="items-center"
                                        width="30px" alt="affordable" />
                                </div>
                                <div className="flex flex-col">
                                    <p
                                        class="mb-1 font-bold text-primary-shineblue lg:text-heading-3 text-heading-4 font-label">
                                        Biaya Terjangkau
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50 lg:text-heading-4 text-heading-5">
                                    Biaya pelatihan yang terjangkau dan sesuai memberikan kemudahan untuk menggapai tujuan
                                    dan
                                    karir yang anda impikan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full my-2 lg:my-4 md:w-1/2 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                        <div class="flex flex-col p-6">
                            <div class="flex items-center mb-2">
                                <div class="items-center p-3 mr-3 overflow-hidden text-center rounded-md bg-blue-10">
                                    <img src="{{ asset('/assets/svgs/support.svg') }}" class="items-center"
                                        width="30px" alt="support" />
                                </div>
                                <div className="flex flex-col">
                                    <p
                                        class="mb-1 font-bold text-primary-shineblue lg:text-heading-3 text-heading-4 font-label">
                                        Get Hired
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50 lg:text-heading-4 text-heading-5">
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
        <div class="items-center max-w-6xl p-4 mx-auto lg:p-8">

            <h2 class="font-medium text-center text-secondary-yellow lg:text-heading-4 text-heading-5 lg:text-left">
                Training Program</h2>
            <h1 class="mb-2 font-bold text-center lg:py-3 text-primary-blue lg:text-heading-2 text-heading-4 lg:text-left">
                Program Pelatihan
            </h1>


            <div class="flex flex-col flex-wrap justify-between mx-auto lg:flex-row lg:-mx-4">
                <!-- Card -->
                <div class="w-full px-1 my-2 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                        <a href="detail.html">
                            <div class="overflow-hidden rounded-md ">
                                <img alt="Placeholder" class="block w-full h-auto"
                                    src="{{ asset('/assets/images/program1.jpg') }}" />
                            </div>
                        </a>

                        <div class="px-4 mb-4 leading-tight">
                            <div class="flex">
                                <span class="block py-1 mt-3 font-semibold text-green-100 rounded-lg text-heading-5">
                                    Pendaftaran dibuka
                                </span>
                            </div>
                            <h1 class="mb-2 text-heading-3">
                                <a class="font-bold text-primary-darkblue lg:text-heading-3 text-heading-4"
                                    href="#">
                                    Regular Program
                                </a>
                            </h1>

                            <div class="flex">
                                <p class="items-center py-1 font-semibold rounded-lg text-secondary-orange text-heading-6">
                                    Deadline Pendaftaran : 4 Desember 2022
                                </p>
                            </div>

                            <div class="flex gap-2 py-4">
                                <button
                                    class="items-center w-full p-2 font-semibold text-center text-white rounded-lg text-heading-6 bg-primary-shineblue hover:bg-primary-blue">
                                    Daftar
                                </button>

                                <button
                                    class="items-center w-full p-2 font-semibold text-center rounded-lg bg-blue-5 text-primary-shineblue hover:text-primary-blue text-heading-6 hover:bg-blue-30 hover:border-primary-blue">
                                    Selengkapnya
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-2 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                        <a href="detail.html">
                            <div class="overflow-hidden rounded-md ">
                                <img alt="Placeholder" class="block w-full h-auto"
                                    src="{{ asset('/assets/images/program1.jpg') }}" />
                            </div>
                        </a>

                        <div class="px-4 mb-4 leading-tight">
                            <div class="flex">
                                <span class="block py-1 mt-3 font-semibold text-green-100 rounded-lg text-heading-5">
                                    Pendaftaran dibuka
                                </span>
                            </div>
                            <h1 class="mb-2 text-heading-3">
                                <a class="font-bold text-primary-darkblue lg:text-heading-3 text-heading-4"
                                    href="#">
                                    Regular Program
                                </a>
                            </h1>

                            <div class="flex">
                                <p class="items-center py-1 font-semibold rounded-lg text-secondary-orange text-heading-6">
                                    Deadline Pendaftaran : 4 Desember 2022
                                </p>
                            </div>

                            <div class="flex gap-2 py-4">
                                <button
                                    class="items-center w-full p-2 font-semibold text-center text-white rounded-lg text-heading-6 bg-primary-shineblue hover:bg-primary-blue">
                                    Daftar
                                </button>

                                <button
                                    class="items-center w-full p-2 font-semibold text-center rounded-lg bg-blue-5 text-primary-shineblue hover:text-primary-blue text-heading-6 hover:bg-blue-30 hover:border-primary-blue">
                                    Selengkapnya
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-2 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                        <a href="detail.html">
                            <div class="overflow-hidden rounded-md ">
                                <img alt="Placeholder" class="block w-full h-auto"
                                    src="{{ asset('/assets/images/program1.jpg') }}" />
                            </div>
                        </a>

                        <div class="px-4 mb-4 leading-tight">
                            <div class="flex">
                                <span class="block py-1 mt-3 font-semibold text-green-100 rounded-lg text-heading-5">
                                    Pendaftaran dibuka
                                </span>
                            </div>
                            <h1 class="mb-2 text-heading-3">
                                <a class="font-bold text-primary-darkblue lg:text-heading-3 text-heading-4"
                                    href="#">
                                    Regular Program
                                </a>
                            </h1>

                            <div class="flex">
                                <p class="items-center py-1 font-semibold rounded-lg text-secondary-orange text-heading-6">
                                    Deadline Pendaftaran : 4 Desember 2022
                                </p>
                            </div>

                            <div class="flex gap-2 py-4">
                                <button
                                    class="items-center w-full p-2 font-semibold text-center text-white rounded-lg text-heading-6 bg-primary-shineblue hover:bg-primary-blue">
                                    Daftar
                                </button>

                                <button
                                    class="items-center w-full p-2 font-semibold text-center rounded-lg bg-blue-5 text-primary-shineblue hover:text-primary-blue text-heading-6 hover:bg-blue-30 hover:border-primary-blue">
                                    Selengkapnya
                                </button>

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
    <section id="why-cruise-ship" class="relative flex items-center justify-between pt-8 pb-8 bg-primary-shineblue">
        <div class="items-center max-w-6xl p-4 mx-auto lg:p-8">

            <h2 class="font-medium text-center text-secondary-yellow lg:text-heading-4 text-heading-5 lg:text-left">
                Partnership
            </h2>

            <h1 class="py-3 mb-2 font-bold text-center text-white lg:text-heading-2 text-heading-3 lg:text-left">
                Bekerjasama
                dengan perusahaan
                terbaik
            </h1>

            <div class="flex flex-wrap items-center justify-between mx-auto">

                <!-- right column -->
                <div class="self-center w-full px-4 py-8">

                    <p class="text-white lg:text-left lg:text-heading-4 text-heading-5">
                        kami berkolaborasi dengan hiring partner terpercaya untuk membantu kamu membangun
                        karir di
                        tempat
                        impian.
                    </p>

                </div>

                <!-- left column -->
                <div class="self-center w-full px-4 text-center lg:text-left ">
                </div>
            </div>
        </div>
    </section>
    <!-- End partner-->

    <!-- Alumni Work Logo -->
    <section id="why-cruise-ship" class="items-center w-full h-full pt-8 pb-8 bg-blue-10">
        <div class="items-center max-w-6xl p-4 mx-auto lg:p-8">
            <h2 class="font-medium text-center text-secondary-yellow lg:text-heading-4 text-heading-5 lg:text-left">
                The following brands are where our alumni mostly work.
            </h2>
            <h1 class="mb-3 font-bold text-center lg:py-3 text-primary-blue lg:text-heading-2 text-heading-4 lg:text-left">
                300+ lulusan bekerja di perusahaan ini
            </h1>

            <div class="grid items-center justify-between grid-flow-row grid-cols-3 gap-4 mx-auto lg:grid-cols-5 lg:-mx-4">
                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4 ">
                    <img src="{{ asset('/assets/logo/royal-caribbean.svg') }}" class="items-center lg" alt="Profile"
                        layout="fill" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4 before:">
                    <img src="{{ asset('/assets/logo/celebrity-cruise.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/carnival-cruise.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/msc-cruise.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/aida-cruise.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/costa.svg') }}" class="items-center" alt="Profile" layout="fill"
                        objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/cunard-cruise.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/p-o-cruise.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/princess-cruise.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/crystal-cruise.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/dream-crusie.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/star-cruise.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/virgin-voyages.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/viking-cruise.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/genting-resort.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/grand-lexis.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/all-sedayu.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/kempinski-jakarta.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/holiday-inn.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/le-meridien-jkt.sv') }}g" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/jambuluwuk.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/ritz-carlton.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/grand-city-hall.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/sheraton-hotel.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/shangri-la.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/trans-luxury.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/double-tree.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/hilton-kl.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 lg:my-4 lg:px-4">
                    <img src="{{ asset('/assets/logo/Qasr Al Sarab.svg') }}" class="items-center" alt="Profile"
                        layout="fill" objectFit="cover" objectPosition="center" />
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
    <section id="student-activity" class="items-center w-full h-full pt-8 pb-8 bg-primary-shineblue">
        <div class="items-center max-w-6xl p-4 mx-auto lg:p-8">
            <h2 class="font-medium text-center text-secondary-yellow lg:text-heading-4 text-heading-5 lg:text-left">
                Student Activity
            </h2>

            <h1 class="mb-3 font-bold text-center text-white lg:py-3 lg:text-heading-2 text-heading-4 lg:text-left">
                Aktifitas Siswa
            </h1>

            <div class="flex flex-wrap items-center justify-center mx-auto lg:p-4 lg:-mx-4">

                <div class="grid items-center justify-center grid-cols-3 gap-2 lg:gap-5 md:grid-cols-3 lg:grid-cols-4">

                    <div
                        class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">

                        <div class="h-96 w-72">
                            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="{{ asset('/assets/images/class.jpeg') }}" alt="sea-activity-image" />
                        </div>

                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>

                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center
                            justify-center lg:px-9 px-4 text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="mb-2 font-bold text-white lg:mb-8 lg:text-heading-3 text-leading-4 font-label">Class
                                Training
                            </h1>
                            <p
                                class="mb-3 italic text-white transition-opacity duration-300 opacity-0 text-heading-6 group-hover:opacity-100">
                                Siswa belajar dikelas selama 3 bulan dan akan mempelajari basic perhotelan sesuai
                                jurusan yang dipilih, bahasa inggris dan pegembangan soft skill
                            </p>
                            <button
                                class="rounded-lg bg-primary-shineblue py-2 px-3.5 font-com text-sm
                                capitalize text-white shadow shadow-black/60 hidden lg:block">See
                                More</button>
                        </div>
                    </div>

                    <div
                        class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                        <div class="h-96 w-72">
                            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="{{ asset('/assets/images/hotel-training2.jpg') }}" alt="sea-activity-image" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center
                            justify-center lg:px-9 px-4 text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="mb-2 font-bold text-white lg:mb-8 lg:text-heading-3 text-leading-4 font-label">
                                Practice</h1>
                            <p
                                class="mb-3 italic text-white transition-opacity duration-300 opacity-0 text-heading-6 group-hover:opacity-100">
                                Selama pelatihan siswa Sea Education tidak hanya belajar secara teori tetapi juga akan
                                diberikan pelatihan dalam bentuk praktik langsung
                            </p>
                            <button
                                class="rounded-lg bg-primary-shineblue py-2 px-3.5 font-com
                                text-sm capitalize text-white shadow shadow-black/60 hidden lg:block">See
                                More</button>
                        </div>
                    </div>

                    <div
                        class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                        <div class="h-96 w-72">
                            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="{{ asset('/assets/images/internship-genting.jpg') }}" alt="sea-activity-image" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center
                            px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="mb-2 font-bold text-white lg:mb-8 lg:text-heading-3 text-leading-4 font-label">On
                                The Job
                                Training</h1>
                            <p
                                class="mb-3 italic text-white transition-opacity duration-300 opacity-0 text-heading-6 group-hover:opacity-100">
                                On The Job Training merupakan bagian dari program Sea Education, siswa akan training
                                selama 6 bulan di hotel berbintang 4-5 di Indonesia / Luar Negri
                            </p>
                            <button
                                class="rounded-lg bg-primary-shineblue py-2 px-3.5 font-com text-sm
                                capitalize text-white shadow shadow-black/60 hidden lg:block">See
                                More</button>
                        </div>
                    </div>

                    <div
                        class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                        <div class="h-96 w-72">
                            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="{{ asset('/assets/images/safety-training.jpg') }}" alt="sea-activity-image" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center
                            justify-center lg:px-9 px-4 text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="mb-2 font-bold text-white lg:mb-8 lg:text-heading-3 text-leading-4 font-label">
                                Safety
                                Training
                            </h1>
                            <p
                                class="mb-3 italic text-white transition-opacity duration-300 opacity-0 text-heading-6 group-hover:opacity-100">
                                Siswa Sea Education mengikuti pelatihan dan sertifikasi dokumen pelaut sebagai syarat
                                untuk bekerja dikapal pesiar
                            </p>
                            <button
                                class="rounded-lg bg-primary-shineblue py-2 px-3.5 font-com
                                text-sm capitalize text-white shadow shadow-black/60 hidden lg:block">See
                                More</button>
                        </div>
                    </div>

                    <div
                        class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                        <div class="h-96 w-72">
                            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="{{ asset('/assets/images/deployment.jpg') }}" alt="sea-activity-image" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col
                            items-center justify-center lg:px-9 px-4 text-center
                            transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="mb-2 font-bold text-white lg:mb-8 lg:text-heading-3 text-leading-4 font-label">
                                Explore The
                                World
                            </h1>
                            <p
                                class="mb-3 italic text-white transition-opacity duration-300 opacity-0 text-heading-6 group-hover:opacity-100">
                                Siswa Sea Education berangkat menuju kapal pesiar setelah mengikuti pelatihan dan
                                mengikuti interview dengan user
                            </p>
                            <button
                                class="rounded-lg bg-primary-shineblue py-2 px-3.5
                                font-com text-sm capitalize text-white shadow shadow-black/60 hidden lg:block">See
                                More</button>
                        </div>
                    </div>

                    <div
                        class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                        <div class="h-96 w-72">
                            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="{{ asset('/assets/images/partnership-genting.jpg') }}" alt="sea-activity-image" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center
                            justify-center lg:px-9 px-4 text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="mb-2 font-bold text-white lg:mb-8 lg:text-heading-3 text-leading-4 font-label">
                                Parnership
                                With
                                Resort Genting
                            </h1>
                            <p
                                class="mb-3 italic text-white transition-opacity duration-300 opacity-0 text-heading-6 group-hover:opacity-100">
                                Bekerja sama dengan Hotel dan Agency terpercaya untuk membangun peluang bagi siswa Sea
                                Education
                            </p>
                            <button
                                class="rounded-lg bg-primary-shineblue py-2 px-3.5 font-com text-sm
                                capitalize text-white shadow shadow-black/60 hidden lg:block">See
                                More</button>
                        </div>
                    </div>

                    <div
                        class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                        <div class="h-96 w-72">
                            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="{{ asset('/assets/images/internship-grandlexis2.jpg') }}"
                                alt="sea-activity-image" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center
                            justify-center lg:px-9 px-4 text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="mb-2 font-bold text-white lg:mb-8 lg:text-heading-3 text-leading-4 font-label">
                                Parnership
                                With
                                Grand Lexis Port
                                Dickson
                            </h1>
                            <p
                                class="mb-3 italic text-white transition-opacity duration-300 opacity-0 text-heading-6 group-hover:opacity-100">
                                Bekerja sama dengan Hotel dan Agency terpercaya untuk membangun peluang bagi siswa Sea
                                Education
                            </p>
                            <button
                                class="rounded-lg bg-primary-shineblue py-2 px-3.5 font-com
                                text-sm capitalize text-white shadow shadow-black/60 hidden lg:block">See
                                More</button>
                        </div>
                    </div>

                    <div
                        class="relative items-center justify-center overflow-hidden transition-shadow cursor-pointer group hover:shadow-xl hover:shadow-black/30">
                        <div class="h-96 w-72">
                            <img class="object-cover w-full h-full transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125"
                                src="{{ asset('/assets/images/partnership-w-millenium.jpg') }}"
                                alt="sea-activity-image" />
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                        </div>
                        <div
                            class="absolute inset-0 flex translate-y-[60%] flex-col items-center
                            justify-center lg:px-9 px-4 text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="mb-2 font-bold text-white lg:mb-8 lg:text-heading-3 text-leading-4 font-label">
                                Partnership
                                With
                                PT Millenium</h1>
                            <p
                                class="mb-3 italic text-white transition-opacity duration-300 opacity-0 text-heading-6 group-hover:opacity-100">
                                Bekerja sama dengan Hotel dan Agency terpercaya untuk membangun peluang bagi siswa Sea
                                Education
                            </p>
                            <button
                                class="rounded-lg bg-primary-shineblue py-2 px-3.5 font-com
                                text-sm capitalize text-white shadow shadow-black/60 hidden lg:block">
                                See More
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <!-- end Student Activity -->

    <!-- Testimonial-->
    <section id="testimonials" class="items-center w-full h-full pt-8 pb-8 bg-blue-10">
        <div class="items-center max-w-6xl p-4 mx-auto lg:p-8">
            <h2 class="font-medium text-center text-secondary-yellow lg:text-heading-4 text-heading-5 lg:text-left">
                Testimonial
            </h2>

            <h1 class="mb-3 font-bold text-center lg:py-3 text-primary-blue lg:text-heading-2 text-heading-4 lg:text-left">
                Pengalaman Siswa
            </h1>

            <div class="flex flex-wrap justify-between mx-auto lg:-mx-4">
                <!-- Card -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4" data-slide>
                    <div class="overflow-hidden border border-gray-200 rounded-lg shadow-sm">
                        <div class="flex flex-col p-4 bg-white">
                            <div class="flex items-center mb-4">
                                <div class="relative w-16 h-16 mr-3 overflow-hidden rounded-full">
                                    <img src="{{ asset('/assets/images/class.jpeg') }}" alt="Profile"
                                        class="w-16 h-16">
                                </div>
                                <div className="flex flex-col">
                                    <p
                                        class="mb-1 font-bold text-primary-shineblue lg:text-heading-4 text-heading-5 font-label">
                                        Ester Fitcia
                                    </p>
                                    <p class="font-bold text-heading-6 text-gray-50">
                                        Medan, Sumatra Utara
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50 lg:text-heading-4 text-heading-5">
                                    berkat Sea Education sekarang saya bisa bekerja dan berkeliling dunia,
                                    meskipun sempat tersendat covid-19. namun Sea Education tetap membantu saya
                                    untuk dapat bekerja di hotel rekanan mereka. sehingga saya tetap dapat menabung
                                    mempersiapkan
                                    keberangkatan
                                </p>
                            </div>

                            <div class="flex">
                                <p class="block mt-2 mb-2 font-bold lg:text-heading-4 text-heading-5 text-primary-blue">
                                    Waitress
                                    <span class="font-normal text-black">at</span>
                                </p>
                            </div>
                            <img class="block w-full h-full" src="{{ asset('/assets/logo/dream-crusie.svg') }}"
                                alt="logo-work">
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4" data-slide>
                    <div class="overflow-hidden border border-gray-200 rounded-lg shadow-sm ">
                        <div class="flex flex-col p-4 bg-white">
                            <div class="flex items-center mb-4">
                                <div class="relative w-16 h-16 mr-3 overflow-hidden rounded-full">
                                    <img src="{{ asset('/public/images/bayu.jpeg') }}" class="object-cover w-full"
                                        alt="Profile" layout="fill" objectFit="cover" objectPosition="center" />
                                </div>
                                <div className="flex flex-col">
                                    <p
                                        class="mb-1 font-bold text-primary-shineblue lg:text-heading-4 text-heading-5 font-label">
                                        Bayu Prasetya
                                    </p>
                                    <p class="font-bold text-heading-6 text-gray-50">
                                        Jakarta Selatan, Jakarta
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50 lg:text-heading-4 text-heading-5">
                                    Pengalaman saya bersama Sea Education sangat berkesan, saya selalu didampingi dari
                                    training,
                                    persiapan interview hingga keberangkatan. saya bersyukur dapat bekerja keliling
                                    dunia.
                                    saya harap makin banyak yang kenal Sea Education karena Keren banget
                                </p>
                            </div>

                            <div class="flex">
                                <p class="block mt-2 mb-2 font-bold lg:text-heading-4 text-heading-5 text-primary-blue">
                                    Room Attendant
                                    <span class="font-normal text-black">at</span>
                                </p>
                            </div>
                            <img class="block w-full h-full" src="{{ asset('/assets/logo/royal-caribbean.svg') }}"
                                alt="logo-work">
                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4" data-slide>
                    <div class="overflow-hidden border border-gray-200 rounded-lg shadow-sm">
                        <div class="flex flex-col p-4 bg-white">
                            <div class="flex items-center mb-4">
                                <div class="relative w-16 h-16 mr-3 overflow-hidden rounded-full">
                                    <img src="{{ asset('/public/images/muhajir.jpeg') }}" alt="Profile" layout="fill"
                                        objectFit="cover" objectPosition="center" />
                                </div>
                                <div className="flex flex-col">
                                    <p
                                        class="mb-1 font-bold text-primary-shineblue lg:text-heading-4 text-heading-5 font-label">
                                        Muhajir
                                    </p>
                                    <p class="font-bold text-heading-6 text-gray-50">
                                        Banda Aceh, Aceh
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50 lg:text-heading-4 text-heading-5">
                                    Saya memiliki jiwa berpetualang sejak kecil, saya ingin mengenal dunia lebih luas
                                    lagi,
                                    dan saya tertarik ketika tidak sengaja melihat posting dari Sea Education.
                                    saya merasa inilah jalan saya berkeliling dunia, banyak perjuangan hingga akhirnya
                                    impian saya
                                    tercapai
                                </p>
                            </div>

                            <div class="flex">
                                <p class="block mt-2 mb-2 font-bold lg:text-heading-4 text-heading-5 text-primary-blue">
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
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4" data-slide>
                    <div class="overflow-hidden border border-gray-200 rounded-lg shadow-sm">
                        <div class="flex flex-col p-4 bg-white">
                            <div class="flex items-center mb-4">
                                <div class="relative w-16 h-16 mr-3 overflow-hidden rounded-full">
                                    <img src="{{ asset('/public/images/sugianto.jpg') }}" alt="Profile" layout="fill"
                                        objectFit="cover" class="items-center" />
                                </div>
                                <div className="flex flex-col">
                                    <p
                                        class="mb-1 font-bold text-primary-shineblue lg:text-heading-4 text-heading-5 font-label">
                                        Sugianto
                                    </p>
                                    <p class="font-bold text-heading-6 text-gray-50">
                                        Malang, Jawa Timur
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <p class="text-gray-50 lg:text-heading-4 text-heading-5">
                                    Bermula ketika saya baru lulus sekolah dan melamar ke 20 lebih hotel & restaurant,
                                    hingga akhirnya bertemu Sea Education. sempat ragu tapi akhirnya saya mendaftar.
                                    senang rasanya ketika saya bisa bekerja berkeliling dunia. bersyukur banget join Sea
                                    Education
                                </p>
                            </div>

                            <div class="flex">
                                <p class="block mt-2 mb-2 font-bold lg:text-heading-4 text-heading-5 text-primary-blue">
                                    Assistant Cook
                                    <span class="font-normal text-black">at</span>
                                </p>
                            </div>
                            <img class="w-full" src="/assets/logo/aida-cruise.svg" alt="logo-work">
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
        class="items-center w-full h-full px-6 py-2 pt-16 pb-16 bg-primary-shineblue lg:px-16 md:px-20">
        <div class="max-w-6xl mx-auto">
            <h2 class="font-medium text-center text-secondary-yellow lg:text-heading-4 text-heading-5 lg:text-left">
                Frequently Asked Question
            </h2>
            <h1
                class="mb-2 text-center text-white fo11111111111111111111nt-bold lg:py-3 lg:text-heading-2 text-heading-4 lg:text-left">
                Pertanyaan Yang Sering Ditanyakan
            </h1>

            <div class="flex flex-wrap justify-between mx-auto lg:-mx-4">
                <!-- accordion -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4">
                    <div class="bg-white border-2 rounded-lg">
                        <div class="flex items-center justify-between accordion-header">
                            <!-- FAQ -->
                            <span class="font-semibold text-slate-700 lg:text-heading-4 text-heading-5">
                                Apa syarat untuk mendaftar program pelatihan?
                            </span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>

                        <!-- Content -->
                        <div class="accordion-body">
                            <div class="p-4 border-t">
                                <p class="lg:text-heading-4 text-heading-5">
                                    - Lulusan SMA / SMK atau Sederajat <br>
                                    - Memiliki surat keterangan sehat, tidak memiliki penyakit menular dan tidak buta
                                    warna <br>
                                    - Tidak memiliki tatto di bagian tubuh yang biasa terlihat (tangan, kaki & leher)
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end accordion -->

                <!-- accordion -->
                <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4">
                    <div class="bg-white border-2 rounded-lg">
                        <div class="flex items-center justify-between accordion-header">
                            <!-- FAQ -->
                            <span class="font-semibold text-slate-700 lg:text-heading-4 text-heading-5">
                                Bagaimana tahapan program pelatihan ini?
                            </span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>

                        <!-- Content -->
                        <div class="accordion-body">
                            <div class="p-4 border-t">
                                <p class="lg:text-heading-4 text-heading-5">
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
                    <div class="bg-white border-2 rounded-lg">
                        <div class="flex items-center justify-between accordion-header">
                            <!-- FAQ -->
                            <span class="font-semibold text-slate-700 lg:text-heading-4 text-heading-5">
                                Apakah harus memiliki pendidikan / basic perhotelan?
                            </span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>

                        <!-- Content -->
                        <div class="accordion-body">
                            <div class="p-4 border-t">
                                <p class="lg:text-heading-4 text-heading-5">
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
                    <div class="bg-white border-2 rounded-lg">
                        <div class="flex items-center justify-between accordion-header">
                            <!-- FAQ -->
                            <span class="font-semibold text-slate-700 lg:text-heading-4 text-heading-5">
                                Apakah harus mampu
                                berbahasa inggris secara expert? </span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>

                        <!-- Content -->
                        <div class="accordion-body">
                            <div class="p-4 border-t">
                                <p class="lg:text-heading-4 text-heading-5">
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
                    <div class="bg-white border-2 rounded-lg">
                        <div class="flex items-center justify-between accordion-header">
                            <!-- FAQ -->
                            <span class="font-semibold text-slate-700 lg:text-heading-4 text-heading-5">
                                Apakah tersedia komunitas untuk berkonsultasi?
                            </span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>

                        <!-- Content -->
                        <div class="accordion-body">
                            <div class="p-4 border-t">
                                <p class="lg:text-heading-4 text-heading-5">
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
                    <div class="bg-white border-2 rounded-lg">
                        <div class="flex items-center justify-between accordion-header">
                            <!-- FAQ -->
                            <span class="font-semibold text-slate-700 lg:text-heading-4 text-heading-5">
                                Bagaimana proses penyaluran kerja di Sea Education?
                            </span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>

                        <!-- Content -->
                        <div class="accordion-body">
                            <div class="p-4 border-t">
                                <p class="lg:text-heading-4 text-heading-5">
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
                    <div class="bg-white border-2 rounded-lg">
                        <div class="flex items-center justify-between accordion-header">
                            <!-- FAQ -->
                            <span class="font-semibold text-slate-700 lg:text-heading-4 text-heading-5">
                                Apakah dapat mengulang jika saya masih belum mampu?
                            </span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>

                        <!-- Content -->
                        <div class="accordion-body">
                            <div class="p-4 border-t">
                                <p class="lg:text-heading-4 text-heading-5">
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
                    <div class="bg-white border-2 rounded-lg">
                        <div class="flex items-center justify-between accordion-header">
                            <!-- FAQ -->
                            <span class="font-semibold text-slate-700 lg:text-heading-4 text-heading-5">
                                Privilege lain apalagi yang bisa saya dapatkan?
                            </span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>

                        <!-- Content -->
                        <div class="accordion-body">
                            <div class="p-4 border-t">
                                <p class="lg:text-heading-4 text-heading-5">
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

@endsection
