<?php
    //This file retrieves the customer's transacton ID from the url and passes it to the CI controller that handles the payment.
    if( isset($_GET['trxid']) )
    {
        $trx_id = $_GET['trxid'];
        header("Location: localhost/wecue/index.php/test/paid/$trx_id");
    }
    else
    {
        //redirect();
        return false;
    }
?>