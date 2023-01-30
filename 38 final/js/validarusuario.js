campousuario = document.getElementById("campousuario")
campousuario.addEventListener('blur',function(e){
    console.log("hemos salido")
    console.log(campousuario.value)
    var ajax = new XMLHttpRequest();
    ajax.open("GET", 'compruebausuario.php?usuario='+campousuario.value);
    ajax.send(); 
    ajax.onload = function(e) {
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            console.log(ajax.responseText);
            if(ajax.responseText == "ko"){
                campousuario.classList.remove("ok")
                campousuario.classList.add("ko")
                var finalizacompra = document.getElementById("finalizacompra")
                finalizacompra.setAttribute("disabled",true)
                document.getElementById("ayudanombreusuario").innerHTML = "El nombre de usuario ya existe"
            }
            if(ajax.responseText == "ok"){
                campousuario.classList.remove("ko")
                campousuario.classList.add("ok")
                var finalizacompra = document.getElementById("finalizacompra")
                finalizacompra.removeAttribute("disabled")
                document.getElementById("ayudanombreusuario").innerHTML = ""
            }
        }
    }
})