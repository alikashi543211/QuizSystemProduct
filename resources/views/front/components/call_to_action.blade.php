<section class="action-wrap-layout1">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="action-box-layout1">
                    <h2 class="item-title">{{ setting('get_started_section_heading_text') ?? '' }}</h2>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="action-box-layout1">
                    <div class="item-img bottom-bubble">
                        <img src="{{ asset(setting('get_started_section_image') ?? '') }}" alt="img">
                    </div>
                    <a href="javascript:void(0);" class="btn-fill-md hover-textprimary bg-accent text-primarytext get-quote-btn">{{ setting('get_started_section_button_title') ?? '' }}<i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>