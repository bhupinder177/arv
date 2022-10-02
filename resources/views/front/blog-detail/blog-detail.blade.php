@include('layouts.header')


      <section class="arvca_bg">

    <div class="container">
      <div class="cont_d">
        <h2>Blog ARV-CA</h2>
        <p> Insolvency Professionals & Restructuring Advisors Insolvency Professionals</p>
      </div>
    </div>

    </section>




<div class="sidebar-page-container sec-padd">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <section class="blog-section">

                  @if(!empty($blogs))

                    <div class="large-blog-news">
                        <div class="date">{{ $m = date("d", strtotime($blogs['created_at'])) }} <br> {{ $m = date("M", strtotime($blogs['created_at'])) }}</div>
                        <figure class="img-holder">
                            <a href="blog-details.html"><img src="{{ asset('blog/'.$blogs->image) }}" alt="News"></a>
                            <figcaption class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="blog-details.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="blog-details.html">{{ $blogs->title }}</a></h4>
                            <div class="post-meta">by {{ $blogs->user->firstName.' '.$blogs->user->lastName }}  |  {{ $blogs->category->name }}  |  18 Comments</div>
                            <div class="text">
                                <p>{{ $blogs->description }}</p>
                            </div>

                        </div>

                    </div>

                    @endif




                </section>


            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <div class="blog-sidebar">




                    <div class="popular_news">
                        <div class="inner-title">
                            <h4>latest news</h4>
                        </div>

                        <div class="popular-post">
                            <div class="item">
                                <div class="post-thumb"><a href="#"><img src="{{ asset('front/images/post-1.jpg') }}" alt=""></a></div>
                                <a href="#"><h5>Finance &amp; legal <br>throughout project.</h5></a>
                                <div class="post-info"><i class="fa fa-calendar"></i>Jan 08, 2017 </div>
                            </div>
                            <div class="item">
                                <div class="post-thumb"><a href="#"><img src="{{ asset('front/images/post-2.jpg') }}" alt=""></a></div>
                                <a href="#"><h5>What makes us best <br>in the world? </h5></a>
                                <div class="post-info"><i class="fa fa-calendar"></i>Dec 18, 2016</div>
                            </div>
                            <div class="item">
                                <div class="post-thumb"><a href="#"><img src="{{ asset('front/images/post-3.jpg') }}" alt=""></a></div>
                                <a href="#"><h5>Why People go with <br>Experts.</h5></a>
                                <div class="post-info"><i class="fa fa-calendar"></i>Nov 21, 2016 </div>
                            </div>
                        </div>
                    </div>




                </div> <!-- End of .wrapper -->
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
