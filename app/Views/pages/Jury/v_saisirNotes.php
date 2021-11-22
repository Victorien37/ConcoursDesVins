<div class="container">
    <h2 class="text-center">Saisir des notes</h2>
    <div class="form-row">
        <div class="row">
            <label for="listeProducteur" class="col-12">Liste des producteur : </label>
            <?php
            $att_select = array(
                'class' => 'form-control col-6',
                'id' => 'listeProducteur'
            );
            $options = array();
            $options[-1] = "Sélectionner un producteur";
            foreach ($listeProducteur as $producteur) {
                $options[$producteur->nomProducteur] = $producteur->nomProducteur;
            }
            // Ordre des paramètres :
            // Nom de la liste,
            // Tableau des options,
            // Valeur selectionnée et paramètres supplémentaires
            echo form_dropdown('producteur', $options, '', $att_select);
            
            ?>
        </div>
        <div class="row">
            <select class="form-control col-md-3" name="liste" id="liste" >
                <option value="-1">Sélectionnez un vins...</option>
            </select>  
            <div id="liste" class="border col-md-5 offset-md-1">
                <?php
                    $att_Vin = array(
                        'class' => 'form-control col-6',
                        'id' => 'listeVin'
                    );
                    $opt = array();
                    $opt[-1] = "Selectionner un vin";
                    
                    echo form_dropdown('vin', $opt, '', $att_Vin);
                ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

        $(function () {

            $('#listeProducteur').change(function () {


                var leProducteur = $(this).val();
                $.ajax({
                    url: "<?= site_url('ListeProducteur'); ?>",

                    method: "POST",
                    data: {producteur: leProducteur},
                    dataType: 'json',
                    success: function (data) {
                        $('#liste').empty();

                        $.each(data, function (key, value) {
                            var vins = document.createElement('span');
                            vins.textContent = value.nomCommercial + " " + value.couleur + " " + value.millesime;
                            $('#liste').append('<option value="' + value.id + '">' + value.millesime + " " + value.couleur + " " + value.nomCommercial + '</option>');
                        }
                        );

                    },
                    error: function () {
                        alert('les données ne sont pas disponible');
                    }
                });
            });
        });
</script>

<!--<script type="text/javascript">
    $(function() {
        $('#listeProducteur').change(function() {
            var leproducteur = $(this).val();
            $.ajax({
                url: "<? site_url('ListeProducteur'); ?>",
                method: "POST",
                data: {producteur: leproducteur},
                dataType: 'json',
                success: function(data) {
                    $('#listeVin').empty();
                    $.each(data, function(key, value) {
                        var Text = document.createTextNode(value.nomProducteur);
                        $('#listeVin').append("<option value='" + value.idAppelation + "'>" + value.nomCommercial + "</option>");
                    });
                },
                error: function() {
                    alert('Les données ne sont pas disponibles ! 👿');
                }
            });
        });
    });
</script>-->
</body>
</html>