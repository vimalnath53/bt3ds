<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
   /* $("#braintree__card-view-input__cardholder-name").on('click',function(){
      alert(1);
    });*/
  </script>
 <style >

[data-braintree-id="toggle"] {
 
}

[data-braintree-id="card"] {
  border: none;
}

 </style> 
  <meta charset="utf-8">
<script src="https://js.braintreegateway.com/web/dropin/1.25.0/js/dropin.min.js"></script>
  

</head>
<body>
  <div id="dropin-container"></div>
 
</body>

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
  "merchantAccountId" => "vimalnew" 
]);
//echo '<pre>';
//print_r($clientToken);exit;

?>
  <button id="submit-button">PAY	</button>
  <script>
    // Function to check letters and numbers
       function hasNumber(myString) {
        return /\d/.test(myString);
      }


    var clientToken = "<?php echo $clientToken; ?>";
    var button = document.querySelector('#submit-button');

    braintree.dropin.create({
      authorization: clientToken,
      vaultManager: true,
      dataCollector: {
        kount: true
      },
      container: '#dropin-container',
      //cvv: null,
    // paymentOptionPriority: ['card'], 
      //card: false,
	    paypal: {
			flow: 'vault',
			amount: '1.00',
     //displayName: 'vimalaustin', 
			currency: 'AUD',
      
      intent: 'capture'
		}, 
   card: {
      cardholderName: {
         required: true
      }
    }
    }, function (createErr, instance) {
      console.error(createErr);
      button.addEventListener('click', function (event) {
        //alert($("#braintree__card-view-input__cardholder-name").val());return false;
        var card_name = $("#braintree__card-view-input__cardholder-name").val();
        var res = hasNumber(card_name);
       /* if(res == true) {
          alert("Enter only numbers");
        } */


        instance.requestPaymentMethod(function (requestPaymentMethodErr, payload) {
          
          // Submit payload.nonce to your server
          //console.log(payload);return false;
         // return false;
      window.location.href = 'checkout.php?nounce='+payload.nonce;
        });
      });
    });




  </script>


  