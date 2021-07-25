<nav id="sidebar" class="sidebar" style="overflow-y: visible!important">
    <div class="sidebar-content js-simplebar">
        @php
            $logo=DB::table('websites')->value('image');
        @endphp
        <a class="sidebar-brand" href="{{ route('admin.dashboard') }}">
  <span class="align-middle"><img src="{{ asset($logo) }}" alt="" width="80"></span>
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
                Manage Category
            </li>

            <li class="sidebar-item <?php  echo PAGE=='device'?'active':'' ?>">
                <a data-target="#ui" data-toggle="collapse" class="sidebar-link" aria-expanded="false"> <i class="fas fa-shopping-bag"></i> 
       <span class="align-middle">Category</span>
    </a>
                <ul id="ui" class="sidebar-dropdown list-unstyled collapse <?php  echo PAGE=='device'?'show':'' ?>" data-parent="#sidebar" style="">
               
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.category')}}">Category</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.subcategory')}}">Subcategory</a></li>
                   
                  
                </ul>
            </li>


            <li class="sidebar-header">
                Manage Product
            </li>

            <li class="sidebar-item <?php  echo PAGE=='product'?'active':'' ?>">
                <a data-target="#product" data-toggle="collapse" class="sidebar-link" aria-expanded="false">
  <i class="fas fa-envelope"></i> <span class="align-middle">Product</span>
    </a>
                <ul id="product" class="sidebar-dropdown list-unstyled collapse <?php  echo PAGE=='product'?'show':'' ?>" data-parent="#sidebar" style="">
               
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.product.create')}}">Add Product</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.product')}}">All Product</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.deactiveproduct')}}">Deactive Product</a></li>
                   
                </ul>
            </li>

        
        


            <li class="sidebar-header">
                Manage Order
             </li>
 
             <li class="sidebar-item <?php  echo PAGE=='order'?'active':'' ?>">
                 <a data-target="#order" data-toggle="collapse" class="sidebar-link" aria-expanded="false">
   <i class="fas fa-plane-departure"></i> <span class="align-middle">Order Trackingg</span>
     </a>
                 <ul id="order" class="sidebar-dropdown list-unstyled collapse <?php  echo PAGE=='order'?'show':'' ?>" data-parent="#sidebar" style="">
                     <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.order.new')}}">New Order</a></li>
                     <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.order.processing')}}">Processing Order</a></li>
                     <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.order.shipping')}}"> ShippingOrder</a></li>
                     <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.order.deliver')}}">Deliver order</a></li>
                     <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.order.cancel')}}"> Cancel Order</a></li>
                    
                 </ul>
             </li>
             <li class="sidebar-header">
                Gallery
            </li>
            <li class="sidebar-item <?php  echo PAGE=='gallery'?'active':'' ?>">
                <a data-target="#appointment" data-toggle="collapse" class="sidebar-link" aria-expanded="false">
  <i class="fas fa-envelope"></i> <span class="align-middle">Gallery</span>
    </a>
                <ul id="appointment" class="sidebar-dropdown list-unstyled collapse <?php  echo PAGE=='gallery'?'show':'' ?>" data-parent="#sidebar" style="">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.model')}}">Gallery</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.time')}}">Outlook</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('admin.ambassador')}}">Ambassadors</a></li>
                   
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
            <li class="sidebar-header">
         General
            </li>

            <li class="sidebar-item <?php  echo PAGE=='user'?'active':'' ?>">
                <a class="sidebar-link" href="{{ route('admin.user.list') }}">
      <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">User List</span>
    </a>
            </li>
            
            <li class="sidebar-item <?php  echo PAGE=='subscriber'?'active':'' ?>">
                <a class="sidebar-link" href="{{route('admin.subscriber')}}">
      <i class="align-middle" data-feather="user"></i> <span class="align-middle">Subscriber List</span>
    </a>
            </li>
            
            <li class="sidebar-item <?php  echo PAGE=='contact'?'active':'' ?>">
                <a class="sidebar-link" href="{{route('admin.contact')}}">
      <i class="fas fa-male"></i> <span class="align-middle">Contact List</span>
    </a>
            </li>
        </ul>
    </div>
</nav>