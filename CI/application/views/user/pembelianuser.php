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
                                    <a class="nav-link pl-0" href="<?php echo site_url('HomeUserController/viewPembelian') ?>">Pembelian</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-0" href="#">Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-0" href="#">Pembayaran</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-0" href="#">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </aside>
                <aside class="col-12 col-sm-6">
                    <table class="table table-hover table-striped table-light table-bordered" style="margin-top:20px">
                        <thead>
                          <tr>
                            <th style="width:50px;text-align:center">No</th>
                            <th>Kode Part</th>
                            <th>Nama Part</th>
                            <th style="width:130px">Action</th>
                          </tr>
                        </thead>

                        <tbody>
                            <!-- <?php 
                                $no = 1;
                                foreach($parts as $u){ 
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $u->kode_part ?></td>
                                    <td><?php echo $u->nama_part ?></td>
                                </tr>
                            <?php } ?> -->

                        </tbody>

                    </table>
                </aside>
                <main class="col">
                </main>
            </div>
        </div>
