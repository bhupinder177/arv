
@include('admin.layouts.header')
@include('admin.layouts.sidebar')
<div class="page-content">
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-12">
                 <section class="content-header">
                   <ol class="breadcrumb">
                     <li class="active">Dashboard</li>
                   </ol>
                 </section>
                 <div class="row">



                     <!-- users -->
                     <div class="col-md-4">
                       <a href="{{URL::to($prefix.'/investors')}}">
                           <div class="emp wow bounceInDown  animated" style="visibility: visible; animation-name: bounceInDown;">
                               <ul class="ul-list unstyle mb-0">
                                   <li>
                                       <div class="bg-blue">
                                           <img src="{{ asset('admin/images/driver.png')}}" class="image-fluid">
                                       </div>
                                   </li>
                                   <li>
                                       <div class="content">
                                           <p>Blogs</p>
                                           <span>{{ $blogs }}</span>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                           </a>
                       </div>
                       <!-- users -->
                  









                 </div>
               </div>
               <!--.col-->

               <!--.col-->
           </div>
           <!--.row-->


       </div>
       <!--.container-fluid-->
   </div>
   <!--.page-content-->
    @include('admin.layouts.footer')
