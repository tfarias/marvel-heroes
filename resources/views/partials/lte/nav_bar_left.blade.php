<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      @if(file_exists(asset('img/logo.png')))
      <img src="{{asset('img/logo.png')}}" alt="Home" class="brand-image img-circle elevation-3" style="opacity: .8">
      @endif
     <span class="brand-text font-weight-light">Marvel Heróis</span>
    </a>

    <div class="sidebar">
      <div class="form-inline">

      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        {{--menu--}}
        </ul>
      </nav>
    </div>
</aside>
