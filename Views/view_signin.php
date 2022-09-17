<div class="container bord mb-4">
    <div class="row">
        <div class="col-6">
            Bienvenue sur le site de
            consultation des livres.
        </div>
    </div>
</div>

<form class="container" action="?controller=signin&action=connect" method="post">
    <div class="row">
        <div class="col-6">

            <div class="card">
                <div class="card-header">
                    Connexion
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Adresse mail</label>
                            <input type="email" name="User_signin_mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mot de passe</label>
                            <input type="password" name="User_signin_password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div>
                            <p>Vous n'êtes pas enregistré ? - <a href="?controller=signup&action=register">Inscription</a></p>
                        </div>
                        <button type="submit" class="btn btn-primary">Connexion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>