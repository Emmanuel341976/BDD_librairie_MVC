<form action="?controller=fournisseur&action=all_fournisseur_pays" method="POST">
    <div class="row mt-3 mb-3">
        <label for="select-pays" class="col-sm-2 col-form-label">Selection de la localité :</label>
        <div class="col-sm-6">
            <select class="custom-select" name="pays" id="select-localite">

                <?php foreach ($pays as $p) : ?>
                    <option value="<?= $p->Pays ?>"><?= $p->Pays ?></option>
                <?php endforeach; ?>



            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Sélectionner</button>
</form>