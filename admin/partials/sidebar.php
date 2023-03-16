<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="/admin/index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#profile-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i>
          <span>Profile</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="profile-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="?p=view-profile">
            <i class="bi bi-circle"></i><span>Wiev profile</span>
          </a>
        </li>
        <li>
          <a href="?p=edit-profile">
            <i class="bi bi-circle"></i><span>Edit profile</span>
          </a>
        </li>
      </ul>
    </li>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#ads-nav" data-bs-toggle="collapse" href="#">
    <i class="bi bi-card-list"></i>
      <span>Ads</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="ads-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="?p=view-ads">
          <i class="bi bi-circle"></i><span>Wiev Ads</span>
        </a>
      </li>
      <li>
        <a href="?p=edit-ad">
          <i class="bi bi-circle"></i><span>Edit Ad</span>
        </a>
      </li>
    </ul>
  </li><!-- End ADs Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="/index.php">
    <i class="bi bi-box-arrow-right"></i>
      <span>Sign Out</span>
    </a>
  </li><!-- End Login Page Nav -->
</ul>

</aside><!-- End Sidebar-->