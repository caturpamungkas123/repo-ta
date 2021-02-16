<?php echo $this->extend('pages/templet') ?>
<?php echo $this->section('content') ?>
<div class="row">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">List</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>SEMESTER 1</td>
                    <td>
                        <a href="<?php echo base_url('mahasiswa/mahasiswa/semester') ?>" class="btn btn-primary btn-sm">Detai</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php echo $this->endSection() ?>