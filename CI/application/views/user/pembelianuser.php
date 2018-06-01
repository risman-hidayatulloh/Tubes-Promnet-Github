    <body>
        <div class="container-fluid h-100" style="margin: 0px;">
            <div class="row h-100">
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
                            <?php foreach ($list_part as $hasil) {
                            
                            ?>
                            <tr>
                                <td><?php echo $hasil->id_part; ?></td>
                                <td>Rp<?php echo $hasil->kode_part; ?></td>
                                <td><?php echo $hasil->nama_part; ?></td>
                                <!-- <td>
                                    <a href="<?php echo base_url('Tp3/editProperti/'.$hasil->id_properti) ?>">Edit</a>
                                    <a href="<?php echo base_url('Tp3/hapusProperti/'.$hasil->id_properti) ?>">Hapus</a>
                                </td> -->
                            </tr>

                            <?php } ?>
                        </tbody>

                    </table>
                </aside>
                <main class="col">
                </main>
            </div>
        </div>
