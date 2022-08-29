<form action="?controller=livre&action=all_livre_editeur" method="POST">
    <div class="row mt-3 mb-3">
        <label for="select-editeur" class="col-sm-2 col-form-label">Selection de l'éditeur :</label>
        <div class="col-sm-6">
            <select class="custom-select" name="editeur" id="select-editeur">

                <?php foreach ($editeur as $e) : ?>
                    <option value="<?= $e->Editeur ?>"><?= $e->Editeur ?></option>
                <?php endforeach; ?>



            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Sélectionner</button>
</form>