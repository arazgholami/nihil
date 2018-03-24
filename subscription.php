<?php

$name=$_POST['name'];
$email=$_POST['email'];

if(@mail("info@alirezagholami.com",$subject,"From: $name ($email) <br>" . $message,"From: $name\n"))
{echo "ممنون $name!";}
else
{echo "ثبت نشد!";}


?>