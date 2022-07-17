<?php
define('PageTitle', 'Volume molar' );
$VM = "";

$escTemp = filter_input(INPUT_POST, 'escTemp', FILTER_SANITIZE_STRING);
//echo  $escTemp ;
//echo "<br><br>";

$escPress = filter_input(INPUT_POST, 'escPress', FILTER_SANITIZE_STRING);
//echo  $escPress ;

if(isset($_POST['n_mols']) && isset($_POST['temp']) && isset($_POST['pressao'])) {
    
$n_mols = $_POST['n_mols'];
$temp =$_POST['temp'];
$pressao = $_POST['pressao'];
$temp_final = " ";
$press_final = " ";
$r = 0.082;


    if (is_numeric($n_mols) && is_numeric($temp) && is_numeric($pressao)){

    //CONVERSÃO DE TEMPERATURA PRA KELVIN
    if ($escTemp == "Kelvin"){
        $temp_final = $temp;
    }
    else if ($escTemp == "Fareheight"){    
        $temp_final = (($temp-32)/1.8)+273.15;       
    }
    else if ($escTemp == "Celsius"){
        $temp_final = $temp + 273.15;    
    } 
    
    // CONVERSÃO DE PRESSÃO PARA ATM 
    #FONTE: https://www.famabras.com.br/pdf/manometros-tabela-de-conversao-de-unidades-de-pressao.pdf ACESSADO EM 17/07/22
    if ($escPress == "atm"){
        $press_final = $pressao;
    } 
    else if ($escPress == "bar"){
        $press_final = $pressao * 0.986923;
    }
    else if ($escPress == "kPascal"){
        $press_final = $pressao * 0.009869;
    }
    else if ($escPress == "psi"){ 
        $press_final = $pressao * 0.068046;
    }
    
    $CNTP = $temp_final * $r * $n_mols;



 


    $VM =  $CNTP * $press_final;






    /*echo "pressao final é $press_final";
    echo "<br>temperatura final é $temp_final";*/

}   else {
    echo "<br>VALOR INSERIDO É INVALIDO <br>";
}
}
define('value', $VM);
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/calculVolMol.php';
include __DIR__.'/includes/footer.php';

?>