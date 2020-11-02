


        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="alert alert-success" role="alert">
            <i class="fas fa-fw fa-tachometer-alt"></i> Dashboard
          </div>
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Selamat Datang!</h4>
            <p>Selamat Datang <strong><?php echo $username; ?></strong>, di Sistem Informasi Akademik Universitas Framework Indonesia, Anda login sebagai <strong><?php echo $level; ?></strong></p>
            <hr>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-cogs"></i> Control Panel
            </button>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-cogs"></i> Control Panel</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-3 text-info text-center">
                      <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">MAHASISWA</p></a>
                      <i class="fas fa-3x fa-user-graduate"></i>
                    </div>
                    <div class="col-md-3 text-info text-center">
                      <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">TAHUN AKADEMIK</p></a>
                      <i class="fas fa-3x fa-calendar-alt"></i>
                    </div>
                    <div class="col-md-3 text-info text-center">
                      <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">KRS</p></a>
                      <i class="fas fa-3x fa-edit"></i>
                    </div>
                    <div class="col-md-3 text-info text-center">
                      <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">KHS</p></a>
                      <i class="fas fa-3x fa-file-alt"></i>
                    </div>
                  </div><hr>
                  <div class="row">
                    <div class="col-md-3 text-info text-center">
                      <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">INPUT NILAI</p></a>
                      <i class="fas fa-3x fa-sort-numeric-down"></i>
                    </div>
                    <div class="col-md-3 text-info text-center">
                      <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">CETAK TRANSKRIP</p></a>
                      <i class="fas fa-3x fa-print"></i>
                    </div>
                    <div class="col-md-3 text-info text-center">
                      <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">KATEGORI</p></a>
                      <i class="fas fa-3x fa-list-ul"></i>
                    </div>
                    <div class="col-md-3 text-info text-center">
                      <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">INFO KAMPUS</p></a>
                      <i class="fas fa-3x fa-bullhorn"></i>
                    </div>
                  </div><hr>
                  <div class="row">
                    <div class="col-md-3 text-info text-center">
                      <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">IDENTITAS</p></a>
                      <i class="fas fa-3x fa-id-card-alt"></i>
                    </div>
                    <div class="col-md-3 text-info text-center">
                      <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">TENTANG KAMPUS</p></a>
                      <i class="fas fa-3x fa-info-circle"></i>
                    </div>
                    <div class="col-md-3 text-info text-center">
                      <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">FASILITAS</p></a>
                      <i class="fas fa-3x fa-laptop"></i>
                    </div>
                    <div class="col-md-3 text-info text-center">
                      <a href="<?php echo base_url() ?>"><p class="nav-link small text-info">GALLERY</p></a>
                      <i class="fas fa-3x fa-image"></i>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Content Row -->
        <div class="row">

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
