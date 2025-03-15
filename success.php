<?php
$item_no            = $_REQUEST['item_number'];
$item_transaction   = $_REQUEST['tx']; // razorpay transaction ID
$item_price         = $_REQUEST['amt']; // razorpay received amount
$item_currency      = $_REQUEST['cc']; // razorpay received currency type

$price = '10.00';
$currency='INR';

//Rechecking the product price and currency details
if($item_price==$price && $item_currency==$currency)
{
    $content = "<h1>Welcome, Guest</h1>";
    $content .= "<h1>Payment Successful</h1>";
}
else
{
    $content = "<h1>Payment Failed</h1>";
}

$title = "RazorPay Payment in Rs.";
$heading = "Welcome to RazorPay Payment PHP example.";
//include('html.inc');
?>