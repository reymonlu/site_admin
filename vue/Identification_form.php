



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <title>Formulaire d'identification</title>
</head>
<body>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Sign In</h5>
                    <form class="form-signin" action="index.php?controleur=Identification&action=controleForm" method="POST">
                        <div class="form-label-group">
                            <input type="text" id="ID" class="form-control" name="identifiant"  placeholder="ID" required autofocus>
                            <label for="ID">ID</label>
                        </div>

                        <div class="form-label-group">
                            <input name="motDePasse" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            <label for="inputPassword">Password</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                        <hr class="my-4">
                        <?php if(isset($this->error_identification)):?>
                            <div class="alert alert-info"><?= $this->error_identification ?></div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
