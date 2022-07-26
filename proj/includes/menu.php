<main>
    <section>
    <div id= "fundo">   

<!-- ABRIR MODAL -->
<button id="abrirMenu" class="menu">

    <i> Menu </i>
</button>

<!--  O MODAL -->
<div id="Modal" class="modal">

<!-- CONTEUDO -->
    <div class="modal-content">
        <div class="cont" > 
            <div class="close" id="fechar">&times </div> 
        het
        
        
        </div>
    </div> 
</div>


<script language = "javascript">

// PEGAR MODAL
    var modal = document.getElementById("Modal");

// BOTÃO QUE ABRE O MODAL
    var btn = document.getElementById("abrirMenu");

// PEGAR A TAG <span> QUE É O QUE FECHA O MODAL
    var span = document.getElementsByClassName("close")[0];

// QUANDO O USUARIO CLICA O MODAL ABRE 
    btn.onclick = () => modal.style.display = "block";

// QUANDO O USUARIO CLICA NA TAG <span> (x) O MODAL FECHA
    span.onclick = () => modal.style.display = "none";  

// QUANDO O USUARIO CLICA EM QUALQUER LUGAR FORA DO MODAL ELE FECHA 
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

        </script>






    </div>

    </section> 
</main>