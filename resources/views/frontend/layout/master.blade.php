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
        <link rel="icon" href="{{asset("fev.png")}}" type="image/icon type">

        <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
@stack('style')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

   {{-- toatser --}}
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
   	{{-- datatables  --}}
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}" />
    <title>Home page</title>
    <style>
      input:focus{
        box-shadow: none!important;
        border-radius: 0!important;
      }
      input{
        box-shadow: none!important;
        border-radius: 0!important;
      }
    </style>
</head>
  <body>
   

    <!-- navbar section -->
 
    @include('frontend.layout.topheader')

    <!-- mini navbar -->
  @include('frontend.layout.header')
   


    {{-- main-content  --}}
    @yield('content')

    <!-- new section -->
    <!-- footer section -->
  @include('frontend.layout.footer')
  
  {{-- jquery  --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <!-- Bootstrap JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>

  {{-- jquery ui --}}
  <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js "></script>
  {{-- elvator zoom jquery --}}
	<script src='{{ asset('frontend/jquery.elevatezoom.js')}}'></script>
 {{-- elvator zoom --}}
 <script src="{{ asset('frontend/jquery.elevatezoom.js')}}"></script>
  {{-- toastr  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
{{-- datatables  --}}
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

{{-- datatables iniziing --}}
<script >
  $(document).ready( function () {
    $(document).ready(function() {
  $('#myTable').DataTable( {
      dom: 'Bfrtip',
      buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
      ]
  } );
} );
} );

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
{{-- load price using ajax according to variation --}}
<script>
$('.storage').click(function(){
  let val=$(this).siblings('.variation').val();
  $.ajax({
        url:'{{ url('loadprice') }}/'+val,
        type:'GET',
        DataType:'Json',
        beforeSend:function(){
          $('.loading').css('display','block')
        },
        success:function(data){
          $('.Vprice').html(data);
          
        },
        complete:function(){
          $('.loading').css('display','none')
        }
  })
})
</script>


{{-- load image using ajax according to color --}}
<script>
  $('.photo').click(function(){
    
    let val=$(this).siblings('.img').val();
    $.ajax({
          url:'{{ url('loadimage') }}/'+val,
          type:'GET',
          DataType:'Json',
          beforeSend:function(){
            $('.loading').css('display','block')
          },
          success:function(data){
            console.log(data);
            $('.main_image').attr('src',data);
            
          },
          complete:function(){
            $('.loading').css('display','none')
          }
    })
  })
  </script>
    
    {{-- elvator zoom  --}}
    <script>
 

     //initiate the plugin and pass the id of the div containing gallery images
$("#zoom_01").elevateZoom({
  zoomType				: "lens",
   lensShape : "round",
  lensSize    : 200,
  gallery:'gal1', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 

//pass the images to Fancybox
$("#zoom_01").bind("click", function(e) {  
  var ez =   $('#zoom_01').data('elevateZoom');	
	$.fancybox(ez.getGalleryList());
  return false;
});
  </script>


{{-- rewvie edit  --}}
<script>

                 
	$('.editreview').on('click',function(e){
    var id=$(this).data('id');
  $.ajax({
    url:'{{url('review/edit')}}/'+id,
    type:'GET',
    dataType:'json',
    success:function(data){
      $('#text').html(data['feedback']);
      $('#vid').val(data['id']);

    }
  })
  })
            </script>

            {{-- custom input fielsd file  --}}
            <script>
              // Add the following code if you want the name of the file appear on select
              $('#imageInput').on('change', function() {
	$input = $(this);
	if($input.val().length > 0) {
		fileReader = new FileReader();
		fileReader.onload = function (data) {
		$('.image-preview').attr('src', data.target.result);
		}
		fileReader.readAsDataURL($input.prop('files')[0]);
		$('.image-button').css('display', 'none');
		$('.image-preview').css('display', 'block');
		$('.change-image').css('display', 'block');
	}
});
						
$('.change-image').on('click', function() {
	$control = $(this);			
	$('#imageInput').val('');	
	$preview = $('.image-preview');
	$preview.attr('src', '');
	$preview.css('display', 'none');
	$control.css('display', 'none');
	$('.image-button').css('display', 'block');
});




</script>

</body>
</html>
