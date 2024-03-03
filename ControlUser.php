<?php

include ("modele.php");
$l=$_POST['login'];
$p=$_POST['mdp'];
$u=new user($l,$p);
$va=$u->connect();
if($va)
{
    echo $u ;
}
else
{
    header("Location:Authentification.html");

}



?>