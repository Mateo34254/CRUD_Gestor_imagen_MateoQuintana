window.onload=async ()=> {
    agregarUsuario();
}
function agregarUsuario(){
    let formElement=document.querySelector("#Form");

    formElement.onsubmit = async (e) => {
        e.preventDefault()
        let formData = new FormData(formElement);
        let url = "http://localhost/CRUD_Gestor_imagen_MateoQuintana/backEND/controlador/ControladorUsuario.php?funcion=agregar";

        let config = {
            method:"POST",
            body:formData
        }
        let respuesta = await fetch(url,config);
        let datos = await respuesta.json();
        console.log(datos);
        formElement.reset();
    }
    
}
