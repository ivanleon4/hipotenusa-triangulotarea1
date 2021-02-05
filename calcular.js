document.getElementById('btncalcular').addEventListener("click", calcular)
document.getElementById('btnclean').addEventListener("click", clean)

function calcular(event){
var altura = document.getElementById('Altura').value;
var base = document.getElementById('Base').value;

if (altura == ""|| base == ""){
    
    error.innerHTML = 
    ` <label>VERIFIQUE CAMPOS VACIOS </label> `;
    return false;
   
}else{
    calculo.removeAttribute('hidden');
}

}//funcion

function clean(event){
    location.reload();
}