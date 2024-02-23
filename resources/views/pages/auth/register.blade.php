@extends('layouts.auth')

@section('title', ' Register')

@section('content')

    <div class="items-center w-full mx-auto lg:flex lg:max-w-6xl h-30 lg:px-0">

        <div class=" lg:flex lg:flex-col lg:flex-1">

            <div class="flex justify-center">
                <div class="w-full grid-cols-1 gap-4 p-10 lg:grid lg:grid-cols-2">
                    <!-- Konten layar pertama -->
                    <div class="items-center justify-center hidden lg:block">
                        <img src="/assets/images/banner2.png" alt="Logo Sea Education" class="p-16" />
                    </div>

                    <!-- Konten layar kedua -->
                    <div class="w-full p-2 mx-4 rounded-lg lg:shadow-xl lg:border lg:ml-24 lg:p-10 lg:max-w-md">

                        <div class="flex justify-center">
                            <img src="/assets/svgs/sea-education.svg" alt="sea-logo" sizes="" srcset=""
                                class="w-40">
                        </div>

                        <h2 class="p-4 text-2xl font-semibold text-center">
                            Create your account
                        </h2>

                        <form>

                            <div class="flex gap-2 mb-4">
                                <div class="w-1/2">
                                    <label for="firstname"
                                        class="pt-4 mb-1 text-xs font-semibold tracking-wide text-gray-800 sm:text-sm">Firstname</label>
                                    <input type="text" id="firstname"
                                        class="w-full px-4 py-3 mt-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500"
                                        placeholder="First Name" />
                                </div>

                                <div class="w-1/2">
                                    <label for="lastname"
                                        class="pt-4 mb-1 text-xs font-semibold tracking-wide text-gray-800 sm:text-sm">Lastname</label>
                                    <input type="text" id="lastname"
                                        class="w-full px-4 py-3 mt-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500"
                                        placeholder="Last Name" />
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="email"
                                    class="flex pt-4 mb-1 text-xs font-semibold tracking-wide text-gray-800 sm:text-sm">Email</label>
                                <input type="email" id="email"
                                    class="w-full px-4 py-3 mt-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500"
                                    placeholder="example@gmail.com" />
                            </div>

                            <div class="mb-4">
                                <label for="password"
                                    class="flex pt-4 mb-1 text-xs font-semibold tracking-wide text-gray-800 sm:text-sm">Password</label>

                                <input type="password" id="password"
                                    class="w-full px-4 py-3 mt-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-500"
                                    placeholder="Enter your password" pattern="^(?=.*[A-Z])(?=.*\d)[A-Za-z\d\W]{8,}$"
                                    title="Password must be at least 8 characters long, with at least 1 uppercase letter and 1 special character."
                                    required />

                            </div>

                            <button type="submit" class="w-full py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">
                                Register
                            </button>

                            <div class="relative flex justify-center h-px py-1 my-9">
                                <div class="absolute w-full border-b border-black-200"></div>
                                <div class="absolute z-10 px-3 py-2 text-sm bg-white text-black-500 -top-4">
                                    <span>atau <span class="md:hidden"> daftar </span> melalui</span>
                                </div>
                            </div>

                            <button
                                class="flex items-center justify-center w-full h-10 px-6 mt-4 mb-4 bg-white border rounded-lg md:h-12 text-black-900 hover:bg-slate-100">
                                <!-- Google Icon -->
                                <svg fill="none" height="20" viewBox="0 0 20 20" width="20"
                                    xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M20.305 10.2312C20.305 9.55141 20.2499 8.86797 20.1323 8.19922H10.7V12.05H16.1014C15.8773 13.292 15.1571 14.3907 14.1025 15.0888V17.5874H17.325C19.2173 15.8457 20.305 13.2736 20.305 10.2312Z"
                                            fill="#4285F4"></path>
                                        <path
                                            d="M10.6999 19.9998C13.397 19.9998 15.6714 19.1143 17.3286 17.5857L14.1061 15.0871C13.2096 15.697 12.0521 16.0424 10.7036 16.0424C8.09474 16.0424 5.88272 14.2824 5.08904 11.916H1.76367V14.4918C3.46127 17.8686 6.91892 19.9998 10.6999 19.9998Z"
                                            fill="#1A73E8"></path>
                                        <path
                                            d="M5.0854 11.9163C4.66651 10.6743 4.66651 9.32947 5.0854 8.0875V5.51172H1.7637C0.345367 8.33737 0.345367 11.6664 1.7637 14.4921L5.0854 11.9163Z"
                                            fill="#FBBC04"></path>
                                        <path
                                            d="M10.6999 3.95805C12.1256 3.936 13.5035 4.47247 14.536 5.45722L17.3911 2.60218C15.5833 0.904587 13.1838 -0.0287217 10.6999 0.000673888C6.91892 0.000673888 3.46127 2.13185 1.76367 5.51234L5.08537 8.08813C5.87538 5.71811 8.09107 3.95805 10.6999 3.95805Z"
                                            fill="#EA4335"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect fill="white" height="20" transform="translate(0.5)" width="20">
                                            </rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                                Google
                            </button>

                            <p class="mt-6 text-center text-black-500">
                                Dengan mendaftar, Anda menyetujui Ketentuan
                                <a class="font-medium text-blue-600" href="/help/term-condition">
                                    Penggunaan
                                </a>
                                dan
                                <a class="font-medium text-blue-600" href="/help/privacy-policy">
                                    Kebijakan Privasi
                                </a>
                                kami.
                            </p>

                        </form>

                        <p class="text-center text-black-500 mt-7">
                            Sudah punya akun?
                            <a class="font-medium text-amber-500" href="/login">Masuk</a>
                        </p>

                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
