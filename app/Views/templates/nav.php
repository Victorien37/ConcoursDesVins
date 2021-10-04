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
                            <a href="<?php echo site_url('Login'); ?>"><span class="bi-person-fill">se connecter</span></a>
                        </li>
                    </ul>
                </div>
                <?php
            } else {
                ?>
                <div class="collapse navbar-collapse" id="menu-sio">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <?php
                            if (session()->get('president') == 1) {
                            ?>
                            <a href="<?= site_url('President') ?>"><span class="bi bi-star-fill">Président</span></a>
                            <?php
                            } else if (session()->get('president') == 0) {
                            ?>
                            <a href="<?= site_url('Jury') ?>"><span class="bi bi-star-half">Jury</span></a>
                            <?php } ?>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <?php echo session()->get('prenom') . ' ' . session()->get('username') ?>
                            <a href="<?php echo site_url('Logout'); ?>"><span class="bi-person-fill">se déconnecter</span></a>
                        </li>
                    </ul>
                </div>
                <?php
            }
            ?>

        </div>
    </nav>
</body>