<?php echo $this->include('pages/head') ?>

<body>
    <!-- Left Panel -->
    <?php echo $this->include('pages/nav') ?>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <?php echo $this->include('pages/heder') ?>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <?php echo $this->renderSection('content') ?>
                <div class="clearfix"></div>
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <?php echo $this->include('pages/footer') ?>