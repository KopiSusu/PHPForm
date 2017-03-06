<?php 

  if (isset($_POST['submit'])) {
    $mailContent = "Prénom: " . $_POST['prenom'] . "<br>" . "Nom: " . $_POST['nom'] . "<br>" . "Email: " . $_POST['email'] . "<br>" . "Objet: " . $_POST['objet'] . "<br>" . "Message: " . $_POST['msg']; 
    echo $mailContent; 
    $subject = "Form to mail";

    mail("amelie.haladjian@gmail.com", $subject, $mailContent) ; 
  }

?>