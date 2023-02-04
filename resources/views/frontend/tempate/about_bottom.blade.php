@php
    $banner = DB::table('banners')
        ->where('status', 1)
        ->where('type', 3)
        ->skip(1)
        ->first();
@endphp
<div class="about_product_section container ">
    <div class="row px-2 p-sm-0">

        <div class="col-12 col-lg-6 mt-4 mt-lg-0  text_color_blue  ps-lg-5">
            <h2 class="about_section_heading">This is Demo Title here</h2>
            <p class="about_section_subheading">Lorem, ipsum dolor sit amet quaerat, tempora soluta qui quasi facere
                itaque nam ipsam fuga.</p>
            <p class="pt-4 about_section_desc">
                <span class="pe-3 h5 fw-bold opacity-75">1.</span>Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Ut quasi consequuntur vitae sed aspernatur facere praesentium.
            </p>
            <p class="pt-4 about_section_desc">
                <span class="pe-3 h5 fw-bold opacity-75">2.</span>Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Ut quasi consequuntur vitae sed aspernatur facere praesentium.
            </p>
            <p class="pt-4 about_section_desc">
                <span class="pe-3 h5 fw-bold opacity-75">3.</span>Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Ut quasi consequuntur vitae sed aspernatur facere praesentium.
            </p>
        </div>

        <div class="col-12 col-lg-6   ">
            <img src={{ asset($banner->image) }} alt="" class="img-fluid h-100  rounded-3 "
                style="object-fit:cover" />
        </div>
    </div>
</div>
