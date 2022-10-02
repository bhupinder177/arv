@include('layouts.header')

  <section class="arvca_bg">

    <div class="container">
      <div class="cont_d">
        <h2>Knowledge Legal  </h2>

      </div>
    </div>

    </section>

    <!-- end -->

<section class="related2 allend">

<div class="container">

<div class="row">
    <div class="col-lg-12">
  <h2>{{ ucwords($knowledges->title) }}</h2>








  <div class="button89">
      <!--<a href="#">Read More</a>-->
  </div>
  </div>
</div>

</section>


<section>
    <div class="container">


<div class="knowled_section">
    <div class="row equl-boxmga">
        <!-- box1 -->
<div class="col-md-12">
<div class="knowl_box quile-cont2">
    <div class="box_know_mg"><img src="{{ asset('knowledge/'.$knowledges->image) }}"></div>

    <div class="des_knowl">

        <p>{!! $knowledges->description !!}</p>
    </div>
</div>
</div>
</div>
<!-- end -->

    </div>
</div>




    </div>



</section>


@include('layouts.footer')
