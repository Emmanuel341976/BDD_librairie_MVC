<form action="?controller=commande&action=all_commande_editeur" method="POST">

    <label for="select-editeur">Selection de l'éditeur :</label>

    <select name="editeur" id="select-editeur">

        <?php foreach ($editeur as $e) : ?>
            <option value="<?= $e->Editeur ?>"><?= $e->Editeur ?></option>
        <?php endforeach; ?>



    </select>
    <button type="submit">Sélectionner</button>
</form>