<section class="w-full h-full transition-all duration-500 bg-white border-box linear md:px-20 px-8 py-4">
    <div class="navbar-1-1">
        <div class="flex flex-row flex-wrap items-center justify-between mx-auto px-4 space-x-0 space-y-0">

            {{-- <a href="{{ route('index') }}" class="flex items-center text-3xl font-bold"> --}}
            <a href="{{ route('index') }}"
                class="flex items-center lg:text-heading-3 text-heading-4 font-bold text-blue-100">
                SEA EDUCATION
            </a>

            <label for="menu-toggle" class="block cursor-pointer lg:hidden">
                <svg class="w-16 h-16" fill="none" stroke="#092A33" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </label>

            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="flex-wrap items-center justify-center hidden w-full text-base lg:flex lg:items-center lg:w-auto lg:ml-auto lg:mr-auto"
                id="menu">

                <nav
                    class="items-center justify-between text-base lg:space-x-12 lg:flex lg:pt-0 pt-2 lg:space-y-0 space-y-2 lg:text-heading-4 text-heading-6">
                    <a href="{{ route('index') }}"
                        class="block {{ request()->is('/') ? 'nav-link active font-bold text-primary-shineblue bg-blue-5 px-3 py-2 no-underline transition-all duration-300 rounded-lg' : 'rounded-lg px-3 py-4 nav-link text-blue-900' }}">Home</a>
                    <a href="{{ route('programs') }}"
                        class="block {{ request()->is('programs') ? 'nav-link active font-bold text-primary-shineblue bg-blue-5 px-3 py-2 no-underline transition-all duration-300 rounded-lg' : 'rounded-lg px-3 py-4 nav-link text-blue-900' }}">Program</a>
                    <a href="{{ route('about-us') }}"
                        class="{{ request()->is('about-us') ? 'nav-link active font-bold text-primary-shineblue bg-blue-5 px-3 py-2 no-underline transition-all duration-300 rounded-lg' : 'rounded-lg px-3 py-4 nav-link text-blue-900' }}">About
                        Us</a>
                    <a href="#"
                        class="block {{ request()->is('career') ? 'nav-link active font-bold text-primary-shineblue bg-blue-5 px-3 py-2 no-underline transition-all duration-300 rounded-lg' : 'rounded-lg px-3 py-4 nav-link text-blue-900' }}">Karir</a>
                    <a href="{{ route('partnership') }}"
                        class="block {{ request()->is('partnership') ? 'nav-link active font-bold text-primary-shineblue bg-blue-5 px-3 py-2 no-underline transition-all duration-300 rounded-lg' : 'rounded-lg px-3 py-4 nav-link text-blue-900' }}">Parnership</a>
                    <a href="{{ route('affiliate') }}"
                        class="block {{ request()->is('affiliate') ? 'nav-link active font-bold text-primary-shineblue bg-blue-5 px-3 py-2 no-underline transition-all duration-300 rounded-lg' : 'rounded-lg px-3 py-4 nav-link text-blue-900' }}">Affiliate</a>
                    <a href="{{ route('blog') }}"
                        class="block {{ request()->is('blog') ? 'nav-link active font-bold text-primary-shineblue bg-blue-5 px-3 py-2 no-underline transition-all duration-300 rounded-lg' : 'rounded-lg px-3 py-4 nav-link text-blue-900' }}">Blog</a>

                </nav>

            </div>

            @auth
                <hr class="block lg:hidden">
                <a href="{{ route('member.dashboard.index') }}"
                    class="block lg:hidden nav-link text-blue-100">Dashboard</a>
                <a href="{{ route('logout') }}" class="block lg:hidden nav-link text-blue-900"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout

                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                        @csrf
                    </form>


                </a>
            @endauth

            @guest
                <div class="hidden w-full lg:flex lg:items-center lg:w-auto" id="menu">
                    <button
                        class="items-center block font-medium border-0 lg:text-heading-4 text-heading-6 text-blue-100 lg:inline-block lg:py-3 py-4 lg:px-10 focus:outline-none lg:mt-0">
                        <a href="{{ route('auth/sign-in') }}">Sign In</a>
                    </button>

                    <button
                        class="items-center block font-medium border-0 lg:text-heading-4 text-heading-6 lg:text-white text-blue-100 lg:bg-primary-shineblue hover:bg-primary-blue lg:inline-block lg:py-3 py-4 rounded-md lg:px-10 focus:outline-none lg:mt-0">
                        <a href="{{ route('auth/sign-up') }}">Sign Up</a>
                    </button>
                </div>
            @endguest

            @auth
                <div @click.away="open = false" class="relative hidden lg:block" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">

                        Halo, {{ Auth::user()->name }}

                        {{-- validation photo --}}
                        @if (auth()->user()->detail_user()->first()->photo != null)
                            <img class="inline ml-3 h-12 w-12 rounded-full"
                                src="{{ url(Storage::url(auth()->user()->detail_user()->first()->photo)) }}" alt=""
                                loading="lazy" />
                        @else
                            <svg class="inline ml-3 h-12 w-12 rounded-full text-gray-300" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        @endif

                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">

                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">

                            <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                href="{{ route('member.dashboard.index') }}">
                                Dashboard
                            </a>

                            <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout

                                <form action="{{ route('logout') }}" id="logout-form" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                            </a>

                        </div>

                    </div>
                </div>
            @endauth

        </div>
    </div>
</section>
