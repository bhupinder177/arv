@include('layouts.header')


  <section class="arvca_bg">

    <div class="container">
      <div class="cont_d">
        <h2>Allied Laws </h2>
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
  <h2>Allied Laws </h2>
  <p>An Act to consolidate and amend the laws relating to reorganisation and insolvency resolution of corporate persons, partnership firms and individuals in a time bound manner for maximisation of value of assets of such persons, to promote entrepreneurship, availability of credit and balance the interests of all the stakeholders including alteration in the order of priority of payment of Government dues and to establish an Insolvency and Bankruptcy Board of India, and for matters connected therewith or incidental thereto</p>


  <div class="button89">
      <a href="#">Read More</a>
  </div>
  </div>
</div>

</section>


<section>

<div class="container">
    <div class="make_Allied">
        <h3>Allied Laws </h3>
        <div class="row">

@if(!empty($alliedlaws))
<div class="col-lg-12">
<div class="makeopr">
        <ul>
          @foreach($alliedlaws as $alliedlaw)
            <li><a target="_blank" href="{{ asset('allied-laws/'.$alliedlaw->document) }}">{{ ucwords($alliedlaw->title) }}</a></li>
          @endforeach
        </ul>
    </div>
</div>
@endif

</div>


    </div>



</div>


</section>
@include('layouts.footer')
