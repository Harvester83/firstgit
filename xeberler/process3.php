<?php

$my5=@mysql_connect($db_host, $db_user, $db_pass) or die("Qoshulmag olmur");
$my6=@mysql_select_db($db_name) or die("Bazani sechmek olmur");


$query3="SELECT date FROM ru_post";
$res3=mysql_query($query3);
$cols3=mysql_num_rows($res3);


$yanvar2008rus=0;
$fevral2008rus=0;
$mart2008rus=0;
$aprel2008rus=0;
$may2008rus=0;
$iyun2008rus=0;
$iyul2008rus=0;
$avqust2008rus=0;
$sentyabr2008rus=0;
$oktyabr2008rus=0;
$noyabr2008rus=0;
$dekabr2008rus=0;


$yanvar2009rus=0;
$fevral2009rus=0;
$mart2009rus=0;
$aprel2009rus=0;
$may2009rus=0;
$iyun2009rus=0;
$iyul2009rus=0;
$avqust2009rus=0;
$sentyabr2009rus=0;
$oktyabr2009rus=0;
$noyabr2009rus=0;
$dekabr2009rus=0;


$yanvar2010rus=0;
$fevral2010rus=0;
$mart2010rus=0;
$aprel2010rus=0;
$may2010rus=0;
$iyun2010rus=0;
$iyul2010rus=0;
$avqust2010rus=0;
$sentyabr2010rus=0;
$oktyabr2010rus=0;
$noyabr2010rus=0;
$dekabr2010rus=0;

$yanvar2011rus=0;
$fevral2011rus=0;
$mart2011rus=0;
$aprel2011rus=0;
$may2011rus=0;
$iyun2011rus=0;
$iyul2011rus=0;
$avqust2011rus=0;
$sentyabr2011rus=0;
$oktyabr2011rus=0;
$noyabr2011rus=0;
$dekabr2011rus=0;

$yanvar2012rus=0;
$fevral2012rus=0;
$mart2012rus=0;
$aprel2012rus=0;
$may2012rus=0;
$iyun2012rus=0;
$iyul2012rus=0;
$avqust2012rus=0;
$sentyabr2012rus=0;
$oktyabr2012rus=0;
$noyabr2012rus=0;
$dekabr2012rus=0;

$yanvar2013rus=0;
$fevral2013rus=0;
$mart2013rus=0;
$aprel2013rus=0;
$may2013rus=0;
$iyun2013rus=0;
$iyul2013rus=0;
$avqust2013rus=0;
$sentyabr2013rus=0;
$oktyabr2013rus=0;
$noyabr2013rus=0;
$dekabr2013rus=0;

$yanvar2014rus=0;
$fevral2014rus=0;
$mart2014rus=0;
$aprel2014rus=0;
$may2014rus=0;
$iyun2014rus=0;
$iyul2014rus=0;
$avqust2014rus=0;
$sentyabr2014rus=0;
$oktyabr2014rus=0;
$noyabr2014rus=0;
$dekabr2014rus=0;

while($perem3=mysql_fetch_array($res3)):
$mydate3=$perem3["date"];

//2008-ci il

if(preg_match("~-01-~i",$mydate3)){
if(preg_match("~2008~i",$mydate3)){
$yanvar2008rus++;
}
}

if(preg_match("~-02-~i",$mydate3)){
if(preg_match("~2008~i",$mydate3)){
$fevral2008rus++;
}
}

if(preg_match("~-03-~i",$mydate3)){
if(preg_match("~2008~i",$mydate3)){
$mart2008rus++;
}
}

if(preg_match("~-04-~i",$mydate3)){
if(preg_match("~2008~i",$mydate3)){
$aprel2008rus++;
}
}

if(preg_match("~-05-~i",$mydate3)){
if(preg_match("~2008~i",$mydate3)){
$may2008rus++;
}
}


if(preg_match("~-06-~i",$mydate3)){
if(preg_match("~2008~i",$mydate3)){
$iyun2008rus++;
}
}


if(preg_match("~-07-~i",$mydate3)){
if(preg_match("~2008~i",$mydate3)){
$iyul2008rus++;
}
}

if(preg_match("~-08-~i",$mydate3)){
if(preg_match("~2008~i",$mydate3)){
$avqust2008rus++;
}
}

if(preg_match("~-09-~i",$mydate3)){
if(preg_match("~2008~i",$mydate3)){
$sentyabr2008rus++;
}
}

if(preg_match("~-10-~i",$mydate3)){
if(preg_match("~2008~i",$mydate3)){
$oktyabr2008rus++;
}
}

if(preg_match("~-11-~i",$mydate3)){
if(preg_match("~2008~i",$mydate3)){
$noyabr2008rus++;
}
}

if(preg_match("~-12-~i",$mydate3)){
if(preg_match("~2008~i",$mydate3)){
$dekabr2008rus++;
}
}


//2009-cu il

if(preg_match("~-01-~i",$mydate3)){
if(preg_match("~2009~i",$mydate3)){
$yanvar2009rus++;
}
}

if(preg_match("~-02-~i",$mydate3)){
if(preg_match("~2009~i",$mydate3)){
$fevral2009rus++;
}
}

if(preg_match("~-03-~i",$mydate3)){
if(preg_match("~2009~i",$mydate3)){
$mart2009rus++;
}
}

if(preg_match("~-04-~i",$mydate3)){
if(preg_match("~2009~i",$mydate3)){
$aprel2009rus++;
}
}

if(preg_match("~-05-~i",$mydate3)){
if(preg_match("~2009~i",$mydate3)){
$may2009rus++;
}
}


if(preg_match("~-06-~i",$mydate3)){
if(preg_match("~2009~i",$mydate3)){
$iyun2009rus++;
}
}


if(preg_match("~-07-~i",$mydate3)){
if(preg_match("~2009~i",$mydate3)){
$iyul2009rus++;
}
}

if(preg_match("~-08-~i",$mydate3)){
if(preg_match("~2009~i",$mydate3)){
$avqust2009rus++;
}
}

if(preg_match("~-09-~i",$mydate3)){
if(preg_match("~2009~i",$mydate3)){
$sentyabr2009rus++;
}
}

if(preg_match("~-10-~i",$mydate3)){
if(preg_match("~2009~i",$mydate3)){
$oktyabr2009rus++;
}
}

if(preg_match("~-11-~i",$mydate3)){
if(preg_match("~2009~i",$mydate3)){
$noyabr2009rus++;
}
}

if(preg_match("~-12-~i",$mydate3)){
if(preg_match("~2009~i",$mydate3)){
$dekabr2009rus++;
}
}


//2010-cu il

if(preg_match("~-01-~i",$mydate3)){
if(preg_match("~2010~i",$mydate3)){
$yanvar2010rus++;
}
}

if(preg_match("~-02-~i",$mydate3)){
if(preg_match("~2010~i",$mydate3)){
$fevral2010rus++;
}
}

if(preg_match("~-03-~i",$mydate3)){
if(preg_match("~2010~i",$mydate3)){
$mart2010rus++;
}
}

if(preg_match("~-04-~i",$mydate3)){
if(preg_match("~2010~i",$mydate3)){
$aprel2010rus++;
}
}

if(preg_match("~-05-~i",$mydate3)){
if(preg_match("~2010~i",$mydate3)){
$may2010rus++;
}
}


if(preg_match("~-06-~i",$mydate3)){
if(preg_match("~2010~i",$mydate3)){
$iyun2010rus++;
}
}


if(preg_match("~-07-~i",$mydate3)){
if(preg_match("~2010~i",$mydate3)){
$iyul2010rus++;
}
}

if(preg_match("~-08-~i",$mydate3)){
if(preg_match("~2010~i",$mydate3)){
$avqust2010rus++;
}
}

if(preg_match("~-10-~i",$mydate3)){
if(preg_match("~2010~i",$mydate3)){
$sentyabr2010rus++;
}
}

if(preg_match("~-10-~i",$mydate3)){
if(preg_match("~2010~i",$mydate3)){
$oktyabr2010rus++;
}
}

if(preg_match("~-11-~i",$mydate3)){
if(preg_match("~2010~i",$mydate3)){
$noyabr2010rus++;
}
}

if(preg_match("~-12-~i",$mydate3)){
if(preg_match("~2010~i",$mydate3)){
$dekabr2010rus++;
}
}

//2011-cu il

if(preg_match("~-01-~i",$mydate3)){
if(preg_match("~2011~i",$mydate3)){
$yanvar2011rus++;
}
}

if(preg_match("~-02-~i",$mydate3)){
if(preg_match("~2011~i",$mydate3)){
$fevral2011rus++;
}
}

if(preg_match("~-03-~i",$mydate3)){
if(preg_match("~2011~i",$mydate3)){
$mart2011rus++;
}
}

if(preg_match("~-04-~i",$mydate3)){
if(preg_match("~2011~i",$mydate3)){
$aprel2011rus++;
}
}

if(preg_match("~-05-~i",$mydate3)){
if(preg_match("~2011~i",$mydate3)){
$may2011rus++;
}
}


if(preg_match("~-06-~i",$mydate3)){
if(preg_match("~2011~i",$mydate3)){
$iyun2011rus++;
}
}


if(preg_match("~-07-~i",$mydate3)){
if(preg_match("~2011~i",$mydate3)){
$iyul2011rus++;
}
}

if(preg_match("~-08-~i",$mydate3)){
if(preg_match("~2011~i",$mydate3)){
$avqust2011rus++;
}
}

if(preg_match("~-10-~i",$mydate3)){
if(preg_match("~2011~i",$mydate3)){
$sentyabr2011rus++;
}
}

if(preg_match("~-10-~i",$mydate3)){
if(preg_match("~2011~i",$mydate3)){
$oktyabr2011rus++;
}
}

if(preg_match("~-11-~i",$mydate3)){
if(preg_match("~2011~i",$mydate3)){
$noyabr2011rus++;
}
}

if(preg_match("~-12-~i",$mydate3)){
if(preg_match("~2011~i",$mydate3)){
$dekabr2011rus++;
}
}

//2012-cu il

if(preg_match("~-01-~i",$mydate3)){
if(preg_match("~2012~i",$mydate3)){
$yanvar2012rus++;
}
}

if(preg_match("~-02-~i",$mydate3)){
if(preg_match("~2012~i",$mydate3)){
$fevral2012rus++;
}
}

if(preg_match("~-03-~i",$mydate3)){
if(preg_match("~2012~i",$mydate3)){
$mart2012rus++;
}
}

if(preg_match("~-04-~i",$mydate3)){
if(preg_match("~2012~i",$mydate3)){
$aprel2012rus++;
}
}

if(preg_match("~-05-~i",$mydate3)){
if(preg_match("~2012~i",$mydate3)){
$may2012rus++;
}
}

if(preg_match("~-06-~i",$mydate3)){
if(preg_match("~2012~i",$mydate3)){
$iyun2012rus++;
}
}

if(preg_match("~-07-~i",$mydate3)){
if(preg_match("~2012~i",$mydate3)){
$iyul2012rus++;
}
}

if(preg_match("~-08-~i",$mydate3)){
if(preg_match("~2012~i",$mydate3)){
$avqust2012rus++;
}
}

if(preg_match("~-09-~i",$mydate3)){
if(preg_match("~2012~i",$mydate3)){
$sentyabr2012rus++;
}
}

if(preg_match("~-10-~i",$mydate3)){
if(preg_match("~2012~i",$mydate3)){
$oktyabr2012rus++;
}
}

if(preg_match("~-11-~i",$mydate3)){
if(preg_match("~2012~i",$mydate3)){
$noyabr2012rus++;
}
}

if(preg_match("~-12-~i",$mydate3)){
if(preg_match("~2012~i",$mydate3)){
$dekabr2012rus++;
}
}


//2013-cu il

if(preg_match("~-01-~i",$mydate3)){
if(preg_match("~2013~i",$mydate3)){
$yanvar2013rus++;
}
}

if(preg_match("~-02-~i",$mydate3)){
if(preg_match("~2013~i",$mydate3)){
$fevral2013rus++;
}
}

if(preg_match("~-03-~i",$mydate3)){
if(preg_match("~2013~i",$mydate3)){
$mart2013rus++;
}
}

if(preg_match("~-04-~i",$mydate3)){
if(preg_match("~2013~i",$mydate3)){
$aprel2013rus++;
}
}

if(preg_match("~-05-~i",$mydate3)){
if(preg_match("~2013~i",$mydate3)){
$may2013rus++;
}
}

if(preg_match("~-06-~i",$mydate3)){
if(preg_match("~2013~i",$mydate3)){
$iyun2013rus++;
}
}

if(preg_match("~-07-~i",$mydate3)){
if(preg_match("~2013~i",$mydate3)){
$iyul2013rus++;
}
}

if(preg_match("~-08-~i",$mydate3)){
if(preg_match("~2013~i",$mydate3)){
$avqust2013rus++;
}
}

if(preg_match("~-09-~i",$mydate3)){
if(preg_match("~2013~i",$mydate3)){
$sentyabr2013rus++;
}
}

if(preg_match("~-10-~i",$mydate3)){
if(preg_match("~2013~i",$mydate3)){
$oktyabr2013rus++;
}
}

if(preg_match("~-11-~i",$mydate3)){
if(preg_match("~2013~i",$mydate3)){
$noyabr2013rus++;
}
}

if(preg_match("~-12-~i",$mydate3)){
if(preg_match("~2013~i",$mydate3)){
$dekabr2013rus++;
}
}

//2014-cu il

if(preg_match("~-01-~i",$mydate3)){
if(preg_match("~2014~i",$mydate3)){
$yanvar2014rus++;
}
}

if(preg_match("~-02-~i",$mydate3)){
if(preg_match("~2014~i",$mydate3)){
$fevral2014rus++;
}
}

if(preg_match("~-03-~i",$mydate3)){
if(preg_match("~2014~i",$mydate3)){
$mart2014rus++;
}
}

if(preg_match("~-04-~i",$mydate3)){
if(preg_match("~2014~i",$mydate3)){
$aprel2014rus++;
}
}

if(preg_match("~-05-~i",$mydate3)){
if(preg_match("~2014~i",$mydate3)){
$may2014rus++;
}
}

if(preg_match("~-06-~i",$mydate3)){
if(preg_match("~2014~i",$mydate3)){
$iyun2014rus++;
}
}

if(preg_match("~-07-~i",$mydate3)){
if(preg_match("~2014~i",$mydate3)){
$iyul2014rus++;
}
}

if(preg_match("~-08-~i",$mydate3)){
if(preg_match("~2014~i",$mydate3)){
$avqust2014rus++;
}
}

if(preg_match("~-09-~i",$mydate3)){
if(preg_match("~2014~i",$mydate3)){
$sentyabr2014rus++;
}
}

if(preg_match("~-10-~i",$mydate3)){
if(preg_match("~2014~i",$mydate3)){
$oktyabr2014rus++;
}
}

if(preg_match("~-11-~i",$mydate3)){
if(preg_match("~2014~i",$mydate3)){
$noyabr2014rus++;
}
}

if(preg_match("~-12-~i",$mydate3)){
if(preg_match("~2014~i",$mydate3)){
$dekabr2014rus++;
}
}


endwhile;

mysql_close($my5);


?>