<nav id="sidebar" class="sidebar" style="overflow-y: visible!important">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
  <span class="align-middle">Soeng Souy</span>
</a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item <?php  echo PAGE=='dashboard'?'active':'' ?>">
                <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
      <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
    </a>
            </li>
            

            <li class="sidebar-item <?php  echo PAGE=='profile'?'active':'' ?>">
                <a class="sidebar-link" href="{{route('admin.profile')}}">
      <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
    </a>
            </li>
            
            <li class="sidebar-item <?php  echo PAGE=='coupon'?'active':'' ?>">
                <a class="sidebar-link" href="{{route('admin.coupon')}}">
      <i class="fas fa-copy" ></i> <span class="align-middle">Coupon</span>
    </a>
            </li>
            <li class="sidebar-header">
                Manage Device
            </li>

            <li class="sidebar-item <?php  echo PAGE=='device'?'active':'' ?>">
                <a data-target="#ui" data-toggle="collapse" class="sidebar-link" aria-expanded="false"> <i class="fas fa-shopping-bag"></i> 
       <span class="align-middle">Brand & Device</span>
    </a>
                <ul id="ui" class="sidebar-dropdown list-unstyled collapse <?php  echo PAGE=='device'?'show':'' ?>" data-parent="#sidebar" style="">
               
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.category')}}">Brand</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.subcategory')}}">Device</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.model')}}">Model</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.part')}}">Accesories</a></li>
                </ul>
            </li>


            <li class="sidebar-header">
                Manage Product
            </li>

            <li class="sidebar-item <?php  echo PAGE=='product'?'active':'' ?>">
                <a data-target="#product" data-toggle="collapse" class="sidebar-link" aria-expanded="false">
  <i class="fas fa-envelope"></i> <span class="align-middle">Product</span>
    </a>
                <ul id="product" class="sidebar-dropdown list-unstyled collapse <?php  echo PAGE=='product'?'product':'' ?>" data-parent="#sidebar" style="">
               
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.product.create')}}">Add Product</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.product')}}">All Product</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.deactiveproduct')}}">Deactive Product</a></li>
                   
                </ul>
            </li>



            <li class="sidebar-header">
                Settings
            </li>

            <li class="sidebar-item <?php  echo PAGE=='setting'?'active':'' ?>">
                <a data-target="#setting" data-toggle="collapse" class="sidebar-link" aria-expanded="false">
  <i class="fas fa-cogs"></i> <span class="align-middle">Setting</span>
    </a>
                <ul id="setting" class="sidebar-dropdown list-unstyled collapse <?php  echo PAGE=='setting'?'show':'' ?>" data-parent="#sidebar" style="">
               
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.banner')}}">Banner Setting</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.website')}}">Frontend Setting</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.page')}}">Page Setting</a></li>
                   
                </ul>
            </li>

            <li class="sidebar-header">
                Manage Blog
            </li>

            <li class="sidebar-item <?php  echo PAGE=='blog'?'active':'' ?>">
                <a data-target="#blog" data-toggle="collapse" class="sidebar-link" aria-expanded="false">
  <i class="fas fa-envelope"></i> <span class="align-middle">Blog Category</span>
    </a>
                <ul id="blog" class="sidebar-dropdown list-unstyled collapse <?php  echo PAGE=='blog'?'show':'' ?>" data-parent="#sidebar" style="">
                  <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.blogcategory')}}">Category</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.blog')}}">Blog</a></li>
                 
                 
                   
                </ul>
            </li>


            
            <li class="sidebar-item <?php  echo PAGE=='subscriber'?'active':'' ?>">
                <a class="sidebar-link" href="{{route('admin.subscriber')}}">
      <i class="align-middle" data-feather="user"></i> <span class="align-middle">Subscriber</span>
    </a>
            </li>
            
            <li class="sidebar-item <?php  echo PAGE=='contact'?'active':'' ?>">
                <a class="sidebar-link" href="{{route('admin.contact')}}">
      <i class="fas fa-male"></i> <span class="align-middle">Contact Request</span>
    </a>
            </li>
        </ul>
    </div>
</nav>