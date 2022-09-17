<br />
<!--<?= count($data) ?> livre(s) trouvé(s)-->

<table class='table table-bordered table-responsive-md bg_table'>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Fournisseur</th>
            <th>Date d'achat</th>
            <th>Nombre d'exemplaire</th>
            <th>Prix Unitaire</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($commande as $c) : ?>
            <tr>
                <td> <?= $c->Titre_livre ?> </td>
                <td> <?= $c->Raison_sociale ?> </td>
                <td> <?= $c->Date_achat ?> </td>
                <td> <?= $c->Nbr_exemplaire ?> </td>
                <td> <?= $c->Prix_achat ?> </td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>