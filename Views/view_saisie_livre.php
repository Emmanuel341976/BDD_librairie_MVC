<form class="m-5" action="?controller=livre&action=add_livre" method="post">
    <fieldset>
        <legend> Ajouter un livre</legend>

        <div class="row mb-3">
            <label for="ISBN" class="col-sm-2 col-form-label">ISBN : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="ISBN" id="ISBN" placeholder="1234567890123" require pattern="[0-9]{13}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Titre_livre" class="col-sm-2 col-form-label">Titre du livre : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Titre_livre" id="Titre_livre" placeholder="Inscrire le titre" require pattern="[A-Z0-9À-ÖØ-öø-ÿ][A-Za-z0-9À-ÖØ-öø-ÿ\p{P}' -]+">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Theme_livre" class="col-sm-2 col-form-label">Thème du livre : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Theme_livre" id="Theme_livre" placeholder="Roman, thriller, Horreur..." require pattern="[A-Z0-9À-ÖØ-öø-ÿ][A-Za-z0-9À-ÖØ-öø-ÿ' -]+">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Nbr_pages_livre" class="col-sm-2 col-form-label">Nbr pages du livre : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Nbr_pages_livre" id="Nbr_pages_livre" placeholder="421" require pattern="[0-9]+">
            </div>
        </div>


        <div class="row mb-3">
            <label for="Format_livre" class="col-sm-2 col-form-label">Format du livre : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Format_livre" id="Format_livre" placeholder="Poche, 17x28..." require pattern="[A-Z0-9À-ÖØ-öø-ÿ][A-Za-z0-9À-ÖØ-öø-ÿ\p{P}' -]+">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Nom_auteur" class="col-sm-2 col-form-label">Nom de l'auteur : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Nom_auteur" id="Nom_auteur" placeholder="King" require pattern="[A-ZÀ-ÖØ-öø-ÿ][A-Za-zÀ-ÖØ-öø-ÿ' -]+">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Prenom_auteur" class="col-sm-2 col-form-label">Prénom de l'auteur : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Prenom_auteur" id="Prenom_auteur" placeholder="Stephen" require pattern="[A-ZÀ-ÖØ-öø-ÿ][A-Za-zÀ-ÖØ-öø-ÿ' -]+">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Editeur" class="col-sm-2 col-form-label">Editeur : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Editeur" id="Editeur" placeholder="J'ai lu, Pocket...." require pattern="[A-ZÀ-ÖØ-öø-ÿ0-9][A-Za-zÀ-ÖØ-öø-ÿ0-9\p{P}' -]+">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Annee_edition" class="col-sm-2 col-form-label">Année d'édition : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Annee_edition" id="Annee_edition" placeholder="2019" require pattern="[0-9]{4}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Prix_Vente" class="col-sm-2 col-form-label">Prix de vente : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Prix_Vente" id="Prix_Vente" placeholder="8.99" require pattern="\d+(\.\d{1,2})?">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Langue_livre" class="col-sm-2 col-form-label">Langue du livre : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Langue_livre" id="Langue_livre" placeholder="Français, Anglais..." require pattern="[A-ZÀ-ÖØ-öø-ÿ][A-Za-zÀ-ÖØ-öø-ÿ' -]+">
            </div>
        </div>

        <p>* : Champs obligatoires.</p>

        <div>
            <button class="btn btn-primary" type="submit">Ajouter le livre</button>
        </div>


    </fieldset>
</form>