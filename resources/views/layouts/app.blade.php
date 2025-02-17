<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RJ 18 Technical')</title>
    <script src="https://cdn.tailwindcss.com"></script>
<!-- Add FontAwesome script -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        nav ul li { display: inline; margin-right: 20px; }
        nav ul li a { text-decoration: none; color: black; }
        nav ul li a:hover { text-decoration: underline; }
    </style>
</head>
<body class="bg-white-100">

    @include('includes.header')

    {{-- <main class="container mx-auto py-8 px-4"> --}}
        @yield('content')
    {{-- </main> --}}

    @include('includes.footer')

</body>
</html>
