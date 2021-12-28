<template>
  <main>
    <nav class="sb-topnav navbar navbar-expand navbar-danger bg-danger">
      <!-- Navbar Brand-->
      <h1 class="navbar-brand ps-3 text-white">AYO DONOR</h1>
      <!-- Sidebar Toggle-->
      <button
        class="btn btn-danger btn-sm order-1 order-lg-0 me-4 me-lg-0"
        id="sidebarToggle"
        href="#"
      >
        <svg
          class="svg-inline--fa fa-bars fa-w-14"
          aria-hidden="true"
          focusable="false"
          data-prefix="fas"
          data-icon="bars"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 448 512"
          data-fa-i2svg=""
        >
          <path
            fill="currentColor"
            d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
          ></path></svg
        ><!-- <i class="fas fa-bars"></i> Font Awesome fontawesome.com -->
      </button>
      <!-- Navbar Search-->
      <form
        class="
          d-none d-md-inline-block
          form-inline
          ms-auto
          me-0 me-md-3
          my-2 my-md-0
        "
      >
        <div class="input-group">
          <input
            class="form-control"
            type="text"
            placeholder="Search for..."
            aria-label="Search for..."
            aria-describedby="btnNavbarSearch"
          />
          <button class="btn btn-primary" id="btnNavbarSearch" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
      <!-- Navbar-->
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            id="navbarDropdown"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            ><i class="fas fa-user fa-fw"></i
          ></a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdown"
          >
            <li><a class="dropdown-item" href="#!">Settings</a></li>
            <li><a class="dropdown-item" href="#!">Activity Log</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="#!">Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu btn btn-danger">
            <div class="nav">
              <router-link class="nav-link" to="/vue/dashboard">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-tachometer-alt"></i>
                </div>
                Beranda
              </router-link>
              <router-link class="nav-link" to="/vue/datapendonor">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Data Pendonor
              </router-link>
              <router-link class="nav-link" to="/vue/datapetugas">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Data Petugas
              </router-link>
            </div>
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <router-view></router-view>
        </main>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">UDD Kabupaten Buleleng 2021</div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </main>
</template>

<script>
export default {};
</script>
