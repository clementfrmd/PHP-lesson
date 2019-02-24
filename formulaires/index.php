<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon super site</title>
</head>

<body>
    <form action="cible.php" method="POST">
        <p><label>Prénom : <input type="text" name="prénom" /></label><br></p>
        <p><label>Êtes-vous végétarien ? <input type="checkbox" name="végétarien" /></label><br></p>
    </form>

    <form action="cible.php" method="post" enctype="multipart/form-data">
        <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        </p>
</form>
</body>

</html>