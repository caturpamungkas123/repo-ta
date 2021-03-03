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
                    <?php foreach ($forms as $form) : ?>
                        <form action="<?php echo base_url() ?>/dosen/pengaturan/absen/<?php echo $form['matkul'] ?>" method="POST">
                            <?php $status = $form['status'] ?>
                            <input type="hidden" value="<?php echo $form['matkul'] ?>" name="matkul">
                            <tr>
                                <td>Matematika</td>
                                <td>
                                    <i class="fa fa-lg <?php echo ($status == false) ? 'fa-lock' : 'fa-unlock' ?>"></i>
                                </td>
                                <td>
                                    <button type="submit" class="btn <?php echo ($status == false) ? 'btn-danger' : 'btn-primary' ?>"><?php echo ($status == false) ? 'Non-Aktif' : 'Aktif' ?></button>
                                </td>
                            </tr>
                        </form>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
<?php endif ?>
<?php echo $this->endSection() ?>