<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>


 {{-- google font  --}}
 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">
   <!-- Bootstrap CSS -->
   <link
   href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
   rel="stylesheet"/>
        {{-- toastr  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
    type="text/css" />
    {{-- jquery ui  --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- fontawesome cdn -->
    <link   rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <!-- swiper css -->
    <link    rel="stylesheet"   href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <!-- swiper custom css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper.css')}}" />
    
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/index.css')}}" />

    <style>
     .loading{
       background: rgba(0,0,0,.4);
       width: 100%;
       height: 100vh;
       position: fixed;
       top: 0;
       left: 0;
       z-index: 999999;
       display: none;
     }
.loader {
  border: 16px solid #f3f3f3; /* Light grey */
  border-top: 16px solid rgb(255, 13, 134); /* Blue */
  border-radius: 50%;
  width: 70px;
  height: 70px;
  animation: spin 2s linear infinite;
position: fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);

z-index: 9999;

}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

  
  }
  </style>
    @stack('style')

  </head>
  <body>
    <div class="loading">

      <div class="loader"></div>
    </div>

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
  <!-- swiper js cdn -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- custom swiper js -->
  {{-- jquery ui --}}
  <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js "></script>
  {{-- elvator zoom jquery --}}
	<script src='{{ asset('frontend/jquery.elevatezoom.js')}}'></script>
 {{-- elvator zoom --}}
 <script src="{{ asset('frontend/jquery.elevatezoom.js')}}"></script>
  {{-- toastr  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script src="{{ asset('frontend/js/swiper.js')}}"></script>
  <script src="{{ asset('frontend/js/index.js')}}"></script>

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
