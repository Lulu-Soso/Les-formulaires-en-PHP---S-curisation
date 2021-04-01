<?php

    $data = array_map('trim', $_POST);

    $lastname = htmlentities($data['lastname']);
    $firstname =  htmlentities($data['firstname']); 
    $email = htmlentities($data['email']); 
    $phone = htmlentities($data['phone']); 
    $suject = htmlentities($data['suject']); 
    $message = htmlentities($data['message']);

    $errors = [];

    if(empty($_POST["lastname"]))
        $errors[] = 'Le nom est obligatoire';

    if(empty($_POST["firstname"]))
        $errors [] = 'Le prénom est obligatoire';

    if(empty($_POST["email"])) {
        $errors []= 'l\'email est obligatoire';
    } else {
        $email = isset($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors = []; 
        }
      }
    if(empty($_POST["phone"]))
    $errors[] = 'Le numéro de téléphone est obligatoire';

    if(empty($_POST["suject"]))
        $errors[] = 'Choisir un sujet est obligatoire';
    
    if(empty($_POST["message"]))
    $errors[] = 'Le message est obligatoire';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription !</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php
        //Séparation de l'affichage KO/OK
        if(count($errors) > 0) 
        {
    ?>

    <div id="errors">
        <h2>Erreurs : </h2>
            <ul>
                <?php

                    foreach($errors as $error) {
                        echo "<li>$error</li>";
                    }

                ?>
            </ul>
    </div>

    <?php
        } else {
    ?>

    <div id="success">
            <p>
            <?php

                echo "Merci $firstname $lastname de nous avoir contacté à propos du sujet \"$suject\". 
                Un de nos conseiller vous contactera soit à l’adresse: $email ou par téléphone au $phone
                dans les plus brefs délais pour traiter votre demande :"

            
            ?>
            </p>
    </div>

    <?php
        }
    ?>


</body>
</html>
