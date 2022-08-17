<form action="?controller=livre&action=all_livre_auteur" method="POST">

    <label for="select-editeur">Selection de l'auteur :</label>

    <select name="auteur" id="select-auteur">

        <?php foreach ($auteur as $a) : ?>
            <option value="<?= $a->Nom_auteur . ' ' . $a->Prenom_auteur ?>"><?= $a->Prenom_auteur . ' ' . $a->Nom_auteur ?></option>
        <?php endforeach; ?>



    </select>
    <button type="submit">Sélectionner</button>
</form>