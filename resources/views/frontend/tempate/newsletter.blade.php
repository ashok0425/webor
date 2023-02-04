<div class="newsletter_section">
    <div class="container news_letter_padding">
        <div class="news_letter_header d-flex flex-column text_color_white align-items-center text-center">
            <h1>Join to our Newsletter</h1>
            <p>If you never miss our interesting news by joining our newsletter.</p>
        </div>
        <form onSubmit="" class="d-flex flex-column flex-sm-row pt-5 mb-1">
            <input type="email" class="form_control form-control form-control-lg rounded-0 "
                placeholder="name@example.com" />
            <button type="submit" class="subscribe_button px-5 py-3 py-sm-0 mt-3 mt-sm-0">
                Subscribe
            </button>
        </form>
        {{-- {errors.email && <p class="form_hook_error fw-semibold ">{`${errors.email.message}`}</p>} --}}
    </div>
</div>
