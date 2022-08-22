<title>CRUD UMG</title>
<!-- CSS only -->
<?php $this->load->view('layout/header'); ?>

<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <!-- <img src="<?= base_url('public/img/bootstrap-solid.svg'); ?>" width="30" height="30" class="d-inline-block align-top" alt="">
        Bootstrap -->
    </a>
</nav>

    <h2>CRUD - Desarrollo Web</h2> 

<body>
    <div style="background-color: #ecf0f5;" class="containter-fluid">
        <?php $this->load->view($vista) ?>
    </div>

</body>
<!-- JavaScript Bundle with Popper -->
<?php $this->load->view('layout/footer'); ?>