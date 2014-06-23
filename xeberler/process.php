<?php 

$my=@mysql_connect($db_host, $db_user, $db_pass) or die("Qoshulmag olmur");
$my2=@mysql_select_db($db_name) or die("Bazani sechmek olmur");


$query="SELECT date FROM az_post";
$res=mysql_query($query);
$cols=mysql_num_rows($res);


$yanvar2008=0;
$fevral2008=0;
$mart2008=0;
$aprel2008=0;
$may2008=0;
$iyun2008=0;
$iyul2008=0;
$avqust2008=0;
$sentyabr2008=0;
$oktyabr2008=0;
$noyabr2008=0;
$dekabr2008=0;

$yanvar2009=0;
$fevral2009=0;
$mart2009=0;
$aprel2009=0;
$may2009=0;
$iyun2009=0;
$iyul2009=0;
$avqust2009=0;
$sentyabr2009=0;
$oktyabr2009=0;
$noyabr2009=0;
$dekabr2009=0;


$yanvar2010=0;
$fevral2010=0;
$mart2010=0;
$aprel2010=0;
$may2010=0;
$iyun2010=0;
$iyul2010=0;
$avqust2010=0;
$sentyabr2010=0;
$oktyabr2010=0;
$noyabr2010=0;
$dekabr2010=0;

$yanvar2011=0;
$fevral2011=0;
$mart2011=0;
$aprel2011=0;
$may2011=0;
$iyun2011=0;
$iyul2011=0;
$avqust2011=0;
$sentyabr2011=0;
$oktyabr2011=0;
$noyabr2011=0;
$dekabr2011=0;

$yanvar2012=0;
$fevral2012=0;
$mart2012=0;
$aprel2012=0;
$may2012=0;
$iyun2012=0;
$iyul2012=0;
$avqust2012=0;
$sentyabr2012=0;
$oktyabr2012=0;
$noyabr2012=0;
$dekabr2012=0;

$yanvar2013=0;
$fevral2013=0;
$mart2013=0;
$aprel2013=0;
$may2013=0;
$iyun2013=0;
$iyul2013=0;
$avqust2013=0;
$sentyabr2013=0;
$oktyabr2013=0;
$noyabr2013=0;
$dekabr2013=0;

$yanvar2014=0;
$fevral2014=0;
$mart2014=0;
$aprel2014=0;
$may2014=0;
$iyun2014=0;
$iyul2014=0;
$avqust2014=0;
$sentyabr2014=0;
$oktyabr2014=0;
$noyabr2014=0;
$dekabr2014=0;

while($perem=mysql_fetch_array($res)):
$mydate=$perem["date"];

//2008-ci il

if(preg_match("~-01-~i",$mydate)){
if(preg_match("~2008~i",$mydate)){
$yanvar2008++;
}
}

if(preg_match("~-02-~i",$mydate)){
if(preg_match("~2008~i",$mydate)){
$fevral2008++;
}
}

if(preg_match("~-03-~i",$mydate)){
if(preg_match("~2008~i",$mydate)){
$mart2008++;
}
}

if(preg_match("~-04-~i",$mydate)){
if(preg_match("~2008~i",$mydate)){
$aprel2008++;
}
}

if(preg_match("~-05-~i",$mydate)){
if(preg_match("~2008~i",$mydate)){
$may2008++;
}
}


if(preg_match("~-06-~i",$mydate)){
if(preg_match("~2008~i",$mydate)){
$iyun2008++;
}
}


if(preg_match("~-07-~i",$mydate)){
if(preg_match("~2008~i",$mydate)){
$iyul2008++;
}
}

if(preg_match("~-08-~i",$mydate)){
if(preg_match("~2008~i",$mydate)){
$avqust2008++;
}
}

if(preg_match("~-09-~i",$mydate)){
if(preg_match("~2008~i",$mydate)){
$sentyabr2008++;
}
}

if(preg_match("~-10-~i",$mydate)){
if(preg_match("~2008~i",$mydate)){
$oktyabr2008++;
}
}

if(preg_match("~-11-~i",$mydate)){
if(preg_match("~2008~i",$mydate)){
$noyabr2008++;
}
}

if(preg_match("~-12-~i",$mydate)){
if(preg_match("~2008~i",$mydate)){
$dekabr2008++;
}
}


//2009-cu il

if(preg_match("~-01-~i",$mydate)){
if(preg_match("~2009~i",$mydate)){
$yanvar2009++;
}
}

if(preg_match("~-02-~i",$mydate)){
if(preg_match("~2009~i",$mydate)){
$fevral2009++;
}
}

if(preg_match("~-03-~i",$mydate)){
if(preg_match("~2009~i",$mydate)){
$mart2009++;
}
}

if(preg_match("~-04-~i",$mydate)){
if(preg_match("~2009~i",$mydate)){
$aprel2009++;
}
}

if(preg_match("~-05-~i",$mydate)){
if(preg_match("~2009~i",$mydate)){
$may2009++;
}
}


if(preg_match("~-06-~i",$mydate)){
if(preg_match("~2009~i",$mydate)){
$iyun2009++;
}
}


if(preg_match("~-07-~i",$mydate)){
if(preg_match("~2009~i",$mydate)){
$iyul2009++;
}
}

if(preg_match("~-08-~i",$mydate)){
if(preg_match("~2009~i",$mydate)){
$avqust2009++;
}
}

if(preg_match("~-09-~i",$mydate)){
if(preg_match("~2009~i",$mydate)){
$sentyabr2009++;
}
}

if(preg_match("~-10-~i",$mydate)){
if(preg_match("~2009~i",$mydate)){
$oktyabr2009++;
}
}

if(preg_match("~-11-~i",$mydate)){
if(preg_match("~2009~i",$mydate)){
$noyabr2009++;
}
}

if(preg_match("~-12-~i",$mydate)){
if(preg_match("~2009~i",$mydate)){
$dekabr2009++;
}
}


//2010-cu il

if(preg_match("~-01-~i",$mydate)){
if(preg_match("~2010~i",$mydate)){
$yanvar2010++;
}
}

if(preg_match("~-02-~i",$mydate)){
if(preg_match("~2010~i",$mydate)){
$fevral2010++;
}
}

if(preg_match("~-03-~i",$mydate)){
if(preg_match("~2010~i",$mydate)){
$mart2010++;
}
}

if(preg_match("~-04-~i",$mydate)){
if(preg_match("~2010~i",$mydate)){
$aprel2010++;
}
}

if(preg_match("~-05-~i",$mydate)){
if(preg_match("~2010~i",$mydate)){
$may2010++;
}
}


if(preg_match("~-06-~i",$mydate)){
if(preg_match("~2010~i",$mydate)){
$iyun2010++;
}
}


if(preg_match("~-07-~i",$mydate)){
if(preg_match("~2010~i",$mydate)){
$iyul2010++;
}
}

if(preg_match("~-08-~i",$mydate)){
if(preg_match("~2010~i",$mydate)){
$avqust2010++;
}
}

if(preg_match("~-10-~i",$mydate)){
if(preg_match("~2010~i",$mydate)){
$sentyabr2010++;
}
}

if(preg_match("~-10-~i",$mydate)){
if(preg_match("~2010~i",$mydate)){
$oktyabr2010++;
}
}

if(preg_match("~-11-~i",$mydate)){
if(preg_match("~2010~i",$mydate)){
$noyabr2010++;
}
}

if(preg_match("~-12-~i",$mydate)){
if(preg_match("~2010~i",$mydate)){
$dekabr2010++;
}
}

//2011-ci il

if(preg_match("~-01-~i",$mydate)){
if(preg_match("~2011~i",$mydate)){
$yanvar2011++;
}
}

if(preg_match("~-02-~i",$mydate)){
if(preg_match("~2011~i",$mydate)){
$fevral2011++;
}
}

if(preg_match("~-03-~i",$mydate)){
if(preg_match("~2011~i",$mydate)){
$mart2011++;
}
}

if(preg_match("~-04-~i",$mydate)){
if(preg_match("~2011~i",$mydate)){
$aprel2011++;
}
}

if(preg_match("~-05-~i",$mydate)){
if(preg_match("~2011~i",$mydate)){
$may2011++;
}
}


if(preg_match("~-06-~i",$mydate)){
if(preg_match("~2011~i",$mydate)){
$iyun2011++;
}
}


if(preg_match("~-07-~i",$mydate)){
if(preg_match("~2011~i",$mydate)){
$iyul2011++;
}
}

if(preg_match("~-08-~i",$mydate)){
if(preg_match("~2011~i",$mydate)){
$avqust2011++;
}
}

if(preg_match("~-10-~i",$mydate)){
if(preg_match("~2011~i",$mydate)){
$sentyabr2011++;
}
}

if(preg_match("~-10-~i",$mydate)){
if(preg_match("~2011~i",$mydate)){
$oktyabr2011++;
}
}

if(preg_match("~-11-~i",$mydate)){
if(preg_match("~2011~i",$mydate)){
$noyabr2011++;
}
}

if(preg_match("~-12-~i",$mydate)){
if(preg_match("~2011~i",$mydate)){
$dekabr2011++;
}
}

//2012-ci il

if(preg_match("~-01-~i",$mydate)){
if(preg_match("~2012~i",$mydate)){
$yanvar2012++;
}
}

if(preg_match("~-02-~i",$mydate)){
if(preg_match("~2012~i",$mydate)){
$fevral2012++;
}
}

if(preg_match("~-03-~i",$mydate)){
if(preg_match("~2012~i",$mydate)){
$mart2012++;
}
}

if(preg_match("~-04-~i",$mydate)){
if(preg_match("~2012~i",$mydate)){
$aprel2012++;
}
}

if(preg_match("~-05-~i",$mydate)){
if(preg_match("~2012~i",$mydate)){
$may2012++;
}
}

if(preg_match("~-06-~i",$mydate)){
if(preg_match("~2012~i",$mydate)){
$iyun2012++;
}
}

if(preg_match("~-07-~i",$mydate)){
if(preg_match("~2012~i",$mydate)){
$iyul2012++;
}
}

if(preg_match("~-08-~i",$mydate)){
if(preg_match("~2012~i",$mydate)){
$avqust2012++;
}
}

if(preg_match("~-09-~i",$mydate)){
if(preg_match("~2012~i",$mydate)){
$sentyabr2012++;
}
}

if(preg_match("~-10-~i",$mydate)){
if(preg_match("~2012~i",$mydate)){
$oktyabr2012++;
}
}

if(preg_match("~-11-~i",$mydate)){
if(preg_match("~2012~i",$mydate)){
$noyabr2012++;
}
}

if(preg_match("~-12-~i",$mydate)){
if(preg_match("~2012~i",$mydate)){
$dekabr2012++;
}
}


//2013-ci il

if(preg_match("~-01-~i",$mydate)){
if(preg_match("~2013~i",$mydate)){
$yanvar2013++;
}
}

if(preg_match("~-02-~i",$mydate)){
if(preg_match("~2013~i",$mydate)){
$fevral2013++;
}
}

if(preg_match("~-03-~i",$mydate)){
if(preg_match("~2013~i",$mydate)){
$mart2013++;
}
}

if(preg_match("~-04-~i",$mydate)){
if(preg_match("~2013~i",$mydate)){
$aprel2013++;
}
}

if(preg_match("~-05-~i",$mydate)){
if(preg_match("~2013~i",$mydate)){
$may2013++;
}
}

if(preg_match("~-06-~i",$mydate)){
if(preg_match("~2013~i",$mydate)){
$iyun2013++;
}
}

if(preg_match("~-07-~i",$mydate)){
if(preg_match("~2013~i",$mydate)){
$iyul2013++;
}
}

if(preg_match("~-08-~i",$mydate)){
if(preg_match("~2013~i",$mydate)){
$avqust2013++;
}
}

if(preg_match("~-09-~i",$mydate)){
if(preg_match("~2013~i",$mydate)){
$sentyabr2013++;
}
}

if(preg_match("~-10-~i",$mydate)){
if(preg_match("~2013~i",$mydate)){
$oktyabr2013++;
}
}

if(preg_match("~-11-~i",$mydate)){
if(preg_match("~2013~i",$mydate)){
$noyabr2013++;
}
}

if(preg_match("~-12-~i",$mydate)){
if(preg_match("~2013~i",$mydate)){
$dekabr2013++;
}
}


//2014-cu il

if(preg_match("~-01-~i",$mydate)){
if(preg_match("~2014~i",$mydate)){
$yanvar2014++;
}
}

if(preg_match("~-02-~i",$mydate)){
if(preg_match("~2014~i",$mydate)){
$fevral2014++;
}
}

if(preg_match("~-03-~i",$mydate)){
if(preg_match("~2014~i",$mydate)){
$mart2014++;
}
}

if(preg_match("~-04-~i",$mydate)){
if(preg_match("~2014~i",$mydate)){
$aprel2014++;
}
}

if(preg_match("~-05-~i",$mydate)){
if(preg_match("~2014~i",$mydate)){
$may2014++;
}
}

if(preg_match("~-06-~i",$mydate)){
if(preg_match("~2014~i",$mydate)){
$iyun2014++;
}
}

if(preg_match("~-07-~i",$mydate)){
if(preg_match("~2014~i",$mydate)){
$iyul2014++;
}
}

if(preg_match("~-08-~i",$mydate)){
if(preg_match("~2014~i",$mydate)){
$avqust2014++;
}
}

if(preg_match("~-09-~i",$mydate)){
if(preg_match("~2014~i",$mydate)){
$sentyabr2014++;
}
}

if(preg_match("~-10-~i",$mydate)){
if(preg_match("~2014~i",$mydate)){
$oktyabr2014++;
}
}

if(preg_match("~-11-~i",$mydate)){
if(preg_match("~2014~i",$mydate)){
$noyabr2014++;
}
}

if(preg_match("~-12-~i",$mydate)){
if(preg_match("~2014~i",$mydate)){
$dekabr2014++;
}
}

endwhile;


mysql_close($my);


?>