<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ceci est une page avec des balises PHP</title>
    </head>
    <body>
        <h2>Page de test</h2>

        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php echo "Bonjour !"; ?>
            Voici quelques petits tests :
        </p>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

        <ul>
            <li style="color: blue;"> Texte en bleu</li>
            <li style="color: red;"> Texte en rouge</li>
            <li style="color: green;"> Texte en vert</li>
        </ul>
    </body>
</html>