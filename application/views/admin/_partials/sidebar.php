<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fa fa-tachometer fa-tachometer-alt"></i>
            <span> Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'alternatif' || $this->uri->segment(2) == 'bobot' ? 'active show' : '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="<?php echo $this->uri->segment(2) == 'alternatif' ? 'true' : 'false' ?>">
            <i class="fa fa-pie-chart "></i>
            <span> Data</span>
        </a>
        <div class="dropdown-menu <?php echo $this->uri->segment(2) == 'alternatif' || $this->uri->segment(2) == 'bobot' ? 'show' : '' ?>" aria-labelledby="pagesDropdown">
            <a class="dropdown-item <?php echo $this->uri->segment(2) == 'alternatif' ? 'active' : '' ?>" href="<?php echo site_url('admin/alternatif') ?>"> Alternatif</a>
            <a class="dropdown-item <?php echo $this->uri->segment(2) == 'bobot' ? 'active' : '' ?>" href="<?php echo site_url('admin/bobot') ?>"> Bobot Kriteria</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'promethee' || $this->uri->segment(2) == 'promethee2' ? 'active show' : '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-calculator"></i>
            <span> Perhitungan</span>
        </a>
        <div class="dropdown-menu <?php echo $this->uri->segment(2) == 'promethee' || $this->uri->segment(2) == 'promethee2' ? 'show' : '' ?>" aria-labelledby="pagesDropdown">
            <a class="dropdown-item <?php echo $this->uri->segment(2) == 'promethee' ? 'active' : '' ?>" href="<?php echo site_url('admin/promethee') ?>"> PROMETHEE I</a>
            <a class="dropdown-item <?php echo $this->uri->segment(2) == 'promethee2' ? 'active' : '' ?>" href="<?php echo site_url('admin/promethee2') ?>"> PROMETHEE II</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'vote' || $this->uri->segment(2) == 'proses' || $this->uri->segment(2) == 'hasilvote' ? 'active show' : '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-check-square-o"></i>
            <span> Voting</span>
        </a>
        <div class="dropdown-menu <?php echo $this->uri->segment(2) == 'vote' || $this->uri->segment(2) == 'proses' || $this->uri->segment(2) == 'hasilvote' ? 'show' : '' ?>" aria-labelledby="pagesDropdown">
            <a class="dropdown-item <?php echo $this->uri->segment(2) == 'vote' ? 'active' : '' ?>" href="<?php echo site_url('admin/vote') ?>"> Vote</a>
            <a class="dropdown-item <?php echo $this->uri->segment(2) == 'proses' ? 'active' : '' ?>" href="<?php echo site_url('admin/proses') ?>"> Proses</a>
            <a class="dropdown-item <?php echo $this->uri->segment(2) == 'hasilvote' ? 'active' : '' ?>" href="<?php echo site_url('admin/hasilvote') ?>"> Hasil Vote</a>
        </div>
    </li>
    <li class="nav-item <?php echo $this->uri->segment(3) == 'akurasi' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/akurasi') ?>">
            <i class="fa fa-fw fa-tasks"></i>
            <span> Akurasi</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa fa-fw fa-users"></i>
            <span> Manajemen User</span></a>
    </li>
</ul>