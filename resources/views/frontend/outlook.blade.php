@php
    define('PAGE','lookbook');
@endphp
@extends('frontend.layout.master')
@section('content')
<section>
    @php
        $outlook1=DB::table('times')->where('unit',1)->orderBy('id','desc')->value('image');
        $outlook2=DB::table('times')->where('unit',2)->orderBy('id','desc')->value('image');
        $outlook3=DB::table('times')->where('unit',3)->orderBy('id','desc')->value('image');
        $outlook4=DB::table('times')->where('unit',4)->orderBy('id','desc')->value('image');
        $outlook5=DB::table('times')->where('unit',5)->orderBy('id','desc')->value('image');
        $outlook6=DB::table('times')->where('unit',6)->orderBy('id','desc')->value('image');
        $outlook7=DB::table('times')->where('unit',7)->orderBy('id','desc')->value('image');
        $outlook8=DB::table('times')->where('unit',8)->orderBy('id','desc')->limit(4)->get();
        $outlook9=DB::table('times')->where('unit',9)->orderBy('id','desc')->get();


    @endphp
    <!-- First section -->
    <div class="container py-4">
        <div class="row align-items-end">
            <div class="col-md-6 col-lg-6">
                <h2 class="custom-fw-700 custom-fs-50 custom-text-secondary mb-4">Take inspiration from our model on how you can style them the best.
                </h2>
                <img class="custom-category-img-resize" src="{{asset($outlook1)}}" alt="look book image/thumbnail" />
            </div>
            <div class="col-md-6 col-lg-6 mt-3">
                <div class="d-flex flex-column align-items-end">
                    <div style="width: 85%;">
                        <img class="custom-lookbook-resize" src="{{asset($outlook2)}}" alt="look book image/thumbnail" />
                    </div>
                    <div>
                        <h3 class="custom-fw-600 custom-text-secondary mt-5"> 1. PVC Outfit</h3>
                    <p class="custom-fw-400 custom-text-secondary custom-fs-16 m-0 mb-5 py-2">
                        Look fabulous with our PVC outfit. PVC outfit, also called vinyl clothing is shiny clothing made from plastic polyvinyl chloride. Shine on the floor with fitting PVC articles of clothing and flaunt your tantalizing beauty with these colorful items of clothing
<br>
Don’t let the societal norms hold you down and look fabulous while getting comfortable with your body. Embrace yourself with the PVC Outfit.
                    </p>
                    
                    <svg width="71" height="71" viewBox="0 0 71 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="35.5" cy="35.5" r="34.5" stroke="#0B2D1F" stroke-width="2"/>
                        <path d="M34.2929 49.7071C34.6834 50.0976 35.3166 50.0976 35.7071 49.7071L42.0711 43.3431C42.4616 42.9526 42.4616 42.3195 42.0711 41.9289C41.6805 41.5384 41.0474 41.5384 40.6569 41.9289L35 47.5858L29.3431 41.9289C28.9526 41.5384 28.3195 41.5384 27.9289 41.9289C27.5384 42.3195 27.5384 42.9526 27.9289 43.3431L34.2929 49.7071ZM34 23L34 49L36 49L36 23L34 23Z" fill="#0B2D1F"/>
                    </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Description -->
    <div class="container py-4">
        <div class="row">
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-10 col-lg-10">
                <h3 class="custom-fw-600 custom-text-secondary mt-5"> 2. Mask Dress</h3>
                    <p class="custom-fw-400 custom-text-secondary custom-fs-16 m-0 mb-5 py-2">
                        Are you worried the mask is gonna ruin your outfit? Especially in these crucial times, you can’t afford to go maskless as well. You don’t have to worry anymore.
<br>
                        With an attractive and trendy Mask Dress, you can easily make a mask part of your outfit as well. Wear the Mask Dress above your safety mask and Boom! No more bland-looking masks that don’t fit in with your dress.
                        
                        Moreover, with these dresses on trends, you are guaranteed to look fabulous and trendy.
                        
                    </p>
                    
            </div>
        </div>
    </div>

    <!-- Fresh Collections -->
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <h2 class="custom-fw-700 custom-fs-50 custom-text-secondary mb-4">Fresh Collections Just for You</h2>
                <img class="custom-lookbook-resize" src="{{asset($outlook3)}}" alt="look book image/thumbnail" />
                <div style="max-width: 440px; margin: auto;">
                    <h3 class="custom-fw-600 custom-text-secondary mt-5"> 3. Mesh Dress</h3>
                    <p class="custom-fw-400 custom-text-secondary custom-fs-16 m-0 mb-5 py-2">
                        Looking for a dress that guarantees to make you the center of appreciating eyes? Mesh Dress is the one for you. Mesh is a loosely woven or knitted fabric that has many closely spaced holes. And, adding a super luxe finish to your look whilst showing off your shape is easily achievable through our Mesh Dress.
<br>
                        With a wide variety of types, you can easily choose between which feels like you and suits you. Be confident in how you look and have all the eyes on you with our selection of elegant Mesh Dress.
                        
                        
                    </p>
                    <a href="{{route('store')}}" class="custom-fw-600 custom-fs-16 custom-text-secondary border border-0 custom-bc-secondary border-bottom">Browse all collection</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="row align-items-center">
                    <div class="col-sm-6 col-md-12 col-lg-12">
                        <img class="custom-lookbook-resize" src="{{asset($outlook4)}}" alt="look book image/thumbnail" />
                    </div>
                    <div class="col-sm-6 col-md-12 col-lg-12 mt-4">
                        <img class="custom-lookbook-resize" src="{{asset($outlook5)}}" alt="look book image/thumbnail" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Comfy & Modern -->
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-5">
                <img class="custom-category-img-resize " src="{{asset($outlook6)}}" alt="comfy and moder image/thumbnail" />
            </div>
            <div class="col-md-6 col-lg-7">
                <h3 class="custom-fw-600 custom-text-secondary mt-5"> 4. Corset</h3>
                <p class="custom-fw-400 custom-text-secondary custom-fs-16 m-0 mb-5 py-2">
                    Flaunt your curves and waist to boost your confidence with our selection of eye-catching and glamorous corsets. Looking your best with a corset has never been this comfortable before.
<br>
                    Combine the curve flaunting dress with comfort and style with our Corset. Get your corset from the wide selection of designs and styles that are greatly varied to suit your style.
                    
                    
                    
                </p>
                <a href="{{route('store')}}" class="mt-4 btn border custom-bc-secondary border-1 px-5 custom-fw-400 custom-fs-25">Shop now</a>
                <div class="mt-4">
                    <img class="custom-lookbook-resize" src="{{asset($outlook7)}}" alt="comfy and moder image/thumbnail" />
                </div>
            </div>
        </div>
    </div>

    <!-- Images banner -->
    <div class="container py-4">
        <div class="custom-br-10" style="background-color: #D1C7CF;">
            <div class="custom-lookbook-grid">
                @foreach ($outlook8 as $item)
                <img class="custom-br-10 custom-lookbook-resize" src="{{asset($item->image)}}" alt="look book image banner" />
                @endforeach
              
             
            </div>
        </div>
    </div>

    <!-- See other in style -->
    <div class="container mt-4">
        <div class="p-4 custom-bg-light" style="border-radius: 30px 30px 0 0;">
            <h2 class="custom-fw-700 custom-fs-50 custom-text-secondary text-center">See other in style</h2>
            <div class="custom-product-grid mt-4">
                @foreach ($outlook9 as $item)
                <div class="card border-0">
                    <img src="{{asset($item->image)}}" alt="see other in style thumbnail" />
                </div>
                @endforeach

            </div>
            <div class="text-center pt-5">
                <a href="shop.html" class="btn custom-fs-25 custom-fw-600 custom-bc-secondary px-4 custom-text-secondary border-2">
                    <span>
                        <svg width="24" height="24" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path d="M9.12866 35.0587C6.98773 34.9636 5.82471 34.6154 5.05115 34.3205C4.02615 33.9305 3.29539 33.4662 2.52611 32.7154C1.75683 31.9646 1.28071 31.2504 0.883764 30.2487C0.582043 29.4927 0.225756 28.3561 0.128392 26.2637C0.0213986 24.002 0 23.3233 0 17.5931C0 11.863 0.0235385 11.1854 0.127322 8.92153C0.224686 6.82917 0.583113 5.69464 0.882694 4.93654C1.28178 3.9348 1.7579 3.22062 2.52504 2.46775C3.29325 1.71697 4.02401 1.2506 5.05008 0.862665C5.82364 0.567791 6.98666 0.219588 9.12759 0.124433C11.4429 0.0209131 12.1384 0 17.9995 0C23.8627 0 24.556 0.0230044 26.8724 0.124433C29.0133 0.219588 30.1742 0.569882 30.9499 0.862665C31.9749 1.2506 32.7057 1.71697 33.475 2.46775C34.2442 3.21853 34.7182 3.93375 35.1173 4.93549C35.419 5.6915 35.7753 6.82813 35.8727 8.92048C35.9786 11.1843 36 11.8619 36 17.5921C36 23.3202 35.9786 23.9999 35.8727 26.2637C35.7753 28.3561 35.4169 29.4927 35.1173 30.2487C34.7182 31.2504 34.2432 31.9646 33.475 32.7154C32.7067 33.4662 31.9749 33.9305 30.9499 34.3205C30.1764 34.6154 29.0133 34.9636 26.8724 35.0587C24.5581 35.1622 23.8627 35.1831 17.9995 35.1831C12.1384 35.1831 11.4429 35.1633 9.12866 35.0587Z" fill="url(#paint0_radial)"/>
                            <path d="M9.12866 35.0587C6.98773 34.9636 5.82471 34.6154 5.05115 34.3205C4.02615 33.9305 3.29539 33.4662 2.52611 32.7154C1.75683 31.9646 1.28071 31.2504 0.883764 30.2487C0.582043 29.4927 0.225756 28.3561 0.128392 26.2637C0.0213986 24.002 0 23.3233 0 17.5931C0 11.863 0.0235385 11.1854 0.127322 8.92153C0.224686 6.82917 0.583113 5.69464 0.882694 4.93654C1.28178 3.9348 1.7579 3.22062 2.52504 2.46775C3.29325 1.71697 4.02401 1.2506 5.05008 0.862665C5.82364 0.567791 6.98666 0.219588 9.12759 0.124433C11.4429 0.0209131 12.1384 0 17.9995 0C23.8627 0 24.556 0.0230044 26.8724 0.124433C29.0133 0.219588 30.1742 0.569882 30.9499 0.862665C31.9749 1.2506 32.7057 1.71697 33.475 2.46775C34.2442 3.21853 34.7182 3.93375 35.1173 4.93549C35.419 5.6915 35.7753 6.82813 35.8727 8.92048C35.9786 11.1843 36 11.8619 36 17.5921C36 23.3202 35.9786 23.9999 35.8727 26.2637C35.7753 28.3561 35.4169 29.4927 35.1173 30.2487C34.7182 31.2504 34.2432 31.9646 33.475 32.7154C32.7067 33.4662 31.9749 33.9305 30.9499 34.3205C30.1764 34.6154 29.0133 34.9636 26.8724 35.0587C24.5581 35.1622 23.8627 35.1831 17.9995 35.1831C12.1384 35.1831 11.4429 35.1633 9.12866 35.0587Z" fill="#0B2D1F"/>
                            <path d="M13.5801 17.6669C13.5801 15.2607 15.5754 13.3096 18.0374 13.3096C20.4994 13.3096 22.4958 15.2607 22.4958 17.6669C22.4958 20.073 20.4994 22.0241 18.0374 22.0241C15.5754 22.0241 13.5801 20.073 13.5801 17.6669ZM11.1699 17.6669C11.1699 21.3737 14.2445 24.3785 18.0374 24.3785C21.8303 24.3785 24.9049 21.3737 24.9049 17.6669C24.9049 13.96 21.8303 10.9552 18.0374 10.9552C14.2445 10.9552 11.1701 13.9598 11.1701 17.6669H11.1699ZM23.5719 10.6891C23.5718 10.9993 23.6658 11.3026 23.8421 11.5606C24.0183 11.8186 24.2689 12.0198 24.5621 12.1386C24.8553 12.2574 25.178 12.2886 25.4893 12.2282C25.8007 12.1678 26.0867 12.0185 26.3112 11.7993C26.5358 11.58 26.6887 11.3006 26.7508 10.9964C26.8128 10.6921 26.7812 10.3767 26.6598 10.0901C26.5385 9.80344 26.3329 9.5584 26.069 9.38595C25.8052 9.2135 25.4949 9.12139 25.1775 9.12126H25.1768C24.7514 9.12146 24.3434 9.28668 24.0425 9.58065C23.7415 9.87462 23.5723 10.2733 23.5719 10.6891ZM12.6343 28.3062C11.3303 28.2482 10.6216 28.0359 10.1506 27.8566C9.52621 27.619 9.08069 27.336 8.61228 26.8789C8.14386 26.4217 7.85391 25.9867 7.61189 25.3765C7.42829 24.9164 7.2111 24.2235 7.15182 22.9492C7.08698 21.5715 7.07404 21.1576 7.07404 17.6671C7.07404 14.1766 7.08805 13.7639 7.15182 12.385C7.2112 11.1106 7.43 10.4191 7.61189 9.95768C7.85498 9.34744 8.1445 8.91203 8.61228 8.45424C9.08005 7.99645 9.52514 7.71308 10.1506 7.47655C10.6214 7.29712 11.3303 7.08485 12.6343 7.02692C14.044 6.96355 14.4675 6.9509 18.0374 6.9509C21.6073 6.9509 22.0312 6.96439 23.4422 7.02713C24.7461 7.08516 25.4536 7.299 25.9258 7.47676C26.5502 7.71329 26.9957 7.99729 27.4641 8.45445C27.9326 8.91161 28.2214 9.34765 28.4645 9.95789C28.6481 10.418 28.8653 11.1108 28.9246 12.3852C28.9894 13.7641 29.0024 14.1768 29.0024 17.6673C29.0024 21.1578 28.9894 21.5705 28.9246 22.9494C28.8652 24.2238 28.6469 24.9164 28.4645 25.3767C28.2214 25.9869 27.9319 26.4224 27.4641 26.8791C26.9964 27.3358 26.5502 27.6192 25.9258 27.8568C25.455 28.0362 24.7461 28.2485 23.4422 28.3064C22.0324 28.3698 21.6089 28.3824 18.0374 28.3824C14.4659 28.3824 14.0436 28.3698 12.6343 28.3064V28.3062ZM12.5235 4.67535C11.0998 4.73871 10.1269 4.95935 9.27724 5.28245C8.39786 5.61612 7.65244 6.06377 6.90809 6.79008C6.16374 7.51639 5.70688 8.245 5.36546 9.10547C5.03486 9.93635 4.8091 10.8866 4.74426 12.2781C4.67836 13.6717 4.66327 14.1173 4.66327 17.6669C4.66327 21.2165 4.67836 21.662 4.74426 23.0557C4.8091 24.4472 5.03486 25.3974 5.36546 26.2283C5.70688 27.0877 6.16385 27.8177 6.90809 28.5437C7.65233 29.2697 8.39679 29.7167 9.27724 30.0513C10.1285 30.3744 11.0998 30.595 12.5235 30.6584C13.9503 30.7218 14.4054 30.7376 18.0374 30.7376C21.6694 30.7376 22.1253 30.7228 23.5513 30.6584C24.9752 30.595 25.9474 30.3744 26.7976 30.0513C27.677 29.7167 28.4224 29.27 29.1667 28.5437C29.9111 27.8174 30.367 27.0877 30.7093 26.2283C31.04 25.3974 31.2668 24.4471 31.3306 23.0557C31.3954 21.661 31.4105 21.2165 31.4105 17.6669C31.4105 14.1173 31.3954 13.6717 31.3306 12.2781C31.2657 10.8865 31.04 9.93583 30.7093 9.10547C30.367 8.24605 29.9099 7.51754 29.1667 6.79008C28.4235 6.06262 27.6769 5.61612 26.7986 5.28245C25.9474 4.95935 24.9751 4.73767 23.5524 4.67535C22.1261 4.61167 21.6705 4.59619 18.039 4.59619C14.4076 4.59619 13.9508 4.61094 12.5241 4.67535" fill="white"/>
                            </g>
                            <defs>
                            <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(2.32988 34.4124) scale(45.7066 44.6695)">
                            <stop offset="0.09" stop-color="#FA8F21"/>
                            <stop offset="0.78" stop-color="#D82D7E"/>
                            </radialGradient>
                            <clipPath id="clip0">
                            <rect width="36" height="35.1831" rx="5" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>                                    
                    </span>
                    <span>Follow us</span>
                </a>
            </div>
            
        </div>
    </div>
</section>
@endsection