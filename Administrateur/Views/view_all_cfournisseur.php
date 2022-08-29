<form action="?controller=commande&action=all_commande_fournisseur" method="POST">
    <div class="row mt-3 mb-3">
        <label for="select-rsociale" class="col-sm-2 col-form-label">Selection de la localité :</label>
        <div class="col-sm-6">
            <select class="custom-select" name="rsociale" id="select-rsociale">

                <?php foreach ($rsociale as $f) : ?>
                    <option value="<?= $f->Raison_sociale ?>"><?= $f->Raison_sociale ?></option>
                <?php endforeach; ?>



            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Sélectionner</button>
</form>