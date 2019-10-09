@extends('grazia.layout')

@section('content')

<div class="container p-0" id="main">
                <div class="grid">
                    <main class="container p-0">
                       
						@include('grazia.partials.carousel')

                        @include('grazia.partials.hotnews')
                    </main>
                    <aside class="container" id="grid2">
                        @include('grazia.partials.banner')
                    </aside>
                </div>
            </div>
            <div class="container p-0">
                <section class="grid">
                    <div class="container p-0">
                        <div class="row" id="stil">
                            <div class="col-md-4 mixin">
                                <div class="image-box">
                                    <a href="#"><img src="{{ url('grazia/images/moda-img-3.jpg') }}" alt=""></a>
                                </div>
                                <div class="image-description"><a href="#" class="caption p-1">STIL DANA</a>
                                    <h6>KAKO NOSITI MAKSI HALJINE KAO STREET STYLE ZVZDE</h6>
                                    <p class="date">18. april, 2018</p>
                                </div>
                            </div>
                            <div class="col-md-4 mixin">
                                <div class="image-box">
                                    <a href="#"><img src="{{ url('grazia/images/moda-img-2.jpg') }}" alt=""></a>
                                </div>
                                <div class="image-description"><a href="#" class="caption p-1">LEPOTA</a>
                                    <h6>KAJLI DŽENER I KORTNI KARDAŠIJAN PREDSTAVLJAJU NOVU KOLEKCIJU KOZMETIKE KAJLI DŽENER I KORTNI KARDAŠIJAN PREDSTAVLJAJU NOVU KOLEKCIJU KOZMETIKE KAJLI DŽENER I KORTNI KARDAŠIJAN PREDSTAVLJAJU NOVU KOLEKCIJU KOZMETIKE</h6>
                                    <p class="date">18. april, 2018</p>
                                </div>
                            </div>
                            <article class="col-md-4 mixin">
                                <div class="image-box">
                                    <a href="#"><img src="{{ url('grazia/images/moda-img-3.jpg') }}" alt=""></a>
                                </div>
                                <div class="image-description"><a href="#" class="caption p-1">SCENA</a>
                                    <h6>KAKO NOSITI MAKSI HALJINE KAO STREET STYLE ZVZDE</h6>
                                    <p class="date">18. april, 2018</p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="container p-0">
                        <div>
                            <h2>STIL DANA</h2>
                            <a href="#"><img class="style-of-the-day" src="{{ url('grazia/images/widget.jpg') }}" alt=""></a>
                            <div id="text-cover">
                                <h6>KAJLI DŽENER I KORTNI KARDAŠIJAN PREDSTAVLJAJU NOVU KOLEKCIJU KOZMETIKE</h6></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container p-0">
                <section class="grid">

                    @include('grazia.partials.graziashop')
                    
                    
                    <div class="container p-0">
                        
							@include('grazia.partials.horoskop')

                        <div class="follow banners">
                            <p>pratite nas</p>
                            <div class="icons"><a href="#"><i class="fab fa-facebook-f mr-3" id="fa"></i></a> <a href="#"><i class="fab fa-twitter mr-3" id="tw"></i></a> <a href="#"><i class="fab fa-instagram" id="in"></i></a> <a href="#"><i class="fas fa-wifi" id="wifi"></i></a></div><span>Prijavi se za naš newsletter</span>
                            <form action="/" method="POST">
                                <input type="email" name="email" id="greybox">
                                <input type="submit" value="prijavi se" id="blackbox">
                            </form>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container p-0">
                <section class="grid">
                    <div class="container p-0">
                        <div class="news">
                            <article class="newsitem">
                                <div class="image-holder">
                                    <a href="#"><img src="{{ url('grazia/images/news.jpg') }}" alt=""></a>
                                </div>
                                <div class="text-holder">
                                    <div class="moda-news"><a href="#">moda1</a></div>
                                    <div class="sub">kako nositi maxi haljine kao street style zvezde kako nositi maxi haljine kao street style zvezde</div>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis architecto facilis fugiat recusandae quidem perferendis libero reiciendis cum sapiente ipsa!S</p><span>24. april 2018.</span></div>
                            </article>
                            <article class="newsitem">
                                <div class="image-holder">
                                    <a href="#"><img src="{{ url('grazia/images/news.jpg') }}" alt=""></a>
                                </div>
                                <div class="text-holder">
                                    <div class="moda-news"><a href="#">moda</a></div>
                                    <div class="sub">kako nositi maxi haljine kao street style zvezde kako nositi maxi haljine kao street style zvezde</div>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis architecto facilis fugiat recusandae quidem perferendis libero reiciendis cum sapiente ipsa!S</p><span>24. april 2018.</span></div>
                            </article>
                            <article class="newsitem">
                                <div class="image-holder">
                                    <a href="#"><img src="{{ url('grazia/images/news.jpg') }}" alt=""></a>
                                </div>
                                <div class="text-holder">
                                    <div class="moda-news"><a href="#">moda</a></div>
                                    <div class="sub">kako nositi maxi haljine kao street style zvezde kako nositi maxi haljine kao street style zvezde</div>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis architecto facilis fugiat recusandae quidem perferendis libero reiciendis cum sapiente ipsa!S</p><span>24. april 2018.</span></div>
                            </article>
                        </div>
                    </div>
                    <aside class="container p-0">
                        <div class="mostread banners">
                            <div class="first">najčitanije</div>
                            <div class="item">
                                <div class="image-holder">
                                    <a href="#"><img src="{{ url('grazia/images/mostread.jpg') }}" alt=""></a>
                                </div>
                                <div class="text-holder">
                                    <div class="mostreadsub"><a href="#">moda</a></div>
                                    <p><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos deleniti, soluta porro consequatur recusandae iusto?</a></p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="image-holder">
                                    <a href="#"><img src="{{ url('grazia/images/mostread.jpg') }}" alt=""></a>
                                </div>
                                <div class="text-holder">
                                    <div class="mostreadsub"><a href="#">moda</a></div>
                                    <p><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos deleniti, soluta porro consequatur recusandae iusto?</a></p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="image-holder">
                                    <a href="#"><img src="{{ url('grazia/images/mostread.jpg') }}" alt=""></a>
                                </div>
                                <div class="text-holder">
                                    <div class="mostreadsub"><a href="#">moda</a></div>
                                    <p><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos deleniti, soluta porro consequatur recusandae iusto?</a></p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="image-holder">
                                    <a href="#"><img src="{{ url('grazia/images/mostread.jpg') }}" alt=""></a>
                                </div>
                                <div class="text-holder">
                                    <div class="mostreadsub"><a href="#">moda</a></div>
                                    <p><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos deleniti, soluta porro consequatur recusandae iusto?</a></p>
                                </div>
                            </div>
                        </div>
                        <a class="banners" href="#"><img src="{{ url('grazia/images/facebookwidget.jpg') }}" alt=""></a>
                    </aside>
                </section>
            </div>
            <div class="container p-0">
                <div class="infocus">
                    <div class="holder">
                        <div class="image-holder">
                            <a href="#"><img src="{{ url('grazia/images/ufokusunatpis.jpg') }}" alt=""></a>
                        </div>
                    </div>
                    <article class="item">
                        <div class="image-holder">
                            <a href="#"><img src="{{ url('grazia/images/u-fokusu.jpg') }}" alt=""></a>
                        </div>
                        <div class="text-holder">
                            <div class="infokussub"><a href="#">moda</a></div>
                            <p><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos deleniti, soluta porro consequatur recusandae iusto?</a></p>
                        </div>
                    </article>
                    <article class="item">
                        <div class="image-holder">
                            <a href="#"><img src="{{ url('grazia/images/u-fokusu.jpg') }}" alt=""></a>
                        </div>
                        <div class="text-holder">
                            <div class="infokussub"><a href="#">moda</a></div>
                            <p><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos deleniti, soluta porro consequatur recusandae iusto?</a></p>
                        </div>
                    </article>
                    <article class="item">
                        <div class="image-holder">
                            <a href="#"><img src="{{ url('grazia/images/u-fokusu.jpg') }}" alt=""></a>
                        </div>
                        <div class="text-holder">
                            <div class="infokussub"><a href="#">moda</a></div>
                            <p><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos deleniti, soluta porro consequatur recusandae iusto?</a></p>
                        </div>
                    </article>
                    <article class="item">
                        <div class="image-holder">
                            <a href="#"><img src="{{ url('grazia/images/u-fokusu.jpg') }}" alt=""></a>
                        </div>
                        <div class="text-holder">
                            <div class="infokussub"><a href="#">moda</a></div>
                            <p><a href="#">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos deleniti, soluta porro consequatur recusandae iusto?</a></p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="container p-0">
                <section class="grid">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="subtitle">HOT NEWS</h2></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="image-holder mixin">
                                    <a href="#"><img src="{{ url('grazia/images/news-img-1.jpg') }}" alt="" id="left"></a>
                                    <div class="image-caption"><a class="caption p-1" href="#">MODA</a>
                                        <h6>IZGOVORITE SUDBONOSNO DA U PREFINENIM ITALIJANSKIM KREACIJAMA</h6>
                                        <p class="date">24. april, 2018</p>
                                    </div>
                                    <div class="image-shadow"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image-holder mixin">
                                    <a href="#"><img src="{{ url('grazia/images/news-img-2.jpg') }}" alt=""></a>
                                    <div class="image-caption"><a class="caption p-1" href="#">Scena</a>
                                        <h6>IZGOVORITE SUDBONOSNO DA U PREFINENIM ITALIJANSKIM KREACIJAMA</h6>
                                        <p class="date">24. april, 2018</p>
                                    </div>
                                    <div class="image-shadow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="tags banners">
                            <p><a href="#">tagovi</a></p><span><a href="#">lepota #scena #hair #instagram #lifestile #poznati lepota #scena #hair #instagram #lifestile #poznati lepota #scena #hair #instagram #lifestile #poznati lepota #scena #hair #instagram #lifestile #poznati lepota #scena #hair #instagram #lifestile #poznati</a></span></div>
                    </div>
                </section>
            </div>
            <div class="container p-0">
                <section class="grid">
                    <div class="container p-0">
                        <div class="news">
                            <article class="newsitem">
                                <div class="image-holder">
                                    <a href="#"><img src="{{ url('grazia/images/news.jpg') }}" alt=""></a>
                                </div>
                                <div class="text-holder">
                                    <div class="moda-news"><a href="#">moda1</a></div>
                                    <div class="sub">kako nositi maxi haljine kao street style zvezde kako nositi maxi haljine kao street style zvezde</div>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis architecto facilis fugiat recusandae quidem perferendis libero reiciendis cum sapiente ipsa!S</p><span>24. april 2018.</span></div>
                            </article>
                            <article class="newsitem">
                                <div class="image-holder">
                                    <a href="#"><img src="{{ url('grazia/images/news.jpg') }}" alt=""></a>
                                </div>
                                <div class="text-holder">
                                    <div class="moda-news"><a href="#">moda</a></div>
                                    <div class="sub">kako nositi maxi haljine kao street style zvezde kako nositi maxi haljine kao street style zvezde</div>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis architecto facilis fugiat recusandae quidem perferendis libero reiciendis cum sapiente ipsa!S</p><span>24. april 2018.</span></div>
                            </article>
                            <article class="newsitem">
                                <div class="image-holder">
                                    <a href="#"><img src="{{ url('grazia/images/news.jpg') }}" alt=""></a>
                                </div>
                                <div class="text-holder">
                                    <div class="moda-news"><a href="#">moda</a></div>
                                    <div class="sub">kako nositi maxi haljine kao street style zvezde kako nositi maxi haljine kao street style zvezde</div>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis architecto facilis fugiat recusandae quidem perferendis libero reiciendis cum sapiente ipsa!S</p><span>24. april 2018.</span></div>
                            </article>
                        </div>
                    </div>
                    <div class="container"></div>
                </section>
            </div>
            <div class="container p-0">
                <div class="grid">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="subtitle">HOT NEWS</h2></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="image-holder mixin">
                                    <a href="#"><img src="{{ url('grazia/images/news-img-1.jpg') }}" alt="" id="left"></a>
                                    <div class="image-caption"><a class="caption p-1" href="#">MODA</a>
                                        <h6>IZGOVORITE SUDBONOSNO DA U PREFINENIM ITALIJANSKIM KREACIJAMA</h6>
                                        <p class="date">24. april, 2018</p>
                                    </div>
                                    <div class="image-shadow"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image-holder mixin">
                                    <a href="#"><img src="{{ url('grazia/images/news-img-2.jpg') }}" alt=""></a>
                                    <div class="image-caption"><a class="caption p-1" href="#">Scena</a>
                                        <h6>IZGOVORITE SUDBONOSNO DA U PREFINENIM ITALIJANSKIM KREACIJAMA</h6>
                                        <p class="date">24. april, 2018</p>
                                    </div>
                                    <div class="image-shadow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container"></div>
                </div>
            </div>
            <div class="container p-0">
                <section class="grid">
                    <div class="container p-0">
                        <div class="news">
                            <article class="newsitem">
                                <div class="image-holder">
                                    <a href="#"><img src="{{ url('grazia/images/news.jpg') }}" alt=""></a>
                                </div>
                                <div class="text-holder">
                                    <div class="moda-news"><a href="#">moda1</a></div>
                                    <div class="sub">kako nositi maxi haljine kao street style zvezde kako nositi maxi haljine kao street style zvezde</div>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis architecto facilis fugiat recusandae quidem perferendis libero reiciendis cum sapiente ipsa!S</p><span>24. april 2018.</span></div>
                            </article>
                            <article class="newsitem">
                                <div class="image-holder">
                                    <a href="#"><img src="{{ url('grazia/images/news.jpg') }}" alt=""></a>
                                </div>
                                <div class="text-holder">
                                    <div class="moda-news"><a href="#">moda</a></div>
                                    <div class="sub">kako nositi maxi haljine kao street style zvezde kako nositi maxi haljine kao street style zvezde</div>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis architecto facilis fugiat recusandae quidem perferendis libero reiciendis cum sapiente ipsa!S</p><span>24. april 2018.</span></div>
                            </article>
                            <article class="newsitem">
                                <div class="image-holder">
                                    <a href="#"><img src="{{ url('grazia/images/news.jpg') }}" alt=""></a>
                                </div>
                                <div class="text-holder">
                                    <div class="moda-news"><a href="#">moda</a></div>
                                    <div class="sub">kako nositi maxi haljine kao street style zvezde kako nositi maxi haljine kao street style zvezde</div>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis architecto facilis fugiat recusandae quidem perferendis libero reiciendis cum sapiente ipsa!S</p><span>24. april 2018.</span></div>
                            </article>
                        </div>
                    </div>
                    <div class="container"></div>
                </section>
            </div>

@endsection
