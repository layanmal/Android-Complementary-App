<?php
echo("****Testing started *** <br>");

$ip = "127.0.0.1";
print("<br>-------(ARP)IPNetToMedia table-----------<br>");

$a = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.2");
echo("<br>");
$b = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.3");
$c = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.4");
$aa = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4");
echo("=== here ======><br>");
//print_r($aa);
echo("=== == ======><br>");
$i =0;
echo"<table>";
echo("5araaaaaaaaa");
echo "<tr> <td > Index </td><td> Mac </td> <td > IP </td><td> type </td>  </tr>";
foreach ($a as $k=>$val) {
echo "<tr> <td> $i </td><td> $a[$i] </td> <td> $b[$i] </td><td> $c[$i] </td>  </tr>";

	$i++;
}
echo"</table>";
print("<br>----------2--------<br>");
print "Uptime: ".snmp2_get($ip, "public", "system.sysUpTime.0" ) ."<br>";
print "Name: ".snmp2_get($ip, "public", "system.sysName.0" )."<br>";
print("<br>----------3--------<br>");
print snmp2_get($ip,"public",".1.3.6.1.2.1.1.1.0"). "<br>";
print snmp2_get($ip,"public",".1.3.6.1.2.1.1.2.0"). "<br>";
print snmp2_get($ip,"public",".1.3.6.1.2.1.1.3.0"). "<br>";
print snmp2_get($ip,"public",".1.3.6.1.2.1.1.4.0"). "<br>";
print snmp2_get($ip,"public",".1.3.6.1.2.1.1.5.0"). "<br>";
//print("<br>--------end -----<br>");
print snmp2_get($ip,"public",".1.3.6.1.2.1.1.1.0"). "<br>";
//print snmp2_walk($ip,"public",".1.3.6.1.2.1.4.22"). "<br>";

print("<br>--------end -----<br>");

?>

