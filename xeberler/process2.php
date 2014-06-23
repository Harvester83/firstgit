<?php

$my3=@mysql_connect($db_host, $db_user, $db_pass) or die("Qoshulmag olmur");
$my4=@mysql_select_db($db_name) or die("Bazani sechmek olmur");


$query2="SELECT date FROM en_post";
$res2=mysql_query($query2);
$cols2=mysql_num_rows($res2);

$yanvar2008eng=0;
$fevral2008eng=0;
$mart2008eng=0;
$aprel2008eng=0;
$may2008eng=0;
$iyun2008eng=0;
$iyul2008eng=0;
$avqust2008eng=0;
$sentyabr2008eng=0;
$oktyabr2008eng=0;
$noyabr2008eng=0;
$dekabr2008eng=0;

$yanvar2009eng=0;
$fevral2009eng=0;
$mart2009eng=0;
$aprel2009eng=0;
$may2009eng=0;
$iyun2009eng=0;
$iyul2009eng=0;
$avqust2009eng=0;
$sentyabr2009eng=0;
$oktyabr2009eng=0;
$noyabr2009eng=0;
$dekabr2009eng=0;

$yanvar2010eng=0;
$fevral2010eng=0;
$mart2010eng=0;
$aprel2010eng=0;
$may2010eng=0;
$iyun2010eng=0;
$iyul2010eng=0;
$avqust2010eng=0;
$sentyabr2010eng=0;
$oktyabr2010eng=0;
$noyabr2010eng=0;
$dekabr2010eng=0;

$yanvar2011eng=0;
$fevral2011eng=0;
$mart2011eng=0;
$aprel2011eng=0;
$may2011eng=0;
$iyun2011eng=0;
$iyul2011eng=0;
$avqust2011eng=0;
$sentyabr2011eng=0;
$oktyabr2011eng=0;
$noyabr2011eng=0;
$dekabr2011eng=0;

$yanvar2012eng=0;
$fevral2012eng=0;
$mart2012eng=0;
$aprel2012eng=0;
$may2012eng=0;
$iyun2012eng=0;
$iyul2012eng=0;
$avqust2012eng=0;
$sentyabr2012eng=0;
$oktyabr2012eng=0;
$noyabr2012eng=0;
$dekabr2012eng=0;

$yanvar2013eng=0;
$fevral2013eng=0;
$mart2013eng=0;
$aprel2013eng=0;
$may2013eng=0;
$iyun2013eng=0;
$iyul2013eng=0;
$avqust2013eng=0;
$sentyabr2013eng=0;
$oktyabr2013eng=0;
$noyabr2013eng=0;
$dekabr2013eng=0;

$yanvar2014eng=0;
$fevral2014eng=0;
$mart2014eng=0;
$aprel2014eng=0;
$may2014eng=0;
$iyun2014eng=0;
$iyul2014eng=0;
$avqust2014eng=0;
$sentyabr2014eng=0;
$oktyabr2014eng=0;
$noyabr2014eng=0;
$dekabr2014eng=0;


while($perem2=mysql_fetch_array($res2)):
$mydate2=$perem2["date"];

//2008-ci il

if(preg_match("~-01-~i",$mydate2)){
if(preg_match("~2008~i",$mydate2)){
$yanvar2008eng++;
}
}

if(preg_match("~-02-~i",$mydate2)){
if(preg_match("~2008~i",$mydate2)){
$fevral2008eng++;
}
}

if(preg_match("~-03-~i",$mydate2)){
if(preg_match("~2008~i",$mydate2)){
$mart2008eng++;
}
}

if(preg_match("~-04-~i",$mydate2)){
if(preg_match("~2008~i",$mydate2)){
$aprel2008eng++;
}
}

if(preg_match("~-05-~i",$mydate2)){
if(preg_match("~2008~i",$mydate2)){
$may2008eng++;
}
}


if(preg_match("~-06-~i",$mydate2)){
if(preg_match("~2008~i",$mydate2)){
$iyun2008eng++;
}
}


if(preg_match("~-07-~i",$mydate2)){
if(preg_match("~2008~i",$mydate2)){
$iyul2008eng++;
}
}

if(preg_match("~-08-~i",$mydate2)){
if(preg_match("~2008~i",$mydate2)){
$avqust2008eng++;
}
}

if(preg_match("~-09-~i",$mydate2)){
if(preg_match("~2008~i",$mydate2)){
$sentyabr2008eng++;
}
}

if(preg_match("~-10-~i",$mydate2)){
if(preg_match("~2008~i",$mydate2)){
$oktyabr2008eng++;
}
}

if(preg_match("~-11-~i",$mydate2)){
if(preg_match("~2008~i",$mydate2)){
$noyabr2008eng++;
}
}

if(preg_match("~-12-~i",$mydate2)){
if(preg_match("~2008~i",$mydate2)){
$dekabr2008eng++;
}
}


//2009-cu il

if(preg_match("~-01-~i",$mydate2)){
if(preg_match("~2009~i",$mydate2)){
$yanvar2009eng++;
}
}

if(preg_match("~-02-~i",$mydate2)){
if(preg_match("~2009~i",$mydate2)){
$fevral2009eng++;
}
}

if(preg_match("~-03-~i",$mydate2)){
if(preg_match("~2009~i",$mydate2)){
$mart2009eng++;
}
}

if(preg_match("~-04-~i",$mydate2)){
if(preg_match("~2009~i",$mydate2)){
$aprel2009eng++;
}
}

if(preg_match("~-05-~i",$mydate2)){
if(preg_match("~2009~i",$mydate2)){
$may2009eng++;
}
}


if(preg_match("~-06-~i",$mydate2)){
if(preg_match("~2009~i",$mydate2)){
$iyun2009eng++;
}
}


if(preg_match("~-07-~i",$mydate2)){
if(preg_match("~2009~i",$mydate2)){
$iyul2009eng++;
}
}

if(preg_match("~-08-~i",$mydate2)){
if(preg_match("~2009~i",$mydate2)){
$avqust2009eng++;
}
}

if(preg_match("~-09-~i",$mydate2)){
if(preg_match("~2009~i",$mydate2)){
$sentyabr2009eng++;
}
}

if(preg_match("~-10-~i",$mydate2)){
if(preg_match("~2009~i",$mydate2)){
$oktyabr2009eng++;
}
}

if(preg_match("~-11-~i",$mydate2)){
if(preg_match("~2009~i",$mydate2)){
$noyabr2009eng++;
}
}

if(preg_match("~-12-~i",$mydate2)){
if(preg_match("~2009~i",$mydate2)){
$dekabr2009eng++;
}
}


//2010-cu il

if(preg_match("~-01-~i",$mydate2)){
if(preg_match("~2010~i",$mydate2)){
$yanvar2010eng++;
}
}

if(preg_match("~-02-~i",$mydate2)){
if(preg_match("~2010~i",$mydate2)){
$fevral2010eng++;
}
}

if(preg_match("~-03-~i",$mydate2)){
if(preg_match("~2010~i",$mydate2)){
$mart2010eng++;
}
}

if(preg_match("~-04-~i",$mydate2)){
if(preg_match("~2010~i",$mydate2)){
$aprel2010eng++;
}
}

if(preg_match("~-05-~i",$mydate2)){
if(preg_match("~2010~i",$mydate2)){
$may2010eng++;
}
}


if(preg_match("~-06-~i",$mydate2)){
if(preg_match("~2010~i",$mydate2)){
$iyun2010eng++;
}
}


if(preg_match("~-07-~i",$mydate2)){
if(preg_match("~2010~i",$mydate2)){
$iyul2010eng++;
}
}

if(preg_match("~-08-~i",$mydate2)){
if(preg_match("~2010~i",$mydate2)){
$avqust2010eng++;
}
}

if(preg_match("~-10-~i",$mydate2)){
if(preg_match("~2010~i",$mydate2)){
$sentyabr2010eng++;
}
}

if(preg_match("~-10-~i",$mydate2)){
if(preg_match("~2010~i",$mydate2)){
$oktyabr2010eng++;
}
}

if(preg_match("~-11-~i",$mydate2)){
if(preg_match("~2010~i",$mydate2)){
$noyabr2010eng++;
}
}

if(preg_match("~-12-~i",$mydate2)){
if(preg_match("~2010~i",$mydate2)){
$dekabr2010eng++;
}
}


//2011-ci il

if(preg_match("~-01-~i",$mydate2)){
if(preg_match("~2011~i",$mydate2)){
$yanvar2011eng++;
}
}

if(preg_match("~-02-~i",$mydate2)){
if(preg_match("~2011~i",$mydate2)){
$fevral2011eng++;
}
}

if(preg_match("~-03-~i",$mydate2)){
if(preg_match("~2011~i",$mydate2)){
$mart2011eng++;
}
}

if(preg_match("~-04-~i",$mydate2)){
if(preg_match("~2011~i",$mydate2)){
$aprel2011eng++;
}
}

if(preg_match("~-05-~i",$mydate2)){
if(preg_match("~2011~i",$mydate2)){
$may2011eng++;
}
}


if(preg_match("~-06-~i",$mydate2)){
if(preg_match("~2011~i",$mydate2)){
$iyun2011eng++;
}
}


if(preg_match("~-07-~i",$mydate2)){
if(preg_match("~2011~i",$mydate2)){
$iyul2011eng++;
}
}

if(preg_match("~-08-~i",$mydate2)){
if(preg_match("~2011~i",$mydate2)){
$avqust2011eng++;
}
}

if(preg_match("~-10-~i",$mydate2)){
if(preg_match("~2011~i",$mydate2)){
$sentyabr2011eng++;
}
}

if(preg_match("~-10-~i",$mydate2)){
if(preg_match("~2011~i",$mydate2)){
$oktyabr2011eng++;
}
}

if(preg_match("~-11-~i",$mydate2)){
if(preg_match("~2011~i",$mydate2)){
$noyabr2011eng++;
}
}

if(preg_match("~-12-~i",$mydate2)){
if(preg_match("~2011~i",$mydate2)){
$dekabr2011eng++;
}
}

//2012-ci il

if(preg_match("~-01-~i",$mydate2)){
if(preg_match("~2012~i",$mydate2)){
$yanvar2012eng++;
}
}

if(preg_match("~-02-~i",$mydate2)){
if(preg_match("~2012~i",$mydate2)){
$fevral2012eng++;
}
}

if(preg_match("~-03-~i",$mydate2)){
if(preg_match("~2012~i",$mydate2)){
$mart2012eng++;
}
}

if(preg_match("~-04-~i",$mydate2)){
if(preg_match("~2012~i",$mydate2)){
$aprel2012eng++;
}
}

if(preg_match("~-05-~i",$mydate2)){
if(preg_match("~2012~i",$mydate2)){
$may2012eng++;
}
}

if(preg_match("~-06-~i",$mydate2)){
if(preg_match("~2012~i",$mydate2)){
$iyun2012eng++;
}
}

if(preg_match("~-07-~i",$mydate2)){
if(preg_match("~2012~i",$mydate2)){
$iyul2012eng++;
}
}

if(preg_match("~-08-~i",$mydate2)){
if(preg_match("~2012~i",$mydate2)){
$avqust2012eng++;
}
}

if(preg_match("~-09-~i",$mydate2)){
if(preg_match("~2012~i",$mydate2)){
$sentyabr2012eng++;
}
}

if(preg_match("~-10-~i",$mydate2)){
if(preg_match("~2012~i",$mydate2)){
$oktyabr2012eng++;
}
}

if(preg_match("~-11-~i",$mydate2)){
if(preg_match("~2012~i",$mydate2)){
$noyabr2012eng++;
}
}

if(preg_match("~-12-~i",$mydate2)){
if(preg_match("~2012~i",$mydate2)){
$dekabr2012eng++;
}
}

//2013-ci il

if(preg_match("~-01-~i",$mydate2)){
if(preg_match("~2013~i",$mydate2)){
$yanvar2013eng++;
}
}

if(preg_match("~-02-~i",$mydate2)){
if(preg_match("~2013~i",$mydate2)){
$fevral2013eng++;
}
}

if(preg_match("~-03-~i",$mydate2)){
if(preg_match("~2013~i",$mydate2)){
$mart2013eng++;
}
}

if(preg_match("~-04-~i",$mydate2)){
if(preg_match("~2013~i",$mydate2)){
$aprel2013eng++;
}
}

if(preg_match("~-05-~i",$mydate2)){
if(preg_match("~2013~i",$mydate2)){
$may2013eng++;
}
}

if(preg_match("~-06-~i",$mydate2)){
if(preg_match("~2013~i",$mydate2)){
$iyun2013eng++;
}
}

if(preg_match("~-07-~i",$mydate2)){
if(preg_match("~2013~i",$mydate2)){
$iyul2013eng++;
}
}

if(preg_match("~-08-~i",$mydate2)){
if(preg_match("~2013~i",$mydate2)){
$avqust2013eng++;
}
}

if(preg_match("~-09-~i",$mydate2)){
if(preg_match("~2013~i",$mydate2)){
$sentyabr2013eng++;
}
}

if(preg_match("~-10-~i",$mydate2)){
if(preg_match("~2013~i",$mydate2)){
$oktyabr2013eng++;
}
}

if(preg_match("~-11-~i",$mydate2)){
if(preg_match("~2013~i",$mydate2)){
$noyabr2013eng++;
}
}

if(preg_match("~-12-~i",$mydate2)){
if(preg_match("~2013~i",$mydate2)){
$dekabr2013eng++;
}
}



//2014-ci il

if(preg_match("~-01-~i",$mydate2)){
if(preg_match("~2014~i",$mydate2)){
$yanvar2014eng++;
}
}

if(preg_match("~-02-~i",$mydate2)){
if(preg_match("~2014~i",$mydate2)){
$fevral2014eng++;
}
}

if(preg_match("~-03-~i",$mydate2)){
if(preg_match("~2014~i",$mydate2)){
$mart2014eng++;
}
}

if(preg_match("~-04-~i",$mydate2)){
if(preg_match("~2014~i",$mydate2)){
$aprel2014eng++;
}
}

if(preg_match("~-05-~i",$mydate2)){
if(preg_match("~2014~i",$mydate2)){
$may2014eng++;
}
}

if(preg_match("~-06-~i",$mydate2)){
if(preg_match("~2014~i",$mydate2)){
$iyun2014eng++;
}
}

if(preg_match("~-07-~i",$mydate2)){
if(preg_match("~2014~i",$mydate2)){
$iyul2014eng++;
}
}

if(preg_match("~-08-~i",$mydate2)){
if(preg_match("~2014~i",$mydate2)){
$avqust2014eng++;
}
}

if(preg_match("~-09-~i",$mydate2)){
if(preg_match("~2014~i",$mydate2)){
$sentyabr2014eng++;
}
}

if(preg_match("~-10-~i",$mydate2)){
if(preg_match("~2014~i",$mydate2)){
$oktyabr2014eng++;
}
}

if(preg_match("~-11-~i",$mydate2)){
if(preg_match("~2014~i",$mydate2)){
$noyabr2014eng++;
}
}

if(preg_match("~-12-~i",$mydate2)){
if(preg_match("~2014~i",$mydate2)){
$dekabr2014eng++;
}
}


endwhile;

mysql_close($my3);


?>