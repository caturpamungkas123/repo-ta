<?php echo $this->extend('pages/templet'); ?>
<?php echo $this->section('content') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <strong class="card-title">
                            <h3>Data Mahasiswa</h3>
                        </strong>
                    </div>
                    <div class="col-md">
                        <form action="">
                            <input class="form-control form-control-sm col-md-8 d-inline" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-sm btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Name</th>
                            <th>Semester</th>
                            <th>Jurusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection() ?>