<div class="container">
    <h1><?= esc($titre) ?></h1>

    <?php
    $attributes = ["id" => "userform", "name" => "userform"];
    //Ajout du formulaire avec l'action lors du submit
    //Ici appel du contôleur C_connexion grâce à sa route Connexion
    echo form_open(site_url('Connexion'), $attributes);
    ?>
    <div class="form-row">
        <div class="form-group col-md-3">
            <?php
            //Création du tableau des attributs du champ login
            $data_login = [
                'class' => 'form-control',
                'name' => 'login',
                'type' => 'text',
                'placeholder' => 'login',
                //A la validation du formulaire, si celui-ci n'est pas valide,
                //Si le champ était rempli,
                //La saisie de l'utilisateur sera toujours présente
                'value' => set_value('login')
            ];
            //Ajout du champ input 'login' au formulaire
            echo form_input($data_login)
            ?>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <?php
            $data_mdp = [
                'class' => 'form-control',
                'name' => 'mdp',
                'type' => 'password',
                'placeholder' => "mot de passe",
            ];
            echo form_input($data_mdp)
            ?>
        </div>
    </div>

    <div class="form-row">
        <div class="input-group col-md-3"></div>
        <?php
        $att_btn = [
            'class' => 'ml-auto mt-2 btn btn-primary'
        ];
        echo form_submit('btn_Valider', 'Valider', $att_btn);
        ?>
    </div>
    
    <?php if (isset($errors)) { ?>
        <div class="col-12">
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach ($errors as $error) { ?>
                        <li><?= esc($error) ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php } ?>
</div>
<?php
//Fin du formulaire
echo form_close();
?>