<?php

/* https://api.telegram.org/botххххххххххххххххххххххххх/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$text = $_POST['user_text'];
$token = "5991634997:AAHaZ9BnnrtdftSSoBBcaui8poTpQPlKzDM";
$chat_id = "-304649736";
$arr = array(
  'Имя клиента: ' => $name,
  'Email: ' => $email,
  'Примечание: ' => $text
);
$txt = NULL;
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>

