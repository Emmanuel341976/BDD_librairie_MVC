<form action="?controller=commande&action=all_commande_date" method="POST">
    <div class="row mt-3 mb-3">
        <label for="select-date" class="col-sm-2 col-form-label">Selection de la localité :</label>
        <div class="col-sm-6">
            <select class="custom-select" name="cde_date" id="select-date">

                <?php foreach ($cde_date as $cd) : ?>
                    <option value="<?= $cd->Date_achat ?>"><?= $cd->Date_achat ?></option>
                <?php endforeach; ?>



            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Sélectionner</button>
</form>