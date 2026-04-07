<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nicat Qasimov - Portfolio</title>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('assets/index.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body>
    
    <div class="phone">
        <div class="screen" id="main">
            @include('top')
            @livewire('name')
            @livewire('counter')
            @include('bottom')
        </div>
    </div>

    @livewireScripts
    @yield('scirpt')
</body>
</html>
