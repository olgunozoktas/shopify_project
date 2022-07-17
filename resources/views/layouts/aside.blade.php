<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('home')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link" data-bs-target="#components-nav" data-bs-toggle="collapse" aria-expanded="true" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Shopify</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('shopify.orders')}}">
              <i class="bi bi-circle"></i><span>Orders</span>
            </a>
          </li>
          <li>
            <a href="{{route('shopify.products')}}">
              <i class="bi bi-circle"></i><span>Products</span>
            </a>
          </li>
          <li>
            <a href="{{route('shopify.customers')}}">
              <i class="bi bi-circle"></i><span>Customers</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('my.team')}}">
          <i class="bi bi-people"></i>
          <span>My Team</span>
        </a>
      </li><!-- End Contact Page Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('settings')}}">
          <i class="bi bi-wrench"></i>
          <span>Settings</span>
        </a>
      </li><!-- End Contact Page Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed"  onclick="event.preventDefault(); document.getElementById('logout-user').submit();">
          <i class="bi bi-box-arrow-right"></i>
            <form id="logout-user" action="{{ route('logout') }}" method="POST" class="d-none" style="display: none">
                @csrf
            </form>
          <span>Sign Out</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside>