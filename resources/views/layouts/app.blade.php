<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
    @include('layouts._nav')
    @include('layouts._validation')
    <div class="container-fluid" style="min-height: 80vh;">
        @yield('content')
    </div>
    @include('layouts._footer')
    @include('cookie-consent::index')
    <script src="{{mix('js/app.js')}}"></script>
</body>

@include('auth._modals')
@include('announcements._contact_modal')
@include('layouts.nav._modalLang')

</html>
