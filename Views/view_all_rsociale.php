<form action="?controller=fournisseur&action=one_rsociale" method="POST">

    <label for="select-livre">Selection de la raison sociale :</label>

    <select name="rsociale" id="select-sociale">

        <?php foreach ($rsociale as $rs) : ?>
            <option value="<?= $rs->Raison_sociale ?>"><?= $rs->Raison_sociale ?></option>
        <?php endforeach; ?>



    </select>
    <button type="submit">Sélectionner</button>
</form>