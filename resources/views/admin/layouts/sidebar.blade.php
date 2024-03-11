<!--start sidebar-->
<aside class="sidebar-wrapper">
  <div class="sidebar-header">
    <div class="logo-icon">
      <img src="{{asset('')}}backend/assets/images/logo-icon.png" class="logo-img" alt="">
    </div>
    <div class="logo-name flex-grow-1">
      <h5 class="mb-0">PSM-POS</h5>
    </div>
    <div class="sidebar-close ">
      <span class="material-symbols-outlined">close</span>
    </div>
  </div>
  <div class="sidebar-nav" data-simplebar="true">

    <!--navigation-->
    <ul class="metismenu" id="menu">
      <li>
        <a href="index.html">
          <div class="parent-icon"><span class="material-symbols-outlined">home</span>
          </div>
          <div class="menu-title">Dashboard</div>
        </a>
      </li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><span class="material-symbols-outlined">apps</span>
          </div>
          <div class="menu-title">Application</div>
        </a>
        <ul>
          <li> <a href="app-emailbox.html"><span class="material-symbols-outlined">arrow_right</span>Email</a>
          </li>
          <li> <a href="app-chat-box.html"><span class="material-symbols-outlined">arrow_right</span>Chat Box</a>
          </li>
          <li> <a href="app-file-manager.html"><span class="material-symbols-outlined">arrow_right</span>File Manager</a>
          </li>
          <li> <a href="app-contact-list.html"><span class="material-symbols-outlined">arrow_right</span>Contatcs</a>
          </li>
          <li> <a href="app-to-do.html"><span class="material-symbols-outlined">arrow_right</span>Todo List</a>
          </li>
          <li> <a href="app-invoice.html"><span class="material-symbols-outlined">arrow_right</span>Invoice</a>
          </li>
          <li> <a href="app-fullcalender.html"><span class="material-symbols-outlined">arrow_right</span>Calendar</a>
          </li>
        </ul>
      </li>
      <li class="menu-label">UI Elements</li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><span class="material-symbols-outlined">widgets</span>
          </div>
          <div class="menu-title">Category</div>
        </a>
        <ul>
          <li> <a href="{{route('category')}}"><span class="material-symbols-outlined">arrow_right</span>List of Category</a>
          </li>
          <li> <a href="{{route('category.post')}}"><span class="material-symbols-outlined">arrow_right</span>Add Category</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><span class="material-symbols-outlined">shopping_cart</span>
          </div>
          <div class="menu-title">eCommerce</div>
        </a>
        <ul>
          <li> <a href="{{route('medicine.post')}}"><span class="material-symbols-outlined">arrow_right</span>Add Medicine</a>
          </li>
          <li> <a href="{{route('medicine')}}"><span class="material-symbols-outlined">arrow_right</span>Medicines</a>
          </li>
          <li> <a href="{{route('customers')}}"><span class="material-symbols-outlined">arrow_right</span>Customers</a>
          </li>
          <li> <a href="{{route('customers')}}"><span class="material-symbols-outlined">arrow_right</span>Customer Details</a>
          </li>
          <li> <a href="{{route('orders')}}"><span class="material-symbols-outlined">arrow_right</span>Orders</a>
          </li>
          <li> <a href="{{route('orders')}}"><span class="material-symbols-outlined">arrow_right</span>Order Details</a>
          </li>
        </ul>
      </li>
      <li>
        <a class="has-arrow" href="javascript:;">
          <div class="parent-icon"><span class="material-symbols-outlined">redeem</span>
          </div>
          <div class="menu-title">POS</div>
        </a>
        <ul>
          <li> <a href="{{route('sales')}}"><span class="material-symbols-outlined">arrow_right</span>Sales</a>
          </li>
        </ul>
      </li>
      <li>
        <a class="has-arrow" href="javascript:;">
          <div class="parent-icon"><span class="material-symbols-outlined">add_reaction</span>
          </div>
          <div class="menu-title">Supplier</div>
        </a>
        <ul>
          <li> <a href="{{route('suppliers')}}"><span class="material-symbols-outlined">arrow_right</span>Supplier List</a>
          </li>
          <li> <a href="icons-boxicons.html"><span class="material-symbols-outlined">arrow_right</span>Add Supplier</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="user-profile.html">
          <div class="parent-icon"><span class="material-symbols-outlined">account_circle</span>
          </div>
          <div class="menu-title">User Profile</div>
        </a>
      </li>
      <li>
        <a href="faq.html">
          <div class="parent-icon"><span class="material-symbols-outlined">call</span>
          </div>
          <div class="menu-title">FAQ</div>
        </a>
      </li>
      <li>
        <a href="pricing-table.html">
          <div class="parent-icon"><span class="material-symbols-outlined">currency_bitcoin</span>
          </div>
          <div class="menu-title">Pricing</div>
        </a>
      </li>
      <li class="menu-label">Charts & Maps</li>
      <li>
        <a class="has-arrow" href="javascript:;">
          <div class="parent-icon"><span class="material-symbols-outlined">monitoring</span>
          </div>
          <div class="menu-title">Charts</div>
        </a>
        <ul>
          <li> <a href="charts-apex.html"><span class="material-symbols-outlined">arrow_right</span>Apex</a>
          </li>
          <li> <a href="charts-chartjs.html"><span class="material-symbols-outlined">arrow_right</span>Chartjs</a>
          </li>
        </ul>
      </li>
      <li>
        <a class="has-arrow" href="javascript:;">
          <div class="parent-icon"><span class="material-symbols-outlined">distance</span>
          </div>
          <div class="menu-title">Maps</div>
        </a>
        <ul>
          <li> <a href="map-google-maps.html"><span class="material-symbols-outlined">arrow_right</span>Google Maps</a>
          </li>
          <li> <a href="map-vector-maps.html"><span class="material-symbols-outlined">arrow_right</span>Vector Maps</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="javascript:;">
          <div class="parent-icon"><span class="material-symbols-outlined">shop</span>
          </div>
          <div class="menu-title">Support</div>
        </a>
      </li>
    </ul>
    <!--end navigation-->


  </div>
  <div class="sidebar-bottom dropdown dropup-center dropup">
    <div class="dropdown-toggle d-flex align-items-center px-3 gap-3 w-100 h-100" data-bs-toggle="dropdown">
      <div class="user-img">
        <img src="{{asset('')}}backend/assets/images/avatars/01.png" alt="">
      </div>
      <div class="user-info">
        <h5 class="mb-0 user-name">Jhon Maxwell</h5>
        <p class="mb-0 user-designation">UI Engineer</p>
      </div>
    </div>
    <ul class="dropdown-menu dropdown-menu-end">
      <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
            account_circle
          </span><span>Profile</span></a>
      </li>
      <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
            tune
          </span><span>Settings</span></a>
      </li>
      <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
            dashboard
          </span><span>Dashboard</span></a>
      </li>
      <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
            account_balance
          </span><span>Earnings</span></a>
      </li>
      <li><a class="dropdown-item" href="javascript:;"><span class="material-symbols-outlined me-2">
            cloud_download
          </span><span>Downloads</span></a>
      </li>
      <li>
        <div class="dropdown-divider mb-0"></div>
      </li>
      
      <form class="dropdown-item d-flex align-items-center" action="{{route('logout')}}" method="post">
        @csrf
        <li><span class="material-symbols-outlined me-2">
              logout
            </span><input type="submit" style="border: none; outline:none" value="Logout"></input>
        </li>
        </form>

    </ul>
  </div>
</aside>
<!--end sidebar-->