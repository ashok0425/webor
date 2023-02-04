<style>
    .h-50 {
        height: 350px !important;
        ;
    }

    .category_heading {
        left: 35%;
    }
</style>
<div class="item_div position-relative w-100 h-50">
    <Image src="{{ asset($category->image) }}" class="img-fluid w-100 h-50" alt="img" />

    <div class="home_banner_text_area text-center category_heading">
        <h2 class="banner_heading ">{{ $category->category }}</h2>
        {{-- <p class="category_desc">{{category.description}}.</p> --}}
    </div>
</div>
