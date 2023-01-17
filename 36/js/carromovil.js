var flecha = document.getElementById("mostrarcarro")
oculto = true
flecha.addEventListener("click",function(){
    if(oculto == true){
        console.log("has hecho click")
        document.getElementById("carro").classList.add("carromostrado")
        this.classList.add("girado")
        oculto = false;
    }else{
        document.getElementById("carro").classList.remove("carromostrado")
        this.classList.remove("girado")
        oculto = true;
    }
    
})