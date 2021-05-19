
<?php
// echo 'dsa';exit;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require("vendor/braintree/braintree_php/lib/Braintree.php");
require("vendor/braintree/braintree_php/lib/autoload.php");
/*
//new BT test account for training
$gateway = new Braintree_Gateway([
  'environment' => 'sandbox',
  'merchantId' => 'yt8kfr4p4fptbw9s',
  'publicKey' => 'jx4xgw975pqnmfkb',
  'privateKey' => '9866b44549b0c711dc7ccb71f2d87d88'
]);
*/
//BT US
/*
$gateway = new Braintree\Gateway([
  'environment' => 'sandbox',
  'merchantId' => 'ddd52sxjpdrzyzgv',
  'publicKey' => 'mckwh6gpymvx8hmf',
  'privateKey' => 'a7c3c34a7aa4c2224a3e00ff02cb83be'
]);
*/

//BT new
//BT new
$gateway = new Braintree\Gateway([
  'environment' => 'sandbox',
  'merchantId' => 'zynjg7c9rd5c95z2',
  'publicKey' => '7k98242ky7c864fv',
  'privateKey' => '1acad03819572518734e047ece28ab02',
]);
//$aCustomerId = "Petstockau-09871112";
$clientToken = $gateway->clientToken()->generate([
  //"merchantAccountId" => "vimalnew" 
]);
echo json_encode($clientToken);

  

  
