<?php
include('fonctions.php');
if(register("test@test.fr","test","test")==true){
    echo "Inscription Valid�";
}else
    echo "Erreur";

?>