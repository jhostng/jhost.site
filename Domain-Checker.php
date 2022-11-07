<html>
<h2>Check Domain Availability</h2>

<form action="" method=post>
<table>
<tr>
<td>Enter Domain Name:</td>
<td> : <input type="text" name="domain_name"></td>
<td>
<select name="suffix">
<option value=".com">.com</option>
<option value=".xyz">.xyz</option>
<option value=".net">.net</option>
<option value=".org">.org</option>
<option value=".tk">.tk</option>
<option value=".ml">.ml</option>
<option value=".cf">.cf</option>
<option value=".ga">.ga</option>
<option value=".gq">.gq</option>
<option value=".com.bd">.com.bd</option>
<option value=".net.bd">.net.bd</option>
</select>

</td>
<tr>
<td align="right" colspan="3"><input type="submit" name="check" value="Check"></td>
</tr>
</tr>
</table>
</form>

<?php

if(isset($_POST['check'])) {

 if (!empty($_POST['domain_name'])){
 $name_domain = trim($_POST['domain_name']).$_POST['suffix'];
 $response = @dns_get_record($name_domain, DNS_ALL);
 if(empty($response)){
 echo "<H2 style='color:green;' >Domain $name_domain is available.</H2>";

 }else{
 echo "<H2 style='color:red;'>Domain $name_domain has taken.</H2>";
 }
 }
 else {
 echo "<H2 style='color:red;'>Error: Domain name can not be left empty.</H2>";
 }
}
?>