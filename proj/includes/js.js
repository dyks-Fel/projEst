function preench(){
    let n_mols = document.getElementById("n_mol").value;
    //console.log(n_mols);

    var TP = ` <div id="form"> ` 
      TP += `<form method="POST" acition = "index.php" >
    <div id = "corpo">
    <label for = "n_mols">Numero de mols:</label>
    <input  type = "text" id="n_mol" name="n_mols"placeholder="Numero de mols" value="${n_mols}<?= n_mol ?> " required/>  <br>
    <br>Deseja utilizar CNTP?
    <input type="checkbox" name="CNTP" id ="CNTP"value = "yes" checked "/><br><br>
    <div id = "TP"> 

    <label for = "temp">Temperatura: </label>
    <input  type = "text" name="temp"  id="temp" placeholder="Temperatura" value="273" required/>  
    
    <select name="escTemp" id="escTemp">          
        <option value = "Kelvin" selected> °K </option>
        <option value = "Fareheight" > °F </option>
        <option value = "Celsius"> °C </option>
    </select> 
    

    
    <br><br>
    <label for = "pressao">Pressão: </label>
    <input  type = "text" name="pressao" id="press" placeholder="Pressão" value="1" required/> 
    
    <select name="escPress" id="escPress">          
        <option value = "atm"> atm </option>
        <option value = "bar"> Bar </option>
        <option value = "kPascal"> kPa </option>
        <option value = "psi"> psi </option>
    </select> 
    
    
    </div><br>
    

    <button type="submit" name="acao" value="entrar" >Calcular</button>
    
        <br>Resultado: <input type = "text" id = "resultado" value = "<?= result ?>"/> 
    </div> 

</form>`
    
    TP += `</div>`

    let divTP = document.getElementById("teste");

    divTP.innerHTML = TP;
}
/*
function CalcularVM(){
    let n = document.getElementById('n_mol').value;
    for (let i in n) {
        if (i  in num)
{
        console.log("num")
        
    let CNTP= 0
    let r = 0.082
    let VM = 0
  
        let t = document.getElementById('tempe').value;
        let p = document.getElementById('press').value;

        CNTP = (eval(t) * eval(r) * eval(n))



        console.log("H")


    VM =  eval(CNTP) * eval(p)
    console.log(VM, CNTP, n)


   
    
    /*
  // /* var result = `hi ` + VM

    if(t == null && p == null){
        console.log("Not Null");
        ///console.log(result);
        VM = eval(n) * eval(t) * eval(r) / eval(p)
    }else {
        console.log("NULL");
      //  console.log(result);

        VM = eval(n) * eval(cntp);
    }
*

    let resultado = document.getElementById('resultado');
    resultado.value = VM;

    }

else{
    console.log("not num")

}
}
}    


*/

