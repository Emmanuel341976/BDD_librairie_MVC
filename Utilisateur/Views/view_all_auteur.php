<form action="?controller=livre&action=all_livre_auteur" method="POST">
    <div class="row mt-3 mb-3">
        <label for="select-editeur" class="col-sm-2 col-form-label">Selection de l'auteur :</label>
        <div class="col-sm-6">
            <select class="custom-select" name="auteur" id="select-auteur">

                <?php foreach ($auteur as $a) : ?>
                    <option value="<?= $a->Nom_auteur . ' ' . $a->Prenom_auteur ?>"><?= $a->Prenom_auteur . ' ' . $a->Nom_auteur ?></option>
                <?php endforeach; ?>



            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Sélectionner</button>
</form>