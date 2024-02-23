@extends('layouts.front')

@section('title', ' About Us')

@section('content')


    <div>
        <div class="pt-8 pb-8">

            <div class="items-center max-w-6xl mx-auto">

                <div class="flex flex-col lg:flex-row">

                    @include('components.landing.sidebar-about')

                    <!-- Main Content -->
                    <main class="flex-grow main-content">

                        <section class="items-center pb-8 ml-3">

                            <div class="justify-center px-6 lg:px-0 md:px-20">

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32358694.14803163!2d94.6828754811948!3d8.097820722335369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3233af605e720cd5%3A0x28a70f18542d1b91!2sAsia%20Tenggara!5e0!3m2!1sid!2sid!4v1689144891326!5m2!1sid!2sid"
                                    width="600" height="500" style="border: 0" loading="lazy "
                                    referrerpolicy="no-referrer-when-downgrade"
                                    class="static w-full h-40 bg-cover rounded-lg shadow-md">
                                </iframe>

                                <h3 class="mt-12 mb-4 text-3xl font-semibold text-left">
                                    Sea Education
                                </h3>

                                <div class="text-justify">

                                    <p class="pt-5 ">
                                        Sea Education adalah sebuah program pelatihan dan penyaluran kerja yang berfokus
                                        di bidang Perhotelan,
                                        Kapal Pesiar dan bidang IT serta Industri Manufaktur dan perkebunan.
                                    </p>

                                    <p class="pt-5">
                                        Dengan komitmen untuk memberikan peluang berkarier yang sangat baik, Sea
                                        Education bekerja sama dengan
                                        banyak perusahaan global, yang membuat Anda tidak perlu khawatir tentang masa
                                        depan Anda.
                                        Program ini telah terbukti menjadi tonggak penting dalam membantu peserta
                                        mencapai kesuksesan dan
                                        meraih pekerjaan impian mereka.
                                    </p>

                                </div>

                                <div class="flex items-center justify-between">

                                    <div class="max-w-533px">
                                        <h3 class="mt-20 mb-4 text-3xl font-semibold text-left">
                                            Kenapa Harus Belajar di Sea Education ?
                                        </h3>

                                        <ol class="pt-10 text-justify pr-4">
                                            <li class="pb-4 ">
                                                <h1 class="text-heading-4 font-semibold">Fokus pada Bidang Industri
                                                    Unggulan</h1>
                                                <p>Pelatihan berorientasi pada industri yang memiliki peluang pekerjaan
                                                    yang baik.
                                                    Sea Education memiliki spesialisasi yang kuat di berbagai bidang
                                                    industri yang sedang
                                                    berkembang pesat, seperti Perhotelan, Kapal Pesiar, IT, Industri
                                                    Manufaktur, dan
                                                    perkebunan.
                                                </p>
                                            </li>


                                            <li class="pb-4">
                                                <h1 class="text-heading-4 font-semibold">Kolaborasi dengan Perusahaan
                                                    Global</h1>
                                                <p>Sea Education memiliki kerja sama dengan banyak perusahaan global.
                                                    menjadi peluang bagi Anda
                                                    untuk membangun jaringan profesional, dan meningkatkan peluang untuk
                                                    mendapatkan pekerjaan di
                                                    perusahaan-perusahaan terkemuka di seluruh dunia.
                                                </p>
                                            </li>


                                            <li class="pb-4">
                                                <h1 class="text-heading-4 font-semibold">Sukses Terbukti</h1>
                                                <p>Banyak lulusan Sea Education telah mencapai kesuksesan dalam karier
                                                    mereka. Ini adalah bukti
                                                    nyata bahwa program ini efektif dalam membantu peserta mencapai
                                                    tujuan mereka dan meraih
                                                    pekerjaan impian.
                                                </p>
                                            </li>

                                        </ol>

                                    </div>

                                    <img src="/assets/images/classroom.jpg" alt="Example Image"
                                        class="hidden mt-20 rounded-lg shadow-md max-w-300 md:grid w-96 h-80" />

                                </div>

                            </div>

                        </section>

                    </main>

                </div>

            </div>

        </div>

    </div>

@endsection
