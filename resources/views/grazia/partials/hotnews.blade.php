<div class="row">
    <div class="col-sm-12">
        <h2 class="subtitle">HOT NEWS</h2>
    </div>
</div>
<div class="row">

    @foreach($hotNews as $post)

    <div class="col-md-6">
        <div class="image-holder mixin">
            <a href="{{ $post->category->getCategoryLink(). '/'. $post->slug. '/'. $post->id }}"><img src="{{ url($post->image2) }}" alt="{{ $post->title }}" id="left"></a>
            <div class="image-caption"><a class="caption p-1" href="{{ $post->category->getCategoryLink() }}">{{ $post->category->title }}</a>
                <h6>"{{ $post->title }}"</h6>
                <p class="date">"{{ $post->published_at }}"</p>
            </div>
            <div class="image-shadow"></div>
        </div>
    </div>

    @endforeach

    
</div>