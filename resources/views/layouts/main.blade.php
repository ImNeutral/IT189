<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    @include('layouts.head')
    @yield('head')
</head>

<body>
<div id="wrapper">
    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top" role="navigation">
        @include('layouts.navbar-top')
    </nav>

    <main class="row main-content">
        @include('layouts.navbar-left')
        @yield('content')

    </main>
</div>

@include('layouts.foot')

@yield('foot')

</body>

</html>
