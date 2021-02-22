<?php echo $this->extend('pages/templet') ?>
<?php echo $this->section('content') ?>
<?php if (in_groups('dosen')) : ?>
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Pengaturan</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Matkul</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Matematika</td>
                        <td>
                            <i class="fa fa-lg <?php echo session()->get('matkul') ? 'fa-unlock' : 'fa-lock' ?>"></i>
                        </td>
                        <td>
                            <a href="<?php echo base_url('dosen/pengaturan/absensi') ?>" class="btn <?php echo session()->get('matkul') ? 'btn-primary' : 'btn-danger' ?>"><?php echo session()->get('matkul') ? 'Aktif' : 'Non-Aktif' ?></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php endif ?>
<?php echo $this->endSection() ?>