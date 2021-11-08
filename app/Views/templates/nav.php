<body>
    <?php
    $imageProperties = [
        'src' => img_url('logo.png'),
        'alt' => 'logo concours des vins (raisin)',
        'class' => 'img-thumbnail',
        'width' => '100',
        'hight' => '62',
        'title' => 'logo',
    ];
    ?> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo site_url('Accueil'); ?>"><?php echo img($imageProperties); ?></a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </li>
            </ul>

            <?php
            if (!session()->get('isLoggedIn')) {
                ?>
                <div class="collapse navbar-collapse" id="menu-sio">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="<?php echo site_url('Login'); ?>"><span class="bi bi-box-arrow-in-right">se connecter</span></a>
                        </li>
                    </ul>
                </div>
                <?php
            } else {
                ?>
                <div class="collapse navbar-collapse" id="menu-sio">
                    <?php
                    if(session()->get('president') == 0) {
                    ?>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <?php
                            if (session()->get('president') == 1) {
                                ?>
                                <span class="bi bi-person-fill">Président</span>
                                <?php
                            } else if (session()->get('president') == 0) {
                                echo session()->get('prenom') . ' ' . session()->get('username');
                                ?>
                                <span class="bi bi-person-fill"></span>
                                <?php
                            }
                            ?>
                            <a href="<?= site_url('SaisirNotes') ?>"><span class="bi bi-file-earmark-plus-fill">Saisir mes notes</span></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="<?= site_url('ConsulterNotes') ?>"><span class="bi bi-file-earmark-medical-fill">Consulter mes notes</span></a>
                        </li>
                    </ul>
                    <?php
                    }
                    ?>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <span class="bi-person-fill"><?= session()->get('prenom') . ' ' . session()->get('username') ?></span>
                            <a href="<?= site_url('Logout'); ?>"><span class="bi bi-box-arrow-right">se déconnecter</span></a>
                        </li>
                    </ul>
                </div>
                <?php
            }
            ?>

        </div>
    </nav>
</body>