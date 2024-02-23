@extends('layouts.front')

@section('title', ' Teams')

@section('content')

    <div>
        <div class="items-center max-w-6xl px-6 py-2 pt-8 pb-8 mx-auto lg:px-0 md:px-20">
            <div class="flex items-center md:flex-row flex-col-reverse">
                <div class="flex-1 text-center mx-2 my-4 md:my-0">
                    <h1 class="font-bold font-base text-heading-4 md:text-heading-2">Our Affiliates</h1>
                    <h4 class="font-base text-heading-5 md:text-heading-3">Empowering growth through Our Affiliates network.
                    </h4>
                </div>
                <div class="flex-1 shrink-0 max-w-xl">
                    <img src="assets/images/bg-3.jpg" alt="" class="w-full">
                </div>
            </div>
        </div>

        <div class="py-8 bg-blue-10">
            <div class="items-center max-w-6xl px-6 py-2 pt-8 pb-8 mx-auto lg:px-0 md:px-20">
                <div class="flex flex-col md:flex-row">
                    <div class="flex-none shrink-0 flex justify-center max-w-sm mx-auto">
                        <img src="assets/images/partnership/speedy-global.svg" alt="" class="w-full">
                    </div>
                    <div class="flex-1 mobile-container md:ms-12">
                        <h1 class="text-heading-2 font-bold">Speedy Global</h1>
                        <p class="text-desc-company mt-4 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit debitis fugiat corporis,
                            vel minus
                            incidunt quae. Sint impedit facilis magnam exercitationem neque iste fugiat mollitia adipisci,
                            dolor,
                            doloremque ducimus atque!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-8">
            <div class="items-center max-w-6xl px-6 py-2 pt-8 pb-8 mx-auto lg:px-0 md:px-20">
                <div class="flex flex-col md:flex-row">
                    <div class="flex-1 mobile-container md:me-12">
                        <h1 class="text-heading-2 font-bold">Genting Resort</h1>
                        <p class="text-desc-company mt-4 mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit debitis fugiat corporis,
                            vel minus
                            incidunt quae. Sint impedit facilis magnam exercitationem neque iste fugiat mollitia adipisci,
                            dolor,
                            doloremque ducimus atque!
                        </p>
                    </div>
                    <div class="flex-none shrink-0 max-w-sm mx-auto flex mb-8 md:mb-0">
                        <img src="assets/images/partnership/genting-resort.png" alt="" class="w-full my-auto">
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
