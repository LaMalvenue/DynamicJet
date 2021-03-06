<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="shortcut icon" type="image/png" href="public/images/favicon.png"/>

    <!-- CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.css" media="screen">
    <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">
    <link rel="stylesheet" type="text/css" href="../DynamicJet/public/css/style.css">

    <?php if(isset($css)) { ?>
        <link rel="stylesheet" type="text/css" href="../DynamicJet/public/css/<?= $css ?>">
    <?php } ?>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">

    <title><?= $titre ?></title>

</head>
<body>

<header>
    <nav>
        <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-nav">
            <div class="container">
                <a href="index.php" class="navbar-brand">Dynamic Jet</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=gestionReservation">Reservations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=gestionEquipement">Equipements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=gestionEffectif">Effectifs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=gestionClient">Gestion clients</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<?php echo $contenu ?>


<footer>
</footer>
</body>
</html>