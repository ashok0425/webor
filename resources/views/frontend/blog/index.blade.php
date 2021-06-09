{{-- @extends('frontend.layout.master')
@section('content')
<style>
    .blog h2{
        font-size: 1.5rem;
        margin-top: .5rem;
        font-family: Poppins;
    }
    .blog h3{
        font-size: 1.2rem;
        margin-bottom: .5rem;
        
    }
    .blog_wrapper{
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.25);
         border-radius: 10px;
         padding: .5rem 2rem;
    }
    .blog_thumbnail img{
        max-width: 200px;
    }
</style>
<div class="blog my-5">
<div class="container">
@php
    $blog=DB::table('blogs')->orderBy('id','desc')->first();
@endphp
<div class="blog_category my-4">
    <h2>Lastest Blog</h2>
</div>
    <div class="row blog_wrapper">
            
        <div class="col-md-4">
           
                <div class="blog_thumbnail">
                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
                
                </div>   
       
        </div>

        <div class="col-md-8">
            <div class="blog_text py-5">
                <h3>{{ $blog->title }}</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto atque, architecto quisquam voluptatem autem voluptas quos maxime explicabo ut consectetur excepturi animi qui, perferendis vero et repellat assumenda, adipisci repudiandae tempora! Nostrum praesentium adipisci exercitationem eos distinctio, velit ducimus corporis repudiandae porro, consectetur, at amet eaque veritatis ipsum doloremque! Voluptatem.</p>

                <p></p>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection --}}




@extends('frontend.layout.master')

<style>
  
.blog-posts{
  width: min(1200px, 100%);
  padding: 20px;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  cursor: pointer;
}

.post{
  width: calc(33% - 10px);
  overflow: hidden;
}

.post-img{
  width: 100%;
  border-radius: 6px;
  transition: .3s linear;
}

.post-content{
  background-color: #ffffffdd;
  margin: 0 20px;
  padding: 30px;
  border-radius: 6px;
  transform: translateY(-60px);
  transition: .3s linear;
  box-shadow: 0px 2px 5px gray;
}

.post-content h3{
  font-size: 16px;
  margin-bottom: 10px;
}

.date{
  font-size: 15px;
  font-style: italic;
  color: #e77f67;
}
.blog_category h2{
    font-size: 1.2rem;
}
.post:hover .post-img{
  transform: translateY(20px);
}

.post:hover .post-content{
  transform: translateY(-80px);
}

@media screen and (max-width: 1200px){
  .blog-posts{
    justify-content: center;
  }
  .post{
    width: min(600px, 100%);
  }
}
</style>
@section('header')
<section class="section-pagetop bg-gray ">
    <div class="container">
        <h2 class="title-page">Blog</h2>
    </div> <!-- container //  -->
    </section>
@endsection
@section('content')
<div class="container my-5">
    @php
    $category=DB::table('blogcategories')->where('status',1)->get();
@endphp
@foreach ($category as $item)
    

@php
    
    $blog=DB::table('blogs')->where('category_id',$item->id)->orderBy('id','desc')->paginate(3);

@endphp
@if (count($blog)>0)
    
<div class="blog_category my-4">
    <h2>{{ $item->category}}</h2>
</div>
<div class="blog-posts">
  
    @foreach ($blog as $items)
        
    <div class="post">
        <a href="{{ route('blog.single',['id'=>$items->id]) }}">
      <img src="{{ asset($items->image) }}" alt="{{ $items->title }}" class="post-img">
      <div class="post-content">
        <h3>{{ $items->title }}</h3>
        <span class="date">{{ carbon\carbon::parse($items->created_at)->diffForHumans() }}</span>
      </div>
    </a>
    </div>
    

    @endforeach
</div>

   <div class="row">
       <div class="col-md-4 offset-md-4">
        <center>
            {{ $blog->links() }}
        </center>
       </div>
   </div>
@endif

    @endforeach

  
    
  </div>

@endsection



