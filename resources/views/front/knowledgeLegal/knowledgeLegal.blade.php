@include('layouts.header')

  <section class="arvca_bg">

    <div class="container">
      <div class="cont_d">
        <h2>Knowledge Legal  </h2>
        <p> Insolvency Professionals & Restructuring Advisors Insolvency Professionals
</p>
      </div>
    </div>

    </section>

    <!-- end -->

<section class="related2 allend">

<div class="container">

<div class="row">
    <div class="col-lg-12">
  <h2>Knowledge Legal  </h2>
  <p>An Act to consolidate and amend the laws relating to reorganisation and insolvency resolution of corporate persons, partnership firms and individuals in a time bound manner for maximisation of value of assets of such persons, to promote entrepreneurship, availability of credit and balance the interests of all the stakeholders including alteration in the order of priority of payment of Government dues and to establish an Insolvency and Bankruptcy Board of India, and for matters connected therewith or incidental thereto.</p>









  <div class="button89">
      <!--<a href="#">Read More</a>-->
  </div>
  </div>
</div>

</section>


<section>
    <div class="container">
        <div class="know_heding">
            <h2>INSOL Top Picks</h2>
            <p></p>

        </div>

@if(!empty($knowledges))
<div class="knowled_section">
    <div class="row equl-boxmga">
@foreach($knowledges as $knowledge)
        <!-- box1 -->
<div class="col-lg-3 col-md-4 mb-4">
    <a target="_blank" href="{{URL::to('/knowledge-detail/'.$knowledge->id)}}">
<div class="knowl_box quile-cont2">
    <div class="box_know_mg"><img src="{{ asset('knowledge/'.$knowledge->image) }}"></div>

    <div class="des_knowl">
        <h4>{{ ucwords($knowledge->title) }}</h4>
        <p>{!! substr(strip_tags($knowledge->description), 0, 100) !!}</p>
    </div>
</div>
</div>
</div>
<!-- end -->
@endforeach

    </div>
</div>
@endif



    </div>



</section>


@include('layouts.footer')
