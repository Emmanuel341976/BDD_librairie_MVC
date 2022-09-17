<form action="?controller=livre&action=one_titre" method="POST">
    <div class="row mt-3 mb-3">
        <label for="select-livre" class="col-sm-2 col-form-label">Selection du livre :</label>
        <div class="col-sm-6">
            <select class="custom-select" name="titre" id="select-livre">

                <?php foreach ($titre as $t) : ?>
                    <option value="<?= $t->Titre_livre ?>"><?= $t->Titre_livre ?></option>
                <?php endforeach; ?>



            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Sélectionner</button>
</form>