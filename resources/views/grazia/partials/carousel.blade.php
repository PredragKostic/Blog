 <div id="carousel" class="carousel slide" data-ride="carousel" class="main">
    <div class="carousel-inner">

        @foreach($sliders as $slider)

        <article class="carousel-item active">
            <div class="image-holder">
                <img class="d-block w-100" src="{{ url($slider->image1) }}" alt="{{ $slider->title }}">
                <div class="carousel-caption d-none d-md-block p-0"><a class="caption p-1" href="{{$slider->category->getCategoryLink()}}">{{ $slider->category->title }}</a>
                    <h5 class="mt-2">{{ $slider->title }}</h5>
                    <p class="p-0 mb-0">{{ $slider->summary }}</p>
                </div>
                <div class="text-holder">
                    <div class="text-wraper p-3">
                        <div class="text-overflow"><a class="txt-prim" href="{{ $slider->category->getCategoryLink(). '/'. $slider->slug. '/'. $slider->id }}">{{ $slider->summary }}</a></div>
                    </div>
                </div>
            </div>
            <div class="image-shadow"></div>
        </article>

        @endforeach

        
    </div>
    <a class="carousel-control-prev2" href="#carousel" role="button" data-slide="prev"><img src="{{ url('grazia/images/arrow.jpg') }}" class="carousel-prev" aria-hidden="true"> <span class="sr-only">Previous</span> </a>
    <a class="carousel-control-next2" href="#carousel" role="button" data-slide="next"><img src="{{ url('grazia/images/arrow.jpg') }}" class="carousel-next" aria-hidden="true"> <span class="sr-only">Next</span></a>
</div>