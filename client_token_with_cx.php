
<?php
<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require("vendor/braintree/braintree_php/lib/Braintree.php");
require("vendor/braintree/braintree_php/lib/autoload.php");


$gateway = new Braintree\Gateway([
  'environment' => 'sandbox',
  'merchantId' => 'zynjg7c9rd5c95z2',
  'publicKey' => 'y44n7myzmhg8x2vz',
  'privateKey' => 'e67402552c930712192d5a656f0c29dd'
]);

$clientToken = $gateway->clientToken()->generate([
  "customerId" => 'Y3VzdG9tZXJfMjI5NTc5OTY4' 
]);
$result = $gateway->paymentMethodNonce()->create('94846nr');


$data = array();
$data['token'] = $clientToken;
$data['pmt'] = $result->paymentMethodNonce->nonce;
echo json_encode($data);
