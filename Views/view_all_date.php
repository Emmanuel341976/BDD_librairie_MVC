<form action="?controller=commande&action=all_commande_date" method="POST">

    <label for="select-date">Selection de la localité :</label>

    <select name="cde_date" id="select-date">

        <?php foreach ($cde_date as $cd) : ?>
            <option value="<?= $cd->Date_achat ?>"><?= $cd->Date_achat ?></option>
        <?php endforeach; ?>



    </select>
    <button type="submit">Sélectionner</button>
</form>