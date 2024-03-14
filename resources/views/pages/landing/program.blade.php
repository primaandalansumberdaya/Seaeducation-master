@extends('layouts.front')

@section('title', ' Programs')

@section('content')

    <div>
        <section id="about-us" class="relative flex items-center justify-between pt-8 pb-8 bg-white">
            <div class="items-center max-w-6xl px-6 py-2 mx-auto lg:px-0 md:px-20">
                <div class="flex flex-wrap justify-between mx-auto lg:-mx-4">
                    <!-- Card -->
                    <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                        <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                            <a href="detail.html">
                                <div class=" overflow-hidden rounded-md">
                                    <img alt="Placeholder" class="block w-full h-auto" src="/assets/images/program1.jpg" />
                                </div>
                            </a>

                            <div class="px-4 mb-4 leading-tight">
                                <div class="flex">
                                    <span
                                        class="block p-2 my-2 font-semibold text-green-100 text-heading-6 bg-green-10 rounded-lg">
                                        Pendaftaran dibuka
                                    </span>
                                </div>
                                <h1 class="mb-2 text-heading-3">
                                    <a class="font-bold text-primary-darkblue lg:text-heading-3 text-heading-4"
                                        href="#">
                                        Regular Program
                                    </a>
                                </h1>

                                <div class="flex flex-row mb-2 items-center">
                                    <p class="flex mr-6 text-gray-50 lg:text-heading-5 text-heading-6">
                                        <svg fill="none" height="14" viewBox="0 0 12 14" width="12"
                                            xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                            <path
                                                d="M6 0C9.31371 0 12 2.68629 12 6C12 8.86724 10.065 11.5058 6.26844 13.9218C6.10465 14.0261 5.89535 14.0261 5.73156 13.9218C1.93495 11.5058 0 8.86724 0 6C0 2.68629 2.68629 0 6 0ZM6 4C4.89543 4 4 4.89543 4 6C4 7.10457 4.89543 8 6 8C7.10457 8 8 7.10457 8 6C8 4.89543 7.10457 4 6 4Z"
                                                fill="#9E9E9E"></path>
                                        </svg>
                                        Online
                                    </p>
                                    <p class="flex text-gray-50 lg:text-heading-5 text-heading-6">
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
                                        class="items-center p-2 font-semibold text-secondary-orange text-heading-6 bg-yellow-10 rounded-lg">
                                        Deadline Pendaftaran : 4 Desember 2022
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                        <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                            <a href="detail.html">
                                <div class=" overflow-hidden rounded-md">
                                    <img alt="Placeholder" class="block w-full h-auto" src="/assets/images/program1.jpg" />
                                </div>
                            </a>

                            <div class="px-4 mb-4 leading-tight">
                                <div class="flex">
                                    <span
                                        class="block p-2 my-2 font-semibold text-green-100 text-heading-6 bg-green-10 rounded-lg">
                                        Pendaftaran dibuka
                                    </span>
                                </div>
                                <h1 class="mb-2 text-heading-3">
                                    <a class="font-bold text-primary-darkblue lg:text-heading-3 text-heading-4"
                                        href="#">
                                        Regular Program
                                    </a>
                                </h1>

                                <div class="flex flex-row mb-2 items-center">
                                    <p class="flex mr-6 text-gray-50 lg:text-heading-5 text-heading-6">
                                        <svg fill="none" height="14" viewBox="0 0 12 14" width="12"
                                            xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                            <path
                                                d="M6 0C9.31371 0 12 2.68629 12 6C12 8.86724 10.065 11.5058 6.26844 13.9218C6.10465 14.0261 5.89535 14.0261 5.73156 13.9218C1.93495 11.5058 0 8.86724 0 6C0 2.68629 2.68629 0 6 0ZM6 4C4.89543 4 4 4.89543 4 6C4 7.10457 4.89543 8 6 8C7.10457 8 8 7.10457 8 6C8 4.89543 7.10457 4 6 4Z"
                                                fill="#9E9E9E"></path>
                                        </svg>
                                        Online
                                    </p>
                                    <p class="flex text-gray-50 lg:text-heading-5 text-heading-6">
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
                                        class="items-center p-2 font-semibold text-secondary-orange text-heading-6 bg-yellow-10 rounded-lg">
                                        Deadline Pendaftaran : 4 Desember 2022
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                        <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                            <a href="detail.html">
                                <div class=" overflow-hidden rounded-md">
                                    <img alt="Placeholder" class="block w-full h-auto" src="/assets/images/program1.jpg" />
                                </div>
                            </a>

                            <div class="px-4 mb-4 leading-tight">
                                <div class="flex">
                                    <span
                                        class="block p-2 my-2 font-semibold text-green-100 text-heading-6 bg-green-10 rounded-lg">
                                        Pendaftaran dibuka
                                    </span>
                                </div>
                                <h1 class="mb-2 text-heading-3">
                                    <a class="font-bold text-primary-darkblue lg:text-heading-3 text-heading-4"
                                        href="#">
                                        Regular Program
                                    </a>
                                </h1>

                                <div class="flex flex-row mb-2 items-center">
                                    <p class="flex mr-6 text-gray-50 lg:text-heading-5 text-heading-6">
                                        <svg fill="none" height="14" viewBox="0 0 12 14" width="12"
                                            xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                            <path
                                                d="M6 0C9.31371 0 12 2.68629 12 6C12 8.86724 10.065 11.5058 6.26844 13.9218C6.10465 14.0261 5.89535 14.0261 5.73156 13.9218C1.93495 11.5058 0 8.86724 0 6C0 2.68629 2.68629 0 6 0ZM6 4C4.89543 4 4 4.89543 4 6C4 7.10457 4.89543 8 6 8C7.10457 8 8 7.10457 8 6C8 4.89543 7.10457 4 6 4Z"
                                                fill="#9E9E9E"></path>
                                        </svg>
                                        Online
                                    </p>
                                    <p class="flex text-gray-50 lg:text-heading-5 text-heading-6">
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
                                        class="items-center p-2 font-semibold text-secondary-orange text-heading-6 bg-yellow-10 rounded-lg">
                                        Deadline Pendaftaran : 4 Desember 2022
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                        <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                            <a href="detail.html">
                                <div class=" overflow-hidden rounded-md">
                                    <img alt="Placeholder" class="block w-full h-auto"
                                        src="/assets/images/program1.jpg" />
                                </div>
                            </a>

                            <div class="px-4 mb-4 leading-tight">
                                <div class="flex">
                                    <span
                                        class="block p-2 my-2 font-semibold text-green-100 text-heading-6 bg-green-10 rounded-lg">
                                        Pendaftaran dibuka
                                    </span>
                                </div>
                                <h1 class="mb-2 text-heading-3">
                                    <a class="font-bold text-primary-darkblue lg:text-heading-3 text-heading-4"
                                        href="#">
                                        Regular Program
                                    </a>
                                </h1>

                                <div class="flex flex-row mb-2 items-center">
                                    <p class="flex mr-6 text-gray-50 lg:text-heading-5 text-heading-6">
                                        <svg fill="none" height="14" viewBox="0 0 12 14" width="12"
                                            xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                            <path
                                                d="M6 0C9.31371 0 12 2.68629 12 6C12 8.86724 10.065 11.5058 6.26844 13.9218C6.10465 14.0261 5.89535 14.0261 5.73156 13.9218C1.93495 11.5058 0 8.86724 0 6C0 2.68629 2.68629 0 6 0ZM6 4C4.89543 4 4 4.89543 4 6C4 7.10457 4.89543 8 6 8C7.10457 8 8 7.10457 8 6C8 4.89543 7.10457 4 6 4Z"
                                                fill="#9E9E9E"></path>
                                        </svg>
                                        Online
                                    </p>
                                    <p class="flex text-gray-50 lg:text-heading-5 text-heading-6">
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
                                        class="items-center p-2 font-semibold text-secondary-orange text-heading-6 bg-yellow-10 rounded-lg">
                                        Deadline Pendaftaran : 4 Desember 2022
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                        <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                            <a href="detail.html">
                                <div class=" overflow-hidden rounded-md">
                                    <img alt="Placeholder" class="block w-full h-auto"
                                        src="/assets/images/program1.jpg" />
                                </div>
                            </a>

                            <div class="px-4 mb-4 leading-tight">
                                <div class="flex">
                                    <span
                                        class="block p-2 my-2 font-semibold text-green-100 text-heading-6 bg-green-10 rounded-lg">
                                        Pendaftaran dibuka
                                    </span>
                                </div>
                                <h1 class="mb-2 text-heading-3">
                                    <a class="font-bold text-primary-darkblue lg:text-heading-3 text-heading-4"
                                        href="#">
                                        Regular Program
                                    </a>
                                </h1>

                                <div class="flex flex-row mb-2 items-center">
                                    <p class="flex mr-6 text-gray-50 lg:text-heading-5 text-heading-6">
                                        <svg fill="none" height="14" viewBox="0 0 12 14" width="12"
                                            xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                            <path
                                                d="M6 0C9.31371 0 12 2.68629 12 6C12 8.86724 10.065 11.5058 6.26844 13.9218C6.10465 14.0261 5.89535 14.0261 5.73156 13.9218C1.93495 11.5058 0 8.86724 0 6C0 2.68629 2.68629 0 6 0ZM6 4C4.89543 4 4 4.89543 4 6C4 7.10457 4.89543 8 6 8C7.10457 8 8 7.10457 8 6C8 4.89543 7.10457 4 6 4Z"
                                                fill="#9E9E9E"></path>
                                        </svg>
                                        Online
                                    </p>
                                    <p class="flex text-gray-50 lg:text-heading-5 text-heading-6">
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
                                        class="items-center p-2 font-semibold text-secondary-orange text-heading-6 bg-yellow-10 rounded-lg">
                                        Deadline Pendaftaran : 4 Desember 2022
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                        <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                            <a href="detail.html">
                                <div class=" overflow-hidden rounded-md">
                                    <img alt="Placeholder" class="block w-full h-auto"
                                        src="/assets/images/program1.jpg" />
                                </div>
                            </a>

                            <div class="px-4 mb-4 leading-tight">
                                <div class="flex">
                                    <span
                                        class="block p-2 my-2 font-semibold text-green-100 text-heading-6 bg-green-10 rounded-lg">
                                        Pendaftaran dibuka
                                    </span>
                                </div>
                                <h1 class="mb-2 text-heading-3">
                                    <a class="font-bold text-primary-darkblue lg:text-heading-3 text-heading-4"
                                        href="#">
                                        Regular Program
                                    </a>
                                </h1>

                                <div class="flex flex-row mb-2 items-center">
                                    <p class="flex mr-6 text-gray-50 lg:text-heading-5 text-heading-6">
                                        <svg fill="none" height="14" viewBox="0 0 12 14" width="12"
                                            xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                            <path
                                                d="M6 0C9.31371 0 12 2.68629 12 6C12 8.86724 10.065 11.5058 6.26844 13.9218C6.10465 14.0261 5.89535 14.0261 5.73156 13.9218C1.93495 11.5058 0 8.86724 0 6C0 2.68629 2.68629 0 6 0ZM6 4C4.89543 4 4 4.89543 4 6C4 7.10457 4.89543 8 6 8C7.10457 8 8 7.10457 8 6C8 4.89543 7.10457 4 6 4Z"
                                                fill="#9E9E9E"></path>
                                        </svg>
                                        Online
                                    </p>
                                    <p class="flex text-gray-50 lg:text-heading-5 text-heading-6">
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
                                        class="items-center p-2 font-semibold text-secondary-orange text-heading-6 bg-yellow-10 rounded-lg">
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

    </div>

@endsection
