<
<?php  
$PV = $_POST["PV"] ;
$four =$_POST["four"] ;
if(
    (                                   // iset pour verififer l'existance du variable 
        (!empty($_POST['ref']) && isset($_POST['ref'])) &&
        (!empty($_POST['libe']) && isset($_POST['libe'])) &&
        (!empty($_POST['prix']) && isset($_POST['prix'])) &&
        (!empty($_POST['qunatite']) && isset($_POST['qunatite']))
     ))
     { 
        foreach($PV as $elemnt )
        {
            //echo " la point de vente" . $elemnt . " ";
            
        }
        echo "<br>" ;
        foreach($four as $kr){
            echo  ' '. $kr ;
        }
        echo "<br>" ;
        echo $_POST['ref'] . "<br>" ;
        echo  $_POST['libe']  ."<br>" ;
        
        echo $_POST['prix'] . "<br>" ;
        echo  $_POST['qunatite'] . "<br>";

}


?>
</body>
</html>
