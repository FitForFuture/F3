<?
$do = htmlspecialchars($_GET['do']);
switch ($do) {
  default: include "main/start.php";
  break;
  case "login": include "main/login.php";
  break;
  case "Mein_Konto": include "main/mein_konto.php";
  break; 
  case "faq": include "main/faq.php";
  break; 
}

?>
