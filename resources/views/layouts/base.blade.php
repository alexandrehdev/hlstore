<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('meta-data')
    @vite(['resources/css/app.css','resources/js/main.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.quilljs.com/1.1.6/quill.snow.css" rel="stylesheet">
    <title>@yield('title')</title>
    @livewireStyles
</head>
<body class="h-full w-full">    
    
    @yield('content')

    @include('partials.bell-modal')

    @include('partials.search-modal')
    
    @yield('scripts')

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="{{ asset('js/jquery.inputmask.js') }}"></script>
    <script src="https://cdn.quilljs.com/1.1.6/quill.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

    <script>
        $(".money").inputmask( 'currency',{ "autoUnmask": true,
            radixPoint:",",
            groupSeparator: ".",
            allowMinus: false,
            prefix: 'R$ ',
            digits: 2,
            digitsOptional: false,
            rightAlign: false,
            unmaskAsNumber: true
        });
    </script>

     @livewireScripts
</body>
</html>