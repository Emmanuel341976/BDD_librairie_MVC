<form action="?controller=fournisseur&action=one_rsociale" method="POST">
    <div class="row mt-3 mb-3">
        <label for="select-livre" class="col-sm-2 col-form-label">Raison sociale fournisseur :</label>
        <div class="col-sm-6">
            <select class="custom-select" name="rsociale" id="select-sociale">

                <?php foreach ($rsociale as $rs) : ?>
                    <option value="<?= $rs->Raison_sociale ?>"><?= $rs->Raison_sociale ?></option>
                <?php endforeach; ?>



            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Sélectionner</button>
</form>