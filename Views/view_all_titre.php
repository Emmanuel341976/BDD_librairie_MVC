<form action="?controller=livre&action=one_titre" method="POST">

    <label for="select-livre">Selection du livre :</label>

    <select name="titre" id="select-livre">

        <?php foreach ($titre as $t) : ?>
            <option value="<?= $t->Titre_livre ?>"><?= $t->Titre_livre ?></option>
        <?php endforeach; ?>



    </select>
    <button type="submit">Sélectionner</button>
</form>