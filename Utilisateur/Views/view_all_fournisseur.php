<br />
<!--<?= count($data) ?> livre(s) trouvé(s)-->

<table class='table table-bordered table-responsive-md bg_table'>
    <thead>
        <tr>
            <th>Code fournisseur</th>
            <th>Raison sociale</th>
            <th>Rue</th>
            <th>Code postal</th>
            <th>Ville</th>
            <th>Pays</th>
            <th>Télephone</th>
            <th>Site Web</th>
            <th>E-mail</th>
            <th>Fax</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($fournisseur as $f) : ?>
            <tr>
                <td> <?= $f->Code_fournisseur ?> </td>
                <td> <?= $f->Raison_sociale ?> </td>
                <td> <?= $f->Rue_fournisseur ?> </td>
                <td> <?= $f->Code_postal ?> </td>
                <td> <?= $f->Localite ?> </td>
                <td> <?= $f->Pays ?> </td>
                <td> <?= $f->Tel_fournisseur ?></td>
                <td> <?= $f->Url_fournisseur ?> </td>
                <td> <?= $f->Email_fournisseur ?> </td>
                <td> <?= $f->Fax_fournisseur ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>