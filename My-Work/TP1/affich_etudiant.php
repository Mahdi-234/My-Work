<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table ,th,td
        {
            border:1px solid black;
            border-collapse: collapse ;
        }
        th,td 
        {
            padding : 5px ;
            text-align: left ;

        }
    </style>
</head>
<body>

<?php


/*
$tab['Mahdi'] = 15 ;
$tab["jessem"] = 20 ;
$tab['Ismail'] = 8 ;
$tab['Youssef'] = 12 ;
*/
require_once 'util.php';
echo "<table>";
echo "<tr><th>nom</th><th>moyenne</th></tr>";

foreach($tab as $cle => $element)
{
    $couleur=Couleur($element);
    echo "<tr style='background-color: $couleur;'>";
    echo "<td>${cle}</td>";
    echo "<td>${element}</td><br>";
    echo "</tr>";
    
}
echo "</table>";
function Couleur ($element)
{
    if($element>=10)
    {
        return 'Green';

    }
    else
    {
    return 'red';

    }
     
}

?>
</body>
</html>



