<form action="?controller=fournisseur&action=all_fournisseur_localite" method="POST">

    <label for="select-localite">Selection de la localité :</label>

    <select name="ville" id="select-localite">

        <?php foreach ($localite as $l) : ?>
            <option value="<?= $l->Localite ?>"><?= $l->Localite ?></option>
        <?php endforeach; ?>



    </select>
    <button type="submit">Sélectionner</button>
</form>