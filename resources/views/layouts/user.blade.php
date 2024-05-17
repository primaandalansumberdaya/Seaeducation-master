<!DOCTYPE html>
<html lang="en">

<head>

    @include('includes.meta')

    <title>@yield('title') | Seaeducation</title>

    @stack('before-style')

    @include('includes.dashboard.style')

    @stack('after-style')

</head>

<body class="antialiased">
    <div class="relative">


        @include('includes.dashboard.sidebar')

        @include('sweetalert::alert')

        @yield('content')


        @stack('before-script')

        @include('includes.dashboard.script')

        @stack('after-script')

    </div>
</body>

</html>
