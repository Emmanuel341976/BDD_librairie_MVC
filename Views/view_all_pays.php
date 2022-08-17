<form action="?controller=fournisseur&action=all_fournisseur_pays" method="POST">

    <label for="select-pays">Selection de la localité :</label>

    <select name="pays" id="select-localite">

        <?php foreach ($pays as $p) : ?>
            <option value="<?= $p->Pays ?>"><?= $p->Pays ?></option>
        <?php endforeach; ?>



    </select>
    <button type="submit">Sélectionner</button>
</form>