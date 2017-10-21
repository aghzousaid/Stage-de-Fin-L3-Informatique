
<!--<?php

require("PHPMailer-master/class.phpmailer.php");
require( "PHPMailer-master/PHPMailerAutoload.php");


 
$mail = new PHPMailer();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Port = 587; // Par défaut
$mail->SMTPSecure = 'tls';
$mail->IsSMTP();

 
// Authentification
$mail->Username = "saghzou96@gmail.com";
$mail->Password = "TABLABAÇ-.";
 
// Expéditeur
$mail->SetFrom('saghzou96@gmail.com');
// Destinataire
$mail->AddAddress('oussydoucoure96@gmail.com');
// Objet
$mail->Subject = 'Objet du message';
 
// Votre message
$mail->MsgHTML('Contenu du message en HTML');
 
// Envoi du mail avec gestion des erreurs
if(!$mail->Send()) {
  echo 'Erreur : ' . $mail->ErrorInfo;
} else {
  echo 'Message envoyé !';
} 

$recepient = "saghzou96@gmail.com";
$subject = "CodingAlpha";
$message = "Bienvenue";
$email= "saghzou96@gmail.com";
if(mail($recepient, $subject, $message)){
	echo '<center><h4 style="background-color: blue;">Your mail is sent. You will be redirected in 3 seconds.</h4></center>';
}
else {
	echo"Problème d'envoie";
}

?>


<?php
$recepient = "aghzou@hotmail.fr";
$subject = "CodingAlpha";
$message = "Bienvenue";
$email= "saghzou96@gmail.com";
if(mail($recepient, $subject, $message, $email)){
	echo '<center><h4 style="background-color: blue;">Your mail is sent. You will be redirected in 3 seconds.</h4></center>';
}
else {
	echo"Problème d'envoie";
}

?> -->




<?php

echo "hii";

$subject = 'votre code';
	$message =
	"<html>
    <head>
    <title>Votre code</title>
    </head>
	<body>
    <p>voici votre code : 02783569</p>
	</body>
    </html>";
	
 
	 $headers  = 'MIME-Version: 1.0' . "\n";
    $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n";
    $headers .='Content-Transfer-Encoding: 8bit';
	$headers .= "From:<saghzou96@gmail.com>\n";
	$headers .= "Reply-To: saghzou96@gmail.com";

	 //mail('saghzou96@gmail.com', $subject, $message, $headers);
	if(mail('saghzou96@gmail.com', $subject, $message, $headers));
	else {
		
		echo "<br\>problème d'envoie d'email";
		}

?>

<!--<?php
$destinataire = 'saghzou96@gmail.com';
// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
$expediteur = 'aghzou@hotmail.fr';
$copie = 'aghzou@hotmail.fr';
$copie_cachee = 'aghzou@hotmail.fr';
$objet = 'Test'; // Objet du message
$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
$headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
$headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
$headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n"; // Expediteur
$headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
$headers .= 'Cc: '.$copie."\n"; // Copie Cc
$headers .= 'Bcc: '.$copie_cachee."\n\n"; // Copie cachée Bcc        
$message = '<div style="width: 100%; text-align: center; font-weight: bold">Un Bonjour de Developpez.com !</div>';
if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
{
    echo 'Votre message a bien été envoyé ';
}
else // Non envoyé
{
    echo "Votre message n'a pas pu être envoyé";
}
?>


<!--<?php
	

	
	$name = 'said';
	$from = 'saghzou96@gmail.com';
	$phone = '0754267815';
	$subject = stripslashes( nl2br( 'Merci' ) );
	$message = stripslashes( nl2br( 'Bonjour' ) );
	
	$headers ="From: Form Contact <$from>\n";
	$headers.="MIME-Version: 1.0\n";
	$headers.="Content-type: text/html; charset=iso 8859-1";
	
	ob_start();
	?>
		Hi sdmi!<br /><br />
		<?php echo ucfirst( $name ); ?>  has sent you a message via contact form on your website!
		<br /><br />
		
		Name: <?php echo ucfirst( $name ); ?><br />
		Email: <?php echo $from; ?><br />
		Phone: <?php echo $phone; ?><br />
		Subject: <?php echo $subject; ?><br />
		Message: <br /><br />
		<?php echo $message; ?>
		<br />
		<br />
		============================================================
	<?php
	$body = ob_get_contents();
	ob_end_clean();
	
	$to = 'aghzou@hotmail.fr';

	$s = mail($to,$subject,$body,$headers,"-t -i -f $from");

	if( $s == 1 ){
		echo '<div class="success"><i class="fa fa-check-circle"></i><h3>Thank You!</h3>Your message has been sent successfully.</div>';
	}else{
		echo '<div>Your message sending failed!</div>';
	}

	
?>
















<!--<?php
     // Plusieurs destinataires
     $to  = 'aghzou@hotmail.fr' . ', '; // notez la virgule
     $to .= 'saghzou96@gmail.com';

     // Sujet
     $subject = 'Calendrier des anniversaires pour Août';

     // message
     $message = '
     <html>
      <head>
       <title>Calendrier des anniversaires pour Août</title>
      </head>
      <body>
       <p>Voici les anniversaires à venir au mois d\'Août !</p>
       <table>
        <tr>
         <th>Personne</th><th>Jour</th><th>Mois</th><th>Année</th>
        </tr>
        <tr>
         <td>Josiane</td><td>3</td><td>Août</td><td>1970</td>
        </tr>
        <tr>
         <td>Emma</td><td>26</td><td>Août</td><td>1973</td>
        </tr>
       </table>
      </body>
     </html>
     ';

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     // En-têtes additionnels
     $headers .= 'To: Aghzou <aghzou@hotmail.fr>, Saghzou <saghzou96@gmail.com>' . "\r\n";
     $headers .= 'From: Anniversaire <anniversaire@example.com>' . "\r\n";
     $headers .= 'Cc: anniversaire_archive@example.com' . "\r\n";
     $headers .= 'Bcc: anniversaire_verif@example.com' . "\r\n";

     // Envoi
     mail_utf8($to, $subject, $message, $headers);
     
     
     function mail_utf8($to, $from_user, $from_email,
                                             $subject = '(No subject)', $message = '')
   {
      $from_user = "=?UTF-8?B?".base64_encode($from_user)."?=";
      $subject = "=?UTF-8?B?".base64_encode($subject)."?=";

      $headers = "From: $from_user <$from_email>\r\n".
               "MIME-Version: 1.0" . "\r\n" .
               "Content-type: text/html; charset=UTF-8" . "\r\n";

     return mail($to, $subject, $message, $headers);
   }
?>-

<?php
$mail = 'saghzou96@gmail.com'; // Déclaration de l'adresse de destination.


$message = '<html>

     <head>
     </head>

     <body>

<h1>Joyeux Noël et très bonnes fêtes de fin d\'année</h1>

<p>Toute l\'équipe de Image-Studio vous souhaite de très bonnes fêtes de fin d\'année en espérant une très bonne nouvelle année</p>\n

<p>Pas mal de nouveautés sont à prévoir cette année sur le site, et nous vous rappelons que le site dispose d\'un forum communautaire pour partager vos passions</p>

     </body>

     </html>

';

$sujet = 'Joyeux Noël';

$headers  = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";





 

//=====Envoi de l'e-mail.

if(mail($mail,$sujet,$message,$headers));
else {
	echo"problème d'envoie";
}

//=========


?>