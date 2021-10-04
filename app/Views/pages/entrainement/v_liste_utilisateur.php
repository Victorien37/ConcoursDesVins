<div class="container">
    <div class="text-center">
        <?php
        
        $imageProperties = [
            'src' => img_url('codeigniter.png'),
            'alt' => 'image accueil',
            'class' => 'img_thumbail mt-4',
            'width' => '383',
            'height' => '131',
            'title' => 'Accueil',
        ];
        
        echo img($imageProperties)
        ?>
        <h2>Liste des utilisateurs</h2>
    </div>
    <div class="row">
        <label for=""#">Privilèges : </label>
    </div>
    <div class="row">
        <?php
        $att_select = array(
            'class' => 'form-control col-md-3',
            'id' => 'listePrivilege'
        );
        $options = array();
        $options[-1] = "Sélectionner un privilège ...";
        foreach($listePrivilege as $privilege) {
            $options[$privilege->privilege] = $privilege->privilege;
        }
        // Ordre des paramètres :
        // Nom de la liste,
        // Tableau des options,
        // Valeur selectionnée et paramètres supplémentaires
        echo form_dropdown('privilege', $options, '', $att_select);
        ?>
        <div id="liste" class="border col-md-5 offset-md-1"></div>
    </div>
</div>