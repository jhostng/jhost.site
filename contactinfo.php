<?php
$webMaster = 'uzydgrt@gmail.com';
$emailSubject = 'Contact from Client';
$date = (date ("F j, Y"));
$time = (date ("H:i:s"));
$space = " ";
$IPnumber = getenv("REMOTE_ADDR");


$body ="

=================
 (SUPPORT/DONATE)
=================

Title: {$_POST['title']}
First Name: {$_POST['firstname']}
Last Name: {$_POST['lastname']}
Email: {$_POST['email']}
Telephone: {$_POST['telephone']}
Comments: {$_POST['comments']}


";
$to = $_POST['email'];
$from="From: Royal Ambassadors Charity Home. <info@rach.com.ng>\r\n";
$from.="Reply-To: info@rach.com.ng";

$body2 = "
Dear {$_POST['firstname']},

We are glad to inform you that your support message has been received successfully on Date:{$date}{$space}Time:{$time}.
 
For general inquiries or support, please email us at rach.com.ng or call us on +2348064197608, + 2340856614554, +2348139088958, +2348039348660, +234819088958.

Your message was submited from {$IPnumber}
";

mail($webMaster,$emailSubject,$body);
mail($to," Message Received Successfully ",$body2,$from);
header ('Location:http://www.rach.com.ng');

?>