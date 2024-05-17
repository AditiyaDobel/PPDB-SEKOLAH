<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard | Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/avatars/1.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="admin.php" class="app-brand-link">
             
              <span class="app-brand-text demo menu-text fw-bolder ms-2">MENU PPDB</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="admin.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class=' menu-icon tf-icons bx bx-tachometer'></i>
                <div data-i18n="Layouts">Data Master</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="../pages/regis.php" class="menu-link">
                    <div data-i18n="Without menu">Registrasi</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../pages/input_gelombang.php" class="menu-link">
                    <div data-i18n="Without navbar">Input Gelombang</div>
                  </a>
                </li>
                
              </ul>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Another Menu</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class='menu-icon tf-icons bx bx-receipt'></i>
                <div data-i18n="Layouts">Pendaftaran</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="../pages/daftar_baru.php" class="menu-link">
                    <div data-i18n="Without menu">Daftar Baru</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../pages/data_siswa.php" class="menu-link">
                    <div data-i18n="Without navbar">Data Siswa</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../pages/data_kaos.php" class="menu-link">
                    <div data-i18n="Without navbar">Data Seragam</div>
                  </a>
                </li>
                
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='menu-icon tf-icons bx bxs-shopping-bag-alt'></i>
                <div data-i18n="Authentications">Pembayaran</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="../pages/transaksi.php" class="menu-link" >
                    <div data-i18n="Basic">Transaksi</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../pages/data_pembayaran.php" class="menu-link" >
                    <div data-i18n="Basic">Data Pembayaran</div>
                  </a>
                </li>
               
              </ul>
            </li>
           
            <!-- Components -->
            <!-- Cards -->
            <li class="menu-item">
              <a href="../logout.php" class="menu-link">
                <i class='menu-icon tf-icons bx bx-log-out bx bx-collection'></i>
                <div data-i18n="Basic">Logout</div>
              </a>
            </li>
            <!-- User interface -->
           

            <!-- Extended components -->
          

            <!-- Forms & Tables -->
            
            <!-- Misc -->
            
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
              

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/3c5201a700e726663d1a9bded07eedd6.jpg" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/3c5201a700e726663d1a9bded07eedd6.jpg" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Cecillia-Chan</span>
                            <small class="text-muted">Wife</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                   
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
              


                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
               <?php
              include "../koneksi.php";
              $query = "SELECT COUNT(*) AS total_siswa FROM data_siswa";
              $result = mysqli_query($koneksi,$query);

              if(!$result){
                die("Query error:" .mysqli_error($koneksi));
              }

              $row = mysqli_fetch_assoc($result);
              $total_siswa = $row['total_siswa'];

              $koneksi->close();
              ?>
             
              <div class="row">
                <!-- Order Statistics -->
              
                <!--/ Order Statistics -->

                <!-- Expense Overview -->
                
                <!--/ Expense Overview -->

                <!-- Transactions -->
              
                <!--/ Transactions -->
              </div>
              <div class="row">
              
              <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                  
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 25 25" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><circle cx="6" cy="4" r="2"></circle><path d="M9 7H3a1 1 0 0 0-1 1v7h2v7h4v-7h2V8a1 1 0 0 0-1-1z"></path><circle cx="17" cy="4" r="2"></circle><path d="M20.21 7.73a1 1 0 0 0-1-.73h-4.5a1 1 0 0 0-1 .73L12 14h2l-1 4h2v4h4v-4h2l-1-4h2z"></path></svg>
                          </div>
                         
                        </div>
                        <span>Siswa/i</span>
                        <h3 class="card-title mb-2"><?php echo $row['total_siswa'];?></h3>
                          </div>
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADYAAAA2CAYAAACMRWrdAAAAAXNSR0IArs4c6QAAAhBJREFUaEPtmjtOA0EMhr/wFtDTUFBxADgBR6FEdECLeEgUSIiKAgokbgIX4ABU0NDQISGQeMdF0GZwsma0ZiebGWmLJPP4P3tsZ3e2RUNbq6FcZLBB82z2WNM8Ng0sA6OJgX0A18BzL139tuI6cAjMJAbVkfMEbAFnmr5eYPvAdqJAoaxN4Dj8UgNbBG4GBKojcw54KGrWwMQCRwMGtgpclIHtAjsB2EpioJeBHtEr4fPTNI+FYK/AZGJgX4GevfZn0Z3BxAJD5bGFdrDK9dd2FQywzHMHyFVsbltRSzAWyDCmLfP8ip92cstgRWtbsqLF0poHk/LYGzARqKwb7BO6bpKj0r0nWGzySB7MknC0PhmsX/Lw3IqN9VhjY8ySXbUCnXyM1Qr2DownVsfkYc5IQVNUHRsqMEvQaxmvqn/3bh6LTdNVjctg/Qq0FmNVWT52HjePxcZYDIh2B+0GZqk/MRDaGK1AVwImk4xVVMdiYDUwCY/iQUlUHctgMe4wjPlXj9WdPNy2osHQrl0yWL8CrSUPV3cYJo/ymBzJdJ1cAKkfI4leSTI/TTtGkrPnE4PVUuqyBpyWgUnGu01JtUHLPHBfBia/a9vRMH8tXcyH6x11G+1HAgfAVC1yyxd9BATqXOta9srRLLAUPF8oX9K/h2RFeYHlpddSZWD+Ep1WyGBOhnWbNnvMzbROEzfWY99IVsk37AiOLAAAAABJRU5ErkJggg=="/>
                     </div>    
                     </div>
                        <span>Jurusan</span>
                        <h3 class="card-title text-nowrap mb-2">5</h3>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 25 25" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"></path><path d="M12 11c-2 0-2-.63-2-1s.7-1 2-1 1.39.64 1.4 1h2A3 3 0 0 0 13 7.12V6h-2v1.09C9 7.42 8 8.71 8 10c0 1.12.52 3 4 3 2 0 2 .68 2 1s-.62 1-2 1c-1.84 0-2-.86-2-1H8c0 .92.66 2.55 3 2.92V18h2v-1.08c2-.34 3-1.63 3-2.92 0-1.12-.52-3-4-3z"></path></svg>
                     </div>    
                     </div>
                <footer class="footer">
                <?php
                include '../koneksi.php';
                $query = "SELECT SUM(bayar - kembalian) AS total_pengurangan FROM data_bayar";
                $result = mysqli_query($koneksi,$query);
                if(!$result){
                  die("Query error:" .mysqli_error($koneksi));
                }
                $row = mysqli_fetch_assoc($result);
                $total_pengurangan = $row['total_pengurangan'];
                $koneksi->close();
                ?>
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                  <span class=d-block text-center text-sm-left d-sm-inline-block" style="font-size:20px;">RP. <?php echo $row['total_pengurangan'];?></span>
              </div>
              </footer>
                        </div>
                    </div>
                  </div>
                </div>

                <?php
                include '../koneksi.php';
                $query_tanggal = "SELECT tanggal FROM data_bayar ORDER BY tanggal DESC LIMIT 1";
                $result_tanggal = mysqli_query($koneksi,$query_tanggal);
                if(!$result_tanggal){
                  die("Query error:" .mysqli_error($koneksi));
                }
                $row_tanggal = mysqli_fetch_assoc($result_tanggal);
                $tanggal = $row_tanggal['tanggal'];
                $query = "SELECT SUM(bayar - kembalian) AS total_income FROM data_bayar WHERE tanggal = '$tanggal'";
                $result = mysqli_query($koneksi,$query);

                if(!$result){
                  die("Query error:" .mysqli_error($koneksi));
                }
                $row = mysqli_fetch_assoc($result);
                $total_income = $row['total_income'];
                ?>

                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADYAAAA2CAYAAACMRWrdAAAAAXNSR0IArs4c6QAAAhBJREFUaEPtmjtOA0EMhr/wFtDTUFBxADgBR6FEdECLeEgUSIiKAgokbgIX4ABU0NDQISGQeMdF0GZwsma0ZiebGWmLJPP4P3tsZ3e2RUNbq6FcZLBB82z2WNM8Ng0sA6OJgX0A18BzL139tuI6cAjMJAbVkfMEbAFnmr5eYPvAdqJAoaxN4Dj8UgNbBG4GBKojcw54KGrWwMQCRwMGtgpclIHtAjsB2EpioJeBHtEr4fPTNI+FYK/AZGJgX4GevfZn0Z3BxAJD5bGFdrDK9dd2FQywzHMHyFVsbltRSzAWyDCmLfP8ip92cstgRWtbsqLF0poHk/LYGzARqKwb7BO6bpKj0r0nWGzySB7MknC0PhmsX/Lw3IqN9VhjY8ySXbUCnXyM1Qr2DownVsfkYc5IQVNUHRsqMEvQaxmvqn/3bh6LTdNVjctg/Qq0FmNVWT52HjePxcZYDIh2B+0GZqk/MRDaGK1AVwImk4xVVMdiYDUwCY/iQUlUHctgMe4wjPlXj9WdPNy2osHQrl0yWL8CrSUPV3cYJo/ymBzJdJ1cAKkfI4leSTI/TTtGkrPnE4PVUuqyBpyWgUnGu01JtUHLPHBfBia/a9vRMH8tXcyH6x11G+1HAgfAVC1yyxd9BATqXOta9srRLLAUPF8oX9K/h2RFeYHlpddSZWD+Ep1WyGBOhnWbNnvMzbROEzfWY99IVsk37AiOLAAAAABJRU5ErkJggg=="/>
                     </div>    
                     </div>
                        <span>Income Harian</span>
                        <h3 class="card-title text-nowrap mb-2">Rp. <?php echo number_format($total_income, 0, ',', '.'); ?></h3>
                        </div>
                    </div>
                  </div>
                

              <!-- Total Revenue -->
              
              <!--/ Total Revenue -->
            </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , Made with ❤️ by
                  iskabel dobel
                </div>
                <div>
                  
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>