<?php
$conn = mysql_connect("localhost","b19156757_admin","Ckfdenf17") or die ("error MySQL");
mysql_set_charset('utf8',$conn);
mysql_select_db("b19156757_generals_bd") or die ("error db");

$t_title   =  trim($_POST['title']);
$t_article   = trim($_POST['article']);
$image =  trim($_POST['image']);
if ((!empty($t_title)) && (!empty($t_article))&&(!empty($image)))
{
    $query = "INSERT INTO general_news(`title`,`tdate`,`article`,`image`) VALUES ('".$t_title."',now(),'".$t_article."','".$image."')";
    $result = mysql_query($query) or die ("<p>Не вдалось зєднатися з БД</p>");
    if ($result) 
        echo "<p> Стаття додана  </p> ";
    else
        echo "<p>Стаття не додана </p> ";
} else 
    exit("Enter correct parameters!");

if ($conn)
    mysql_close ($conn);
?>