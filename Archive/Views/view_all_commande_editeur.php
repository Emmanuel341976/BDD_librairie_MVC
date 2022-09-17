<br />
<!--<?= count($data) ?> livre(s) trouvé(s)-->

<table class='table table-bordered table-responsive-md bg_table'>
    <thead>
        <tr>
            <th>Titre livre</th>
            <th>Editeur</th>
            <th>Date d'achat</th>
            <th>Prix d'achat</th>
            <th>Nombre d'exemplaire</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cbyediteur as $cbe) : ?>
            <tr>
                <td> <?= $cbe->Titre_livre ?> </td>
                <td> <?= $cbe->Editeur ?> </td>
                <td> <?= $cbe->Date_achat ?> </td>
                <td> <?= $cbe->Prix_achat ?> </td>
                <td> <?= $cbe->Nbr_exemplaire ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>