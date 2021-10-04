<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>formulaire PHP 1</title>
</head>

<body>

  <form action="thanks.php" method="post">
  
    <div>
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="user_name">
    </div>
    <div>
      <label for="prenom">Prenom :</label>
      <input type="text" id="prenom" name="user_firstname">
    </div>
    <div>
      <label for="phone">Telephone :</label>
      <input type="number" id="phone" name="user_phone">
    </div>
    <div>
      <label for="emailSubject">Objet du courriel :</label>
      <select name="user_subject">
        <option>vous etes un recruteur</option>
        <option>vous etes un alumni</option>
        <option>vous etes un professeur</option>
        <option>autre</option>
      </select>
    </div>
    <div>
      <label for="courriel">Courriel :</label>
      <input type="email" id="courriel" name="user_email">

    </div>
    <div>
      <label for="message">Message :</label>
      <textarea id="message" name="user_message"></textarea>
    </div>
    <div class="button">
      <button type="submit" action="index.php" onclick="alert('blablabla')">Envoyer votre message</button>
    </div>

    <?php
    // var_dump($_GET);
    ?>
  </form>

</body>

</html>