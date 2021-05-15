<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
  <span class="align-middle">Soeng Souy</span>
</a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="index.html">
      <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
    </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('admin.profile')}}">
      <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
    </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('admin.coupon')}}">
      <i class="fas fa-copy" ></i> <span class="align-middle">Coupon</span>
    </a>
            </li>
            <li class="sidebar-header">
                Manage Device
            </li>

            <li class="sidebar-item">
                <a data-target="#ui" data-toggle="collapse" class="sidebar-link" aria-expanded="false"> <i class="fas fa-shopping-bag"></i> 
       <span class="align-middle">Brand & Device</span>
    </a>
                <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar" style="">
               
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.category')}}">Brand</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.subcategory')}}">Device</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.model')}}">Model</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.part')}}">Accesories</a></li>
                </ul>
            </li>


            <li class="sidebar-header">
                Manage Product
            </li>

            <li class="sidebar-item">
                <a data-target="#product" data-toggle="collapse" class="sidebar-link" aria-expanded="false">
  <i class="fas fa-envelope"></i> <span class="align-middle">Product</span>
    </a>
                <ul id="product" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar" style="">
               
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.product.create')}}">Add Product</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.product')}}">All Product</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.deactiveproduct')}}">Deactive Product</a></li>
                   
                </ul>
            </li>

<li class="sidebar-header">
                Manage Blog
            </li>

            <li class="sidebar-item">
                <a data-target="#blog" data-toggle="collapse" class="sidebar-link" aria-expanded="false">
  <i class="fas fa-envelope"></i> <span class="align-middle">Blog Category</span>
    </a>
                <ul id="blog" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar" style="">
                  <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.blogcategory')}}">Category</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.blog')}}">Blog</a></li>
                 
                 
                   
                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="icons-feather.html">
      <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
    </a>
            </li>

            <li class="sidebar-item">
                <a data-target="#forms" data-toggle="collapse" class="sidebar-link collapsed">
      <i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Forms</span>
    </a>
                <ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">Form Layouts</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="forms-basic-inputs.html">Basic Inputs</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="tables-bootstrap.html">
      <i class="align-middle" data-feather="list"></i> <span class="align-middle">Tables</span>
    </a>
            </li>

            <li class="sidebar-header">
                Plugins & Addons
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="charts-chartjs.html">
      <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
    </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="maps-google.html">
      <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
    </a>
            </li>
        </ul>
    </div>
</nav>