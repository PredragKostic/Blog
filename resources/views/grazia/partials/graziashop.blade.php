<div class="container p-0">
    <div class="row" id="graziashop">
        <div class="col-sm-12"><a href="#"><h2>GRAZIA <span>SHOP</span></h2></a></div>
    </div>
    <div class="row" id="shop">

    @foreach($graziaShop as $product)

        <div class="col-md-4">
            <article class="shop-item">
                <a href="{{ $product->getProductLink() }}"><img src="{{ url($product->image) }}" alt="{{ $product->title }}" id="left"></a>
                <h2>{{ $product->title }}</h2><span>{{$product->brand->title}}</span></article>
        </div>
       

         @endforeach

    </div>
   
   
</div>