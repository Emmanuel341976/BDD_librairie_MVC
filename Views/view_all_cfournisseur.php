<form action="?controller=commande&action=all_commande_fournisseur" method="POST">

    <label for="select-rsociale">Selection de la localité :</label>

    <select name="rsociale" id="select-rsociale">

        <?php foreach ($rsociale as $f) : ?>
            <option value="<?= $f->Raison_sociale ?>"><?= $f->Raison_sociale ?></option>
        <?php endforeach; ?>



    </select>
    <button type="submit">Sélectionner</button>
</form>