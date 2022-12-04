@php
  $route = Route::current()->getName();
  $prefix = Request::route()->getPrefix();
@endphp
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
      <div class="user-profile">
			  <div class="ulogo">
				  <a href="{{ route('admin_dashboard') }}">
				    <!-- logo for regular state and mobile devices -->
					  <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{ asset('backend/images/logo-dark.png') }}" alt="">
						  <h3><b>Easy-Web</b> Shop</h3>
					  </div>
				  </a>
			  </div>
      </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
        <li class="{{ ($route == 'admin_dashboard')? 'active' : '' }}">
          <a href="{{ route('admin_dashboard') }}">
            <i data-feather="pie-chart"></i>
            <span>Dashboard</span>
          </a>
        </li>  
      
        <li class="treeview {{ ($prefix == '/brand')? 'active' : '' }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Brands</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li class="{{ ($route == 'all.brand')? 'active' : '' }}">
              <a href="{{ route('all.brand') }}"><i class="ti-more"></i>All Brands</a>
            </li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/categorie')? 'active' : '' }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li class="{{ ($route == 'all.categorie')? 'active' : '' }}">
              <a href="{{ route('all.categorie') }}"><i class="ti-more"></i>All category</a>
            </li>
            <li class="{{ ($route == 'all.sub.categorie')? 'active' : '' }}">
              <a href="{{ route('all.sub.categorie') }}"><i class="ti-more"></i>All sub-category</a>
            </li>
            <li class="{{ ($route == 'all.sub.sub.categorie')? 'active' : '' }}">
              <a href="{{ route('all.sub.sub.categorie') }}"><i class="ti-more"></i>All sub-sub-category</a>
            </li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/product')? 'active' : '' }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li class="{{ ($route == 'all.product')? 'active' : '' }}">
              <a href="{{ route('all.product') }}"><i class="ti-more"></i>All products</a>
            </li>
            <li class="{{ ($route == 'add.product')? 'active' : '' }}">
              <a href="{{ route('add.product') }}"><i class="ti-more"></i>Add products</a>
            </li>
            
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/slider')? 'active' : '' }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Sliders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li class="{{ ($route == 'all.slider')? 'active' : '' }}">
              <a href="{{ route('all.slider') }}"><i class="ti-more"></i>All Slider</a>
            </li>
            
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/coupon')? 'active' : '' }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Coupons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li class="{{ ($route == 'manage-coupon')? 'active' : '' }}">
              <a href="{{ route('manage-coupon') }}"><i class="ti-more"></i>Manage Coupon</a>
            </li>
            
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/shipping')? 'active' : '' }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Shipping Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li class="{{ ($route == 'manage-division')? 'active' : '' }}">
              <a href="{{ route('manage-division') }}"><i class="ti-more"></i>Ship Division</a>
            </li>
            <li class="{{ ($route == 'manage-district')? 'active':'' }}">
              <a href="{{ route('manage-district') }}"><i class="ti-more"></i>Ship District</a>
            </li>
            <li class="{{ ($route == 'manage-state')? 'active':'' }}">
              <a href="{{ route('manage-state') }}"><i class="ti-more"></i>Ship State</a>
            </li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/orders')? 'active' : '' }}">
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>orders Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li class="{{ ($route == 'pending-orders')? 'active':'' }}">
              <a href="{{ route('pending-orders') }}"><i class="ti-more"></i>Pending Orders</a>
            </li>

            <li class="{{ ($route == 'confirmed-orders')? 'active':'' }}">
              <a href="{{ route('confirmed-orders') }}"><i class="ti-more"></i>Confirmed Orders</a>
            </li>

            <li class="{{ ($route == 'processing-orders')? 'active':'' }}">
              <a href="{{ route('processing-orders') }}"><i class="ti-more"></i>Processing Orders</a>
            </li>

            <li class="{{ ($route == 'picked-orders')? 'active':'' }}">
              <a href="{{ route('picked-orders') }}"><i class="ti-more"></i> Picked Orders</a>
            </li>

            <li class="{{ ($route == 'shipped-orders')? 'active':'' }}">
              <a href="{{ route('shipped-orders') }}"><i class="ti-more"></i> Shipped Orders</a>
            </li>

            <li class="{{ ($route == 'delivered-orders')? 'active':'' }}">
              <a href="{{ route('delivered-orders') }}"><i class="ti-more"></i> Delivered Orders</a>
            </li>

            <li class="{{ ($route == 'cancel-orders')? 'active':'' }}">
              <a href="{{ route('cancel-orders') }}"><i class="ti-more"></i> Cancel Orders</a>
            </li>
          </ul>
        </li>
        
          <li class="treeview">
            <a href="#">
              <i data-feather="mail"></i> <span>Mailbox</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="mailbox_inbox.html"><i class="ti-more"></i>Inbox</a></li>
              <li><a href="mailbox_compose.html"><i class="ti-more"></i>Compose</a></li>
              <li><a href="mailbox_read_mail.html"><i class="ti-more"></i>Read</a></li>
            </ul>
          </li>
      
          <li class="treeview">
            <a href="#">
              <i data-feather="file"></i>
              <span>Pages</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="profile.html"><i class="ti-more"></i>Profile</a></li>
              <li><a href="invoice.html"><i class="ti-more"></i>Invoice</a></li>
              <li><a href="gallery.html"><i class="ti-more"></i>Gallery</a></li>
              <li><a href="faq.html"><i class="ti-more"></i>FAQs</a></li>
              <li><a href="timeline.html"><i class="ti-more"></i>Timeline</a></li>
            </ul>
          </li> 		  
      
          <li class="header nav-small-cap">User Interface</li>
        
          
      
      <li class="treeview">
            <a href="#">
              <i data-feather="credit-card"></i>
              <span>Cards</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
        <li><a href="card_advanced.html"><i class="ti-more"></i>Advanced Cards</a></li>
        <li><a href="card_basic.html"><i class="ti-more"></i>Basic Cards</a></li>
        <li><a href="card_color.html"><i class="ti-more"></i>Cards Color</a></li>
        </ul>
          </li>  
    </section>
	
	
  </aside>