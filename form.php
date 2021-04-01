<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  


<h2>Challenge: Sécuriser la prise de contact</h2>

<form  action="thanks.php"  method="post">
    <p>
      <label  for="lastname">Nom :</label>
      <input  type="text"  id="lastname"  name="lastname" required>
    </p>

    <p>
      <label  for="firstname">Prenom :</label>
      <input  type="text"  id="firstname"  name="firstname" required>
    </p>

    <p>
      <label  for="email">email :</label>
      <input  type="email"  id="email"  name="email" required>
    </p>

    <p>
      <label  for="phone">Telephone :</label>
      <input  type="tel"  id="phone"  name="phone">
    </p>

    <p>
    <label for="suject">Choisir un sujet:</label>
        <select name="suject" id="suject" required>
            <option>...
            <option>marche
            <option>course
            <option>randonnée
            <option>voyages
            <option>visites
        </select>
    </p>

    <p>
    <label  for="message">Message :</label>
      <textarea  id="message"  name="message"></textarea required>
    </p>

    <p>
      <input type="submit" value="Submit" />
    </p>

</form>


</body>
</html>
