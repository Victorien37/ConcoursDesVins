<div class="container">
    <h2 class="text-center">Saisir des notes</h2>
    <form>
        <!--Liste des producteurs-->
        <div class="form-group">
            <label for="listeProducteur" class="col-12">Liste des producteurs : </label>
            <?php
            $att_select = array(
                'class' => 'form-control col-6',
                'id' => 'listeProducteur'
            );
            $options = array();
            $options[-1] = "Sélectionner un producteur";
            foreach ($listeProducteur as $producteur) {
                $options[$producteur->id] = $producteur->nomProducteur;
            }
            echo form_dropdown('producteur', $options, '', $att_select);
            
            ?>
        </div>

        <!--Liste des vins-->
        <div class="form-group">
            <label for="listeVin" class="col-12">Vins :</label>
            <select class="form-control col-md-6" name="listeVin" id="listeVin" >
                <option value="-1">Sélectionnez un vin...</option>
            </select>
        </div>

        <!--Saisie de la note-->
        <div class="form-group">
            <label for="note" class="col-12">Note :*</label>
            <?php
                $note = [
                    'class' => 'form-control col-md-6',
                    'type' => 'number',
                    'name' => 'note',
                    'min' => '0',
                    'max' => '100',
                    'required' => 'required',
                    'placeholder' => ' / 100'
                ];
                echo form_input($note);
            ?>
        </div>

        <div class="form-group">
            <?php
                $submit = [
                    'class' => 'btn btn-outline-primary',
                ];
                echo form_submit('btn_valider', 'Envoyer', $submit);
            ?>
        </div>
    </form>
</div>
<script type="text/javascript">
        $(function () {
            $('#listeProducteur').change(function () {
                var leProducteur = $(this).val();
                $.ajax({
                    url: "<?= site_url('ListeProducteur'); ?>",
                    method: "POST",
                    data: {id: leProducteur},
                    dataType: 'json',
                    success: function (data) {
                        $('#listeVin').empty();
                        $.each(data, function (key, value) {
                            $('#listeVin').append('<option value="' + value.id + '">' + value.nomCommercial + ' ' + value.couleur + '</option>');
                        });
                    },
                    error: function () {
                        alert('les données ne sont pas disponible ! 👿');
                    }
                });
            });
        });
</script>
</body>
</html>