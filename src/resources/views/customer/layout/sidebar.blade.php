<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <img src="{{ asset('assets/img/logo.png') }}" style="width: 150px;height: 61px;margin-left: 11%;">
   
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none text-black">
      <i class="bx bx-chevron-left bx-sm align-middle"></i> 
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ Request::routeIs('dashboard') ? 'active' : '' }}">
      <a href="{{route('dashboard')}}" class="menu-link">
        <i class="menu-icon fa fa-dashboard" aria-hidden="true"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>
   
   
  </ul>
</aside>