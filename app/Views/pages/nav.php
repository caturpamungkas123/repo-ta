<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <!-- navbar dosen -->
                <?php if (in_groups('dosen')) : ?>
                    <li class="active">
                        <a href="/dosen/dosen/index"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Data Mahasiswa</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url('mahasiswa/mahasiswa/data') ?>">List Mahasiswa</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Data Absensi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url('absensi/absensi/data') ?>">Absensi</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url('absensi/absensi/rekap') ?>">Rekap Absensi</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Pengaturan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url('dosen/pengaturan/absensi/matematika') ?>">Absensi</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url('dosen/pengaturan/profil') ?>">Profil</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
                <!-- end navbar dosen -->
                <!-- nav bar mahasiswa -->
                <?php if (in_groups('mahasiswa')) : ?>
                    <li class="active">
                        <a href="/mahasiswa/mahasiswa/index"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Data Mahasiswa</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url('mahasiswa/mahasiswa/data') ?>">List Mahasiswa</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Data Absensi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url('absensi/absensi/form') ?>">Form Absensi</a></li>
                        </ul>
                    </li>
                    <!-- end navbar mahasiswa -->
                <?php endif ?>
                <!-- nav admin -->
                <?php if (in_groups('admin')) : ?>
                    <li class="active">
                        <a href="/mahasiswa/mahasiswa/index"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Data Mahasiswa</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url('mahasiswa/mahasiswa/data') ?>">List Mahasiswa</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url('mahasiswa/mahasiswa/data') ?>">Tambah Mahasiswa</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Data Dosen</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url('mahasiswa/mahasiswa/data') ?>">List Dosen</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url('mahasiswa/mahasiswa/data') ?>">Tambah Dosen</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Data Absensi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url('absensi/absensi/data') ?>">Absensi</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url('absensi/absensi/rekap') ?>">Rekap Absensi</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Semester</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo base_url('absensi/absensi/data') ?>">List Semester</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
                <!-- end Nav Admin -->
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>