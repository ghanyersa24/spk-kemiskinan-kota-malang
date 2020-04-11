<!-- Sidebar -->
<ul class="sidebar navbar-nav" style="background-color: #32405a; padding-top: 30px;">

    <div style="color : white; padding-left: 20px;margin-bottom:20px;">
        <img src="<?php echo base_url(); ?>/assets/img/Logo_Kota_Malang_color.png" style="width:60px;display:block;background-repeat:no-repeat;float:left;margin-right: 10px;">
        <span>
            <div style="font-size: 12pt;"> <b> BANSOS </b> </div>
            <div style="font-size: 8pt;margin-top: 5px;"> Rekomendasi penerima bantuan kemiskinan kota Malang </div>
        </span>
    </div>

    <!-- Dashboard -->
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fa fa-tachometer fa-tachometer-alt"></i>
            <span> Dashboard</span>
        </a>
    </li>

    <!-- Data -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'alternatif' || $this->uri->segment(2) == 'bobot' ? 'active show' : '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="<?php echo $this->uri->segment(2) == 'alternatif' ? 'true' : 'false' ?>">
            <i class="fa fa-pie-chart "></i>
            <span> Data</span>
        </a>
        <div class="dropdown-menu <?php echo $this->uri->segment(2) == 'alternatif' || $this->uri->segment(2) == 'bobot' ? 'show' : '' ?>" aria-labelledby="pagesDropdown">
            <a class="dropdown-item <?php echo $this->uri->segment(2) == 'alternatif' ? 'active' : '' ?>" href="<?php echo site_url('admin/alternatif') ?>"> Alternatif</a>
            <a class="dropdown-item <?php echo $this->uri->segment(2) == 'bobot' ? 'active' : '' ?>" href="<?php echo site_url('admin/bobot') ?>"> Bobot Kriteria</a>
        </div>
        <!-- Perhitungan -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'promethee' || $this->uri->segment(2) == 'wp' || $this->uri->segment(2) == 'saw' || $this->uri->segment(2) == 'copeland' ? 'active show' : '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-check-square-o"></i><span> Perhitungan</span>
        </a>
        <div class="dropdown-menu <?php echo $this->uri->segment(2) == 'promethee' || $this->uri->segment(2) == 'wp' || $this->uri->segment(2) == 'saw' || $this->uri->segment(2) == 'copeland' ? 'show' : '' ?>" aria-labelledby="pagesDropdown">
            <a class="dropdown-item <?php echo $this->uri->segment(2) == 'promethee' ? 'active' : '' ?>" href="<?php echo site_url('admin/promethee') ?>"> PROMETHEE</a>
            <a class="dropdown-item <?php echo $this->uri->segment(2) == 'wp' ? 'active' : '' ?>" href="<?php echo site_url('admin/wp') ?>"> Weighted Product</a>
            <a class="dropdown-item <?php echo $this->uri->segment(2) == 'saw' ? 'active' : '' ?>" href="<?php echo site_url('admin/saw') ?>"> Simple Additive Weighting</a>
            <a class="dropdown-item <?php echo $this->uri->segment(2) == 'copeland' ? 'active' : '' ?>" href="<?php echo site_url('admin/copeland') ?>"> Copeland Score</a>
        </div>
    </li>
    <!-- Voting -->
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
    <!-- Akurasi -->
    <li class="nav-item <?php echo $this->uri->segment(2) == 'akurasi' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/akurasi') ?>">
            <i class="fa fa-fw fa-tasks"></i>
            <span> Akurasi</span></a>
    </li>
    <!-- Manajemen User -->
    <li class="nav-item <?php echo $this->uri->segment(2) == 'manajemen' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/manajemen') ?>">
            <i class="fa fa-fw fa-users"></i>
            <span> Manajemen User</span></a>
    </li>
</ul>