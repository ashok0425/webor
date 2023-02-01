@php
	$setting=DB::table('websites')->first();

@endphp

@section('title')
{{ $setting->title }}
@endsection
@section('descr')
{{ $setting->descr }}
@endsection
@section('keyword')
{{ $setting->title }}
@endsection
@section('title')
{{ $setting->title }}
@endsection
@section('img')
{{ asset($setting->image) }}
@endsection
@section('url')
{{Request::url()}}
@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="fb:app_id" content="457897745217012" />
    <meta property="og:url"                content="@yield('url')" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="@yield('title')" />
    <meta property="og:description"        content="@yield('descr')" />
    <meta property="og:image"              content="@yield('img')" />
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf_token" content="{{csrf_token()}}">

            <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <meta name="author" content="{{$seo->meta_author}}"> --}}
        <meta name="keyword" content="@yield('keyword')">
        <meta name="description" content="@yield('descr')">
        <link rel="shortcut icon" href="{{ asset($setting->fev) }}" />


        <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
@stack('style')


   {{-- toatser --}}
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
	{{-- datatables  --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css"  />
    <link rel="stylesheet" href="{{asset('frontend/css/global.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/modules/Nav.css')}}" />

    <style>
      .max_height{
        height: 200px!important;
        object-fit: cover;
      }
      #owl-banner{
        position: relative;
      }
      #owl-banner .owl-nav .owl-next, #owl-banner .owl-nav .owl-prev{
        position: absolute;
        top:45%;
        font-size: 50px;
        font-weight: 400;
        color: var(--color-yellow);
        left: 3%;
      }
      #owl-banner .owl-nav .owl-next{
        left: 95%;
      }
    </style>
</head>
  <body>


    <!-- navbar section -->

    @include('frontend.layout.topheader')




    {{-- main-content  --}}
    @yield('content')

    <!-- new section -->
    <!-- footer section -->
  {{-- @include('frontend.layout.footer') --}}

  {{-- jquery  --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <!-- Bootstrap JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>

  {{-- jquery ui --}}
  <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js "></script>
  
  {{-- toastr  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
{{-- datatables  --}}
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>

	{{-- datatables iniziing --}}
	<script type="text/javascript">
		$(document).ready(function () {
			var table = $('#myTable').DataTable({
				select: true,
				dom: 'Blfrtip',
				lengthMenu: [
					[10, 25, 50, -1],
					['10 row', '25 row', '50 row', 'All Rows']
				],
				dom: 'Bfrtip',
				buttons: [
					// { extend: 'copy', text: '<i class="fas fa-envelope" aria-hidden="true"> copy</i>' },
					{ extend: 'pdf', text: '<i class="fas fa-file-pdf fa-1x" aria-hidden="true"> Export a PDF</i>' },
					{ extend: 'csv', text: '<i class="fas fa-file-csv fa-1x"> Export a CSV</i>' },
					{ extend: 'excel', text: '<i class="fas fa-file-excel" aria-hidden="true"> Export a EXCEL</i>' },
					{ extend: 'colvis', text: '<i class="fas fa-bars" aria-hidden="true"> Show Column</i>' },

					'pageLength'
				],
			});
			table.buttons().container()
				.appendTo('#datatable_wrapper .col-md-6:eq(0)');
		});
	</script>
@stack('scripts')



  {{-- toastr  --}}
<script>
@if(Session::has('messege'))//toatser
  var type="{{Session::get('alert-type','info')}}"
  switch(type){
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
  $('#owl-banner').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>
</body>
</html>
