<form class="m-5" action="?controller=fournisseur&action=add_fournisseur" method="post">
    <fieldset>
        <legend> Ajouter un fournisseur</legend>

        <div class="row mb-3">
            <label for="Code_fournisseur" class="col-sm-2 col-form-label">Code_fournisseur : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Code_fournisseur" id="Code_fournisseur" placeholder="1234567890123" require pattern="[A-Z]{2}[0-9]{11}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Raison_sociale" class="col-sm-2 col-form-label">Raison sociale : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Raison_sociale" id="Raison_sociale" placeholder="Raison sociale" require pattern="[A-Z0-9À-ÖØ-öø-ÿ][A-Za-z0-9À-ÖØ-öø-ÿ\p{P}' -]+">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Rue_fournisseur" class="col-sm-2 col-form-label">Adresse (N° et rue) : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Rue_fournisseur" id="Rue_fournisseur" placeholder="14, avenue Georges Clémenceau" require pattern="^([1-9][0-9]*(?:-[1-9][0-9]*)*)[\s,-]+(?:(bis|ter|qua)[\s,-]+)?([\w]+[\-\w]*)[\s,]+([-\w].+)$">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Code_postal" class="col-sm-2 col-form-label">Code postal : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Code_postal" id="Code_postal" placeholder="34170" require pattern="[0-9]+">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Localite" class="col-sm-2 col-form-label">Localité : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Localite" id="Localite" placeholder="CASTELNAU-LE-LEZ" require pattern="[A-ZÀ-ÖØ-öø-ÿ][A-Za-zÀ-ÖØ-öø-ÿ' -]+">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Pays" class="col-sm-2 col-form-label">Pays : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Pays" id="Pays" placeholder="France" require pattern="[A-ZÀ-ÖØ-öø-ÿ0-9][A-Za-zÀ-ÖØ-öø-ÿ0-9\p{P}' -]+">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Tel_fournisseur" class="col-sm-2 col-form-label">Télephone : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Tel_fournisseur" id="Tel_fournisseur" placeholder="0000000000" require pattern="[0-9]+">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Url_fournisseur" class="col-sm-2 col-form-label">URL site fournisseur : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Url_fournisseur" id="Url_fournisseur" placeholder="wwww.exemple.com" require pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Email_fournisseur" class="col-sm-2 col-form-label">E-mail : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Email_fournisseur" id="Email_fournisseur" placeholder="exemple@exemple.com" require pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Fax_fournisseur" class="col-sm-2 col-form-label">Numéro de Fax : *</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="Fax_fournisseur" id="Fax_fournisseur" placeholder="0000000000" require pattern="[0-9]+">
            </div>
        </div>

        <p>* : Champs obligatoires.</p>

        <div>
            <button class="btn btn-primary" type="submit">Ajouter le fournisseur</button>
        </div>


    </fieldset>
</form>