Window.onload=async ()=>{
}
function agregarEventoForm(){
    formElemento.onsubmit = (e)=>{
        e.preventDefault();
        enviarImagen(formElemento);
    }
}

async function envciarImagen(form){
    let formDate = new FormData(form);
    let config = {
        method:"POST",
        body:dormData
    }
    let url = "http://localhost/Gestor_imagen/CRUD_Gestor_imagen_MateoQuintana/backEND/controlador/Controlador.php?funcion=agregarImagen";
    await fetch(url,config);
    let imagenes = mostrarImagenes();
    mostrarImagenes(imagenes);

}

function mostrarImagenes(imagenes){
    let listaImagenesEleement = document.querySelector("#listaImagenes");
    listaImagenesEleement.innerHTML="";
    imagenes.forEach(imagen => {
        listaImagenesEleement.innerHTML+=`
        <div>
        <p> ${imagen.nombre} </p>
        <img src="../banckend/imagenes/${imagen.id}.${imagen.extension}">   
        </div>
        
        `});
}