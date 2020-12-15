<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
{{--  call livewire css  --}}
@livewireStyles
</head>
<body>

{{--  call livewire component  --}}
@livewire('search')

{{--  call livewire scripts  --}}
@livewireScripts
</body>
</html>
