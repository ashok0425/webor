@extends('frontend.layout.master')
@section('content')
    <section class="pt-28">
        <div class='space-y-32'>
            <section class='my-container'>

                {{-- <div class='h-[25rem] bg-slate-400 absolute -top-8 right-20 bottom-0 w-2'></div> --}}
                <div class='md:flex gap-16'>
                    <div class='pt-20 pb-8 space-y-4 basis-3/5'>
                        <h1 class='sec-h1'>Best Place for your electronic Needs</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quibusdam qui dolor expedita,
                            repudiandae nulla odit, sequi illo adipisci maxime hic eum iusto cum mollitia?</p>
                    </div>
                    <div class='w-full'>
                        <div class='relative w-full h-full'>
                            <img src='https://images.unsplash.com/photo-1441095179793-e2c059a90f56?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
                                alt='' fill class='object-cover rounded-lg shadow-lg' />
                        </div>
                    </div>
                </div>
            </section>

            <section class=''>
                <div class=' '>
                    <img src='https://images.unsplash.com/photo-1441095179793-e2c059a90f56?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
                        alt='' fill class='object-cover w-full max-h-[20rem]' />
                </div>
                <div class='my-container mt-16'>
                    <div class='grid grid-cols-1 md:grid-cols-2 space-y-8 md:space-y-0'>
                        <h1 class='sec-h1'>Our Story</h1>
                        <p class=''>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati atque quo
                            ullam corporis. Quisquam, voluptas soluta aliquam dolores rem ipsa quam iusto minima
                            voluptatibus vel delectus dignissimos asperiores non eius corporis vitae aut unde amet
                            consectetur ipsam sit a! Amet assumenda debitis enim neque quibusdam eos iure, velit esse harum
                            dolore ducimus nobis corporis quo consequuntur minima obcaecati eaque ad tempore ex voluptatum
                            eius voluptas?</p>
                    </div>
                </div>
            </section>

            <section class=''>
                @include('frontend.template.gallery')
            </section>
        </div>
    </section>
@endsection
