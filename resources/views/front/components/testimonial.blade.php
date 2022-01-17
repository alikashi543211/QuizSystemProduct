<section class="section-padding-md-4 bg-Primary bg-common">
    <div class="container">
        <div class="heading-layout2 mg-b-30">
            <h2 class="text-white">{{ setting('testimonial_section_title') ?? '' }}<span>{{ setting('testimonial_section_sub_title') ?? '' }}</span></h2>
        </div>
        <div class="rc-carousel nav-control-layout1" data-loop="true" data-items="10" data-margin="30"
            data-autoplay="false" data-autoplay-timeout="3000" data-smart-speed="1000" data-dots="false"
            data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
            data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false"
            data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="2"
            data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true"
            data-r-large-dots="false" data-r-extra-large="3" data-r-extra-large-nav="true"
            data-r-extra-large-dots="false">
            @foreach(testimonial_list() as $item)
                <div class="testimonial-box-layout1">
                    <p>{{ $item->description }}</p>
                    <h3 class="item-title">{{ $item->name }}</h3>
                    <div class="item-subtitle">{{  $item->designation }}</div>
                    <ul class="star">
                        @for($i=1;$i<=5;$i++)
                            <span class="fa fa-star @if($i<=$item->rating) star-checked @endif"></span>
                        @endfor
                    </ul>
                    <div class="item-quote"><i class="fas fa-quote-right"></i></div>
                </div>
            @endforeach
        </div>
    </div>
</section>