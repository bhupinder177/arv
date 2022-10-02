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
                  @foreach($blogs as $b)
                    <div class="large-blog-news">
                        <div class="date">{{ $m = date("d", strtotime($b->created_at)) }} <br> {{ $m = date("M", strtotime($b->created_at)) }}</div>
                        <figure class="img-holder">
                            <a href="{{URL::to('/blog-detail/'.$b->id)}}"><img src="{{ asset('blog/'.$b->image) }}" alt="News"></a>
                            <figcaption class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="{{URL::to('/blog-detail/'.$b->id)}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="blog-details.html">{{ $b->title }}</a></h4>
                            <div class="post-meta">by {{ $b->user->firstName.' '.$b->user->lastName }}  |  {{ $b->category->name }}  |  18 Comments</div>
                            <div class="text">
                                <p>{!! substr(strip_tags($b->description), 0, 300) !!}</p>
                            </div>
                            <div class="link">
                                <a href="{{URL::to('/blog-detail/'.$b->id)}}" class="thm-btn">Read More</a>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    @endif


{{ $blogs->links() }}
                    <!-- <ul class="page_pagination center">
                        <li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="active tran3s">1</a></li>
                        <li><a href="#" class="tran3s">2</a></li>
                        <li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    </ul> -->

                </section>


            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <div class="blog-sidebar">
                    <div class="sidebar_search">
                        <form action="#">
                            <input type="text" placeholder="Search....">
                            <button class="tran3s color1_bg"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div><br><br> <!-- End of .sidebar_styleOne -->

                    <div class="category-style-one">
                        <div class="inner-title">
                            <h4>Categories</h4>
                        </div>
                        <ul class="list">
                            <li><a href="#" class="clearfix"><span class="float_left">Business Growth </span><span class="float_right">(6)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">Consulting </span><span class="float_right">(2)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">Management  </span><span class="float_right">(5)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">Customer Insights </span><span class="float_right">(10)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">Organization  </span><span class="float_right">(4)</span></a></li>
                        </ul>
                    </div><br> <!-- End of .sidebar_categories -->

                    <div class="popular_news">
                        <div class="inner-title">
                            <h4>latest news</h4>
                        </div>

                        <div class="popular-post">
                          @if(!empty($latests))
                          @foreach($latests as $a)
                            <div class="item">
                                <div class="post-thumb"><a href="{{URL::to('/blog-detail/'.$a->id)}}"><img src="{{ asset('blog/'.$a->image) }}" alt=""></a></div>
                                <a href="{{URL::to('/blog-detail/'.$a->id)}}"><h5>{{ $a->title }}</h5></a>
                                <div class="post-info"><i class="fa fa-calendar"></i>{{ $m = date("M d, Y", strtotime($a->created_at)) }} </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>





                </div> <!-- End of .wrapper -->
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
