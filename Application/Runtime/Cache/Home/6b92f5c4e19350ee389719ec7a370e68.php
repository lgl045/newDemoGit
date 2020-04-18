<?php if (!defined('THINK_PATH')) exit();?>



<!DOCTYPE html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    	<script src="/Public/js/checkout.js"></script>
    	<script src="/Public/js/jquery.1.7.2.min.js"></script>

</head>

<body>
  <input type="hidden" name="ids" value="<?php echo ($id); ?>" />
    <div id="paypal-button-container"></div>

    <script>
        paypal.Button.render({

            env: 'sandbox', // sandbox | production

            // PayPal Client IDs - replace with your own
            // Create a PayPal app: https://developer.paypal.com/developer/applications/create
            client: {
                sandbox:    'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
                production: 'AcSNNDtgCI37ndcfpD8fornhv44Mekkk2XJZD5yI8TuHx3FA7_4PyOc86O28dxZbLmlB5zjGKkeCL6af'
            },

            // Show the buyer a 'Pay Now' button in the checkout flow
            commit: true,

            // payment() is called when the button is clicked
            payment: function(data, actions) {

                // Make a call to the REST api to create the payment
                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: { total: '0.01', currency: 'USD' }
                            }
                        ]
                    }
                });
            },

            // onAuthorize() is called when the buyer approves the payment
            onAuthorize: function(data, actions) {

                // Make a call to the REST api to execute the payment
                return actions.payment.execute().then(function(data) {
     
                  if(data.state =='approved'){
          
                    var id = $("input[name='ids']").val();
                          $.post('/index.php/Home/accoun/savestat',{id:id},function(data){
                            //alert(data)
                            if(data==1){
                               alert("付款成功！");
                               window.location.href='https://asd.luhanforex.cn/index.php/Home/accoun/index';
                               }else{
                                alert("网络连接失败！");

                               }

                          })
 			
                     }else{
                     alert(" your data error !")
                     }
                });
            }

        }, '#paypal-button-container');

    </script>
  

</body>