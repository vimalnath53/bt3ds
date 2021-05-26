
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
  'publicKey' => '7k98242ky7c864fv',
  'privateKey' => '1acad03819572518734e047ece28ab02',
]);

$clientToken = $gateway->clientToken()->generate([
]);

$result = $gateway->paymentMethodNonce()->create('dcrwhsr');


$data = array();
$data['token'] = $clientToken;
$data['pmt'] = $result->paymentMethodNonce->nonce;
echo json_encode($data);
