<!DOCTYPE html>
<html class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SISGEV</title>
    {{--<link type="stylesheet" href="{{asset('css/app.css')}}">--}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="{{ mix('js/app.js') }}" defer></script> 
</head>
<body class="h-full">
    <div class="min-h-full">
      <x-layouts.sitelayout.navbar/>

      <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <h1 class="text-3xl font-bold text-gray-900"> SISGEV {{$titulo}}</h1>
        </div>
      </header>
      <main>
        <!-- component -->
        {{--<x-layouts.sitelayout.main/>--}}
        {{$main}}
      </main>
    </div>
    {{--<script type="text/javascript" src="{{asset('js/app.js')}}"></script>--}}
    <x-layouts.sitelayout.footer/>
    
</body>
</html>

