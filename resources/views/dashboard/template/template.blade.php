<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('template/css/styles.css')}}">
        <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
        <link rel="stylesheet" href="style.css">
        <!-- Boxicons CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="{{asset('template/js/scripts.js')}}"></script>
    <title>Document</title>
</head>
<body>

    @include('dashboard.partials.nav')
    <section class="home-section">
        <div class="text">
                @yield('back')
        </div>
    </section>


</body>
</html>