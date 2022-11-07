<?php

$webMaster = 'uzydgrt@gmail.com';
$emailSubject = 'Contact from Client';
$date = (date ("F j, Y"));
$time = (date ("H:i:s"));
$time = (date ("H:i:s"));
$space = " ";




$body ="

=======================
Newsletter Subscribers
=======================

Email: {$_POST['email']}



";
$to = $_POST['email'];
$from="From: JHOST . <support@jhost.com.ng>\r\n";
$from.="Reply-To: support@jhost.com.ng";


$body2 = "
Dear {$_POST['email']},

We are glad to inform you that you have successfully subscribed on Date:{$date}{$space}Time:{$time} and We will get back to you shortly.
 
For general inquiries or support, please email us at support@jhost.com.ng or call us on +2348062457943.

For Payment Details.
Pay to any 
Access Bank Plc----------Account Name:JENDAVE COMMUNICATION SYSTEMS.
Account Number:----------0007196636.

";

mail($webMaster,$emailSubject,$mail,$body);
mail($to," Message Received Successfully ",$body2,$from);
header ('Location:https://jhost.com.ng/subscribed.html');

?>