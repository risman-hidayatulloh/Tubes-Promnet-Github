        <script src=" <?php echo base_url('chartjs/Chart.bundle.js'); ?> "></script>
          <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <center>
                <h2 style="color: white;">Honda Service Center</h2>
            </center>
        </nav>  
        <div class="container-fluid h-100" style="margin: 0px;">
            <div class="row h-100">
                <aside class="col-12 col-md-2 p-0 bg-dark">
                    <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start">
                        <div class="collapse navbar-collapse">
                            <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                                <li class="nav-item">
                                    <a class="nav-link pl-0" href="#">Data Pembelian</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-0" href="#">Data Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-0" href="<?php echo site_url('HomeAdminController/viewDataBayar'); ?>">Data Pembayaran</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-0" href="<?php echo site_url('HomeAdminController/logout'); ?>">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </aside>
                <main class="col">
