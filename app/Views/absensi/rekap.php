<?php echo $this->extend('pages/templet'); ?>
<?php echo $this->section('content') ?>
<?php if (in_groups('admin', 'dosen')) : ?>
    <!-- content -->

    <!-- end content -->
<?php endif; ?>
<?php echo $this->endSection() ?>