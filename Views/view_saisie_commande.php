<form class="m-5" action="?controller=commande&action=add_commande" method="post">
    <fieldset>
        <legend class="mt-3"> Ajouter une commande</legend>

        <div class="row mb-3">
            <label for="select-livre" class="col-sm-2 col-form-label">Selectionner un livre :</label>
            <div class="col-sm-6">
                <select class="custom-select" name="Id_Livre" id="select-livre">

                    <?php foreach ($titre as $t) : ?>
                        <option value="<?= $t->Id_Livre ?>"><?= $t->Titre_livre ?></option>
                    <?php endforeach; ?>

                </select>
            </div>
        </div>


        <div class="row mb-3">
            <label for="Raison_sociale" class="col-sm-2 col-form-label">Selectionner un fournisseur :</label>
            <div class="col-sm-6">
                <select class="custom-select" name="Id_fournisseur" id="Raison_sociale">

                    <?php foreach ($fournisseur as $rs) : ?>
                        <option value="<?= $rs->Id_fournisseur ?>"><?= $rs->Raison_sociale ?></option>
                    <?php endforeach; ?>

                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label for="Date_achat" class="col-sm-2 col-form-label">Date d'achat : *</label>
            <div class="col-sm-6">
                <input type="date" class="form-control" name="Date_achat" id="Date_achat" placeholder="JJ/MM/AAAA" require pattern="^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Prix_achat" class="col-sm-2 col-form-label">Prix d'achat : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Prix_achat" id="Prix_achat" placeholder="9.99" require pattern="^(\d+(?:[\.]\d{2})?)$">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Nbr_exemplaire" class="col-sm-2 col-form-label">Nombre d'exemplaires : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Nbr_exemplaire" id="Nbr_exemplaire" placeholder="25" require pattern="^[0-9]{1,4}$">
            </div>
        </div>

        <p>* : Champs obligatoires.</p>

        <div>
            <button class="btn btn-primary mb-3" type="submit">Ajouter la commande</button>
        </div>


    </fieldset>
</form>