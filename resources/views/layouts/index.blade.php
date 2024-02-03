<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
    @include('includes.Script')
</body>

</html>