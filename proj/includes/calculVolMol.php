<main>
<section> 
    <title>Volume Molar </title>
<body>
    <div id = "crpo">

        <h3> Volume Molar:</h3>
        <div id= "teste">
        <form method="POST" acition = "index.php" >
            <div id = "corpo">
            <label for = "n_mols">Numero de mols:</label>
            <input  type = "text" id="n_mol" name="n_mols"placeholder="Numero de mols" value="" required/>  <br>
            <br>Deseja utilizar CNTP?
            <input type="checkbox" name="CNTP" id ="CNTP"value = "yes"   onClick= "preench()"/><br><br>
            <div id = "TP"> 

            <label for = "temp">Temperatura: </label>
            <input  type = "text" name="temp"  id="temp" placeholder="Temperatura" value="" required/>  
            
            <select name="escTemp" id="escTemp">          
                <option value = "Kelvin" selected> °K </option>
                <option value = "Fareheight" > °F </option>
                <option value = "Celsius"> °C </option>
            </select> 
            
       
            
            <br><br>
            <label for = "pressao">Pressão: </label>
            <input  type = "text" name="pressao" id="press" placeholder="Pressão" value="" required/> 
            
            <select name="escPress" id="escPress">          
                <option value = "atm"> atm </option>
                <option value = "bar"> Bar </option>
                <option value = "kPascal"> kPa </option>
                <option value = "psi"> psi </option>
            </select> 
            
            </div><br>

            
           <!-- <input type = "button" value = "Calcular" onClick ="CalcularVM() "/>
            <input type = "button" value = "apagar " onClick ="Apag()"/><p></p> -->
            <button type="submit" name="acao" value="entrar" >Calcular</button>
                <br>Resultado: <input type = "text" id = "resultado" value = "<?= value ?>"/> 
            </div> 

        </form>
</div>
       <script language = "javascript" >
       
       num = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9")
        /*function Y_CNTP(){
            // Removendo um nó a partir do pai (remove a div do formulario)
            var TPr = document.getElementById("form");
            if (TPr.parentNode) {
                TPr.parentNode.removeChild(TPr);
             
            }else {
                console.log("HHIII")
            }
          /*  //remove o form para inserir temperatura e pressão inserindo um texto 'vazio' (uma forma um pouco bruta)
            let divTP = document.getElementById("TP");
            divTP.innerHTML = "";
             *

        }*/
        function Apag(){

            console.log("HEy")
            var TP = ` <div> ` 

            TP += `
                    <label for = "n_mols">Numero de mols:</label>
                    <input  type = "text" id="n_mol" name="n_mols"placeholder="Numero de mols" value="" required/>  <br>
                    <br>Deseja utilizar CNTP?
                    <input type="checkbox" name="CNTP" id ="CNTP"value = "yes" onClick= "preench()"/><br><br>
                    <div id = "TP">

                    <label for = "temp">Temperatura: </label>
                    <input  type = "text" name="temp"  id="tempe" placeholder="Temperatura" value="" required/>  
                    <select>
                        <option value = "Kelvin"> °K </option>
                        <option value = "Fareheight"> °F </option>
                        <option value = "Celsius"> °C </option>
                    </select> 
                    
                    
                    <br><br>
                    <label for = "pressao">Pressão: </label>
                    <input  type = "text" name="pressao" id="press" placeholder="Pressão" value="" required/> 
                    <select>
                        <option value = "atm"> atm </option>
                        <!-- <option value = "Fareheight"> °F </option>
                        <option value = "Celsius"> °C </option>-->
                    </select> 
                    
                    </div><br>

                    
                    <input type = "button" value = "Calcular" onClick ="CalcularVM() "/>
                    <input type = "button" value = "apagar " onClick ="reset()"/><p></p>
                        resultado: <input type = "text" id = "resultado" /> `

            TP += `</div>`

            let divTP = document.getElementById("corpo");

            divTP.innerHTML = TP;

        }
        function preench(){

            var TP = ` <div id="form"> ` 

                TP += `
                   
                <form method="POST" acition = "index.php" >
            <div id = "corpo">
            <label for = "n_mols">Numero de mols:</label>
            <input  type = "text" id="n_mol" name="n_mols"placeholder="Numero de mols" value="" required/>  <br>
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

            
           <!-- <input type = "button" value = "Calcular" onClick ="CalcularVM() "/>
            <input type = "button" value = "apagar " onClick ="Apag()"/><p></p> -->
            <button type="submit" name="acao" value="entrar" >Calcular</button>
                <br>Resultado: <input type = "text" id = "resultado" value = "<?= value ?>"/> 
            </div> 

        </form>`
            
            TP += `</div>`

            let divTP = document.getElementById("teste");

            divTP.innerHTML = TP;
            console.log("testefunc")
             

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

       </script>
       
    </div>

</section> 
</main>