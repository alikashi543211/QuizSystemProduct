<div class="slider-area slider-layout1">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-4" class="slides">
            @foreach(getCategories('featured') as $item)
                <img src="{{ asset($item->image) }}" alt="slider" title="#slider-direction-{{ $loop->iteration }}" />
            @endforeach
        </div>
        @foreach(getCategories('featured') as $item)
            <div id="slider-direction-{{ $loop->iteration }}" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-{{ $loop->iteration }}">
                    <div class="text-left title-container s-tb-c">
                        <div class="container">
                            <h1 class="slider-big-text c-m-lg-5">{{ $item->name }}</h1>
                            <div class="slider-paragraph c-m-lg-5">{{ $item->description }}</div>
                            <div class="slider-btn-area c-m-lg-5">
                                <a href="{{ route('detail', $item->slug) }}" class="item-btn-fill">Take Our Service
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div> 
</div>