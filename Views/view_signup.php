<div class="container bord mb-4">
    <div class="row">
        <div class="col-6">
            Bienvenue sur le site de
            consultation des livres.
        </div>
    </div>
</div>

<form class="container" action="?controller=signup&action=add_user" method="post">
    <div class="row">
        <div class="col-6">

            <div class="card">
                <div class="card-header">
                    Inscription
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="User_mail">Adresse mail</label>
                            <input type="email" class="form-control" name="User_mail" id="User_mail" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div class="form-group">
                            <label for="User_first_name">Nom</label>
                            <input type="text" class="form-control" name="User_first_name" id="User_first_name">
                        </div>

                        <div class="form-group">
                            <label for="User_last_name">Pénom</label>
                            <input type="text" class="form-control" name="User_last_name" id="User_last_name">
                        </div>

                        <script type="text/javascript">
                            function passverif() {
                                var pass = document.getElementById('User_password').value;
                                var vpass = document.getElementById('InputPassword2').value;
                                if (pass != vpass) {
                                    document.getElementById('InputPassword2').style.color = "#f00";
                                } else {
                                    document.getElementById('InputPassword2').style.color = "#0f0";
                                }
                            }
                        </script>

                        <div class="form-group">
                            <label for="User_password">Mot de passe</label>
                            <input type="password" name="User_password" class="form-control" id="User_password">
                        </div>

                        <div class="form-group">
                            <label for="InputPassword2">Vérification du mot de passe</label>
                            <input type="password" name="InputPassword2" class="form-control" id="InputPassword2" onchange="passverif()">
                        </div>
                        <button type="submit" class="btn btn-primary">Inscription</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>