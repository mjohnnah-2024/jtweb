<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-gray-100">
       
          <x-header />
           <!-- ========== MAIN CONTENT ========== -->
<!-- ========== MAIN CONTENT ========== -->
<main id="content">
    <div class="overflow-hidden">
    {{ $slot }}
    </div>
</main>
<x-footer />

</body>
</html>



