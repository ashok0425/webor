<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>


 
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
@stack('style')
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

    </style>
    <style>
      input[type=number]::-webkit-inner-spin-button, 
  input[type=number]::-webkit-outer-spin-button {  
  
     opacity: 1;
  
  }
  </style>
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
<script>
  $(document).ready(function() {
    $('#sort').on('change',function(){//onchange
    var value=$(this).val();

product_filter();
  });
    $( "#mySlider" ).slider({//price range slider
    range: true,
    min: 0,
    max: 25000,
    values: [ 0, 25000 ],
    step:100,
    stop: function( event, ui ) {
$( "#price" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
$( "#hidden_max" ).val(ui.values[ 1 ]);
$( "#hidden_min" ).val(ui.values[ 0 ]);
product_filter();

},

});

$( "#price" ).val( "$ " + $( "#mySlider" ).slider( "values", 0 ) +
         " - $" + $( "#mySlider" ).slider( "values", 1 ) );
    //function filter data
    function product_filter(){
let order=$('#sort').val();
let category=get_category('category');
let space=get_category('space');
let subcategory=get_category('subcategory');
let min=$( "#hidden_min" ).val();
let max=$( "#hidden_max" ).val();
let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({//aax call
      url:'filterproduct/ajax/',
      type:"GET",
    data:{min:min,max:max,category:category,space:space,subcategory:subcategory,order:order,_token:_token},
beforeSend:function(){

    $(".loading").css("display",'block');

},
dataType:"json",
success:function(data){
$('.product_grid').empty();

console.log(data);
  $('.product_grid').append(data);
},
complete:function(){
            $(".loading").css('display','none');
}
})
    }
//getting category/brand
function get_category(class_name){
  let product=[];
  $('.'+class_name+':checked').each(function(){
product.push($(this).val());
  })
  return product;
}

  $('.selector').on("click",function(){
    // alert($(this).val())
    product_filter();
  })
})
</script>


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
{{-- date picker  --}}
<script language="javascript">
    $(document).ready(function () {
        $("#txtdate").datepicker({
            minDate: 0
        });
    });
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
  //     $('#zoom_01').elevateZoom({
  //       zoomType				: "lens",
  // lensShape : "round",
  // lensSize    : 200

  //    }); 

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
