<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pagetitle; ?></title>
    <link rel="stylesheet" type="text/css" href=view/view.css>
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="index.php?action=readAll&controller=voiture">Liste Voitures</a>
            <a href="index.php?action=readAll&controller=utilisateur">Liste Utilisateurs</a>
            <a href="index.php?action=readAll&controller=trajet">Liste Trajets</a>
            <a href="index.php?action=create&controller=voiture">Créer Voiture</a>
            <a href="index.php?action=create&controller=utilisateur">Créer Utilisateur</a>
            <a href="index.php?action=create&controller=trajet">Créer Trajet</a>
            <a href="preference.html">Préférences</a>
        </nav>
    </header>
    <main>
        <?php
            $filepath = File::build_path(array("view", static::$object, "$view.php"));
            require $filepath;
        ?>
    </main>
    <footer>
        <p>
            Site de covoiturage de NABERT ENZO
        </p>
    </footer>

</body>
</html>