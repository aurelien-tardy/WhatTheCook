<?php
include('fonctions.php');
if(register("test@test.fr","test","test")==true){
    echo "Inscription Validé";
}else
    echo "Erreur";

?>