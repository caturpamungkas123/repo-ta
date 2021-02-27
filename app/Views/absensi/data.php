<?php echo $this->extend('pages/templet'); ?>
<?php echo $this->section('content') ?>
<!-- fotm pencarian -->
<?php if (has_permission(1)) : ?>
    <form action="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Cari Data Absensi</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label-sm" for="nim">Nama/NIM</label>
                                    <input type="text" class="form-control form-control-sm" id="nim">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label-sm" for="exampleFormControlSelect1">Bulan</label>
                                    <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button class="submit btn-primary btn-sm" name="submit">Cari</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end form -->
        <!-- table abasen -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table Abasen</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-sm table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Jenis Kel</th>
                                    <th>Semester</th>
                                    <th>Keterangan</th>
                                    <th>Alasan</th>
                                    <th>Jam Masuk</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php endif; ?>
<!-- end table absen -->
<?php echo $this->endSection() ?>