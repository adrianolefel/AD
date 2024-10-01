<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">MYINVN<sup></sup></div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('computers') }}">
      <i class="fas fa-fw fa-desktop"></i>
      <span>ADD INVENTORY</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('profile') }}"> <!-- Ensure this route is defined -->
      <i class="fas fa-fw fa-user"></i>
      <span>Profile</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('network-equipments') }}">
      <i class="fas fa-fw fa-network-wired"></i>
      <span>ADD INVENTORY</span>
    </a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('sendEmail.form') }}">
        <i class="fas fa-fw fa-envelope"></i>
        <span>Send Email</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('generate-pdf') }}">
      <i class="fas fa-fw fa-file-pdf"></i>
      <span>Generate PDF</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>#</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>#</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>#</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>#</span></a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
</ul>

