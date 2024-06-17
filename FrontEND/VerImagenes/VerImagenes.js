window.onload = ()=>{
    obtenerImagenes();
}

async function obtenerImagenes(){
    let url = "http://localhost/CRUD_Gestor_imagen_MateoQuintana/backEND/controlador/Controlador.php?funcion=obtener";
    let consulta = await fetch(url);
    let datos = await consulta.json();
    console.log(datos)
    MostrarImagen(datos);
}

function MostrarImagen(datos){
    let divImagenes = document.querySelector("#Imagenes");
    divImagenes.innerHTML = "";
    datos.forEach(element => {
        divImagenes.innerHTML += `
        <div>
            <img src="../../backEND/controlador/Imagenes/${element.id}.${element.extension}">
            <p>${element.nombre}</p>
        `
    });

}