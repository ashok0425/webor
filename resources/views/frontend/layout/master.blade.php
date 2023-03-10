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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    @stack('style')
    <style>
        .navbar_scroll {
            background: white;
            color: #000;
            box-shadow: 0 0 5px gray;
        }

        .splide__arrow {
            background: red;
            border-radius: 5px !important;
            color: #fff !important;
        }

        .splide__arrow svg {
            fill: #fff !important;
        }

        :not(.fas) {
            font-family: 'Raleway', sans-serif !important;
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
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

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
