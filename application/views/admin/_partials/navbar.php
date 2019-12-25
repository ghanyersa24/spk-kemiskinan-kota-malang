<nav class="navbar navbar-expand navbar-dark bg-primary static-top" style="background-color:#f4f4f4 !important; color: #1a2226 !important; ">

    <button style="color: #1a2226 !important; font-size: 16pt;" class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fa fa-bars"></i>
    </button>

    <a style="color: #1a2226 !important; margin-left:10px;" class="navbar-brand mr-1" href="<?php echo site_url('admin') ?>">     
        <span>
            <div style="font-size : 11pt;" > <b>Bantuan Kemiskinan Kota Malang</b> </div>
            <div style="font-size : 9pt;margin-top: 0px !important;" > Rekomendasi penerima bantuan kemiskinan di Kota Malang </div>     
        </span>
    </a>




    <!-- Navbar -->
    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>

        <li style="color: #1a2226 !important;" class="nav-item dropdown no-arrow">
            <a style="color: #1a2226 !important;" class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i style="color: #1a2226 !important;" class="fa fa-user-circle"></i> Admin
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>
</nav>


<!-- The actual snackbar -->
<div id="snackbar">Some text some message..</div>