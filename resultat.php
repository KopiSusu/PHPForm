<?php 

  if (isset($_POST['submit'])) {
    // Set to field    
    $to = "amelie.haladjian@gmail.com";
    
    // Set from field, this was missing in your original example    
    $from = $_POST['email'];
    
    //Data (i laid it out more xplicitly so its easier to read), didnt change anything here this looked okay
    $mailContent = "Prénom: "     .$_POST['prenom']  ."<br>\n";
    $mailContent .= "Nom: "       .$_POST['nom']     ."<br>\n";
    $mailContent .= "Email: "     .$_POST['email']   ."<br>\n"; 
    $mailContent .= "Objet: "     .$_POST['objet']   ."<br>\n"; 
    $mailContent .= "Message: "   .$_POST['msg']     ."<br>\n"; 
    
    //Hard Code Subject     
    $subject = "Form to mail";
    
    //Headers (not sure if this is requried but docs have them and they do use the "from" field which is normally important)
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: <".$from. ">" ;
    
    //Sends mail request structure (to, subject, message, headers)     
    mail ($to, $subject, $mailContent, $headers); 
    echo "sent";
  }

?>
