<main>
<section> 
    <title>Volume Molar </title>
<div id = "crpo">
        <br> 
        <br>
        
        <h3> Volume Molar:</h3>
        <div id= "teste">
        <form method="POST" acition = "index.php" >
            <div id = "corpo">
            <label for = "n_mols">Numero de mols:</label>
            <input  type = "text" id="n_mol" name="n_mols"placeholder="Numero de mols" value="<?= n_mol ?>" required/>  <br>

            <br>Deseja utilizar CNTP? 
            <input type="checkbox" name="CNTP" id ="CNTP"value = "yes"   onClick= "preench()" /><br><br>
            <div id = "TP"> 

            <label for = "temp">Temperatura: </label>
            <input  type = "text" name="temp"  id="temp" placeholder="Temperatura" value="<?= temp ?>" required/>  
            
            <select name="escTemp" id="escTemp">          
                <option value = "Kelvin" selected> °K </option>
                <option value = "Fareheight" > °F </option>
                <option value = "Celsius"> °C </option>
            </select> 
            
       
            
            <br><br>
            <label for = "pressao">Pressão: </label>
            <input  type = "text" name="pressao" id="press" placeholder="Pressão" value="<?= press ?>" required/> 
            
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

        </form>
</div>
      
       
    </div>

</section> 
</main>