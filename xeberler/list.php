<?php

echo "
<HEAD>
<TITLE>
Xeberlerin sayi".$sitename."
</TITLE>
</HEAD>

<body background=\"pics/fon2.jpg\">";

include "tbinit.php";

if(date("Y")>=2008){
echo $table2008;
} 
if(date("Y")>=2009){
echo $table2009;
}
if(date("Y")>=2010){
echo $table2010;
}
if(date("Y")>=2011){
echo $table2011;
}
if(date("Y")>=2012){
echo $table2012;
}
if(date("Y")>=2013){
echo $table2013;
}
if(date("Y")>=2014){
echo $table2014;
}
if(date("Y")>=2015){
echo $table2015;
}
echo "</body>";

?>
