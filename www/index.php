

<html>
    <head>
        <meta charset="utf-8"/>
        <title>Ceci est une page HTML de test</title>
    </head>

    <body>
        <h2>Page de test</h2>
        <p>
            Cette page contient du code HTML<br/>
            <?php echo "et du PHP comme ici"; ?>
            <br><br>


            Voici quelques petits tests :


        </p>

        <ul>
            <li style="color: blue;">Texte en bleu</li>
            <li style="color: red;">Texte en rouge</li>
            <li style="color: green;">Texte en vert</li>
        </ul>

        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s');?></p>
        
        <!-- l'heure ne s'actualise pas automatiquement -->
       
    </body>
</html>