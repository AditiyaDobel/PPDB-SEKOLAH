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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
    <?php
session_start();
include "../koneksi.php"
    ?>
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
              <a href="../admin/admin.php" class="menu-link">
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
                  <a href="#" class="menu-link">
                    <div data-i18n="Without menu">Registrasi</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="input_gelombang.php" class="menu-link">
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
                  <a href="#" class="menu-link">
                    <div data-i18n="Without menu">Daftar Baru</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
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
                  <a href="#" class="menu-link" >
                    <div data-i18n="Basic">Transaksi</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#t" class="menu-link" >
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
              
             
              <div class="row">
                
                <div class="main-panel">
          <div class="content-wrapper">
           


            <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                        <thead style="background-color:yellow;">
                          <tr align="center">
                            <th> No Pendaftaran </th>
                            <th> Tanggal </th>
                            <th> Nama </th>
                            <th> Asal Sekolah </th>
                            <th> Jurusan </th>
                            <th> Action </th>

                          </tr>
                        </thead>
                        <?php
                        $query = "SELECT * FROM data_siswa ORDER BY id ASC";
                        $result = mysqli_query($koneksi, $query);
                        if (!$result) {
                          die("query error: " . mysqli_error($koneksi) . "-" . mysqli_error($koneksi));
                        }

                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                          $edit_modal_id = "editModal" . $row['id']; // ID modal yang unik
                        ?>
                          <tbody style="background-color:white;">
                            <td style="text-align: center;"><?php echo $row['no_pendaftaran']; ?></td>
                            <td><?php echo $row['tanggal']; ?></td>
                            <td><?php echo $row['nama_siswa']; ?></td>
                            <td><?php echo $row['asal_sekolah']; ?></td>
                            <td><?php echo $row['jurusan']; ?></td>
                            <td style="text-align: center;">
                              <button type="button" class="btn btn-warning mdi mdi-tooltip-edit" data-toggle="modal"  data-target="#<?php echo $edit_modal_id; ?>"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAWdJREFUSEvFlLlKRDEUhr9pLOwEcQoFwUJRcasVt9Z3EsX38QnGfXkDC/cFRRQLtXCpND+cyJ0xud7ccZg0uWSG7zv5c5IKLR6VFvNpRtABLAGdwDrwHiq2rKAL2AQmDXoJzAM3jZIyAsG3gAngHngFhux7CnjISlIF3cCGi2QcOAMWgQ+gZmurDr5SVtDjYtgGhg1wbrF8mnQMWAOWywiqFovgj8AzMAjcAm/2rXVJNP+MIhEJfggMAHfucGeBFxfPLjBiJL9+kXrIjfBp4BrIdpHgfv1Xp+btoNeq9JVn4XvAqMnmbA7e2ZhA8AOg32KJwbWuHURHSCDozn/AZQ0JrgyuWbdTmav/dXPVJaeugIW/KvdbCgm+7Mc+gwiu/lfmJ9ZFdbc1NSIvkFzwfXsKjt1d0IEWhsci8oJsYYLPAE+pz3teRJ51ZGeRDI/tILXI3P8XeSqaEhaJKFVQx2yLILXi9p7BNyiKUBlj03X8AAAAAElFTkSuQmCC"/></button>
                              <a title="hapus" class="btn btn-danger mdi mdi-delete" style="font-size: 20px;" href="proses/pros_hapus_siswa.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAXFJREFUSEvF1c9KFmEUx/GP5iUkBoKWCXYLSaFegZvoBgSRtorgHdhKXISLQHDTJbj1L7gXxD+UFgiaeQlBzYFnYBjfsXGcl57dzDPP73vO75znTI8ur54u6ysDprGMVw3Bx1jAZn6+DLjEYEPx/Ng5XlYB/qSNptbdOV8W+m+ARWzgZ8owbHyPlZKdjTL4gE/4jrdJcA/PMZvV7HMB0gjwDNsYwwV6MYwTTOH6sYA4P5CJ7SRIPB9l0EnctmFRaDzFfgFwijdtAYrRRx1ihf9xqcKivPDxvlEN5jKL1vAt2RJCYdcIZrDeRg3m8QVXhTZ9h9W2alB3ejSyqK54rRr8yDwd6qAYBY22vEl7cTe2KqZuNMKLqmEX4/pjoR2LrLMEeZLERzsEcoil+8Z1Jzv6sZuijU7qSzc5sprAr/s8rDuWw5KYP3nUXzH+L/EA1wXEtwE5SNG+Ls2gyiQeAshv8G/En6/Weiiglmjxo64D/gLYDU4ZPubtFQAAAABJRU5ErkJggg=="/></a>&nbsp;
                            </td>
                          </tbody>

                          <!-- Modal -->
                        <div class="modal fade" id="<?php echo $edit_modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>

                              <div class="modal-body">
                                <form class="needs-validation" action="proses/pros_edit_baru.php" method="post">
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                      <label for="firstName">No Pendaftaran</label>
                                      <input type="text" class="form-control" name="no_pendaftaran" id="firstName" placeholder="" value="<?php echo $row['no_pendaftaran']; ?>" required="" readonly>
                                      <div class="invalid-feedback">
                                        Valid first name is required.
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="lastName">Tanggal</label>
                                      <input type="text" class="form-control" name="tanggal" id="lastName" placeholder="" value="<?php echo $row['tanggal']; ?>" required="" readonly>
                                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                                      <div class="invalid-feedback">
                                        Valid last name is required.
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="lastName">Nama Siswa</label>
                                      <input type="text" class="form-control" name="nama_siswa" id="lastName" placeholder="" value="<?php echo $row['nama_siswa']; ?>" required="">
                                      <div class="invalid-feedback">
                                        Valid last name is required.
                                      </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                      <label for="lastName">Asal Sekolah</label>
                                      <input type="text" class="form-control" name="asal_sekolah" id="lastName" placeholder="" value="<?php echo $row['asal_sekolah']; ?>" required="">
                                      <div class="invalid-feedback">

                                      <div class="col-md-12 mb-3">
                                      <label for="country">Jurusan</label>
                                      <select class="custom-select d-block w-100" name="jurusan" id="country" required="">
                                        <option value="">Pilih...</option>
                                        <option <?php if ($row['jurusan'] == 'REKAYASA PERANGKAT LUNAK') echo 'selected'; ?>>REKAYASA PERANGKAT LUNAK</option>
                                        <option <?php if ($row['jurusan'] == 'AKUTANSI KEUANGAN DAN LEMBAGA') echo 'selected'; ?>>AKUTANSI KEUANGAN DAN LEMBAGA</option>
                                        <option <?php if ($row['jurusan'] == 'MANANJEMEN PERKANTORAN') echo 'selected'; ?>>MANANJEMEN PERKANTORAN</option>
                                        <option <?php if ($row['jurusan'] == 'DESAIN KOMUNIKASI VISUAL') echo 'selected'; ?>>DESAIN KOMUNIKASI VISUAL</option>
                                        <option <?php if ($row['jurusan'] == 'PEMASARAN') echo 'selected'; ?>>PEMASARAN</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                                      
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <!-- Modal -->
  

                        <?php
                          $no++;
                        }
                        ?>



                      </table>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            
          <!-- TUTUP NAVBAR ISI -->



          <!-- partial:../../partials/_footer.html -->

          <!-- FOOTER -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©KabelDobel</span>
            </div>
          </footer>
          <!-- TUTUP FOOTER -->


          <!-- partial -->
        </div>
      </div>
                <!-- Order Statistics -->
              
                <!--/ Order Statistics -->

                <!-- Expense Overview -->
             
                <!--/ Expense Overview -->

                <!-- Transactions -->
              
                <!--/ Transactions -->
              </div>
              <div class="row">
              
              <div class="col-lg-4 col-md-4 order-1">
               
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>