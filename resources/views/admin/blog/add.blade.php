@include('admin.layouts.header')
@include('admin.layouts.sidebar')
<div class="page-content">
    <section class="content-header">
        <ol class="breadcrumb">
            <li class="active">Add Blog</li>
        </ol>
    </section>
    <div class="container-fluid">
        <div class="">
            <form action="{{route('blog.save')}}" method="post" enctype="multipart/form-data" class="reset general_form" id="addCommonEditor">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Title <span class="red">*</span></label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        
                            <label>Category <span class="red">*</span></label>
                           <select class="form-control" name="category_id" id="category">
                               <option value="">Select Category</option>
                               @if(!empty($categories))
                                   @foreach($categories as $getCategory)

                                       <option value="{{$getCategory->id}}">{{$getCategory->name}}</option>
                                   @endforeach
                               @endif
                           </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                          <label>Image<span class="red">*</span></label>
    <input type="file"  class="form-control " name="blog_image"   id="blog_image">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Description <span class="red">*</span></label>
                            <textarea class="form-control" name="description" id="description"></textarea>
                        </div>
                    </div>


                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-rounded button-disabled" >Save</button>
                    <button type="button" class="cancel btn btn-rounded btn-default button-disabled" >Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@php
$showTextEditor = 1;
@endphp
@include('admin.layouts.footer')
