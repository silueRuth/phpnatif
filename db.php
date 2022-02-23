<?php
/*
$ch = curl_init();

$api_url = "http://127.0.0.1:8000/api/employe"; //lien de votre api a consomée
$test = curl_setopt($ch, CURLOPT_URL, $api_url);


curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Cache-Control: no-cache",
  "content-type:application/json;charset=utf-8"
));


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);   
curl_setopt($ch, CURLOPT_TIMEOUT, 5);         
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_MAXREDIRS, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);


$response = curl_exec($ch);

return $response;
*/
//connexion a la base de donnees avec PDO 
try {

  $db = new PDO('mysql:host=localhost;dbname=gestioncontrat;charset=utf8','root', '');

}
catch(Exception $e)
{
  die('Erreur :'.$e->getMessage());
}

?>