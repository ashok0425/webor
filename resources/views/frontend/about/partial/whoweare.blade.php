@php
    $banner = DB::table('banners')
        ->where('status', 1)
        ->where('type', 3)
        ->skip(2)
        ->first();
@endphp
<div class="container my-5">
    <div class="row">
        <div class="col-12 col-xl-6 text_color_blue">
            <div class="d-flex flex-column align-items-center align-items-sm-start   ">
                <h1 class=" custom-fw-800  text_muted_heading"> WHO WE ARE</h1>
                <p>A Reliable Name For Quality Housewares !</p>
                <img src='{{ asset('frontend/asset/starLine.webp') }}' class="img-fluid" />

            </div>

            <p class="pt-4 ">Gem Plastics is a plastic manufacturing company, established in 1986, with the main
                objective of providing reliable, quality, and durable products to customers. We supply most all of the
                household materials like buckets, mugs, basins, containers, etc, that are supplied all over the country.
            </p>

            <div class="row pt-4">
                <div class="col-12 col-md-6 d-flex flex-column align-items-center mt-5 mt-md-0   text_color_blue">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                        class="about_icon" height="35" width="35" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                        </path>
                    </svg>
                    <h3 class="pt-2 text_muted_heading">Quality</h3>
                    <p class="pt-2">We are continuously introducing new, interesting, quality, and innovative products
                        considering the price range. We have also been working as a wholesaler all over Nepal with our
                        efficient and reliable service.</p>
                </div>

                <div class="col-12 col-md-6 d-flex flex-column align-items-center mt-5 mt-md-0  text_color_blue">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                        class="about_icon" height="35" width="35" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z">
                        </path>
                    </svg>
                    <h3 class="pt-2 text_muted_heading">Reliable</h3>
                    <p class="pt-2">For a long time, we have been committed to producing the best quality plastic
                        housewares, designed and formulated by our experienced personnel to meet the requirements of the
                        clients and customers.</p>
                </div>
            </div>
        </div>

        <div class="who_we_are_img col-12 col-xl-6 p-0 m-0 mt-4 mt-md-0 ">
            <img src="{{ asset($banner->image) }}" width="1400" height="1100" alt=" about img" class="img-fluid" />
        </div>
    </div>
</div>
