@extends('frontend.layout.master')
@section('content')
<style>
    .blog h2{
        font-size: 1.5rem;
        margin-top: .5rem;
        font-family: Poppins;
    }
    .blog h3{
        font-size: 1.2rem;
        
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
@endsection