<form action="?controller=fournisseur&action=all_fournisseur_localite" method="POST">
    <div class="row mt-3 mb-3">
        <label for="select-localite" class="col-sm-2 col-form-label">Selection de la localité :</label>
        <div class="col-sm-6">
            <select class="custom-select" name="ville" id="select-localite">

                <?php foreach ($localite as $l) : ?>
                    <option value="<?= $l->Localite ?>"><?= $l->Localite ?></option>
                <?php endforeach; ?>



            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Sélectionner</button>
</form>