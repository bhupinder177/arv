<div class="mobile-menu-left-overlay"></div>
<nav class="side-menu">
  <ul class="side-menu-list">

    <!-- *******************Admin start menu ************************-->
    <?php
                $url = URL::to('/');
                $string = request()->route()->getPrefix();
                $getprefix = str_replace('/', '', $string);
                $segment   = Request::segment(2);
                $prefixurl = $url.'/'.$getprefix.'/';
                $authuser = Auth::user();
                ?>


    <li  <?php if(request()->segment(2) == "dashboard"){ ?>class="active" <?php } ?> >
      <a href="{{URL::to($getprefix.'/dashboard')}}">
        <span><i class="fa fa-tachometer"></i><span class="lbl">Dashboard</span></span>
      </a>
    </li>





        <li <?php if(request()->segment(2) == "settings" ){ ?>class="active" <?php } ?>>
            <a href="{{route('settings.index')}}">
                <span><i class="fa fa-cog" aria-hidden="true"></i><span class="lbl">General Settings</span></span>
            </a>
        </li>
        
        <li <?php if(request()->segment(2) == "page" ){ ?>class="active" <?php } ?>>
            <a href="{{route('page.index')}}">
                <span><i class="fa fa-tasks" aria-hidden="true"></i><span class="lbl">Pages</span></span>
            </a>
        </li>
        <li <?php if(request()->segment(2) == "blog" ){ ?>class="active" <?php } ?>>
            <a href="{{route('blog.index')}}">
                <span><i class="fa fa-tasks" aria-hidden="true"></i><span class="lbl">Blogs</span></span>
            </a>
        </li>
    </ul>
</nav>

<!--.side-menu-->
