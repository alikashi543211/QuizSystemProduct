<section class="section-bubble section-padding-md-2">
    <div class="container">
        <div class="row gutters-50 d-flex">
            <div class="col-xl-7">
                <div class="about-box-layout3">
                    <div class="item-icon shape1">
                        <img src="{{ asset(setting('making_house_section_sub_image_one')) }}" alt="shape">
                    </div>
                    <div class="item-icon shape2">
                        <img src="{{ asset(setting('making_house_section_sub_image_two')) }}" alt="shape">
                    </div>
                    <div class="item-icon shape3">
                        <img src="{{ asset(setting('making_house_section_sub_image_three')) }}" alt="shape">
                    </div>
                    <div class="item-icon shape4">
                        <img src="{{ asset(setting('making_house_section_sub_image_four')) }}" alt="shape">
                    </div>
                    <div class="item-img">
                        <img src="{{ asset(setting('making_house_section_image')) }}" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="about-box-layout4">
                    <h2 class="item-title">{{ setting('making_house_section_main_title') }} <span>{{ setting('making_house_section_sub_title') }}</span></h2>
                    <p>{{ setting('making_house_section_description') }}</p>
                    <div class="service-list">
                        <ul>
                            <li>{{ setting('making_house_section_information_one') }}</li>
                            <li>{{ setting('making_house_section_information_two') }}</li>
                            <li>{{ setting('making_house_section_information_three') }}</li>
                            <li>{{ setting('making_house_section_information_four') }}</li>
                        </ul>
                    </div>
                    <div class="action-area">
                        <a href="javascript:void(0);" class="btn-fill-sm bg-accent text-primarytext btn-slide-hover get-quote-btn">{{ setting('making_house_section_button_title') }}<i class="fas fa-angle-right"></i></a>
                        <div class="phone-number">
                            <a href="tel:{{ setting('top_header_section_quick_contact_number') }}">
                                <i class="flaticon-phone-call"></i>
                            </a>
                            <a href="tel:{{ setting('top_header_section_quick_contact_number') }}" class="black_color">
                                {{ setting('top_header_section_quick_contact_number') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>