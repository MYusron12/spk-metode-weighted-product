        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <nav class="">
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                                        Quick menu
                                    </a>
                                    <div class="dropdown-menu shadow" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="<?= base_url('spk/bobot'); ?>">Bobot</a>
                                        <a class="dropdown-item" href="<?= base_url('spk/kriteria'); ?>">Kriteria</a>
                                        <a class="dropdown-item" href="<?= base_url('spk/bobotkriteria'); ?>">Bobot Kriteria</a>
                                        <a class="dropdown-item" href="<?= base_url('spk/penilaiansubkriteria'); ?>">Penilaian Sub Kriteria</a>
                                        <a class="dropdown-item" href="<?= base_url('spk/alternatif'); ?>">Alternatif</a>
                                        <a class="dropdown-item" href="<?= base_url('spk/inputnilai'); ?>">Nilai Alternatif</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    My Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->