<!DOCTYPE html>
<html lang="en">

<head>

    @include('includes.landing.meta')

    <title>@yield('title') | Seaeducation</title>

    @stack('before-style')

    @include('includes.landing.style')

    @stack('after-style')

</head>

<body class="antialiased">
    <div class="relative">

        @include('includes.landing.header')

        @include('sweetalert::alert')

        @yield('content')


        @stack('before-script')

        @include('includes.landing.script')

        @stack('after-script')


    </div>
</body>

</html>
