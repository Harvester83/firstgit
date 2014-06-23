<?php 

include "myinit.php";
$inputname=$_POST['inputname'];
$inputpass=$_POST['inputpass'];
if ($inputname != $name || $inputpass != $password):
echo $myform;
endif;


if ($inputname == $name && $inputpass == $password){

$inputname=stripslashes(strip_tags($inputname));
$inputpass=stripslashes(strip_tags($inputpass));

@date_default_timezone_set('Asia/Baku'); 

include "process.php";

include "process2.php";

include "list.php";

}


?>



 
