<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
    <title>SpacePlay</title>
</head>
<body class="h-screen flex flex-col bg-slate-900">    
    @include('errors.main')
    @include('messages.info')
    
    @yield('content')
    @yield('scripts')
</body>
</html>