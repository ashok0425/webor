@php
    $setting = DB::table('websites')->first();
    $categories = DB::table('categories')
        ->orderBy('id', 'desc')
        ->where('status', 1)
        ->get();
    
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $setting->title }}</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/app.css') }}">

    <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
    {{-- toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @stack('style')
    <style>
        .navbar_scroll {
            background: white;
            color: #000;
            box-shadow: 0 0 5px gray;
        }
    </style>
</head>

<body>

    @include('frontend.layout.header')

    @yield('content')


    @include('frontend.layout.footer')

    <script
        src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
                                                                                                                                                                            ">
    </script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    {{-- toastr  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{-- toastr  --}}
    <script src="{{ asset('frontend/js/app.js') }}"></script>
    <script>
        @if (Session::has('messege')) //toatser
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('messege') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('messege') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('messege') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('messege') }}");
                    break;
            }
        @endif
    </script>

    <script>
        $(document).ready(function() {
            let url = "{{ request()->is('/') }}"
            if (!url) {
                $('.navbar_menu').addClass('navbar_scroll')
            }

            $(window).on('scroll', function() {
                console.log('first')
                if ($(window).scrollTop() > 100) {
                    $('.navbar_menu').addClass('navbar_scroll')

                } else {
                    $('.navbar_menu').removeClass('navbar_scroll')

                }
            })

            $('.ham').click(function() {

                $('.mobile_menu').toggleClass('hidden')
            })
        })
    </script>
</body>

</html>
