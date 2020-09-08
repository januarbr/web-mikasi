   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
  <div class="sidebar-brand-text mx-3">ENOM Admin </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="{{route('dashboard')}}">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="{{route('member.index')}}">
  <i class="fas fa-users"></i>
    <span>Anggota</span></a>
</li>
<!-- <li class="nav-item active">
  <a class="nav-link" href="{{route('buku.index')}}">
  <i class="fas fa-fw fa-images"></i>
    <span>Buku</span></a>
</li> -->
<li class="nav-item active">
  <a class="nav-link" href="{{route('materi.index')}}">
  <i class="fas fa-align-left"></i>
    <span>Materi</span></a>
</li>
<!-- <li class="nav-item active">
  <a class="nav-link" href="{{route('anggota.index')}}">
  <i class="fas fa-users-cog"></i>
    <span>Petugas</span></a>
</li> -->
<!-- Divider -->
<hr class="sidebar-divider">


<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->