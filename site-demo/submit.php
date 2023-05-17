<?php
function sanitize($s) {
  // return strtolower(preg_replace('/[^a-z0-9-]+/i', '-', $s));
  $vowels = array("=", "-", ";", "%", "<", ">", "\\", "/");
  return htmlspecialchars(strip_tags(str_replace($vowels, "..", $s)));
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $filename = 'includes/participants.csv';
  
  $participation = $_POST['participation'];

  $tarif = $_POST['tarif'];

  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];

  $hebergement = isset($_POST['hebergement-besoin']) ? $_POST['hebergement-besoin'] : 'nope';
  $heberger_possible = isset($_POST['heberger-possible']) ? $_POST['heberger-possible'] : 'nope';
  
  $profil = 'nope';
  if (isset($_POST['profil'])) 
  {
      print_r($_POST['profil']);
      $profil = implode(',', $_POST['checkboxvar']); 
  }

  $profil_autre = $_POST['profil-autre'];
  $interets = isset($_POST['interets']) ? $_POST['interets'] : 'nope';
  $attentes = $_POST['attentes'];
  $apports = isset($_POST['apports']) ? $_POST['apports'] : 'nope';
  $peurs = isset($_POST['peurs']) ? $_POST['peurs'] : 'nope';
  $sujetprefere = isset($_POST['sujet-prefere']) ? $_POST['sujet-prefere'] : 'nope';
  $repas = $_POST['repas'];
  $remarques = $_POST['remarques'];
  $sujetprefere = isset($_POST['tarif-paf']) ? $_POST['tarif-paf'] : 'nope';





  $data = array(
    $prenom,
    $nom,
    $email,
    $telephone,
    $profil,
    $profil_autre,
    $interets,
    $attentes,
    $apports,
    $peurs,
    $sujetprefere,
    $participation,
    $tarif,
    $hebergement,
    $hebergement_possible,
    $repas,
    $remarques,
  );

  print_r($data);

  $fp = fopen($filename, 'a');

  if ($fp) {
    fputcsv($fp, $data);
    fclose($fp);
    echo 'Vos informations ont été enregistrées avec succès.';
  } else {
    echo 'Erreur lors de l\'ouverture du fichier.';
  }
}


//   // Configurer les informations du paiement PayPal
//   $paypal_email = "votre_email_paypal";
//   $return_url = "http://votre_site_web.com/inscription_confirmation.php";
//   $cancel_url = "http://votre_site_web.com/inscription_annulation.php";
//   $item_name = "Inscription à l'événement";
  
//   $item_amount = "10.00";

//   // Créer le bouton PayPal
//   $paypal_button = '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
//   <input type="hidden" name="cmd" value="_xclick">
//   <input type="hidden" name="business" value="'.$paypal_email.'">
//   <input type="hidden" name="lc" value="FR">
//   <input type="hidden" name="item_name" value="'.$item_name.'">
//   <input type="hidden" name="amount" value="'.$item_amount.'">
//   <input type="hidden" name="currency_code" value="EUR">
//   <input type="hidden" name="no_note" value="1">
//   <input type="hidden" name="tax_rate" value="0.000">
//   <input type="hidden" name="shipping" value="0.00">
//   <input type="hidden" name="return" value="'.$return_url.'">
//   <input type="hidden" name="cancel_return" value="'.$cancel_url.'">
//   <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="payer en ligne avec PayPal">
//   </form>';

//   // Afficher le bouton PayPal
//   echo $paypal_button;
// }

// <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
//   <input type="hidden" name="button_subtype" value="services">
//   <input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynow_LG.gif:NonHosted">
//   <input type="submit" value="Payer avec PayPal">
// </form>

?>