<?php
define('PageTitle', 'Volume molar' );
$result = "";
$mols  =  "";
$temper = "";
$press =  "";
//<?= n_mol? > 

$escTemp = filter_input(INPUT_POST, 'escTemp', FILTER_SANITIZE_STRING);

$escPress = filter_input(INPUT_POST, 'escPress', FILTER_SANITIZE_STRING);

if(isset($_POST['n_mols']) && isset($_POST['temp']) && isset($_POST['pressao'])) {
$VM = "";
$n_mols = $_POST['n_mols'];
$temp = $_POST['temp'];
$pressao = $_POST['pressao'];
$temp_final = "";
$press_final = "";
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


}   else {
    //echo "<br>VALOR INSERIDO É INVALIDO <br>";
    $VM = "Valor inserido é invalido!";
}

$result =  $VM;
$mols  = $n_mols;
$temper = $temp ;
$press = $pressao;
}

define('result', $result);
define('n_mol', $mols);
define('temp', $temper);
define('press', $press);


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/menu.php';
include __DIR__.'/includes/calculVolMol.php';
include __DIR__.'/includes/footer.php';

?>